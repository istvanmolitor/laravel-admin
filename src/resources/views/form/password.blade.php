<div class="form-group">
    {!!  Form::label($name, $label, ['class' => 'control-label']) !!}
    {!! Form::password($name, ['class' => 'form-control']) !!}
    @include('admin::form.field_error', [
        'name' => $name
    ])
</div>