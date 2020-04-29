<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> {{ config('app.name') }} |  لوحة التحكم  </title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="{{asset('inspina/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('inspina/css/bootstrap-rtl.min.css')}}" rel="stylesheet">

    <link href="{{asset('inspina/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <link href="{{asset('inspina/css/animate.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('inspina/js/plugins/select2/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('inspina/js/plugins/sweetalert/sweetalert.css')}}">
    <link rel="stylesheet" href="{{asset('inspina/js/plugins/bootstrap-fileinput/css/fileinput.min.css')}}">
    <link rel="stylesheet" href="{{asset('inspina/js/plugins/lightbox2/css/lightbox.min.css')}}">

    <link href="{{asset('inspina/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('inspina/css/inspina-rtl.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    {{--hijri date picker--}}
    <link href="{{asset('inspina/js/plugins/datapicker-hijri/jquery.calendars.picker.css')}}" rel="stylesheet">
    {{--full celender--}}
    <link href="{{asset('inspina/css/fullcalendar/fullcalendar.min.css')}}" rel='stylesheet' />
    <link href="{{asset('inspina/css/fullcalendar/fullcalendar.print.min.css')}}" rel='stylesheet' media='print' />
    <link rel="stylesheet" href="{{asset('css/summernote.css')}}">
    @stack('styles')
</head>

<body>

<div id="wrapper">
@include('dashboard.layouts.sidebar')