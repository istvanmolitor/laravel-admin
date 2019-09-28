<div class="form-group">
    <div class="form-check">
        {!! Form::checkbox($name, 'true', FALSE, ['class' => 'form-check-input']) !!}
        {!!  Form::label($name, $label, ['class' => 'form-check-label']) !!}
    </div>
</div>