@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 offset-md-2">
                        <h5>Enter URL address for getting shortener link.</h5>
                    </div>
                </div>
                <form class="form" method="post" action="{{ route('store') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6 offset-md-2">
                            <input type="url" class="form-control" id="url" name="url" placeholder="Enter URL" required>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-outline-primary mb-2">Shorter</button>
                        </div>
                    </div>
                </form>
                @if (session('code') || $errors->has('code'))
                    <div class="row">
                        <div class="col-md-6 offset-md-2">
                            <h5 class="text-danger">
                                You short link is <a href="{{ url(session('code')) }}"
                                                     target="_blank">{{ url(session('code')) }}</a>
                            </h5>
                        </div>
                    </div>
                @endif
                @if ($errors->any())
                    <div class="row">
                        <div class="col-md-6 offset-md-2">
                            <small id="url-error" class="form-text text-danger">
                                {{ $errors->first() }}
                            </small>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
