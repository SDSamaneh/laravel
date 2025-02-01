@extends('layout')

@section('content')
<div class="row">
      <!-- Watch -->
      <div class="col-md-8">
            <div id="watch">
                  <!-- Video Player -->
                  <h1 class="video-title">{{$video->name}}</h1>
                  <div class="video-code">
                        <video controls style="height: 100%; width: 100%;">
                              <source
                                    src="{{ $video->video_url }}"
                                    type="video/mp4">
                        </video>
                  </div><!-- // video-code -->

                  <div class="video-share">
                        <p>
                              {{$video->descrption}}
                        </p>
                        <div class="m-3">

                              <a class="title" href="#">{{$video->owner_name}}</a>
                        </div>
                  </div><!-- // video-share -->

            </div><!-- // watch -->
      </div><!-- // col-md-8 -->
      <!-- // Watch -->

      <!-- Related Posts-->
      <div class="col-md-4">
            <x-related-videos :video="$video"></x-related-videos>
      </div><!-- // col-md-4 -->
      <!-- // Related Posts -->
</div><!-- // row -->
@endsection