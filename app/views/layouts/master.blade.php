<!DOCTYPE html>
<html>
    <head>
        <title>
            @section('title')
            Laravel 4 - Tutorial
            @show
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- CSS are placed here -->
        {{ HTML::style('css/bootstrap.min.css') }}


        <style>
        @section('styles')
            body {
                padding-top: 60px;
            }
        @show
        </style>
    </head>

    <body>
        <!-- Navbar -->
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                <!-- Everything you want hidden at 940px or less, place within here -->
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="{{{ URL::to('') }}}">หน้าหลัก</a></li>
                        @if ( Auth::guest() )
                            <li>{{ HTML::link('login', 'เข้าสู่ระบบ') }}</li>
                        @else
                            <li><a href="{{{ URL::to('profile') }}}">บัญชีผู้ใช้</a></li>
                            <li>{{ HTML::link('logout', 'ออกจากระบบ') }}</li>
                        @endif
                    </ul> 
                </div>
            </div>
        </div> 

        <!-- Container -->
        <div class="container">

            <!-- Content -->
            @yield('content')

        </div>

        <!-- Scripts are placed here -->
        {{ HTML::script('js/jquery-1.11.1.min.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}

    </body>
</html>