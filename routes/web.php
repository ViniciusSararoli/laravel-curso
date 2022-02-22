<?php

use Illuminate\Support\Facades\Route;

Route::get('/teste/{id}/{id2?}', function ($id, $id2=0) {
    $name = "Vinicius";
    $age = "23+1";
    $array = array("Ana", "Rick", "Jhon", "Erick", "Vini", "Cris");
    $numbers = [1,2,3,4,5];
    $busca = request("action");
    return view('welcome',['name'=>$name, 'age'=>$age, "array"=>$array, "numbers"=>$numbers, 'id'=>$id, 'id2'=>$id2, 'busca'=>$busca]);
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/lista', function () {
    return view('lista');
});
