<style>
    span.select2-container {
        z-index:10050;
        width: 100% !important;
        padding: 0;
    }
    .select2-container .select2-search--inline {
        float: left;
        width: 100%;
    }
</style>
<div class="row border-bottom">
    <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary pull-right" href="#"><i class="fa fa-bars"></i> </a>
            {{--<form role="search" class="navbar-form-custom" method="post" action="#">--}}
                {{--<div class="form-group">--}}
                    {{--<input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">--}}
                {{--</div>--}}
            {{--</form>--}}
        </div>
        <ul class="nav navbar-top-links navbar-left">
          <!--   <li class="dropdown">
                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#" aria-expanded="false">
                    <i class="fa fa-bell"></i>  <span class="label label-danger">5</span>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <div class="dropdown-messages-box">
                            <div class="media-body">
                                <span>اشعار </span>
                                <span class="badge badge-danger pull-left">7</span>
                            </div>
                        </div>
                    </li>
                    <li class="divider"></li>
                </ul>
            </li> -->
       <!--      <li class="dropdown">
                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#" aria-expanded="true">
                    <i class="fa fa-envelope"></i>  <span class="label label-warning">4</span>
                </a>
                <ul class="dropdown-menu dropdown-messages">
                    <li>
                        <div class="dropdown-messages-box">
                            <div class="media-body">
                                <small class="pull-left">منذ 5 دقائق</small>
                                <strong>محمد أحمد</strong> لدي مشكلة جديدة. <br>
                            </div>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <div class="text-center link-block">
                            <a href="">
                                <i class="fa fa-envelope"></i> <strong>كل التذاكر</strong>
                            </a>
                        </div>
                    </li>
                </ul>
            </li> -->
            <li>
                <script type="">
                    function submitSignout(){
                        document.getElementById('signoutForm').submit();

                    }
                </script>
                 {!! Form::open(['method' => 'post', 'url' => url('logout'),'id'=>'signoutForm']) !!}
                          
                 {!! Form::close() !!}

                <a href="#" onclick="submitSignout()">
                    <i class="fa fa-sign-out"></i> تسجيل الخروج
                </a> 
            </li>
        </ul>

    </nav>
</div>