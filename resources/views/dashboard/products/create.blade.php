@extends('dashboard.layouts.main',[
                                'page_header'       => 'لوحة التحكم',
                                'page_description'  => 'إضافة منتج'
                                ])

@section('content')
    <div class="ibox">
        <div class="ibox-title">
            <h5> إضافة منتج الى {{$category->name}}</h5>
        </div>
        <div class="ibox-content">
            @include('dashboard.layouts.partials.validation-errors')
            @include('flash::message')
            {{-- laravel collective --}}
            {!! Form::model($product,[
                'method' => 'post',
                'url' => url(route('categories.products.store' , [$category->id])),
                //'files' => true
            ]) !!}
            @include('dashboard.products.form')
            {!! Form::submit('حفظ',[
                'class' => 'btn btn-primary'
            ]) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection