{{--Corpo HTML montado na blade basic--}}
@extends('layouts.basic')
{{-- Título passado como parametro para a blade basic--}}
@section('titulo', 'Home')
{{-- Conteudo passado para a blade basic --}}
@section('conteudo')
    <div class="conteudo-destaque">

        <div class="esquerda">
            <div class="informacoes">
                <h1>Nova Calculadora Simples Nacional</h1>
                <p>...<p>
                <div class="chamada">
                    <img src="{{ asset('img/check.png') }}">
                    <span class="texto-branco">Lorem ipsum</span>
                </div>
                <div class="chamada">
                    <img src="{{ asset('img/check.png') }}">
                    <span class="texto-branco">Loremmmmmmm</span>
                </div>
            </div>

            <div class="video">
                <img src="{{ asset('img/player_video.jpg') }}">
            </div>
        </div>

        <div class="direita">
            <div class="contato">
                <h1>Calcule aqui</h1>
                <p>Preencha a calculadora com números decimais sem vígula ou ponto.<p>
{{--                Incluir o FORM da calculadora --}}
                @component('layouts.calculadora')
                @endcomponent

                @if($erro == 1)
                    <p class="erro">Complete todos os campos corretamente.</p>
                @elseif($erro==0)
                    <p>Fatura do mes: {{ $fatura_mes ?? '' }}</p>
                    <p>RBT12: {{ $rbt12 ?? '' }}</p>
                @endif
            </div>
        </div>
    </div>
@endsection
