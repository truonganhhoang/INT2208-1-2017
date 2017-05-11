@extends('header')
@section('title')
	<title>Câu hỏi</title>
@endsection

@section('body')
	<div class="row">

		@if ($question=='[]')
			<div class="alert alert-warning">
  				<strong>Chưa có câu hỏi trong phần này</strong>
			</div> 
		@else

		<div class="col-md-12">
			<h3 class="text-center text-success">
				Danh sách câu hỏi
			</h3>
			@foreach ($question as $q)
			<div class="row">
				<div class="col-md-12">
					<h3>
						{!! $q->question_name !!}
					</h3>
					<ol type="A">
						<li>
							{{ $q->answer_A }}
						</li>
						<li>
							{{ $q->answer_B }}
						</li>
						<li>
							{{ $q->answer_C }}
						</li>
						<li>
							{{ $q->answer_D }}
						</li>
					</ol> 
					{!! Form::open(['method' => 'post','url' => "delete/$q->id_question"]) !!}
					<button type="submit" class="btn btn-danger">
						Xóa câu hỏi
					</button>
					{!! Form::close()!!}
				</div>
			</div>
			@endforeach
		</div>
		@endif
	</div>
@endsection