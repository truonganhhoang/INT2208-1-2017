@extends('header')
@section('title')
	<title>Thêm câu hỏi</title>
@endsection

@section('body')
	</br>
	</br>
	</br>
	<div class="row">
		<h3 class="text-center text-success">
			Thêm câu hỏi
		</h3>
		<div class="col-md-12">
			
			{!! Form::open(['url' => 'addQuestion/add']) !!}

				<div class="form-group">
					{!! Form::label('id_type', 'Loại câu hỏi:') !!}
					{{-- {!! Form::select('id_type', null, $type) !!} --}}
					<select class="form-control" id="id_type" name="id_type[]">
				        @foreach ($type as $t)
				        	<option value="{{ $t->id_type }}">{{ $t->type }}</option>
				        @endforeach
				    </select>
				</div>

				<div class="form-group{{ $errors->has('question_name') ? ' has-error' : '' }}">
					{!! Form::label('question_name', 'Câu hỏi:') !!}
					{!! Form::textarea('question_name', $value = null, ['class' => 'form-control']) !!}
					@if ($errors->has('question_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('question_name') }}</strong>
                        </span>
                    @endif
				</div>

				<div class="form-group{{ $errors->has('answer_A') ? ' has-error' : '' }}">
					{!! Form::label('answer_A', 'Đáp án A:') !!}
					{!! Form::text('answer_A', $value = null, ['class' => 'form-control']) !!}
					@if ($errors->has('answer_A'))
                        <span class="help-block">
                            <strong>{{ $errors->first('answer_A') }}</strong>
                        </span>
                    @endif
				</div>

				<div class="form-group{{ $errors->has('answer_B') ? ' has-error' : '' }}">
					{!! Form::label('answer_B', 'Đáp án B:') !!}
					{!! Form::text('answer_B', $value = null, ['class' => 'form-control']) !!}
					@if ($errors->has('answer_B'))
                        <span class="help-block">
                            <strong>{{ $errors->first('answer_B') }}</strong>
                        </span>
                    @endif
				</div>
				<div class="form-group{{ $errors->has('answer_C') ? ' has-error' : '' }}">
					{!! Form::label('answer_C', 'Đáp án C:') !!}
					{!! Form::text('answer_C', $value = null, ['class' => 'form-control']) !!}
					@if ($errors->has('answer_C'))
                        <span class="help-block">
                            <strong>{{ $errors->first('answer_C') }}</strong>
                        </span>
                    @endif
				</div>	
				<div class="form-group{{ $errors->has('answer_D') ? ' has-error' : '' }}">
					{!! Form::label('answer_D', 'Đáp án D:') !!}
					{!! Form::text('answer_D', $value = null, ['class' => 'form-control']) !!}
					@if ($errors->has('answer_D'))
                        <span class="help-block">
                            <strong>{{ $errors->first('answer_D') }}</strong>
                        </span>
                    @endif
				</div>
				
				<div class="form-group{{ $errors->has('right_answer') ? ' has-error' : '' }}">
					<label for="right_answer">
						Đáp án đúng
					</label>
					<select class="form-control" id="right_answer" name="right_answer[]">
				        <option value="A">A</option>
				        <option value="B">B</option>
				        <option value="C">C</option>
				        <option value="D">D</option>
				    </select>
				    @if ($errors->has('right_answer'))
                        <span class="help-block">
                            <strong>{{ $errors->first('right_answer') }}</strong>
                        </span>
                    @endif
				</div>
				
				<button type="submit" class="btn btn-success">
					Lưu câu hỏi
				</button>
			{!! Form::close() !!}
		</div>
	</div>

@endsection