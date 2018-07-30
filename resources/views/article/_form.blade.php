<div class="form-group row">
    {!! Form::label('title','Title',['class'=>'col-md-2 col-form-label text-md-right']) !!}
    <div class="col-md-10">
        {!! Form::text('title',null,['class'=>'form-control']) !!}
        @if ($errors->has('title'))
            <span class="text-danger" role="alert">
                    <strong>{{ $errors->first('title') }}</strong>
        </span>
        @endif
    </div>
</div>

<div class="form-group row">
    {!! Form::label('content','Content',['class'=>'col-md-2 col-form-label text-md-right']) !!}

    <div class="col-md-10">
        {!! Form::textarea('content',null,['class'=>'form-control']) !!}

        @if ($errors->has('content'))
            <span class="text-danger" role="alert">
                <strong>{{ $errors->first('content') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    {!! Form::label('tags','Tags',['class'=>'col-md-2 col-form-label text-md-right']) !!}

    <div class="col-md-10">
        {!! Form::text('tags',null,['class'=>'form-control']) !!}

        @if ($errors->has('tags'))
            <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('tags') }}</strong>
                                    </span>
        @endif
    </div>
</div>