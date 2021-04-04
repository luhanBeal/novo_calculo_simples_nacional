@extends('layouts.basic')

@section('titulo', 'Home')

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
                <p>Preencha a calculadora seguindo os passos...<p>
                <form>
                    <label>
                        <input type="text" placeholder="sal12" class="borda-branca">
                    </label>
                    <br>
                    <label>
                        <input type="text" placeholder="sal" class="borda-branca">
                    </label>
                    <br>
                    <label>
                        <input type="text" placeholder="..." class="borda-branca">
                    </label>
                    <br>
                    <label>
                        <select class="borda-branca">
                            <option value="">AnexoI</option>
                            <option value="">AnexoII</option>
                            <option value="">AnexoIII</option>
                            <option value="">AnexoIV</option>
                            <option value="">AnexoV</option>
                        </select>
                    </label>
                    <br>
                    <label>
                        <textarea class="borda-branca">temp</textarea>
                    </label>
                    <br>
                    <button type="submit" class="borda-branca">Calcular</button>
                </form>
            </div>
        </div>
    </div>
@endsection
