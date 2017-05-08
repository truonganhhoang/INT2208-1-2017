<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('uet_user/css/style_footer.css') !!}">
    <link rel="stylesheet" href="{!! asset('uet_user/css/style_login_form.css') !!}">
    <link rel="stylesheet" href="{!! asset('uet_user/css/style.css') !!}">
    <link rel="stylesheet" href="{!! asset('uet_user/css/style_contact_form.css') !!}">
    <link rel="shortcut icon" href="{!! asset('uet_user/favicon_uet.ico') !!}">
    <title>Hệ thống thi thử trực tuyến Đại học Công nghệ | @yield('title')</title>
</head>
<body>
<div id="header">
    <div class="container">
        <div class="row logo-banner">
            <div class="col-md-2 col-sm-2 col-xs-1"><a href="http://uet.vnu.edu.vn/" target="_blank"><img
                            src="{!! asset('uet_user/images/logos/logo-dai-hoc-cong-nghe.jpg') !!}" class="img-logo img-logo-left img-reponsive"></a></div>
            <div class="col-md-8 col-sm-8 col-xs-12"><a href="http://uet.vnu.edu.vn/ts" target="_blank"><img
                            src="{!! asset('uet_user/images/banners/ts2017.jpg') !!}" class="img-banner img-reponsive"></a></div>
            <div class="col-md-2 col-sm-2 col-xs-1"><a href="http://vnu.edu.vn/home" target="_blank"><img
                            src="{!! asset('uet_user/images/logos/dhqghn_logo.png') !!}" class="img-logo img-logo-right img-reponsive"></a></div>
        </div>
        <div class="row">
            <!--         <h2 class="text-center title-web">Hệ thống thi trực tuyến</h2>-->
            <nav class="navbar navbar-inverse main-menu alert-info">
                <form class="navbar-form navbar-left search-form">
                    <div class="form-group input-group">
                        <input type="search" class="form-control" placeholder="Tìm kiếm tại đây...">
                        <span class="input-group-addon"><a href="#"><span class="glyphicon glyphicon-search"></span></a></span>
                    </div>
                </form>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="menu">
                    <ul class="nav navbar-nav navbar">
                        <li><a href="{!! route('getHomePage') !!}"><span class="glyphicon glyphicon-home"></span> Trang chủ</a></li>

                        <!--                   contact us-->
                        {{--<li class="dropdown">--}}
                            {{--<a href="" class="pages" data-toggle="modal"--}}
                               {{--data-target="#contact_form"><i class="glyphicon glyphicon-envelope"--}}
                                                              {{--aria-hidden="true"></i> Phản hồi</a>--}}
                        {{--</li>--}}
                        <!--                   end contact us-->
                        <!--                   form login-->

                        <!--                   end form login-->
                        {{--<li><a href="admin/index.html"><span class="glyphicon glyphicon-cog"></span> Admin</a></li>--}}
                    </ul>
                </div>
            </nav>
            <!--          contact form-->

            <!--          end contact form-->
        </div>
    </div>
</div>
<!--       end header-->