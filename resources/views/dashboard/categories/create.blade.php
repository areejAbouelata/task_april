@extends('dashboard.layouts.main',[
                                'page_header'       => 'لوحة التحكم',
                                'page_description'  => 'إضافة تصنيف'
                                ])

@section('content')
    <div class="ibox">
        <div class="ibox-title">
            <h5>إضافة تصنيف</h5>
        </div>
        <div class="ibox-content">
            @include('dashboard.layouts.partials.validation-errors')
            @include('flash::message')
            {{-- laravel collective --}}
            {!! Form::model($category,[
                'method' => 'post',
                'url' => url(route('categories.store')),
                //'files' => true
            ]) !!}
            @include('dashboard.categories.form')
            {!! Form::submit('حفظ',[
                'class' => 'btn btn-primary'
            ]) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection