<div class="form-group">
    <div class="form-check">
        {!! Form::checkbox($name, 'true',  isset($value) ? $value : FALSE, ['class' => 'form-check-input']) !!}
        {!!  Form::label($name, $label, ['class' => 'form-check-label']) !!}
    </div>
</div>