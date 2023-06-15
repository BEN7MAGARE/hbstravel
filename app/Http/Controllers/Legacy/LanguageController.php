<?php

namespace App\Http\Controllers\legacy;

use App\Models\Language;

class LanguageController extends Controller
{
    public function getLanguagesData(){
        $api = new APIController();
        $urlApi = "https://api.test.hotelbeds.com/hotel-content-api/1.0/types/languages" ;
        $languages = $api->getApiData($urlApi)['languages'];
        foreach($languages as $languageItem){
            $language = new Language();
            $language->code = $languageItem['code'];
            $language->description = (array_key_exists('description',$languageItem) ? $languageItem['description']['content'] : null);
            $language->name = (array_key_exists('name',$languageItem) ? $languageItem['name']: null);
            $language->save();
        }
    }
}
