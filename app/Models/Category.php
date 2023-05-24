<?php

namespace App\Models;

use App\App;
use App\Exceptions\PageNotFoundException;

class Category extends Product
{
    public static function getMainCategory()
    {
        $catStat = App::db()->prepare("SELECT * FROM products WHERE `type` = 'cat' AND `pid` = 0");

        $catStat->execute();

        if ($catStat->RowCount()) {
            $catData = $catStat->fetch();

            $main_category = new Category(
                $catData['id'],
                $catData['pid'],
                $catData['type'],
                $catData['model_number'],
                $catData['model_case'],
                $catData['water_resistance'],
                $catData['movement'],
                $catData['caliber'],
                $catData['power_reserve'],
                $catData['bracelet'],
                $catData['dial'],
                $catData['large_title'],
                $catData['small_title'],
                $catData['description'],
                $catData['price'],
            );

            return $main_category;
        }
    }

    public static function getSubCategories()
    {
        $subCatStat = App::db()->prepare("SELECT * FROM products WHERE `type` = 'cat' AND `pid` != 0");

        $subCatStat->execute();

        if ($subCatStat->RowCount()) {
            $subCategories = array_map(function ($subCategory) {
                $subCategory = new Category(
                    $subCategory['id'],
                    $subCategory['pid'],
                    $subCategory['type'],
                    $subCategory['model_number'],
                    $subCategory['model_case'],
                    $subCategory['water_resistance'],
                    $subCategory['movement'],
                    $subCategory['caliber'],
                    $subCategory['power_reserve'],
                    $subCategory['bracelet'],
                    $subCategory['dial'],
                    $subCategory['large_title'],
                    $subCategory['small_title'],
                    $subCategory['description'],
                    $subCategory['price'],
                );

                return $subCategory;
            }, $subCatStat->fetchAll());

            return $subCategories;
        }
    }

    public static function getWatchesRec(string $id)
    {
        $childrenStat = App::db()->prepare("SELECT * FROM products WHERE `pid` = ?");

        $childrenStat->execute([$id]);

        // Base Case
        if ($childrenStat->RowCount() == 0) {
            $selfStat = App::db()->prepare("SELECT * FROM products WHERE `id` = ?");

            $selfStat->execute([$id]);

            // Check that id is valid 
            if ($selfStat->RowCount()) {
                $selfData = $selfStat->fetch();

                // ensure that this is a product not category
                if ($selfData['type'] == 'item') {
                    return new Watch(
                        $selfData['id'],
                        $selfData['pid'],
                        $selfData['type'],
                        $selfData['model_number'],
                        $selfData['model_case'],
                        $selfData['water_resistance'],
                        $selfData['movement'],
                        $selfData['caliber'],
                        $selfData['power_reserve'],
                        $selfData['bracelet'],
                        $selfData['dial'],
                        $selfData['large_title'],
                        $selfData['small_title'],
                        $selfData['description'],
                        $selfData['price'],
                    );
                }
            }
        }
        // Recursive Case
        else {
            $watches = [];

            $categories_id = array_map(
                function ($child) {
                    return $child['id'];
                },
                $childrenStat->fetchAll()
            );

            foreach ($categories_id as $id) {
                $catItems = static::getWatchesRec($id);

                if (is_array($catItems)) {
                    foreach ($catItems as $item) {
                        $watches[] = $item;
                    }
                } else {
                    $watches[] = $catItems;
                }
            }

            return $watches;
        }
    }

    public static function find(string $id)
    {
        $catStat = App::db()->prepare("SELECT * FROM products WHERE `type` = 'cat' AND `id` = ?");

        $catStat->execute([$id]);

        if ($catStat->rowCount()) {
            $catData = $catStat->fetch();

            $category = new Watch(
                $catData['id'],
                $catData['pid'],
                $catData['type'],
                $catData['model_number'],
                $catData['model_case'],
                $catData['water_resistance'],
                $catData['movement'],
                $catData['caliber'],
                $catData['power_reserve'],
                $catData['bracelet'],
                $catData['dial'],
                $catData['large_title'],
                $catData['small_title'],
                $catData['description'],
                $catData['price'],
            );

            return $category;
        } else {
            throw new PageNotFoundException();
        }
    }
}
