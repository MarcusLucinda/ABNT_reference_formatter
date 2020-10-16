<?php

namespace App\Http\Controllers;

use App\Formats;
use App\DocType;
use Illuminate\Http\Request;

class AbntController extends Controller
{
    public function index(Request $request)
    {
        $doc_id = $request->session()->get('doc_id');
        $authors = $request->session()->get('authors');
        $name = $request->session()->get('name');
        $namesInput = Formats::naming($authors, $doc_id);
        $docInput = Formats::docFormat($doc_id);
        $category = DocType::where('parent_id', 0)->get();
        $reference = $request->session()->get('reference');
        return view('index', compact('namesInput', 'doc_id', 'docInput', 'authors', 'name', 'category', 'reference'));
    }

    public function store(Request $request)
    {
        $priorityID = $request->get('subcategory');
        if ($priorityID == null){
            $priorityID = $request->get('category');
        }
        $authorsNum = $request->get('authors');
        $nameText = $request->get('name');
        $request->session()->put('doc_id', "{$priorityID}");
        $request->session()->put('authors', "{$authorsNum}");
        $request->session()->flash('name', "{$nameText}");
        return redirect('/');
    }

    public function subCategory(Request $request)
    {
        $parent_id = $request->cat_id;
        $subCategories = DocType::where('id', $parent_id)->with('subcategories')->get();
        return response()->json(['subcategories' => $subCategories]);
    }
}
