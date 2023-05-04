@extends('adminlte::page')

@section('title', 'Proyecto blog')

@section('content_header')
    <h1>Crear nueva categoría</h1>

@stop

@section('content')
    <div class="card-body">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.categories.store']) !!}
            <div class="form-group">
                {!! Form::label('Name', 'Nombre',) !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' =>'Ingrese el nombre de la nueva categoría', 'id' => 'name']) !!}
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('Slug', 'Slug',) !!}
                {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' =>'Ingrese el slug de la nueva categoría', 'id' => 'slug', 'readonly']) !!}
                @error('slug')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>
            {!! Form::submit('Crear categoría', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('js')
<script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.js')}}"></script>
<script>
    $(document).ready( function() {
  $("#name").stringToSlug({
    setEvents: 'keyup keydown blur',
    getPut: '#slug',
    space: '-'
  });
});
</script>
@endsection
