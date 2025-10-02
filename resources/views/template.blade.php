<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="{{ asset('css/style_home.css') }}">
<body>
    <header>
        <div id="cabecalho">
            <p id="titulo">
                MÜRAL
            </p>
            <div id="foto_perfil_e_search_box">
                <div id="search_box">
                    <form action="" method="get">
                        <input type="text" placeholder="Pesquisar..." id="search_input">     
                    </form>
                    <img src="{{ asset('imagens/search.png') }}" alt="" id="search_png">
                </div>
            </div>
        </div>
    </header>
    <aside id="barra_lateral">
        <div>
            <p class="botao_barra_lateral">
                <img src="{{ asset('imagens/casa.png') }}" alt="" class="botao_barra_lateral_A">
            </p>        
        </div>
        <div>
            <p class="botao_barra_lateral">
                <img src="{{ asset('imagens/casa.png') }} public/imagens/search.png" alt="" class="botao_barra_lateral_A">
            </p>        
        </div>
        <div>
            <p class="botao_barra_lateral">
               <img src="{{ asset('imagens/mensagem.png') }}" alt="" class="botao_barra_lateral_A">
            </p>        
        </div>
        <div>
            <p class="botao_barra_lateral">
                <img src="{{ asset('imagens/sino_notificacao.png') }}" alt="" class="botao_barra_lateral_A">
            </p>        
        </div>
        <div>
            <p class="botao_barra_lateral">
                <img src="{{ asset('imagens/perfil.png') }}" alt="" class="botao_barra_lateral_A">
            </p>        
        </div>
        
        <div id="florzinha">
            <img src="{{ asset('imagens/flor.png') }}" alt="">
        </div>
    </aside>
    <section>
        <div id="listagem">
            @yield('content')
        </div>
    </section>


    <section>
            <div id="botao_criar_postagem">
                <button>@yield('criar')</button>       
            </div>
    </section>
</body>
</html>