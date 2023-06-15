<?php

namespace App\Http\Controllers\legacy;

use App\Models\GroupCategory;

class GroupCategoryController extends Controller
{
    public function getGroupCategoriesData(){
        $api = new APIController();
        $urlApi = "https://api.test.hotelbeds.com/hotel-content-api/1.0/types/groupcategories" ;
        $groupCategories = $api->getApiData($urlApi)['groupCategories'];
        foreach($groupCategories as $groupCategoryItem){
            $groupCategory = new GroupCategory();
            $groupCategory->code = $groupCategoryItem['code'];
            $groupCategory->description = (array_key_exists('description',$groupCategoryItem) ? $groupCategoryItem['description']['content'] : null);
            $groupCategory->name = (array_key_exists('name',$groupCategoryItem) ? $groupCategoryItem['name']['content'] : null);
            $groupCategory->order = (array_key_exists('order',$groupCategoryItem) ? $groupCategoryItem['order'] : null);
            $groupCategory->save();
        }
    }
}
