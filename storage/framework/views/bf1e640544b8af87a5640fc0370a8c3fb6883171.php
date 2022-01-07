<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <?php echo e(Form::label('producto')); ?>

            <?php echo e(Form::text('producto', $producto->producto, ['class' => 'form-control' . ($errors->has('producto') ? ' is-invalid' : ''), 'placeholder' => 'Producto'])); ?>

            <?php echo $errors->first('producto', '<div class="invalid-feedback">:message</p>'); ?>

        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div><?php /**PATH /opt/lampp/htdocs/flores/resources/views/producto/form.blade.php ENDPATH**/ ?>