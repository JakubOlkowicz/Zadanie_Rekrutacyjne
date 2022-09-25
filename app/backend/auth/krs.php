<?php
require_once 'app/backend/core/Init.php';

if(!$_POST['KRS'] && !$_POST['records']) Redirect::to('index.php');
if(!is_numeric($_POST['KRS'])) Redirect::to('index.php');

$krs_number = $_POST['KRS'];
$records = $_POST['records'];

$krs = new Krs();
$data = $krs->find($krs_number,$records);

if($data){
    $title = Config::get('krs/title');
    $subtitle = Config::get('krs/subtitle');

    $naglowekA = $data->odpis->naglowekA;
    $danePodmiotu = $data->odpis->dane->dzial1->danePodmiotu;
    $reprezentacja = $data->odpis->dane->dzial2->reprezentacja;
    $sklad = $data->odpis->dane->dzial1->wspolnicySpzoo;
    $siedzibalAdres = $data->odpis->dane->dzial1->siedzibaIAdres;
    
}else{
    $title = Config::get('no-krs/title');
    $subtitle = Config::get('no-krs/subtitle');

}

