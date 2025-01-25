<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDocRequest;
use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index()
    {
        $documents = Document::all();
    }
    public function create()
    {
        return view('documents.create');
    }
    public function store(StoreDocRequest $request)
    {
        Document::create($request->all());
        return redirect()->route('index')->with('alert', __('messages.success'));
    }
}
