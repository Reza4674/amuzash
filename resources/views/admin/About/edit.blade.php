@extends('admin.master')
@section('maincontent')
    <div class="col-md-4"></div>
    <div class="col-md-8">
        <div class="col-md-6">


            <form style="padding:15px; border-radius:15px" class="bg-white mt-5" enctype="multipart/form-data" method="post" action="{{route('admin.about.update',['about'=>$about->id])}}">

                @foreach($errors->all() as $error)
                    <ul style="list-style:none" >
                        <li class="text-danger mx-3">{{$error}}</li>
                    </ul>
                @endforeach()
                @csrf
                @method('put')

                <div class="card-body">

                    <div class="form-group">
                        <label for="name">نام و نام خانواگی</label><br>
                        <input type="text" class="form-control" id="name" name="name" value="{{$about->name}}">
                    </div>

                    <div class="form-group">
                        <label for="title">عنوان</label><br>
                        <input name="title" id="title" cols="58" rows="5" value="{{$about->title}}">
                    </div>

                    <div class="form-group">
                        <label for="body">توضیحات</label><br>
                        <textarea name="body" id="body" cols="58" rows="5">{{$about->body}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">عکس </label><br>
                        <input type="file" class="custom-file" id="image" name="image">
                        <img class="img-fluid" src="{{asset('uploads/'.$about->image)}}" alt="">
                    </div>

                    <div class="form-group">
                        <label for="Date_of_birth">تاریخ تولد</label><br>
                        <input name="Date_of_birth" id="Date_of_birth" cols="58" rows="5" value="{{$about->Date_of_birth}}">
                    </div>

                    <div class="form-group">
                        <label for="phone_number">شماره تلفن</label><br>
                        <input name="phone_number" id="phone_number" cols="58" rows="5" value="{{$about->phone_number}}">
                    </div>

                    <div class="form-group">
                        <label for="email">ایمیل</label><br>
                        <input name="email" id="email" cols="58" rows="5" value="{{$about->email}}">
                    </div>

                    <div class="form-group">
                        <label for="address">ادرس</label><br>
                        <input name="address" id="address" cols="58" rows="5" value="{{$about->address}}">
                    </div>

                </div>

                <button type="submit" class="btn btn-outline-primary mx-3">ویرایش دسته</button>
                <a href="{{route('admin.about.index')}}"><button type="button" class="btn btn-outline-dark mx-3">انصراف</button></a>

            </form>

        </div>
    </div>


@endsection()
