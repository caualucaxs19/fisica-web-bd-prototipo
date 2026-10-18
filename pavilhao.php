<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>segundo pavilhao</title>
    <link rel="stylesheet" href="style.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <h1>2º Pavilhão</h1>
        </div>
        <nav>
        <p class="titulo">Selecione uma sala abaixo</p>
        </nav>
</header>

<body>
    <div class="principal">
        <div class="menu-salas">
            <button class="tab-btn active" onclick="mudarSala(event, 'sala1')"> Sala 1 </button>
            <button class="tab-btn" onclick="mudarSala(event, 'sala2')"> Sala 2 </button>
            <button class="tab-btn" onclick="mudarSala(event, 'sala3')"> Sala 3 </button>
            <button class="tab-btn" onclick="mudarSala(event, 'sala4')"> Sala 4 </button>
            <button class="tab-btn" onclick="mudarSala(event, 'sala5')"> Sala 5 </button>
            <button class="tab-btn" onclick="mudarSala(event, 'sala6')"> Sala 6 </button>
            <button class="tab-btn" onclick="mudarSala(event, 'sala7')"> Sala 7 </button>
            <button class="tab-btn" onclick="mudarSala(event, 'sala8')"> Sala 8 </button>
        </div>

        <div id="sala1" class="conteudo-sala" style="display: block;">
            <div class="interno-flex">
                <div class="imagem">
                <img src="OIP.jpg" alt="visual" class="visual">
                </div>
                 
                 <div class="ir-forms">
                <a href="" class="opcoes-form">Fazer alocações</a> <br>
                <a href="" class="opcoes-form">Registrar manutenção</a> <br>
                <a href="mostrardados.php?sala=1" class="opcoes-form">Ver dados</a>
                 </div>
                 
                
                </div>
            
            </div>
        <div id="sala2" class="conteudo-sala" style="display: none;">
            <div class="interno-flex">
                <div class="imagem">
                <img src="OIP.jpg" alt="visual" class="visual">
                </div>
                 
                 <div class="ir-forms">
                <a href="" class="opcoes-form">Fazer alocações</a> <br>
                <a href="" class="opcoes-form">Registrar manutenção</a> <br>
                <a href="mostrardados.php?sala=2" class="opcoes-form">Ver dados</a>
                 </div>
                 
                
                </div>
        
        </div>
        <div id="sala3" class="conteudo-sala" style="display: none;">
            <div class="interno-flex">
                <div class="imagem">
                <img src="OIP.jpg" alt="visual" class="visual">
                </div>
                 
                 <div class="ir-forms">
                <a href="" class="opcoes-form">Fazer alocações</a> <br>
                <a href="" class="opcoes-form">Registrar manutenção</a> <br>
                <a href="mostrardados.php?sala=3" class="opcoes-form">Ver dados</a>
                 </div>
                 
                
                </div>
        </div>

        <div id="sala4" class="conteudo-sala" style="display: none;">
            <div class="interno-flex">
                <div class="imagem">
                <img src="OIP.jpg" alt="visual" class="visual">
                </div>
                 
                 <div class="ir-forms">
                <a href="" class="opcoes-form">Fazer alocações</a> <br>
                <a href="" class="opcoes-form">Registrar manutenção</a> <br>
                <a href="mostrardados.php?sala=4" class="opcoes-form">Ver dados</a>
                 </div>
                 
                
                </div>
        </div>
<div id="sala5" class="conteudo-sala" style="display: none;">
            <div class="interno-flex">
                <div class="imagem">
                <img src="OIP.jpg" alt="visual" class="visual">
                </div>
                 
                 <div class="ir-forms">
                <a href="" class="opcoes-form">Fazer alocações</a> <br>
                <a href="" class="opcoes-form">Registrar manutenção</a> <br>
                <a href="mostrardados.php?sala=5" class="opcoes-form">Ver dados</a>
                 </div>
                 
                
                </div>
        </div>
        <div id="sala6" class="conteudo-sala" style="display: none;">
            <div class="interno-flex">
                <div class="imagem">
                <img src="OIP.jpg" alt="visual" class="visual">
                </div>
                 
                 <div class="ir-forms">
                <a href="" class="opcoes-form">Fazer alocações</a> <br>
                <a href="" class="opcoes-form">Registrar manutenção</a> <br>
                <a href="mostrardados.php?sala=6" class="opcoes-form">Ver dados</a>
                 </div>
                 
                
                </div>
        </div>

        <div id="sala7" class="conteudo-sala" style="display: none;">
            <div class="interno-flex">
                <div class="imagem">
                <img src="OIP.jpg" alt="visual" class="visual">
                </div>
                 
                 <div class="ir-forms">
                <a href="" class="opcoes-form">Fazer alocações</a> <br>
                <a href="" class="opcoes-form">Registrar manutenção</a> <br>
                <a href="mostrardados.php?sala=7" class="opcoes-form">Ver dados</a>
                 </div>
                 
                
                </div>
        </div>

        <div id="sala8" class="conteudo-sala" style="display: none;">
            <div class="interno-flex">
                <div class="imagem">
                <img src="OIP.jpg" alt="visual" class="visual">
                </div>
                 
                 <div class="ir-forms">
                <a href="" class="opcoes-form">Fazer alocações</a> <br>
                <a href="" class="opcoes-form">Registrar manutenção</a> <br>
                <a href="mostrardados.php?sala=8" class="opcoes-form">Ver dados</a>
                 </div>
                 
                
                </div>
        </div>
        </div>
    </body>
    
<script src="script.js"></script>
</body>
</html>