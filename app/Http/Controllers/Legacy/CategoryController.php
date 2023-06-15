<?php

namespace App\Http\Controllers\legacy;

use App\Models\Category;

class CategoryController extends Controller
{
    public function getCategoriesData(){
        $api = new APIController();
        $urlApi = "https://api.test.hotelbeds.com/hotel-content-api/1.0/types/categories" ;
        $categories = $api->getApiData($urlApi)['categories'];
        foreach($categories as $categoryItem){
            $category = new Category();
            $category->accommodationType = (array_key_exists('accommodationType',$categoryItem) ? $categoryItem['accommodationType'] : null);
            $category->code = (array_key_exists('code',$categoryItem) ? $categoryItem['code'] : null);
            $category->description = (array_key_exists('description',$categoryItem) ? $categoryItem['description']['content'] : null);
            $category->group = (array_key_exists('group',$categoryItem) ? $categoryItem['group'] : null);
            $category->simpleCode = (array_key_exists('simpleCode',$categoryItem) ? $categoryItem['simpleCode'] : null);
            $category->save();
        }
    }
}
