@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ __('Display Articles') }}
                        @guest
                            @else
                                <a href="{{ '/articles/create' }}">
                                    <button type="button" class="btn btn-primary btn-sm float-right">Add Article
                                    </button>
                                </a>
                                @endguest
                    </div>

                    <div class="card-body">
                        @foreach($articles as $article)
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        {{ $article->title }}
                                        @guest
                                            @else
                                                @if($article->user->id == Auth::user()->id)
                                                    <button type="button" data-id="{{ $article->id }}"
                                                            data-token="{{ csrf_token() }}"
                                                            class="delete btn btn-danger btn-sm float-right">Delete
                                                    </button>
                                                    <span class="float-right"> &nbsp;</span>
                                                    <a href="{{ url('articles/'.$article->id."/edit") }}">
                                                        <button type="button"
                                                                class="btn btn-warning btn-sm float-right">Edit
                                                        </button>
                                                    </a>
                                                @endif
                                                @endguest
                                    </div>
                                    <div class="card-body">
                                        <address>
                                            {{ $article->content }}
                                        </address>
                                    </div>
                                    <div class="card-footer">
                                        {{ $article->user->name }} | Published {{ $article->created_at }}
                                        <span class="float-right"> Updated {{ $article->updated_at }}</span>
                                    </div>
                                </div>
                            </div>
                            <br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function (e) {

            $(".delete").click(function () {

                var id = $(this).data("id");
                var token = $(this).data("token");

                swal({
                        title: "Are you sure?",
                        text: "Your will not be able to recover this imaginary file!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonClass: "btn-danger",
                        confirmButtonText: "Yes, delete it!",
                        closeOnConfirm: false,
                        showLoaderOnConfirm: true
                    },
                    function (isConfirm) {

                        if (isConfirm) {
                            $.ajax(
                                {
                                    url: "articles/" + id,
                                    type: 'POST',
                                    data: {
                                        "id": id,
                                        "_method": 'DELETE',
                                        "_token": token
                                    },
                                    success: function (result) {
                                        swal("Deleted!", "Your Record is deleted.", "success");
                                        location.reload();
                                    },
                                    error: function (request, status, error) {
                                        var val = request.responseText;
                                        alert("error" + val);
                                    }
                                });
                        } else {
                            swal("Cancelled", "You have Canceled", "It's Ok");
                        }


                    });
            });
        });
    </script>
@endsection