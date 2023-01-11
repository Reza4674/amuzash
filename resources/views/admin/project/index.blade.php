@extends('admin.master')
@section('maincontent')
    <div class="col-md-2"></div>
    <div class="col-md-10">
        <table class="table table-bordered mt-5">
            <tr style="text-align: center;border-bottom: red 1px solid">
                <th>id</th>
                <th>عنوان پروژه</th>
                <th>توضیحات پروژه</th>
                <th>عکس پروژه</th>
                <th> عملیات</th>
            </tr>

            @foreach($projects as $project)
                <tr style="text-align: center">
                    <th>{{$project->id}}</th>
                    <td>{{$project->title}}</td>
                    <td>{{$project->body}}</td>
                    <td><img width="100px" src="{{asset('uploads/'.$project->image)}}" alt=""> </td>
                    <td>
                        <div class="btn-group mx-5" role="group" aria-label="Basic outlined example">
                          <a href="{{route('admin.project.show',['project'=>$project->id])}}">
                                <button type="button" class="btn btn-outline-primary mx-3">نمایش</button>
                            </a>
                            <form method="post"
                                action="{{route('admin.project.destroy',['project'=>$project->id])}}"> @csrf @method('delete')
                                <button type="submit" class="btn btn-outline-success mx-3">حذف</button>
                            </form>
                           <a href="{{route('admin.project.edit',['project'=>$project->id])}}">
                                <button type="button" class="btn btn-outline-dark mx-3">ویراش</button>
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>



@endsection()
