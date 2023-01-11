@extends('admin.master')
@section('maincontent')
    <div class="col-md-4"></div>
    <div class="col-md-8">
        <table class="table table-bordered mt-5">
            <tr style="text-align: center;border-bottom: red 1px solid">
                <th>id</th>
                <th>عنوان دسته</th>
                <th>عملیات</th>
            </tr>

            @foreach($categories as $category)
                <tr style="text-align: center">
                    <th>{{$category->id}}</th>
                    <td>{{$category->title}}</td>
                    <td>
                        <div class="btn-group mx-5" role="group" aria-label="Basic outlined example">
                            <a href="{{route('admin.categories.show',['category'=>$category->id])}}">
                                <button type="button" class="btn btn-outline-primary mx-3">نمایش</button>
                            </a>
                            <form method="post"
                                  action="{{route('admin.categories.destroy',['category'=>$category->id])}}"> @csrf @method('delete')
                                <button type="submit" class="btn btn-outline-success mx-3">حذف</button>
                            </form>
                            <a href="{{route('admin.categories.edit',['category'=>$category->id])}}">
                                <button type="button" class="btn btn-outline-dark mx-3">ویراش</button>
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>



@endsection()
