@extends('admin.master')
@section('maincontent')
<div class="col-md-4"></div>
<div class="col-md-8"> <div class="col-md-9">


        <form style="padding:15px; border-radius:15px" class="bg-white mt-5" method="post"  action="{{route('admin.categories.store')}}">
            @foreach($errors->all() as $error)
                <ul style="list-style:none" >
                    <li class="text-danger mx-3">{{$error}}</li>
                </ul>
            @endforeach()
            @csrf
            <div class="card-body">

                <div class="form-group">
                    <label for="title">عنوان دسته</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="عنوان دسته را وارد کنید">
                </div>

                <div class="form-group">
                    <label for="body">توضیحات دسته</label>
                    <input type="text" class="form-control" id="body" name="body" placeholder="توضیحات دسته را وارد کنید">
                </div>

            </div>

            <button type="submit" class="btn btn-outline-primary mx-3">ثبت دسته</button>
            <a href=""><button type="button" class="btn btn-outline-dark mx-3">بازگشت</button></a>


        </form>

    </div>
</div>
@endsection()
