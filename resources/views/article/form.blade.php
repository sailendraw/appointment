{!! Form::label('article_name', 'Article Name *', ['class' => 'control-label']) !!}
<div class="form-group">
    <div class="form-line">
        {!! Form::text('article_name', null, ['class' => 'form-control']) !!}
    </div>
</div>

{!! Form::label('keyword', 'Keyword *', ['class' => 'control-label']) !!}
<div class="form-group">
    <div class="form-line">
        {!! Form::text('keyword', null, ['class' => 'form-control']) !!}
    </div>
</div>

{!! Form::label('description', 'Description *', ['class' => 'control-label']) !!}
<div class="form-group">

    <div class="form-line">
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>
</div>
<br/>
{!! Form::label('status', 'Article Publish Status *', ['class' => 'control-label']) !!}
<div class="custom-control custom-radio">

    <label class="publish radio-inline" >{{ Form::radio('publish', 1, true, ['class' => 'custom-control-input']) }}Publish</label>
    <label class="publish radio-inline">{{ Form::radio('publish', 0, true, ['class' => 'custom-control-input']) }}Unpublish</label>
</div>
<br/>
<div class="form-group">
    <div class="col-md-10 col-md-offset-4">
        {!! Form::submit($btn, ['class' => 'btn btn-lg btn-primary']) !!}
    </div>
</div>
