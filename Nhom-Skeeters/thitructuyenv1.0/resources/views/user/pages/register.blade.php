<!DOCTYPE html>
<html lang="vi">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Hệ thống thi trực tuyến lớn nhất Việt Nam | Trang đăng ký</title>
      <!-- CSS -->
      <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="{!! asset('uet_user/css/style_form-register.css') !!}">
      <link rel="stylesheet" href="{!! asset('uet_user/css/style_register_page.css') !!}">
      <link rel="shortcut icon" href="{!! asset('uet_user/favicon_uet.ico') !!}">
   </head>
   <body>
      <!-- Top content -->
      <div class="top-content">
         <div class="inner-bg">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 logo">
                     <div class="col-md-4"></div>
                     <div class="col-md-4"><img class="img-circle" src="{!! asset('uet_user/images/logos/logo-dai-hoc-cong-nghe.jpg') !!}"></div>
                     <div class="col-md-4"></div>
                  </div>
                  <div class="col-sm-8 col-sm-offset-2 text">
                     <h1><strong>Hệ thống thi trực tuyến lớn nhất Việt Nam</strong><br /> Đăng ký ngay!</h1>
                     <div class="description">
                        <p>
                           "Giáo dục là vũ khí mạnh nhất mà người ta có thể sử dụng để thay đổi cả thế giới!" <strong>  - N.MandelaD</strong>
                        </p>
                     </div>
                  </div>
                  <div class="col-sm-8 col-sm-offset-2 text"><a href="5.php" style="color:#fff">Trang chủ <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-5">
                     <div class="form-box">
                        <div class="form-top">
                           <div class="form-top-left">
                              <h3>Đăng nhập</h3>
                              <p>Nhập tên đăng nhập và mật khẩu</p>
                           </div>
                           <div class="form-top-right">
                              <i class="fa fa-key"></i>
                           </div>
                        </div>
                        <div class="form-bottom">
                           <form role="form" action="" method="post" class="login-form">
                              <div class="form-group">
                                 <label class="sr-only" for="form-username">Username</label>
                                 <input type="text" name="email-login" placeholder="Email..." class="form-username form-control" id="form-username">
                              </div>
                              <div class="form-group">
                                 <label class="sr-only" for="form-password">Password</label>
                                 <input type="password" name="password-login" placeholder="Mật khẩu..." class="form-password form-control" id="form-password">
                              </div>
                              <button type="submit" class="btn" name="btn-login">Đăng nhập</button>
                           </form>
                        </div>
                     </div>
                     <div class="social-login">
                        <h3>...Hoặc đăng nhập bằng:</h3>
                        <div class="social-login-buttons">
                           <a class="btn btn-link-1 btn-link-1-facebook" href="#">
                           <i class="fa fa-facebook"></i> Facebook
                           </a>
                           <a class="btn btn-link-1 btn-link-1-twitter" href="#">
                           <i class="fa fa-twitter"></i> Twitter
                           </a>
                           <a class="btn btn-link-1 btn-link-1-google-plus" href="#">
                           <i class="fa fa-google-plus"></i> Google Plus
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-1 middle-border"></div>
                  <div class="col-sm-1"></div>
                  <div class="col-sm-5">
                     <div class="form-box">
                        <div class="form-top">
                           <div class="form-top-left">
                              <h3>Đăng ký</h3>
                              <p>Điền mẫu dưới đây để đăng ký tài khoản</p>
                           </div>
                           <div class="form-top-right">
                              <i class="fa fa-pencil"></i>
                           </div>
                        </div>
                        <div class="form-bottom">
                           <form role="form" action="" method="post" class="registration-form" id="register-form">
                              <div class="form-group">
                                 <label class="sr-only">Họ và tên</label>
                                 <input type="text" name="fullname-register" placeholder="Họ và tên" class="form-first-name form-control" id="form-first-name">
                              </div>
                              <div class="form-group">
                                 <label class="sr-only">Email</label>
                                 <input type="text" name="email-register" placeholder="Email..." class="form-email form-control" id="form-email">
                              </div>
                              <div class="form-group">
                                 <label class="sr-only" for="form-password">Password</label>
                                 <input type="password" name="password-register" placeholder="Mật khẩu..." class="form-password form-control" id="form-password">
                              </div>
                              <button type="submit" class="btn" name="btn-register">Đăng ký</button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Footer -->
      <footer>
         <div class="container">
            <div class="row">
               <div class="col-sm-8 col-sm-offset-2">
                  <div class="footer-border"></div>
                  <p>Hệ thống thi trực tuyến sẽ giúp bạn kiểm tra kiến thức trên mọi lĩnh vực...</p>
                  <p>Nếu bạn cần hỗ trợ xin vui lòng gửi đến hòm thư : <i class="fa fa-envelope"></i> hotro.thitructuyen@gmail.com <i class="fa fa-smile-o"></i></p>
               </div>
            </div>
         </div>
      </footer>
      <!-- Javascript -->
      <script
         src="https://code.jquery.com/jquery-3.1.1.min.js"
         integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
         crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   </body>
</html>