@extends('admin.master')
@section('maincontent')
    <div class="col-md-3"></div>
    <div class="col-md-9 my-5">
        <div class="form-group">
            <label>عنوان</label>
            <input class="form-control" name="name" value="{{$offer->title}}" readonly>
        </div>
        <div class="form-group">
            <label>توضیحات</label><br>
            <textarea name="body" id="body" cols="80" rows="10" readonly>{{$offer->body}}</textarea>
        </div>
        <a href="{{route('admin.offer.index')}}"><butoon class="btn btn-dark">بازگشت</butoon></a>
    </div>

@endsection
