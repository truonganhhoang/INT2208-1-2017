@extends('master')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-4">
						<img alt="Logo" src="https://lh3.googleusercontent.com/X8jcrVDwxOzcsDTvCQF_u59JlL8kfehiOFc5SlcHcPj_bNXL1zTIu3Q3f1pod1UqPFJp4FD4tV2jEyU=w1280-h703" style="display: block; margin-left: auto; margin-right: auto;">
					</div>
					<div class="col-md-8">
						<ul class="nav nav-pills">
							<li class="active">
								<a href="{{ url('/') }}">Trang chủ</a>
							</li>
							<li>
								<a href="{{ url('/user') }}">Thành viên</a>
							</li>
							@if (Auth::user()->id_decentralization != 3)
							<li>
								<a href="{{ url('/addQuestion') }}">Thêm câu hỏi</a>
							</li>
							@endif
							<li class="dropdown pull-right">
								 <a href="#" data-toggle="dropdown" class="dropdown-toggle">Xin chào, {{ Auth::user()->name }} <strong class="caret"></strong></a>
								<ul class="dropdown-menu">
									{{-- <li>
										<a href="#">Cập nhật tài khoản</a>
									</li>
									<li class="divider">
									</li>
 --}}									
 									<li>
										<a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Đăng xuất
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		</br>
		@yield('body')
	</div>
@endsection