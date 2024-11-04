<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', fn() => inertia('Dashboard'));
Route::get('/login', fn() => inertia('Login'));
