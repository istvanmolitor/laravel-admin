<div class="form-group">
    {!!  Form::label($name, $label, ['class' => 'control-label']) !!}
    {!! Form::textarea($name, isset($value) ? $value : '', ['class' => 'form-control']) !!}
</div>