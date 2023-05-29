<?php

namespace App\Controllers;

use App\Models\Category;
use App\Models\Watch;
use App\Views\View;

class WatchController
{
    public function index()
    {
        $watches = Watch::get();

        $main_category = Category::getMainCategory();

        $sub_categories = Category::getSubCategories();

        return View::make("index", [
            "watches" => $watches,
            "main_category" => $main_category,
            "sub_categories" => $sub_categories
        ])->render();
    }

    public function show($parameters)
    {
        $watch = Watch::find($parameters['id']);

        $main_category = Category::getMainCategory();

        $sub_categories = Category::getSubCategories();

        return View::make("show", [
            "watch" => $watch,
            "main_category" => $main_category,
            "sub_categories" => $sub_categories
        ])->render();
    }

    public function filter($parameters)
    {
        $id = $parameters['id'];

        $category = Category::find($id);

        $watches = Category::getWatchesRec($id);

        $main_category = Category::getMainCategory();

        $sub_categories = Category::getSubCategories();

        return View::make("filter", [
            "watches" => $watches,
            "category" => $category,
            "main_category" => $main_category,
            "sub_categories" => $sub_categories
        ])->render();
    }

    // API
    public function edit()
    {
        if (Watch::edit($_POST['watch_id'], $_POST['fieldName'], $_POST['fieldVal'])) {
            return json_encode([
                "status" => "success",
                "fieldVal" => $_POST['fieldVal']
            ]);
        };
        return json_encode([
            "status" => "failed",
            "fieldVal" => $_POST['fieldVal']
        ]);
    }
}
