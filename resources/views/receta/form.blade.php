<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $receta->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('paciente') }}
            {{ Form::text('paciente', $receta->paciente, ['class' => 'form-control' . ($errors->has('paciente') ? ' is-invalid' : ''), 'placeholder' => 'Paciente']) }}
            {!! $errors->first('paciente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('medico_id') }}
            {{ Form::text('medico_id', $receta->medico_id, ['class' => 'form-control' . ($errors->has('medico_id') ? ' is-invalid' : ''), 'placeholder' => 'Medico Id']) }}
            {!! $errors->first('medico_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>