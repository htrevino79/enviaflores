<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <?php echo e(Form::label('proveedor')); ?>

            <?php echo e(Form::text('proveedor', $proveedore->proveedor, ['class' => 'form-control' . ($errors->has('proveedor') ? ' is-invalid' : ''), 'placeholder' => 'Proveedor'])); ?>

            <?php echo $errors->first('proveedor', '<div class="invalid-feedback">:message</p>'); ?>

        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div><?php /**PATH /opt/lampp/htdocs/flores/resources/views/proveedore/form.blade.php ENDPATH**/ ?>