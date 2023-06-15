<?php

namespace App\Http\Controllers\legacy;

use App\Models\Terminal;

class TerminalController extends Controller
{
    public function getTerminalsData(){
        $api = new APIController();
        $urlApi = "https://api.test.hotelbeds.com/hotel-content-api/1.0/types/terminals" ;
        $terminals = $api->getApiData($urlApi)['terminals'];
        foreach($terminals as $terminalItem){
            $terminal = new Terminal();
            $terminal->code = $terminalItem['code'];
            $terminal->country = (array_key_exists('country', $terminalItem) ? $terminalItem['country'] : null);
            $terminal->description = (array_key_exists('description', $terminalItem) ? $terminalItem['description']['content'] : null);
            $terminal->name = (array_key_exists('name', $terminalItem) ? $terminalItem['name']['content'] : null);
            $terminal->type = (array_key_exists('type', $terminalItem) ? $terminalItem['type'] : null);
            $terminal->save();
        }
    }
}
