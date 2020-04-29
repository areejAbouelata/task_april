@include('dashboard.layouts.head')
<div id="page-wrapper" class="gray-bg">
    @include('dashboard.layouts.header')
     <section class="content-header">
		  <h1>
		    {{$page_header}}
		    <small>{!! $page_description !!}</small>
		  </h1>
		</section>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                @yield('content')
            </div>
        </div>
    </div>
    @include('dashboard.layouts.footer')
</div>
@include('dashboard.layouts.foot')