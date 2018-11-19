<!-- Requisito Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('requisito_id', 'REQUISITO') !!}
    <span class="text-danger"> (*)  </span>
    {!! Form::number('requisito_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'DESCRIPCION') !!}
    <span class="text-danger"> (*)  </span>
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('requisitoItems.index') !!}" class="btn btn-default">Cancel</a>
</div>
