@extends('layout')

@section('content')
<div id="all-output" class="col-md-10 upload">
      <div id="upload">
            <div class="row">
                  <x-validation-errors></x-validation-errors>
                  <div class="col-md-9">
                        <h1 class="page-title"><span>آپلود</span> فیلم</h1>
                        <form action="{{route('videos.store')}}" method="POST" enctype="multipart/form-data">
                              @csrf
                              <div class="row">
                                    <div class="col-md-6">
                                          <label>@lang('videos.name')</label>
                                          <input name="name" type="text" class="form-control" value="{{old('name')}}" placeholder="@lang('videos.name')">
                                    </div>
                                    <div class="col-md-6">
                                          <label>@lang('videos.length')</label>
                                          <input name="length" type="text" class="form-control" value="{{old('length')}}" placeholder="@lang('videos.length')">
                                    </div>
                                    <div class="col-md-6">
                                          <label>نام یکتا</label>
                                          <input name="slug" type="text" class="form-control" value="{{old('slug')}}" placeholder="نام یکتا">
                                    </div>
                                    <div class="col-md-6">
                                          <label>آدرس ویدیو</label>
                                          <input type="file" name="file" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                          <label>تصویر</label>
                                          <input name="thumbnail" type="text" value="{{old('thumbnail')}}" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                          <label>دسته بندی</label>
                                          <select name="category_id" id="category" class="form-control">
                                                @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                          </select>
                                    </div>
                                    <div class="col-md-12">
                                          <label>توضیحات</label>
                                          <textarea name="descrption" class="form-control" value="{{old('descrption')}}" rows="4" placeholder="توضیح"></textarea>
                                    </div>

                                    <div class="col-md-6">
                                          <button type="submit" id="contact_submit" class="btn btn-dm">ذخیره</button>
                                    </div>
                              </div>
                        </form>
                  </div>
            </div><!-- // row -->
      </div><!-- // upload -->
</div>
@endsection