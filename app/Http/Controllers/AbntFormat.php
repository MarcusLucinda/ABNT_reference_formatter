<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RefText;

class AbntFormat extends Controller
{
    public function format(Request $request)
    {
        $doc = $request->session()->get('doc_id');
        $names = $request->session()->get('authors');
        $reference = RefText::AbntText($doc, $names, $request);
        $request->session()->put('reference', "{$reference}");
        return redirect('/');
    }
}
