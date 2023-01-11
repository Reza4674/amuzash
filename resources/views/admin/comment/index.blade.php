@extends('admin.master')
@section('maincontent')
    <div class="col-md-2"></div>
    <div class="col-md-10">
        <table class="table table-bordered mt-5">
            <tr style="text-align: center;border-bottom: red 1px solid">
                <th>id</th>
                <th>نام</th>
                <th>ایمیل</th>
                <th>عنوان</th>
                <th>توضیحات</th>
                <th>وضعیت</th>
                <th>نمایش</th>
                <th>حذف</th>
            </tr>

            @foreach($comments as $comment)
                <tr style="text-align: center">
                    <th>{{$comment->id}}</th>
                    <td>{{$comment->name}}</td>
                    <td>{{$comment->email}}</td>
                    <th>{{$comment->title}}</th>
                    <th>{{$comment->body}}</th>
                    <td>
                       <form action="{{route('admin.comment.update' , ['comment'=>$comment])}}"method="post">
                           @csrf
                           @method('put')
                           @if($comment->is_active =='0')
                               <button style="color: red" type="submit" class="btn">{{$comment->is_active?'فعال':'غیر فعال' }}</button>
                           @else
                               <button style="color: #007800" type="submit" class="btn">{{$comment->is_active?'فعال':'غیر فعال' }}</button>
                           @endif
                       </form>
                    </td>
                    <td>    <a href="{{route('admin.comment.show',['comment'=>$comment->id])}}">
                            <button type="button" class="btn btn-outline-primary mx-3">نمایش</button>
                        </a></td>
                <td> <form method="post"
                           action="{{route('admin.comment.destroy',['comment'=>$comment->id])}}"> @csrf @method('delete')
                        <button type="submit" class="btn btn-outline-success mx-3">حذف</button>
                    </form></td>

                </tr>
            @endforeach

        </table>
    </div>



@endsection()
