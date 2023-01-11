@extends('admin.master')
@section('maincontent')
    <div class="col-md-4"></div>
    <div class="col-md-8">
        <div class="col-md-6">


            <form style="padding:15px; border-radius:15px" class="bg-white mt-5" enctype="multipart/form-data" method="post" action="{{route('admin.categories.update',['category'=>$category->id])}}">

                @foreach($errors->all() as $error)
                    <ul style="list-style:none" >
                        <li class="text-danger mx-3">{{$error}}</li>
                    </ul>
                @endforeach()
                @csrf
                @method('put')

                <div class="card-body">

                    <div class="form-group">
                        <label for="title">عنوان دسته</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$category->title}}">
                    </div>

                    <div class="form-group">
                        <label for="body">نام دسته</label>
                        <textarea name="body" id="body" cols="58" rows="5">{{$category->title}}</textarea>
                    </div>

                </div>

                <button type="submit" class="btn btn-outline-primary mx-3">ویرایش دسته</button>
                <a href="{{route('admin.categories.index')}}"><button type="button" class="btn btn-outline-dark mx-3">انصراف</button></a>

            </form>

        </div>
    </div>


@endsection()
