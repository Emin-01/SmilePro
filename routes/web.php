<?php

use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('homepage'); // Zorg ervoor dat de naam 'homepage' overeenkomt met de nieuwe blade-template
});