<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CheckVerifyEmail;
use App\Http\Requests\StoreVideoRequest;
use App\Http\Requests\UpdateVideoRequest;
use App\Models\Category;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{

    public function __construct()
    {
        // $this->middleware(CheckVerifyEmail::class, ['only' => ['create']]);
    }

    public function index()
    {
        $videos = Video::all();
        return $videos;
    }
    public function create()
    {
        $categories = Category::all();
        return view('videos.create', compact('categories'));
    }
    public function store(StoreVideoRequest $request)
    {

        $path = Storage::putFile('videos', $request->file);

        $request->merge([
            'path' => $path
        ]);

        $request->user()->videos()->create($request->all());
        return redirect()->route('index')->with('alert', __('messages.success'));
    }
    public function show(Request $request, Video $video)
    {
        return view('videos.show', compact('video'));
    }
    public function edit(Video $video)
    {
        $categories = Category::all();
        return view('videos.edit', compact('video', 'categories'));
    }
    public function update(UpdateVideoRequest $request, Video $video)
    {
        if ($request->hasFile('file')) {

            $path = Storage::putFile('videos', $request->file);
            $request->merge([
                'path' => $path
            ]);
        }

        $video->update($request->all());
        return redirect()->route('videos.show', $video->slug)->with('alert', __('messages.video_edited'));
    }
}
