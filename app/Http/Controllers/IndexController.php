<?php

namespace App\Http\Controllers;

use App\Models\ArElement;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        return view('index');
    }

    public function dimon() {
        return view('dimon');
    }

    public function ar($id) {
        $element = ArElement::where('id', $id)->first();

        if($element == null) abort('404');

        return view('ar', ['element' => $element]);
    }

    public function qr($id) {
        $element = ArElement::where('id', $id)->first();

        if($element == null) abort('404');

        return view('qr', ['element' => $element]);
    }
}
