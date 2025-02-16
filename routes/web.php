<?php

use App\View\Components\FormCard;
use Illuminate\Support\Facades\Route;

Route::get("/", function(){
    return view("components.form-card");
});
