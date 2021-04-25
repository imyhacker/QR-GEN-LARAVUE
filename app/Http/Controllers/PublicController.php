<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\QrMod;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    //
    public function index()
    {
        return Inertia::render('Home');
    }
    public function make(Request $request)
    {
        $dat = $request->isi;

        return Inertia::render('Home', ['dat'=>$dat]);
    }
    public function about()
    {
        return Inertia::render('About');
    }
    public function contact()
    {
        return Inertia::render('Contact');
    }
    public function tos()
    {
        return Inertia::render('Tos');
    }
    public function pp()
    {
        return Inertia::render('Pp');
    }
}
