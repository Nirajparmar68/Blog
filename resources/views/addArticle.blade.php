@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Article</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('postArticle') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Title</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Content</label>

                                <div class="col-md-6">
                                   <textarea id="content" type="text" class="form-control" name="content" required>{{ old('content') }}</textarea>
                                    @if ($errors->has('content'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Publish
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
