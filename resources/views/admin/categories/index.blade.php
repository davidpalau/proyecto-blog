@extends('adminlte::page')

@section('title', 'Proyecto blog')

@section('content_header')
    <h1>Lista de categorías</h1>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-success">
        <strong>
            {{ session('info') }}
        </strong>
    </div>
@endif
    <div class="card">
        <div class="card-header">
            <a class="btn btn-secondary"
            href="{{ route('admin.categories.create') }}">Crear categoría</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td width="10px">
                            <a class="btn btn-primary btn-sm"
                            href="{{ route('admin.categories.edit',$category )}}">Editar</a>
                        </td>
                        <form action="{{  route('admin.categories.destroy' , $category ) }}" method="POST">
                            @csrf
                        @method('delete')
                        <td width="10px">
                        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                    </td>
                    </form>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
