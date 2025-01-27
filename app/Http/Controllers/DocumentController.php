<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDocRequest;
use App\Models\Document;
use App\Models\InternalDocCategory;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index()
    {
        $documents = Document::all();
        dd($documents);
    }
    public function create()
    {
        $internalDoc = InternalDocCategory::all();

        return view('documents.create', compact('internalDoc'));
    }
    public function store(StoreDocRequest $request)
    {
        Document::create($request->all());
        return redirect()->route('index')->with('alert', __('messages.success'));
    }
}
