@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="row">
            <div class="col-12 card bg-white">
                <div class="card-body">
                    <h2 class="card-title">Edit User Settings</h2>
                    <form action="/dashboard/settings" method="post">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="background_color">Background Color</label>
                                    <input type="text" name="background_color" id="background_color" class="form-control @error('background_color') is-invalid @enderror"
                                    value="{{ $user->background_color}}" placeholder="#ffffff">
                                    @error('background_color')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="text_color">Text Color</label>
                                    <input type="text" name="text_color" id="text_color" class="form-control @error('text_color') is-invalid @enderror" value="{{ $user->text_color }}" placeholder="#000000">
                                   @error('text_color')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Save Settings</button>
                                   
                                </div>
                            </div>
                        </div>
                    </form>

                    
                </div>
            </div>
        </div>
    </div>
@endsection