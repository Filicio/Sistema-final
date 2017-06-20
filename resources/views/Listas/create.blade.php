 @extends('layouts.app')

@section('content')
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">

            <h1 class="page-header">Adição de Filmes nas Listas </h1>

            <div class="col-md-6">
                <form action="{{ route('listas.store')}}" method="post">

                    {{csrf_field()}}                        
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input id="nome" class="form-control" type="text" name="nome" placeholder="Nome da Lista">

</div>

                       <div class="row">
                       <label for="filmes">Filmes</label>
                       <div class="input-field">
				<select class="form-control select2-multi" name="filmes[]" multiple="multiple">
					@foreach($filmes as $filme)
						<option value='{{ $filme->id }}'>{{ $filme->titulo }}</option>
					@endforeach

</select>
</div>
</div>
                   
                   
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>

</body>
@endsection
@section('scripts')

	{!! Html::script('js/parsley.min.js') !!}
	{!! Html::script('js/select2.min.js') !!}

	<script type="text/javascript">
		$('.select2-multi').select2();
	</script>

@endsection