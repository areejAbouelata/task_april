
<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" style="max-width: 50px;"
                                 src="{{asset('inspina/img/a4.jpg')}}"/>
                             </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear">
                                <span class="block m-t-xs">
                                    <strong class="font-bold">{{Auth::user()->name}}</strong>
                                </span>
                            <!-- <span class="text-muted text-xs block">
                                        {{Auth::user()->name}}
                                    <b class="caret"></b>
                            </span> -->
                            </span>
                    </a>

                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <!-- <li><a href="">حسابي</a></li>
                        <li class="divider"></li> -->

                        <li>
                            <script type="">
                                function submitSidebarSignout() {
                                    document.getElementById('signoutSidebar').submit();

                                }
                            </script>
                            {!! Form::open(['method' => 'post', 'url' => url('logout'),'id'=>'signoutForm','id'=>'signoutSidebar']) !!}

                            {!! Form::close() !!}
                            <a href="#" onclick="submitSidebarSignout()">تسجيل الخروج</a>

                        </li>
                    </ul>
                </div>

                <div class="logo-element">{{ config('app.name') }}</div>
            </li>



            <li>
                <a href="{{url('categories')}}">
                    <i class="fa fa-list-ul"></i>
                    <span class="nav-label">التصنيفات</span>
                </a>
            </li>

        </ul>

    </div>
</nav>