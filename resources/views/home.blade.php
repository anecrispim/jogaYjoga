@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Você está logado!') }}
                </div>
        </div>
    </div>
    <div class="row" style="margin-top:30px;">
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('images/jogo-principal.png') }}" height="230" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Jogo principal</h5>
                    <br>
                    <a href="{{ route('score.index') }}" style="justify-content: center!important;display: flex;" class="btn btn-primary">Jogar</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('images/kill-birds.png') }}" height="230" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Kill Bird</h5>
                    <br>
                    <a href="{{ route('kill-bird.index') }}" style="justify-content: center!important;display: flex;" class="btn btn-primary">Jogar</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('images/cobra.png') }}" height="230" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Jogo da Cobrinha</h5>
                    <br>
                    <a href="{{ route('snake.index') }}" style="justify-content: center!important;display: flex;" class="btn btn-primary">Jogar</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('images/ping-pong.png') }}" height="230" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Ping-Pong</h5>
                    <br>
                    <a href="{{ route('ping_pong.index') }}" style="justify-content: center!important;display: flex;" class="btn btn-primary">Jogar</a>
                </div>
            </div>
        </div>
    </div>
        
</div>
@endsection
