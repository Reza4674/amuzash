@extends('admin.master')
@section('maincontent')
    <div class="col-md-3"></div>
    <div class="col-md-9 my-5">

        <div class="form-group">
            <label>دسته پست</label>
            <input class="form-control" name="name" value="{{$post->category->title}}" readonly>
        </div>

        <div class="form-group">
            <label>عکس</label><br>
            <img src="{{asset('uploads/'.$post->image)}}" alt="" width="150">
        </div>

        <div class="form-group">
            <label>عنوان</label>
            <input class="form-control" name="name" value="{{$post->title}}" readonly>
        </div>

        <div class="form-group">
            <label>نویسنده</label>
            <input class="form-control" name="name" value="{{$post->writer}}" readonly>
        </div>

        <div class="form-group">
            <label>توضیحات</label>
            <input class="form-control" name="name" value="{{$post->body}}" readonly>
        </div>

        <a href="{{route('admin.post.index')}}"><butoon class="btn btn-dark">بازگشت</butoon></a>
    </div>

@endsection
