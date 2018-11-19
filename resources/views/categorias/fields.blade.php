<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'NOMBRE') !!}
    <span class="text-danger"> (*)  </span>
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Nivel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nivel', 'NIVEL') !!}
    <span class="text-danger"> (*)  </span>
    {!! Form::text('nivel', null , ['class' => 'form-control']) !!}
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('categorias.index') !!}" class="btn btn-default">Cancel</a>
</div>
