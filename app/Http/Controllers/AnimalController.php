<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
// Membuat properti Animal
public $animals = ['kucing', 'ayam', 'ikan'];
public function index() {
    foreach ($this->animals as $hewan){
        echo "$hewan <br>";
    }    
}   

public function store(Request $request){
    array_push($this->animals, $request->nama);

    $this->index();
}
public function update(Request $request, $id){
    $this->animals[$id] = $request->nama;

    $this->index();
}
public function destroy($id){
    unset($this->animals[$id], $index);

    $this->index();
}
}

