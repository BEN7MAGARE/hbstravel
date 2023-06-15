<?php

namespace App\Http\Controllers\legacy;

use App\Models\Issue;

class IssueController extends Controller
{
    public function getIssuesData(){
        $api = new APIController();
        $urlApi = "https://api.test.hotelbeds.com/hotel-content-api/1.0/types/issues" ;
        $issues = $api->getApiData($urlApi)['issues'];
        foreach($issues as $issueItem){
            $issue = new Issue();
            $issue->code = $issueItem['code'];
            $issue->alternative = (array_key_exists('alternative',$issueItem) ? $issueItem['alternative'] : null);
            $issue->description = (array_key_exists('description',$issueItem) ? $issueItem['description']['content'] : null);
            $issue->name = (array_key_exists('name',$issueItem) ? $issueItem['name']['content'] : null);
            $issue->type = (array_key_exists('type',$issueItem) ? $issueItem['type'] : null);
            $issue->save();
        }
    }
}
