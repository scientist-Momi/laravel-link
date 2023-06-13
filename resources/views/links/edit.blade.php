@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="row">
            <div class="col-12 card bg-white">
                <div class="card-body">
                    <h2 class="card-title">Edit link</h2>
                    <form action="/dashboard/links/{{$link->id}}" method="post">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="name">Link Name</label>
                                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                                    value="{{ $link->name}}" placeholder="My Youtube Channel">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="name">Link URL</label>
                                    <input type="text" name="link" id="link" class="form-control @error('link') is-invalid @enderror" value="{{ $link->link }}" placeholder="https://youtube.com/user/my-channel">
                                   @error('link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Update Link</button>
                                    <button type="button" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">Delete Link</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form action="/dashboard/links/{{$link->id}}" method="post" id='delete-form'>
                        @csrf
                        @method('DELETE')
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
@endsection