@extends('admin.master')
@section('maincontent')
    <div class="col-md-3"></div>
    <div class="col-md-9 my-5">

        <div class="form-group">
            <label> نام و نام خانوادگی</label>
            <input class="form-control" name="name" value="{{$about->name}}" readonly>
        </div>

        <div class="form-group">
            <label>عنوان</label>
            <input class="form-control" name="title" value="{{$about->title}}" readonly>
        </div>

        <div class="form-group">
            <label>توضیحات</label>
            <input class="form-control" name="body" value="{{$about->body}}" readonly>
        </div>

        <div class="form-group">
            <label>توضیحات</label>
            <img src="{{asset('uploads/'.$about->image)}}" alt="" width="80">
        </div>

        <div class="form-group">
            <label>تاریخ تولد</label>
            <input class="form-control" name="bodDate_of_birthy" value="{{$about->Date_of_birth}}" readonly>
        </div>

        <div class="form-group">
            <label>شماره تلفن </label>
            <input class="form-control" name="phone_number" value="{{$about->phone_number}}" readonly>
        </div>

        <div class="form-group">
            <label> ایمیل</label>
            <input class="form-control" name="email" value="{{$about->email}}" readonly>
        </div>

        <div class="form-group">
            <label> ادرس</label>
            <input class="form-control" name="address" value="{{$about->address}}" readonly>
        </div>


        <a href="{{route('admin.about.index')}}"><butoon class="btn btn-dark">بازگشت</butoon></a>
    </div>

@endsection
