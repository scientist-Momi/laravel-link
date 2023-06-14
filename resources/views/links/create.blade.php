@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="row">
            <div class="col-12 card bg-white">
                <div class="card-body">
                    <h2 class="card-title">Create a new link</h2>
                    <form action="/dashboard/links/new" method="post">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="name">Link Name</label>
                                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name') }}" placeholder="My Youtube Channel">
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
                                    <input type="text" name="link" id="link" class="form-control @error('link') is-invalid @enderror" value="{{ old('link') }}" placeholder="https://youtube.com/user/my-channel">
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
                                    <button type="submit" class="btn btn-primary text-white">Save Link</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    
                </div>
            </div>
        </div>
    </div>
@endsection