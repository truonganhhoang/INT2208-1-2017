@extends('header')
@section('title')
	<title>Câu hỏi</title>
@endsection

@section('body')
	<div class="row">
		@if (!$question)
			<div class="alert alert-warning">
  				<strong>Chưa có câu hỏi trong phần này</strong>
			</div> 
		@else

		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<h3 class="text-center text-success">
						{!! nl2br(e($question->question_name)) !!}
					</h3>
				</div>
			</div>
			</br>
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6">
							<button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#answer_A" id="answer_A-modal">
								{{ $question->answer_A }}
							</button> 

							<div class="modal fade" data-backdrop="static" data-keyboard="false" id="answer_A" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							    <div class="modal-dialog">
							        <div class="modal-content">
							            <!-- Modal Body -->
							            @if ('A' == $question->right_answer)
								            <div class="modal-body">
								                <div class="alert alert-success">
			  										<strong>Chính xác</strong>
												</div> 
								            </div>
							            @else
							            	<div class="modal-body">
								                <div class="alert alert-danger">
			  										<strong>Sai rồi</strong>
												</div> 
								            </div>
							            @endif
							            <!-- Modal Footer -->
							            <div class="modal-footer">
							  {{--           	{!! Form::open(['method' => 'get','url' => "list/$type"]) !!} --}}
							            	<a href="{{ url('/list') }}" title=""><button type="button" class="btn btn-default">
					                        
					                            Trở về trang chọn câu hỏi
					                		</button></a>
							                <a href="{!! url('/list/'.$type) !!}" title=""><button type="submit" class="btn btn-success" >
							                    Câu hỏi tiếp theo
							                </button></a>
							                {{-- {!! Form::close()!!} --}}
							            </div>
							        </div>
							    </div>
							</div>
						</div>
						<div class="col-md-6">
							 
							<button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#answer_B" id="answer_B-modal">
								{{ $question->answer_B }}
							</button> 

							<div class="modal fade" data-backdrop="static" data-keyboard="false" id="answer_B" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							    <div class="modal-dialog">
							        <div class="modal-content">
							            <!-- Modal Body -->
							            @if ('B' == $question->right_answer)
								            <div class="modal-body">
								                <div class="alert alert-success">
			  										<strong>Chính xác</strong>
												</div> 
								            </div>
							            @else
							            	<div class="modal-body">
								                <div class="alert alert-danger">
			  										<strong>Sai rồi</strong>
												</div> 
								            </div>
							            @endif
							            <!-- Modal Footer -->
							            <div class="modal-footer">
							                <a href="{{ url('/list') }}" title=""><button type="button" class="btn btn-default">
					                        
					                            Trở về trang chọn câu hỏi
					                		</button></a>
							                <a href="{!! url('/list/'.$type) !!}" title=""><button type="submit" class="btn btn-success" >
							                    Câu hỏi tiếp theo
							                </button></a>
							            </div>
							        </div>
							    </div>
							</div>
						</div>
					</div>
					</br>
					<div class="row">
						<div class="col-md-6">
							 
							<button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#answer_C" id="answer_C-modal">
								{{ $question->answer_C }}
							</button> 

							<div class="modal fade" data-backdrop="static" data-keyboard="false" id="answer_C" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							    <div class="modal-dialog">
							        <div class="modal-content">
							            <!-- Modal Body -->
							            @if ('C' == $question->right_answer)
								            <div class="modal-body">
								                <div class="alert alert-success">
			  										<strong>Chính xác</strong>
												</div> 
								            </div>
							            @else
							            	<div class="modal-body">
								                <div class="alert alert-danger">
			  										<strong>Sai rồi</strong>
												</div> 
								            </div>
							            @endif
							            <!-- Modal Footer -->
							            <div class="modal-footer">
							                <a href="{{ url('/list') }}" title=""><button type="button" class="btn btn-default">
					                        
					                            Trở về trang chọn câu hỏi
					                		</button></a>
							                <a href="{!! url('/list/'.$type) !!}" title=""><button type="submit" class="btn btn-success" >
							                    Câu hỏi tiếp theo
							                </button></a>
							            </div>
							        </div>
							    </div>
							</div>
						</div>
						<div class="col-md-6">
							 
							<button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#answer_D" id="answer_D-modal">
								{{ $question->answer_D }}
							</button> 

							<div class="modal fade" data-backdrop="static" data-keyboard="false" id="answer_D" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							    <div class="modal-dialog">
							        <div class="modal-content">
							            <!-- Modal Body -->
							            @if ('D' == $question->right_answer)
								            <div class="modal-body">
								                <div class="alert alert-success">
			  										<strong>Chính xác</strong>
												</div> 
								            </div>
							            @else
							            	<div class="modal-body">
								                <div class="alert alert-danger">
			  										<strong>Sai rồi</strong>
												</div> 
								            </div>
							            @endif
							            <!-- Modal Footer -->
							            <div class="modal-footer">
							                <a href="{{ url('/list') }}" title=""><button type="button" class="btn btn-default">
					                        
					                            Trở về trang chọn câu hỏi
					                		</button></a>
							                <a href="{!! url('/list/'.$type) !!}" title=""><button type="submit" class="btn btn-success" >
							                    Câu hỏi tiếp theo
							                </button></a>
							            </div>
							        </div>
							    </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endif
	</div>

@endsection