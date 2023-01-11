@extends('admin.master')
@section('maincontent')
    <div class="col-md-3"></div>
    <div class="col-md-9 my-5">

        <div class="form-group">
            <label>عنوان پروژه</label>
            <input class="form-control" name="name" value="{{$project->title}}" readonly>
        </div>

        <div class="form-group">
            <label>توضیحات پروژه</label>
            <input class="form-control" name="name" value="{{$project->body}}" readonly>
        </div>

        <div class="form-group">
            <label>عکس</label><br>
            <img src="{{asset('uploads/'.$project->image)}}" alt="" width="150">
        </div>

        <a href="{{route('admin.project.index')}}"><butoon class="btn btn-dark">بازگشت</butoon></a>
    </div>

@endsection
