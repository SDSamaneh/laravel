<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDocRequest;
use App\Models\Document;
use App\Models\InternalDocCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    public function upload(Request $request)
    {
        // اعتبارسنجی فایل
        $request->validate([
            'pdf' => 'required|mimes:pdf|max:10240', // حداکثر حجم 10MB
        ]);

        // ذخیره فایل در پوشه public/pdf
        if ($request->file('pdf')) {
            $file = $request->file('pdf');
            $filePath = $file->store('public/pdf');
            $url = Storage::url($filePath);

            return response()->json([
                'message' => 'فایل با موفقیت آپلود شد.',
                'url' => $url,
            ]);
        }

        return response()->json([
            'message' => 'خطایی در آپلود فایل رخ داد.',
        ], 500);
    }
}
