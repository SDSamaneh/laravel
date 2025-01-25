@extends('layout')

@section('content')
<div id="all-output" class="col-md-10 upload">
      <div id="upload">
            <div class="row">
                  <x-validation-errors></x-validation-errors>
                  <!-- upload -->
                  <div class="col-md-8">
                        <h1 class="page-title"><span>آپلود </span>مستندات</h1>
                        <form action="{{route('documents.store')}}" method="POST">
                              @csrf
                              <div class="row">
                                    <div class="col-md-6">
                                          <label>@lang('documents.name')</label>
                                          <input name="name" type="text" class="form-control" value="{{old('name')}}">
                                    </div>

                                    <div class="col-md-6">
                                          <label>نام یکتا</label>
                                          <input name="slug" type="text" class="form-control" value="{{old('slug')}}" placeholder="نام یکتا">
                                    </div>

                                    <div class="col-md-6">
                                          <label>آپلود فیلم</label>
                                          <input name="file" id="upload_file" type="file" class="file">
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
                  </div><!-- // col-md-8 -->

                  <div class="col-md-4">
                  </div><!-- // col-md-8 -->
                  <!-- // upload -->
            </div><!-- // row -->
      </div><!-- // upload -->
</div>

@endsection