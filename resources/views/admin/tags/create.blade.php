@extends('adminlte::page')

@section('title', 'Proyecto blog')

@section('content_header')
    <h1>Crear etiqueta</h1>
@stop
@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>
                {{ session('info') }}
            </strong>
        </div>
    @endif
    <div class="card-body">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.tags.store']) !!}
            <div class="form-group">
                {!! Form::label('Name', 'Nombre') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' =>'Ingrese el nombre de la nueva etiqueta', 'id' => 'name']) !!}
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('Slug', 'Slug',) !!}
                {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' =>'Ingrese el slug de la nueva etiqueta', 'id' => 'slug', 'readonly']) !!}
                @error('slug')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>

            {!! Form::submit('Crear etiqueta', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
@endsection
