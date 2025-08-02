<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServicePageController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('frontend.services.index', compact('services'));
    }
}
