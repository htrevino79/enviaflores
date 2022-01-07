<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('proveedor') }}
            {{ Form::text('proveedor', $proveedore->proveedor, ['class' => 'form-control' . ($errors->has('proveedor') ? ' is-invalid' : ''), 'placeholder' => 'Proveedor']) }}
            {!! $errors->first('proveedor', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>