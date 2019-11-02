<div class="form-group">
    <div class="custom-control custom-switch">
        {!! Form::checkbox($name, 'true',  isset($value) ? $value : FALSE, ['class' => 'custom-control-input']) !!}
        {!!  Form::label($name, $label, ['class' => 'custom-control-label']) !!}
        @include('admin::form.field_error', [
            'name' => $name
        ])
    </div>
</div>