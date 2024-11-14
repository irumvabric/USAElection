<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        // Retournez une vue ou une réponse ici
        return view('welcome'); // Par exemple, la vue welcome.blade.php
    }
}
