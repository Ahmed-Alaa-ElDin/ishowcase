<?php

namespace App\Models;

use App\App;
use App\Exceptions\PageNotFoundException;

class Watch extends Product
{
    public static function get()
    {
        $watchesStat = App::db()->prepare("SELECT * FROM products WHERE `type` = 'item'");

        $watchesStat->execute();

        $allWatches = [];

        if ($watchesStat->RowCount()) {
            $allWatches = array_map(function ($watch) {
                $watch = new Watch(
                    $watch['id'],
                    $watch['pid'],
                    $watch['type'],
                    $watch['model_number'],
                    $watch['model_case'],
                    $watch['water_resistance'],
                    $watch['movement'],
                    $watch['caliber'],
                    $watch['power_reserve'],
                    $watch['bracelet'],
                    $watch['dial'],
                    $watch['large_title'],
                    $watch['small_title'],
                    $watch['description'],
                    $watch['price'],
                );

                return $watch;
            }, $watchesStat->fetchAll());
        }

        return $allWatches;
    }

    public static function find($id)
    {
        $watchStat = App::db()->prepare("SELECT * FROM products WHERE `type` = 'item' AND `id` = ?");

        $watchStat->execute([$id]);

        if ($watchStat->rowCount()) {
            $watchData = $watchStat->fetch();

            $watch = new Watch(
                $watchData['id'],
                $watchData['pid'],
                $watchData['type'],
                $watchData['model_number'],
                $watchData['model_case'],
                $watchData['water_resistance'],
                $watchData['movement'],
                $watchData['caliber'],
                $watchData['power_reserve'],
                $watchData['bracelet'],
                $watchData['dial'],
                $watchData['large_title'],
                $watchData['small_title'],
                $watchData['description'],
                $watchData['price'],
            );

            return $watch;
        } else {
            throw new PageNotFoundException();
        }
    }

    public static function edit($id, $fieldName, $fieldVal)
    {
        $watchStat = App::db()->prepare("UPDATE `products` SET $fieldName = ? WHERE `id` = ? AND `type` = 'item'");

        $watchStat->execute([$fieldVal, $id]);

        if ($watchStat->rowCount()) {
            return true;
        } else {
            return false;
        }
    }
}
