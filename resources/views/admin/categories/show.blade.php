@extends('admin.master')
@section('maincontent')
    <div class="col-md-3"></div>
    <div class="col-md-9 my-5">
        <div class="form-group">
            <label>نام</label>
            <input class="form-control" name="name" value="{{$category->title}}" readonly>
        </div>
        <div class="form-group">
            <label>توضیحات</label>
            <input class="form-control" name="name" value="{{$category->body}}" readonly>
        </div>
        <a href="{{route('admin.categories.index')}}"><butoon class="btn btn-dark">بازگشت</butoon></a>
    </div>

@endsection
