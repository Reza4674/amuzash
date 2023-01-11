@extends('admin.master')
@section('maincontent')
    <div class="col-md-4"></div>
    <div class="col-md-8">
        <div class="col-md-6">


            <form style="padding:15px; border-radius:15px" class="bg-white mt-5" enctype="multipart/form-data" method="post" action="{{route('admin.post.update',['post'=>$post->id])}}">

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
                        <select class="form-control" name="category_id" id="category_id">
                            <option value="">انتخاب دسته بندی</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}"{{$category->id== $post->category_id ? 'selected': ''}}>{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>



                    <div class="form-group">
                        <label for="image">عکس </label><br>
                        <img src="{{asset('uploads/'.$post->image)}}" alt="" width="150">
                        <input type="file" name="image" id="image" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="title">عنوان</label>
                        <input class="form-control" name="title" id="title" value="{{$post->title}}">
                    </div>

                    <div class="form-group">
                        <label for="writer">نویسنده</label>
                        <input class="form-control" name="writer" id="writer" value="{{$post->writer}}">
                    </div>

                    <div class="form-group">
                        <label for="body">توضیحات</label>
                        <input class="form-control" name="body" id="body" value="{{$post->body}}">
                    </div>

                </div>

                <button type="submit" class="btn btn-outline-primary mx-3">ویرایش دسته</button>
                <a href="{{route('admin.post.index')}}"><button type="button" class="btn btn-outline-dark mx-3">انصراف</button></a>

            </form>

        </div>
    </div>


@endsection()
