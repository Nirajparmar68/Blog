@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Display Articles') }}
                        <span class="float-right"><a href="{{ '/articles/create' }}">Add Article</a></span>
                    </div>

                    <div class="card-body">
                        @foreach($articles as $article)
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        {{ $article->title }}
                                        <span class="float-right">
                                            <a href="{{ url('articles/'.$article->id."/edit") }}">Edit</a>
                                        </span>
                                    </div>
                                    <div class="card-body">
                                        {{ $article->content }}
                                        <br/>Article was created on <span>{{ $article->created_at }}</span>
                                        <br/>Article was updated on <span>{{ $article->updated_at }}</span>
                                        <br/><span>{{ $article->user->name }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
