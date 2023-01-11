@extends('admin.master')
@section('maincontent')
<div class="col-md-4"></div>
<div class="col-md-8"> <div class="col-md-9">


        <form style="padding:15px; border-radius:15px" class="bg-white mt-5" method="post"  action="{{route('admin.post.store')}}" enctype="multipart/form-data">
            @foreach($errors->all() as $error)
                <ul style="list-style:none" >
                    <li class="text-danger mx-3">{{$error}}</li>
                </ul>
            @endforeach()
            @csrf
            <div class="card-body">

                <div class="form-group">
                    <label for="title">عنوان دسته</label>
                    <select class="form-control" name="category_id" id="category_id">
                        <option value="">انتخاب دسته بندی</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="title">عنوان پست</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="عنوان پست را وارد کنید">
                </div>

                <div class="form-group">
                    <label for="writer">نام نویسنده </label>
                    <input type="text" class="form-control" id="writer" name="writer" placeholder="نام نویسنده را وارد کنید">
                </div>

                <div class="form-group">
                    <label for="body">توضیحات پست</label>
                    <input type="text" class="form-control" id="body" name="body" placeholder="عنوان پست را وارد کنید">
                </div>

                <div class="form-group">
                    <label for="image">عکس </label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>

                <div class="form-group">
                    <label for="alt">عنوان عکس</label>
                    <input type="text" class="form-control" id="alt" name="alt" placeholder="عنوان پست را وارد کنید">
                </div>



            </div>

            <button type="submit" class="btn btn-outline-primary mx-3">ثبت دسته</button>
            <a href=""><button type="button" class="btn btn-outline-dark mx-3">بازگشت</button></a>


        </form>

    </div>
</div>
@endsection()
