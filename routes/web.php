<?php

use App\Livewire\Counter;
use App\View\Components\FormCard;
use Illuminate\Support\Facades\Route;

Route::get("/", Counter::class);
