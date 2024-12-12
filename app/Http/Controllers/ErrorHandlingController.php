<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorHandlingController extends Controller
{
    public function errorprocess(Request $request)
    {
        $data = $request->validate([
            'name' => 'min:3'

        ]);

        if ($data) {
            return dd('berhasil');
        }
    }
}
