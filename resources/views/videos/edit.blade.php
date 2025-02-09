@extends('layout')

@section('content')
<div id="all-output" class="col-md-10 upload">
      <div id="upload">
            <div class="row">
                  <x-validation-errors></x-validation-errors>
                  <!-- upload -->
                  <div class="col-md-8">
                        <h1 class="page-title"><span>آپلود</span> فیلم</h1>
                        <form action="{{route('video.update',$video->slug)}}" method="POST" enctype="multipart/form-data">
                              @csrf
                              <div class="row">
                                    <div class="col-md-6">
                                          <label>@lang('videos.name')</label>
                                          <input name="name" type="text" class="form-control" value="{{$video->name}}" placeholder="@lang('videos.name')">
                                    </div>
                                    <div class="col-md-6">
                                          <label>@lang('videos.length')</label>
                                          <input name="length" type="text" class="form-control" value="{{$video->length}}" placeholder="@lang('videos.length')">
                                    </div>
                                    <div class="col-md-6">
                                          <label>نام یکتا</label>
                                          <input name="slug" type="text" class="form-control" value="{{$video->slug}}" placeholder="نام یکتا">
                                    </div>
                                    <div class="col-md-6">
                                          <label>آدرس ویدیو</label>
                                          <input type="file" name="file" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                          <label>تصویر</label>
                                          <input name="thumbnail" type="text" value="{{$video->thumbnail}}" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                          <label>دسته بندی</label>
                                          <select name="category_id" id="category" class="form-control">
                                                @foreach($categories as $category)
                                                <option value="{{$category->id}}" {{$category->id==$video->category_id ? 'selected' : ''}}>{{$category->name}}</option>
                                                @endforeach
                                          </select>
                                    </div>
                                    <div class="col-md-12">
                                          <label>توضیحات</label>
                                          <textarea name="descrption" class="form-control" value="{{$video->descrption}}" rows="4" placeholder="توضیح"></textarea>
                                    </div>

                                    <div class="col-md-6">
                                          <button type="submit" id="contact_submit" class="btn btn-dm">ذخیره</button>
                                    </div>
                              </div>
                        </form>
                  </div><!-- // col-md-8 -->

                  <div class="col-md-4">
                        <a href="#"><img src="{{asset('img/demo_img/upload-adv.png')}}" alt=""></a>
                  </div><!-- // col-md-8 -->
                  <!-- // upload -->
            </div><!-- // row -->
      </div><!-- // upload -->
</div>

@endsection