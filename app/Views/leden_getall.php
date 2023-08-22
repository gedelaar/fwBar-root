<?php
//VIEW

echo "<br>";
//print_r($query);
foreach($query as $rij) {
    foreach($rij as $field => $value){
        //print_r($value);
        //echo $rij->Lidnr;
        
    print "<b>". htmlentities($field) . "</b>= " . htmlentities($value) . " " ;
    
    }
    print "<BR>";
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
