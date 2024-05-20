
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\estiloHome.css"/>

    <title>Guia JK</title>
</head>
<body>
<nav>
    
        <p id="guia">Guia </p><h1 id="jk">JK</h1>
        
       <div class="dropdown dropdown1">
       <img id="imgPerfil"  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAA0ZJREFUSEvllk2IHFUQx///6p5NVARj9LQXySFIdro3aKKC4EdIyJJcFD8w4klBoiKJehBBt1+vITkEox5MCIIXJeIHiIiGKKJgLtEVs9MzEsWb4kGiSMAFk+4q0z2zOLM7s92zI+TguzX96v+rqldV7xGXaPEScTE0+N37zDvzI0JV3Vw4rfL1hg1I7n+P2TBBDAWOw/QeM74KYHwR5GfCnowS/8Oq8MpgF2QvA9hbInzIJd4zVeCVwHH9wjajfNoWtG9Ie87E/zb/oqY3mvEAwCL1VN0StWpflMErgV2gnwG2FUAClU2uxfPdwm7CxiA6CyAw8HicyI6RwQ4mCPQvAKtBPOEa3uF+oi7MHofhNQDnkMgaB+py8NKIo7qFpM4VSYbtjBP/k36CUZDuIPhxp9InXIvfjwTeN2njqeovxfnRHowa/tv9BOMw3WXGY4WDvozH3/HXkcC5sQuy3wFcDWBg1boge+limp+G4axreteOfMYd8IsAnjcgE9rdUcP/qKe4gvQuA98n4BkQxYk389+Ar7PVuFJbANa1O8pOgpw1oEZYAPC2DugHqISLq76fE6XFtWDUKbK38pYZEE0iIrum55g7WLoqg4uUw4SBPqbG7aDdcjH9KYyzInbcGnK0rIW6vRkKXBrGEBsqgfdfb2vPj2W3QnkzyE2AruplyN8wm4XYKWTeSdfiH2U+LAt2G+0qpHoQxCN5G5eJdf4biKM2L8/GP/HcIJuBYi5M74XyCIhruoznAcunWM+sBjAGcBLA5V17f6PZ7qjpf1C5qmcmbLOKnuqK8g2BvPJCgiZB6ydkMLo6AlL3AHh4IXozuSluMr9AetaSiDs3TQJgPYB5oUxNN/hVxTQX22YCu12h+UzPM3AGKpOLe3spOMgOAXgqFyDs0SjxXx8G+m/fZ7tJHOl8Lxm1S8BRkM0TuMyMJ+KmTK0EumDjAv0csC155lziXTGwj4u2qenZIlqzB6Km/84o4KiePkTyzULDkzXuNP9c0OuJ2IV2A0zbTxrRqWiudmIkcNcdLZBwOmFeO8XqBdcv3AFK+71keqdr1r4cBeyW0esFFwMj3VjAfP90d2pW4kB7APXXqzqNVsJd1ub/B/4Hxio/Ljwd+MgAAAAASUVORK5CYII="/></a>
        <div class="dropdown-content">


        <div class="btn"><p id="pf"><a href="Telalogin.php">Login</a></p></div>
        <div class="btn"><p id="pf"><a href="TelaCadastro.php">Cadastrar-se</a></p></div>
        <div class="btn"><p id="pf">Editar conta</a></p></div>
        <div class="btn"><p id="pf">Sair da conta</a></p></div>
        <div onclick="abrirModal()" class="btn" href=""><p id="pf">Excluir conta</a></p></div>


        <section id="secdd">
        <p id="pi">Entrar como <br>ADM</p>
        </section>

    </div>
</div>
    <section id="link">
    

        <a href="#">Teste Vocacional</a>
        <a href="#sec2">Mapa Escolar</a>
        <a href="#sec3">Sobre os Cursos</a>
        <a href="#sec4">Sobre a Escola</a>
        </section>
    
    </nav>
    
    <section id="sec1">
        <br>
        <br>
        <p>#TESTEVOCACIONAL</p>
        <h2 id="tv">Teste Vocacional</h2>
        <p>descubra em qual curso técnico você se encaixa! :D</p>
        <p>vamos lá?</p>

        <input id="tvbt" type="submit" value="Descobrir">
    </section>


    </section>
    <section id="sec2">
    <p>#MAPAESCOLAR</p>
        <h2 id="mp">Mapa da Escola</h2>
        <p>localização dos laboratórios e pontos importantes!!</p>
        <p>deseja ver?</p>

        <input id="mpbt" type="submit" value="Visualizar">

    </section>
    <section id="sec3">
    <p>#SOBRECURSOS</p>
        <h2 id="sc">Nossos Cursos</h2>
        <p>saiba mais sobre os nossos cursos profissionalizantes ;P</p>
        <p>Reforce seus conhecimentos!</p>
        <a href="TelaCu.html">
        <input id="scbt" type="submit" value="Saber">
        </a> 

    </section>
    <section id="sec4">
        <p>#SOBREESCOLA</p>
        <h2 id="se">Sobre a Escola</h2>
        <p>Saiba mais sobre o Juscelino Kubitschek</p>
        <p>conheça a história</p>

        
        <input id="sebt" type="submit" value="Saber">
 


        <div class="janela-modal" id="janela-modal">
            <div class="modal">
                <button class="fechar" id="fechar">X</button>
                <h1 id="cortxt">EXCLUIR CONTA</h1>
                

                        
                    <label for="email"></label><br>
                    <input type="text" name="email" placeholder="Insira o seu E-mail"><img id="imgEmail" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAfhJREFUSEvtlrtrFUEUxn9fUFMqBAsRH/+ASBoRGxvtfIAIImihjQRCEGxMLDRo0EJQtEgXEAURRPDRaWGnYJFCLENCIFiIhTbiAz/34GzYu9ybvY/l3iZTDTsz3++cb87sjBhQ04C4rIP75nyD1bYvAJeB3TVHsARclzSX666CbR8E3tYMLMvtk/QhPhbBU8BMmjldcwBXk96kpFtl8DUgn3BW0qM64LbPAA/zhCQFpyHjIjjGZoGLkn51E4DtTcBdYKywfrodcMyfB45KWukEbns78BIYLa2rBIfNYVG0r8BpSa/bgds+DDwGRtL8olZTcOzvf/8l2Z4AbmcFtxH4m/Z/JoaaBWA7CvVKtjwKcyjr/wYuSbpvO19TDQ5x2/uBF8DWBHsDnJT0rQi3vRl4ChxK3z8DJyS9TzprgleLKzLOhW1vA54BEUS0ZeCIpI9JdA/wCtiZxgN2TNKXgkbn4CS+AbgDjCexn1kA51M//kbDqX8v2fun5Eh34ELkp4AHBVA+9AM4J+lJi/3vDZyy35sdk+fArgRZyI7dcUmfWlV9VXE13eMWGWwBwtao9glJ39c6arWB2znPte5xp8Ceq7pbYLvgflyLU5JuRkD9fggckPSuAZyOSlxhk8COXu0trV8EbjR9+tQMqpRbf1dXWlTXhIFZ/Q90J+gf8FHAbQAAAABJRU5ErkJggg=="/><br>
                    <label for="password"></label><br>
                    <input type="password" name="senha" placeholder="Insira sua Senha"> 
                    <img id="imgSenha" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAfdJREFUSEvtlkFr1FAUhc9JpmPSgSmTl1QRFFEQt1bdKdRF3dUfIIJbcaHQhaC4EroUdSUuRfoDBEEEQWldFoo7FwoKhZZJXuyibYI1uZqhhUHTyZuO0EUnu8c793z33vdyE2KfHu4TF32DRaS2qfVZ27LOFUlnWbY46vtLJLN+ijAGiwhTre8JeZfAWDeEwI8ceDiq1BNTuDE4iaKXIK/3Mv6T0GNHqRkTuBE4ieNrEJnbNvwuIjO/6vX5Yl3b2pok8AjA8WJNkSnH999Vwc3AWn8FcLJo6c+RkdPNZjPqNl5vt4/Ytv0FQAPAR1epSwOD07W1U5JlhSkg8sD1/dky0ySOZyFyH0DuZNkYx8fXK46ld26bcXyRIgudNpLTjue9LotIw/CqWNarYi/P8wuNIFgcCJyE4SQs633HJM8vu0HwobRiQ91ObOUZHxzwRhhO0LavUOQMgBvbLXoB4NsuZ3eiWyfkZyHfNlqtpTJ9aatTre8IYDyFel4i8qbjec//1pSCkyhqgwyq3kXD/WVXqWNmYK3F0NRI5ir1T4HlFQ/BRg3dXTRsdWful87d4eU6CJdrFcDhAQvdCV9xlTpqNDLTKLot5NP/ASZ5y/G8Z0bgQrQRhuctcgrkob0kIGRaI9/UW61Pxp/FvYD6jan89enX0FT/GwfD2h9sTumdAAAAAElFTkSuQmCC"/>
                    <br>
                    <p ><a href="https://www.seusite.com">Esqueceu sua senha?</a></p>
                    <input type="submit" name="submit" value="Login">



                

            </div>
        </div>

        <script src="script.js"></script>
</body>
</html>




