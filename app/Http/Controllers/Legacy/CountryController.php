<?php

namespace App\Http\Controllers\legacy;

use App\Models\Country;

class CountryController extends Controller
{

    public function getCountriesData(){
        $api = new APIController();
        $StateController = new StateController();
        $urlApi = "https://api.test.hotelbeds.com/hotel-content-api/1.0/locations/countries" ;
        $countries = $api->getApiData($urlApi);
        foreach($countries['countries'] as $countryItem){
            $country = new Country();
            $country->code = $countryItem['code'];
            $country->description = (array_key_exists('description',$countryItem) ? $countryItem['description']['content'] : null);
            $country->isoCode = (array_key_exists('isoCode',$countryItem) ? $countryItem['isoCode'] : null);
            $country->save();
            $idCountry = $country->id;
            $states =  (array_key_exists('states',$countryItem) ? $countryItem['states'] : null);
            $StateController->getStatesData($idCountry, $states);
        }
    }
    public function getCountriesDataWithCoordinates(){
        $countriesJson = json_decode(file_get_contents(public_path() . "\countries-codes.json"), true);
        foreach($countriesJson as $countryItem){
            $country = new Country();
            $country->code =$countryItem['fields']['iso2_code'];
            $country->description = $countryItem['fields']['label_en'];
            $country->isoCode = $countryItem['fields']['iso2_code'];
            $country->longitude = (array_key_exists('geo_point_2d', $countryItem['fields']) ? $countryItem['fields']['geo_point_2d']['1'] : null);
            $country->latitude = (array_key_exists('geo_point_2d', $countryItem['fields']) ? $countryItem['fields']['geo_point_2d']['0'] : null);
            $country->save();

        }

    }
}
