@extends('admin.master')
@section('maincontent')
    <div class="col-md-2"></div>
    <div class="col-md-10">
        <table class="table table-bordered mt-5">
            <tr style="text-align: center;border-bottom: red 1px solid">
                <th>id</th>
                <th>دسته پست</th>
                <th>عکس</th>
                <th>عنوان</th>
                <th>نویسنده</th>
                <th>توضیحات</th>
                <th>عملیات</th>
            </tr>

            @foreach($posts as $post)
                <tr style="text-align: center">
                    <th>{{$post->id}}</th>
                    <td>{{$post->category->title}}</td>
                    <td><img width="100px" src="{{asset('uploads/'.$post->image)}}" alt=""> </td>
                    <th>{{$post->title}}</th>
                    <th>{{$post->writer}}</th>
                    <th>{{$post->body}}</th>
                    <td>
                        <div class="btn-group mx-5" role="group" aria-label="Basic outlined example">
                          <a href="{{route('admin.post.show',['post'=>$post->id])}}">
                                <button type="button" class="btn btn-outline-primary mx-3">نمایش</button>
                            </a>
                            <form method="post"
                                action="{{route('admin.post.destroy',['post'=>$post->id])}}"> @csrf @method('delete')
                                <button type="submit" class="btn btn-outline-success mx-3">حذف</button>
                            </form>
                           <a href="{{route('admin.post.edit',['post'=>$post->id])}}">
                                <button type="button" class="btn btn-outline-dark mx-3">ویراش</button>
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>



@endsection()
