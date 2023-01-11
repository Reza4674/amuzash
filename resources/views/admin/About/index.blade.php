@extends('admin.master')
@section('maincontent')
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-9">
                <table class="table table-bordered mt-5">
                    <tr style="text-align: center;border-bottom: red 1px solid">
                        <th>نام و نام خانوادگی</th>
                        <th>عنوان</th>
                        <th>تاریخ تولد</th>
                        <th>شماره تلفن</th>
                        <th>ایمیل</th>
                        <th>عملیات</th>
                    </tr>

                    @foreach($abouts as $about)
                        <tr style="text-align: center">
                            <th>{{$about->name}}</th>
                            <th>{{$about->title}}</th>
                            <th>{{$about->Date_of_birth}}</th>
                            <th>{{$about->phone_number}}</th>
                            <th>{{$about->email}}</th>


                            <td>
                                <div class="btn-group mx-5" role="group" aria-label="Basic outlined example">
                                    <a href="{{route('admin.about.show',['about'=>$about->id])}}">
                                        <button type="button" class="btn btn-outline-primary mx-3">نمایش</button>
                                    </a>
                                    <form method="post"
                                          action="{{route('admin.about.destroy',['about'=>$about->id])}}"> @csrf @method('delete')
                                        <button type="submit" class="btn btn-outline-success mx-3">حذف</button>
                                    </form>
                                    <a href="{{route('admin.about.edit',['about'=>$about->id])}}">
                                        <button type="button" class="btn btn-outline-dark mx-3">ویراش</button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>




@endsection()
