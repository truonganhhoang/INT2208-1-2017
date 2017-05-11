@extends('header')
@section('title')
	<title>Thành viên</title>
@endsection

@section('body')
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center text-success">
				Thành viên của PHPStorm.
			</h3>
			</br>
			@php $i=0 @endphp
			
			
			<div class="row">
				@foreach ($user as $u)	
				
					@if ($i%2==0)
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-4">
								<img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/">
							</div>
							<div class="col-md-8">
								<h3 class="text-left text-success">
									{{ $u->name }}
								</h3>
								<br>
								@if ( Auth::user()->id_decentralization == 1 )
								<div class="row">
									<div class="col-md-4">
										<button type="button" class="btn btn-success" data-toggle="modal" data-target="#setAdmin{{ $u->id_user }}">
											Quản trị
										</button>
										<div class="modal fade" id="setAdmin{{ $u->id_user }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										    <div class="modal-dialog">
										        <div class="modal-content">
										            <!-- Modal Body -->
										            
										            	<div class="modal-body">
											                <div class="alert alert-warning">
						  										<strong>Bạn có muốn cấp quyền admin cho người dùng này không?</strong>
															</div> 
											            </div>
										            
										            <!-- Modal Footer -->
										            <div class="modal-footer">
										
										            	<a href="{!! url('/setAdmin/'.$u->id_user) !!}" title=""><button type="button" class="btn btn-success">
								                            Đồng ý
								                		</button></a>
										                <button type="button" class="btn btn-default" data-dismiss="modal">
										                    Trở về
										                </button>
										            </div>
										        </div>
										    </div>
										</div>
									</div>
									<div class="col-md-4">
										<button type="button" class="btn btn-success" data-toggle="modal" data-target="#setQuestionaire">
											Câu hỏi
										</button>
										
										<div class="modal fade" id="setQuestionaire{{ $u->id_user }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										    <div class="modal-dialog">
										        <div class="modal-content">
										            <!-- Modal Body -->
										            
										            	<div class="modal-body">
											                <div class="alert alert-warning">
						  										<strong>Bạn có muốn cấp quyền thêm câu hỏi cho người dùng này không?</strong>
															</div> 
											            </div>
										            
										            <!-- Modal Footer -->
										            <div class="modal-footer">
										
										            	<a href="{!! url('/setQuestionaire/'.$u->id_user) !!}" title=""> <button type="button" class="btn btn-success">
								                            Đồng ý
								                		</button></a>
										                <button type="button" class="btn btn-default" data-dismiss="modal">
										                    Trở về
										                </button>
										            </div>
										        </div>
										    </div>
										</div>
									</div>
									<div class="col-md-4">
										 
										
										<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteUser">
										Câu hỏi
										</button>
										<div class="modal fade" id="deleteUser{{ $u->id_user }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										    <div class="modal-dialog">
										        <div class="modal-content">
										            <!-- Modal Body -->
										            
										            	<div class="modal-body">
											                <div class="alert alert-danger">
						  										<strong>Bạn có muốn xóa người dùng này?</strong>
															</div> 
											            </div>
										            
										            <!-- Modal Footer -->
										            <div class="modal-footer">
										
										            	<a href="{!! url('/deleteUser/'.$u->id_user) !!}" title=""><button type="button" class="btn btn-success">
								                            Đồng ý
								                		</button></a>
										                <button type="button" class="btn btn-default" data-dismiss="modal">
										                    Trở về
										                </button>
										            </div>
										        </div>
										    </div>
										</div>
									</div>
								</div>
								
								@endif
							</div>
						</div>
					</div>
					
					
					@php $i++ @endphp
					@else 
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-4">
								<img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/">
							</div>
							<div class="col-md-8">
								<h3 class="text-success">
									{{ $u->name }}
								</h3>
								<br>
								@if (Auth::user()->id_decentralization == 1 )
								<div class="row">
									<div class="col-md-4">
										<button type="button" class="btn btn-success" data-toggle="modal" data-target="#setAdmin{{ $u->id_user }}">
											Quản trị
										</button>
										<div class="modal fade" id="setAdmin{{ $u->id_user }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										    <div class="modal-dialog">
										        <div class="modal-content">
										            <!-- Modal Body -->
										            
										            	<div class="modal-body">
											                <div class="alert alert-warning">
						  										<strong>Bạn có muốn cấp quyền admin cho người dùng này không?</strong>
															</div> 
											            </div>
										            
										            <!-- Modal Footer -->
										            <div class="modal-footer">
										
										            	<a href="{!! url('/setAdmin/'.$u->id_user) !!}" title=""><button type="button" class="btn btn-success">
								                            Đồng ý
								                		</button></a>
										                <button type="button" class="btn btn-default" data-dismiss="modal">
										                    Trở về
										                </button>
										            </div>
										        </div>
										    </div>
										</div>
									</div>
									<div class="col-md-4">
										<button type="button" class="btn btn-success" data-toggle="modal" data-target="#setQuestionaire{{ $u->id_user }}">
											Câu hỏi
										</button>
										
										<div class="modal fade" id="setQuestionaire{{ $u->id_user }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										    <div class="modal-dialog">
										        <div class="modal-content">
										            <!-- Modal Body -->
										            
										            	<div class="modal-body">
											                <div class="alert alert-warning">
						  										<strong>Bạn có muốn cấp quyền thêm câu hỏi cho người dùng này không?</strong>
															</div> 
											            </div>
										            
										            <!-- Modal Footer -->
										            <div class="modal-footer">
										
										            	<a href="{!! url('/setQuestionaire/'.$u->id_user) !!}" title=""> <button type="button" class="btn btn-success">
								                            Đồng ý
								                		</button></a>
										                <button type="button" class="btn btn-default" data-dismiss="modal">
										                    Trở về
										                </button>
										            </div>
										        </div>
										    </div>
										</div>
									</div>
									<div class="col-md-4">
										 
										
										<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteUser{{ $u->id_user }}">
										Câu hỏi
										</button>
										<div class="modal fade" id="deleteUser{{ $u->id_user }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										    <div class="modal-dialog">
										        <div class="modal-content">
										            <!-- Modal Body -->
										            
										            	<div class="modal-body">
											                <div class="alert alert-danger">
						  										<strong>Bạn có muốn xóa người dùng này?</strong>
															</div> 
											            </div>
										            
										            <!-- Modal Footer -->
										            <div class="modal-footer">
										
										            	<a href="{!! url('/deleteUser/'.$u->id_user) !!}" title=""><button type="button" class="btn btn-success">
								                            Đồng ý
								                		</button></a>
										                <button type="button" class="btn btn-default" data-dismiss="modal">
										                    Trở về
										                </button>
										            </div>
										        </div>
										    </div>
										</div>
									</div>
								</div>

								@endif
							</div>
						</div>
					</div>
					</br>
					@php $i++ @endphp
					@endif
			
				@endforeach	
			</div>

		</div>
	</div>
@endsection