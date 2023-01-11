@extends('admin.master')
@section('maincontent')
    <div class="col-md-3"></div>
    <div class="col-md-9 my-5">

        <div class="form-group">
            <label>نام </label>
            <input class="form-control" name="name" value="{{$comment->name}}" readonly>
        </div>

        <div class="form-group">
            <label>ایمیل</label>
            <input class="form-control" name="name" value="{{$comment->email}}" readonly>
        </div>

        <div class="form-group">
            <label> عنوان</label>
            <input class="form-control" name="name" value="{{$comment->title}}" readonly>
        </div>

        <div class="form-group">
            <label>نظرات</label>
            <textarea name="" class="form-control" id="" cols="30" rows="10" readonly>{{$comment->body}}</textarea>
        </div>

        <div class="form-group">
        <label>وضعیت محصول</label>
        <input class="form-control" type="text" value="{{$comment->is_active?'فعال':'غیر فعال'}}" readonly>
    </div>

        <a href="{{route('admin.comment.index')}}"><butoon class="btn btn-dark">بازگشت</butoon></a>
    </div>

@endsection
