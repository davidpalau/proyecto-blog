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
