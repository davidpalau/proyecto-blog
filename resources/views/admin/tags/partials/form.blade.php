<div class="form-group">
    {!! Form::label('Name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'maxlength' => 50,  'placeholder' =>'Ingrese el nombre de la nueva etiqueta', 'id' => 'name']) !!}
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
<div class="form-group">
    {!! Form::label('summary', 'Descripción :') !!}
    {!! Form::textarea('summary', null, ['class'=>'form-control', 'maxlength' => 255]) !!} <!-- Limita el campo a 255 caracteres -->

    @error('summary')
    <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
