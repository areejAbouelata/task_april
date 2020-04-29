@extends('dashboard.layouts.main',[
                                'page_header'       => 'لوحةالتحكم ',
                                'page_description'  => 'التصنيفات'
                                ])

@section('content')
    <div class="ibox">
        <div class="ibox-title">
            <h5>عرض التصنيفات</h5>
        </div>

        <div class="ibox-content">
            <div class="col-sm-3">
                <a href="{{url(route('categories.create'))}}" class="btn btn-primary pull-right">إضافة تصنيف</a>
            </div>
            <div class="clearfix"></div>
            <hr>

            <br>
            @include('flash::message')
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>الاسم</th>
                        {{--<th class="text-center">تعديل</th>--}}
                        <th class="text-center">حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($categories as $category)
                        <tr id="removable{{$category->id}}">
                            <td>{{$loop->iteration}}</td>
                            <td><a href="{{url()->route('categories.products.index',$category->id)}}">{{$category->name}}</a>
                            </td>


                            {{--<td class="text-center">--}}
                                {{--<a href="{{url(route('categories.edit',$category->id))}}"--}}
                                   {{--class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>--}}
                            {{--</td>--}}
                            <td class="text-center">
                                <a href="#" class="btn btn-danger btn-xs destroy" data-token="{{csrf_token()}}"
                                   data-route="{{url()->route('categories.destroy',$category->id)}}"><i
                                            class="fa fa-trash-o"></i></a>
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">
                                <div class="alert alert-danger">
                                    <h3 class="text-center">لا يوجد بيانات</h3>
                                </div>
                            </td>
                        </tr>
                    @endforelse

                    </tbody>
                </table>
            </div>
            <div class="text-center">
                {{$categories->links()}}
            </div>
        </div>
    </div>
@endsection