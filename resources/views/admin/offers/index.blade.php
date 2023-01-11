@extends('admin.master')
@section('maincontent')
    <div class="col-md-4"></div>
    <div class="col-md-8">
        <table class="table table-bordered mt-5">
            <tr style="text-align: center;border-bottom: red 1px solid">
                <th>id</th>
                <th>عنوان پروژه</th>
                <th>توضیحات پروژه</th>
                <th>عملیات</th>
            </tr>

            @foreach($offers as $offer)
                <tr style="text-align: center">
                    <th>{{$offer->id}}</th>
                    <td>{{$offer->title}}</td>
                    <td>{{$offer->body}}</td>
                    <td>
                        <div class="btn-group mx-5" role="group" aria-label="Basic outlined example">
                            <a href="{{route('admin.offer.show',['offer'=>$offer->id])}}">
                                <button type="button" class="btn btn-outline-primary mx-3">نمایش</button>
                            </a>
                            <form method="post"
                                  action="{{route('admin.offer.destroy',['offer'=>$offer->id])}}"> @csrf @method('delete')
                                <button type="submit" class="btn btn-outline-success mx-3">حذف</button>
                            </form>
                            <a href="{{route('admin.offer.edit',['offer'=>$offer->id])}}">
                                <button type="button" class="btn btn-outline-dark mx-3">ویراش</button>
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>



@endsection()
