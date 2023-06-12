@extends('layouts.app')

@section('title-page')
    Laravel Comics | Home
@endsection

@section('content')
<main>
    <div id="jumbotron"></div>
    <div class="container-bg">
         <div class="container-card">
            <div class="current-series">CURRENT SERIES</div>

            @foreach( $comics as $elem )
                <div class="card" style="width: 15rem;">
                    <img src="{{ $elem['thumb'] }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$elem['title']}}</h5>
                    </div>
                </div>
            @endforeach  

        </div>
        <div class="d-flex justify-content-center m-4">
            <button type="button" class="btn btn-primary">LOAD MORE</button>
        </div>
    </div>
@endsection