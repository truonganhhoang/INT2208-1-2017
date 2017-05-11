@extends('master')
@section('title')
	<title>Trang chủ</title>
@endsection

@section('content')
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<img align="center" alt="Logo" src="https://lh3.googleusercontent.com/X8jcrVDwxOzcsDTvCQF_u59JlL8kfehiOFc5SlcHcPj_bNXL1zTIu3Q3f1pod1UqPFJp4FD4tV2jEyU=w1280-h703">
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<h3 class="text-success text-center">
						PHPStorm - Học tiếng anh chưa bao giờ dễ dàng như thế!
					</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<p class="text-center lead">
						Hãy đăng nhập để trải nghiệm khóa học tiếng anh trực tuyến với PHPStorm!
					</p> 
					<button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#signIn" id="login-modal">
						Đăng nhập
					</button> 

					<div class="modal fade" id="signIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					    <div class="modal-dialog">
					        <div class="modal-content">
					            <!-- Modal Header -->
					            <div class="modal-header">
					                <button type="button" class="close" 
					                   data-dismiss="modal">
					                       <span aria-hidden="true">&times;</span>
					                       <span class="sr-only">Close</span>
					                </button>
					                <h4 class="modal-title" id="myModalLabel">
					                    Đăng nhập
					                </h4>
					            </div>
					            
					            <!-- Modal Body -->
					            <div class="modal-body">
					                <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
					                	{{ csrf_field() }}
					                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					                    <label  class="col-sm-2 control-label"
					                              for="email">Email</label>
					                    <div class="col-sm-10">
					                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

					                        @if ($errors->has('email'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('email') }}</strong>
			                                    </span>
			                                @endif
					                    </div>
					                  </div>
					                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
					                    <label class="col-sm-2 control-label"
					                          for="password" >Mật khẩu</label>
					                    <div class="col-sm-10">
					                        <input id="password" type="password" class="form-control" name="password" required>

				                            @if ($errors->has('password'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('password') }}</strong>
			                                    </span>
			                                @endif
					                    </div>
					                  </div>
					                  <div class="form-group">
					                    <div class="col-sm-offset-2 col-sm-10">
					                      <div class="checkbox">
					                        <label>
					                            <input type="checkbox"/>Nhớ tài khoản
					                        </label>
					                      </div>
					                    </div>
					                  </div>
					                  <div class="form-group">
					                    <div class="col-sm-offset-2 col-sm-10">
					                      <button type="submit" class="btn btn-success" id="login">Đăng nhập</button>
					                    </div>
					                  </div>
					                </form>
					            </div>
					            
					            <!-- Modal Footer -->
					            <div class="modal-footer">
					                <button type="button" class="btn btn-default"
					                        data-dismiss="modal">
					                            Trở về
					                </button>
					                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#signUp" data-dismiss="modal">
					                    Chưa có tài khoản? Đăng ký ngay
					                </button>
					            </div>
					        </div>
					    </div>
					</div>

					<button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#signUp">
						Chưa có tài khoản? Đăng ký ngay
					</button>
					<div class="modal fade" id="signUp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					    <div class="modal-dialog">
					        <div class="modal-content">
					            <!-- Modal Header -->
					            <div class="modal-header">
					                <button type="button" class="close" 
					                   data-dismiss="modal">
					                       <span aria-hidden="true">&times;</span>
					                       <span class="sr-only">Close</span>
					                </button>
					                <h4 class="modal-title" id="myModalLabel">
					                    Đăng ký
					                </h4>
					            </div>
					            
					            <!-- Modal Body -->
					            <div class="modal-body">
					                <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
					                	{{ csrf_field() }}

					                	<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
				                            <label for="name" class="col-sm-2 control-label">Họ tên</label>

				                            <div class="col-md-10">
				                                <input id="name" type="text" class="form-control" placeholder="Tên" name="name" value="{{ old('name') }}" required autofocus>

				                                @if ($errors->has('name'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('name') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>

					                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					                    <label  class="col-sm-2 control-label"
					                              for="email">Email</label>
					                    <div class="col-sm-10">
					                        <input id="email" type="email" class="form-control" 
					                       		placeholder="Email" name="email" value="{{ old('email') }}" required/>

					                        @if ($errors->has('email'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('email') }}</strong>
			                                    </span>
			                                @endif
					                    </div>
					                  </div>
					                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
					                    <label class="col-sm-2 control-label"
					                          for="password" >Mật khẩu</label>
					                    <div class="col-sm-10">
					                        <input id="password" type="password" class="form-control" placeholder="Password" name="password" required />

					                        @if ($errors->has('password'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('password') }}</strong>
			                                    </span>
			                                @endif
					                    </div>
					                  </div>
					                  <div class="form-group">
					                    <label class="col-sm-2 control-label"
					                          for="password-confirm" >Nhập lại mật khẩu</label>
					                    <div class="col-sm-10">
					                        <input type="password" class="form-control"
					                            id="password-confirm" placeholder="Password" name="password_confirmation" required/>
					                    </div>
					                  </div>
					                  <div class="form-group">
					                    <div class="col-sm-offset-2 col-sm-10">
					                      <div class="checkbox">
					                        <label>
					                            <input type="checkbox"/>Tích vào đây để đồng ý với điều khoản sử dụng của chúng tôi
					                        </label>
					                      </div>
					                    </div>
					                  </div>
					                  <div class="form-group">
					                    <div class="col-sm-offset-2 col-sm-10">
					                      <button type="submit" class="btn btn-success">Đăng ký</button>
					                    </div>
					                  </div>
					                </form>
					            </div>
					            
					            <!-- Modal Footer -->
					            <div class="modal-footer">
					                <button type="button" class="btn btn-default"
					                        data-dismiss="modal">
					                            Trở về
					                </button>
					                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#signIn" data-dismiss="modal">
					                    Đã có tài khoản? Đăng nhập
					                </button>
					            </div>
					        </div>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection