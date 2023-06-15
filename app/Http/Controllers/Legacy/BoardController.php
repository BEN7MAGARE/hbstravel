<?php

namespace App\Http\Controllers\legacy;

use App\Models\Board;

class BoardController extends Controller
{
    public function getBoardsData(){
        $api = new APIController();
        $urlApi = "https://api.test.hotelbeds.com/hotel-content-api/1.0/types/boards" ;
        $boards = $api->getApiData($urlApi)['boards'];
        foreach($boards as $boardItem){
            $board = new Board();
            $board->code = $boardItem['code'];
            $board->description = (array_key_exists('description',$boardItem) ? $boardItem['description']['content'] : null);
            $board->multiLingualCode = (array_key_exists('multiLingualCode',$boardItem) ? $boardItem['multiLingualCode'] : null);
            $board->save();
        }
    }
}
