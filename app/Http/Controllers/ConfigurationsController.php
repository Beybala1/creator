<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigurationsController extends Controller
{
    public function index()
    {
        return view('web.backend.configurations.index');
    }
}
