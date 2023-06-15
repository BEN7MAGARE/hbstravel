<?php

namespace App\Http\Controllers\legacy;

use App\Models\Currency;

class CurrencyController extends Controller
{
    public function getCurrenciesData(){
        $api = new APIController();
        $urlApi = "https://api.test.hotelbeds.com/hotel-content-api/1.0/types/currencies" ;
        $currencies = $api->getApiData($urlApi)['currencies'];
        foreach($currencies as $currencyItem){
            $currency = new Currency();
            $currency->code = $currencyItem['code'];
            $currency->currencyType = (array_key_exists('currencyType',$currencyItem) ? $currencyItem['currencyType'] : null);
            $currency->description = (array_key_exists('description',$currencyItem) ? $currencyItem['description']['content'] : null);
            $currency->save();
        }
    }
}
