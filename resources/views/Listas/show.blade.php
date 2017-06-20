@extends('main')

@section('title', '| View Post')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h1>{{ $lista->nome }}</h1>
			

			<hr>
			
			<div class="tags">
				@foreach ($lista->filmes as $filme)
					<span class="label label-default">{{ $filme->titulo }}</span>
				@endforeach
			</div>
		</div>


				<dl class="dl-horizontal">
					<label>Category:</label>
					<p>{{ $post->category->name }}</p>
				</dl>
				<hr>
					<div class="col-sm-6">
						{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

						{!! Form::close() !!}
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						{{ Html::linkRoute('listas.index', '<< ver todas as listas', array(), ['class' => 'btn btn-default btn-block btn-h1-spacing']) }}
					</div>
				</div>

			</div>
		</div>
	</div>

@endsection