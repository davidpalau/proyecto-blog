@extends('adminlte::page')

@section('title', 'Proyecto blog')

@section('content_header')
    <h1>Editar categoría</h1>

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
            {!! Form::model($tag, ['method' => 'put', 'route' => ['admin.tags.update', $tag]]) !!}
            <div class="form-group">
                @include('admin.tags.partials.form')
            {!! Form::submit('Actualizar categoría', ['class' => 'btn btn-primary']) !!}
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
