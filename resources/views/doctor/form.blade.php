
{!! Form::label('first_name', 'First Name *', ['class' => 'control-label']) !!}
<div class="form-group">
    <div class="form-line">
        {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
    </div>
</div>


{!! Form::label('last_name', 'Last Name *', ['class' => 'control-label']) !!}
<div class="form-group">
    <div class="form-line">
        {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
    </div>
</div>

{!! Form::label('email', 'Email *', ['class' => 'control-label']) !!}
<div class="form-group">

    <div class="form-line">
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
    </div>
</div>
{!! Form::label('address', 'Address', ['class' => 'control-label']) !!}
<div class="form-group">
    <div class="form-line">
        {!! Form::text('address', null, ['class' => 'form-control', 'maxlength' => 50]) !!}
    </div>
</div>
{!! Form::label('phone', 'Phone *', ['class' => 'control-label']) !!}
<div class="form-group">
    <div class="form-line">
        {!! Form::text('phone', null, ['class' => 'form-control', 'maxlength' => 20]) !!}
    </div>
</div>
{!! Form::label('mobile_number', 'Mobile *', ['class' => 'control-label']) !!}
<div class="form-group">
    <div class="form-line">
        {!! Form::text('mobile_number', null, ['class' => 'form-control', 'maxlength' => 20]) !!}
    </div>
</div>

{!! Form::label('dob', 'DOB *', ['class' => 'control-label']) !!}
<div class="form-group">
    <div class="form-line">
        {!! Form::text('dob', null, ['class' => 'form-control', 'placeholder' => 'mm/dd/yyyy']) !!}
    </div>
</div>
{!! Form::label('qualification', 'Qualification', ['class' => 'control-label']) !!}
<div class="form-group">
    <div class="form-line">
        {!! Form::text('qualification', null, ['class' => 'form-control']) !!}
    </div>
</div>
{!! Form::label('experience', 'Experience', ['class' => 'control-label']) !!}
<div class="form-group">
    <div class="form-line">
        {!! Form::text('experience', null, ['class' => 'form-control']) !!}
    </div>
</div>
{!! Form::label('speciality', 'Speciality', ['class' => 'control-label']) !!}
<div class="form-group">
    <div class="form-line">
        {!! Form::text('speciality', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="fa fa-fw fa-lock"></i></span>
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="password" name="password" required>

        @if ($errors->has('password'))
            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
        @endif
    </div>
</div>
<div class="form-group">
    <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="fa fa-fw fa-lock"></i></span>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="confirm password" required>
        @if ($errors->has('password'))
            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
        @endif
    </div>
</div>
<input type="hidden" id="role" name="role" value="2"/>
<br/>
<div class="form-group">
    <div class="col-md-10 col-md-offset-4">
        {!! Form::submit($btn, ['class' => 'btn btn-lg btn-primary']) !!}
    </div>
</div>
