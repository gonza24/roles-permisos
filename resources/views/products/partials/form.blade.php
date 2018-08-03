<div class="form-group">
	{!! Form::text('name', 'Nombre del producto'); !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::text('description', 'Descriptio del producto'); !!}
	{!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']); !!}
</div>