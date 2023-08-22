<?php

namespace App\Controllers;

use App\Models\LedenModel;

class Leden extends BaseController
{
    public function index(){
        //return view('welcome');
        print_r("test");
        $model = model('App\Models\LedenModel');
        
        $data['query'] = $model->leden_getall();
        //print_r($data);
        //return view('leden_getall', $data);
        //return view('getTeam');
    }

    public function getTeam(){
        echo "*** hier3 ***"

        $model = model('App\Models\TeamModel');
        $json = $model->getTeam();
        // echo $json->getBody();
        // $obj = json_decode($json, TRUE);
        //print_r( $json);
        foreach($json->getBody() as $team){
            print_r($team);
            foreach($team as $key=>$value){
                echo $key;
                echo $value;
        // //   $data['query'] = $model->getTeamIndeling("1321");
        }}
    }
}