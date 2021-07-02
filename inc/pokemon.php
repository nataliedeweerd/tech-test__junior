<?php

$pokemon = array();

$pokemon[] = get_pokemon(1);
$pokemon[] = get_pokemon(2);
$pokemon[] = get_pokemon(3);

echo '<pre>'.print_r($pokemon,true).'</pre><br />';


function get_pokemon($id){
    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => "https://pokeapi.co/api/v2/pokemon/".$id,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache"
    ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    $r = json_decode($response);

    $return = array();
    $return['name'] = $r->name;
    $return['types'] = $r->types;

    curl_close($curl);

    return $return;
}
