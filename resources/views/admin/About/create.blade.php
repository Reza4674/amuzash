@extends('admin.master')
@section('maincontent')
    <div class="col-md-4"></div>
    <div class="col-md-8">
        <div class="col-md-9">


            <form style="padding:15px; border-radius:15px" class="bg-white mt-5" method="post"
                  enctype="multipart/form-data" action="{{route('admin.about.store')}}">
{{--                @foreach($errors->all() as $error)
                    <ul style="list-style:none">
                        <li class="text-danger mx-3">{{$error}}</li>
                    </ul>
                @endforeach()--}}
                @csrf
                <div class="card-body">

                    <div class="form-group">
                        <label for="name">نام و نام خانوادگی</label>
                        <input type="text" class="form-control" id="name" name="name"
                               placeholder="نام و نام خانوادگی را وارد کنید">
                    </div>

                    <div class="form-group">
                        <label for="title">عنوان</label>
                        <input type="text" class="form-control" id="title" name="title"
                               placeholder="عنوان را وارد کنید">
                    </div>

                    <div class="form-group">
                        <label for="body">توضیحات</label>
                        <input type="text" class="form-control" id="body" name="body"
                               placeholder="توضیحات را وارد کنید">
                    </div>


                    <div class="form-group">
                        <label for="image">عکس </label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="Date_of_birth">تاریخ تولد</label>
                        <input type="text" class="form-control" id="Date_of_birth" name="Date_of_birth"
                               placeholder="تاریخ تولد را وارد کنید">
                    </div>

                    <div class="form-group">
                        <label for="phone_number">شماره تلفن</label>
                        <input type="text" class="form-control" id="phone_number" name="phone_number"
                               placeholder="شماره تلفن را وارد کنید">
                    </div>

                    <div class="form-group">
                        <label for="email">ایمیل</label>
                        <input type="text" class="form-control" id="email" name="email"
                               placeholder="ایمیل را وارد کنید">
                    </div>

                    <div class="form-group">
                        <label for="address">ادرس</label>
                        <input type="text" class="form-control" id="address" name="address"
                               placeholder="ایمیل را وارد کنید">
                    </div>

                </div>

                <button type="submit" class="btn btn-outline-primary mx-3">ثبت دسته</button>
                <a href="">
                    <button type="button" class="btn btn-outline-dark mx-3">بازگشت</button>
                </a>


            </form>

        </div>
    </div>
@endsection()
