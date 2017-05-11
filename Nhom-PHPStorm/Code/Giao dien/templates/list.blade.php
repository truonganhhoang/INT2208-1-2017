@extends('header')
@section('title')
	<title>Danh sách</title>
@endsection

@section('body')
	@php $qcount = 0 @endphp
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<h3 class="text-center text-success">
						Danh sách các bài học.
					</h3>
				</div>
			</div>
			@foreach ($count as $c)
				<div class="row">
					@foreach($type as $t)
						@if( $c->level == $t->level )
							<div class="col-md-@php echo (12/$c->count) @endphp">
								<a href="{{ url ('/list/'.$t->id_type) }}" id="question">
									<img alt="Logo" src="{{ $t->path }}" class="img-circle" style="display: block; margin-left: auto; margin-right: auto;">
								</a>
								<p class="text-center">
									<a href="{{ url ('/list/'.$t->id_type) }}" id="question">{{ $t->type }}</a>
								</p>
								@if (Auth::user()->id_decentralization!=3)
								<p class="text-center">
									<a href="{{ url ('/questionList/'.$t->id_type) }}" id="question">Xem câu hỏi</a>
								</p>
								@endif
							</div>
						@endif
					@endforeach
				</div>
			@endforeach
		</div>
	</div>   
@endsection