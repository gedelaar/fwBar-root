<?php

/* MODEL
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace App\Models;

use CodeIgniter\Model;
/**
 * Description of TeamModel
 *
 * @author Gerard
 */
class TeamModel extends Model {

    public function getTeam(){
        $options = [
            'teams' => 'https://data.sportlink.com/teams?client_id=L4dEA1bOHO',
            'timeout' => 3,
        ];
        $client = \Config\Services::curlrequest();
        //$response = $client->request('GET', 'https://data.sportlink.com/team-indeling?teamcode=1315&lokaleteamcode=-1&&client_id=L4dEA1bOHO');

        // echo $response->header('Content-Type');
        $response2 = $client->request('GET', dot_array_search('teams', $options));
        // echo $response2->getBody();
        return $response2;
    }

    public function getTeamIndeling($team){
        $client = \Config\Services::curlrequest();

        $options = [
            'baseUri' => 'https://data.sportlink.com/team-indeling?teamcode=',
            'client_id' => '&lokaleteamcode=-1&&client_id=L4dEA1bOHO',
            'timeout' => 3
        ];

        $teamIndeling = dot_array_search('baseUri', $options);
        $teamIndeling .= $team;
        $teamIndeling .= dot_array_search('client_id', $options);
        echo $teamIndeling;
        $response = $client->request('GET', $teamIndeling);
        //print_r($response);
        echo "=========";
        echo $response->getStatusCode();
        echo $response->getBody();
    }

}

?>