<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class GaragesController extends Controller
{
    public function show(): View {
        // aller chercher le dico garages
        $garages = "en construction";
        return view('garages', [
            'garages' => $garages
        ]);
    }
}
