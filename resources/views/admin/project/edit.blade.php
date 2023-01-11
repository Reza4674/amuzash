@extends('admin.master')
@section('maincontent')
    <div class="col-md-4"></div>
    <div class="col-md-8">
        <div class="col-md-6">


            <form style="padding:15px; border-radius:15px" class="bg-white mt-5" enctype="multipart/form-data" method="post" action="{{route('admin.project.update',['project'=>$project->id])}}">

                @foreach($errors->all() as $error)
                    <ul style="list-style:none" >
                        <li class="text-danger mx-3">{{$error}}</li>
                    </ul>
                @endforeach()
                @csrf
                @method('put')

                <div class="card-body">

                    <div class="form-group">
                        <label for="title">عنوان پروژه</label>
                        <input class="form-control" name="title" id="title" value="{{$project->title}}">
                    </div>

                    <div class="form-group">
                        <label for="body">توضیحات پروژه</label>
                        <input class="form-control" name="body" id="body" value="{{$project->body}}">
                    </div>

                    <div class="form-group">
                        <label for="image">عکس </label><br>
                        <img src="{{asset('uploads/'.$project->image)}}" alt="" width="150">
                        <input type="file" name="image" id="image" class="form-control">
                    </div>

                </div>

                <button type="submit" class="btn btn-outline-primary mx-3">ویرایش دسته</button>
                <a href="{{route('admin.project.index')}}"><button type="button" class="btn btn-outline-dark mx-3">انصراف</button></a>

            </form>

        </div>
    </div>


@endsection()
