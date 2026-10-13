<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>segundo pavilhao</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IM+Fell+Great+Primer+SC&family=Irish+Grover&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <h1>2º pavilhão</h1>
        </div>
        <nav>
        <p class="titulo">Selecione uma sala abaixo</p>
        </nav>

        <div class="pavilhao-todo">
        <div class="menu-salas">
            <button class="tab-btn active" onclick="mudarSala(event, 'sala1')"> Sala 1 </button>
            <button class="tab-btn" onclick="mudarSala(event, 'sala2')"> Sala 2 </button>
            <button class="tab-btn" onclick="mudarSala(event, 'sala3')"> Sala 3 </button>
            <button class="tab-btn" onclick="mudarSala(event, 'sala4')"> Sala 4 </button>
            <button class="tab-btn" onclick="mudarSala(event, 'sala5')"> Sala 5 </button>
            <button class="tab-btn" onclick="mudarSala(event, 'sala6')"> Sala 6 </button>
            <button class="tab-btn" onclick="mudarSala(event, 'sala7')"> Sala 7 </button>
        </div>

        <div id="sala1" class="conteudo-sala" style="display: block;">
                <p class="aviso"> ⚠ Ar-condicionado 002003 não funciona</p>
                    <div class="visual">
                 <img src="OIP.jpg" alt="visual" class="visual">
                </div>
            
            </div>
        <div id="sala2" class="conteudo-sala" style="display: none;">
            <h3>SALA 2</h3>
            <p> 8 lampadas
                2 ventiladores Ventisol
                1 TV
            </p>
        </div>
        <div id="sala3" class="conteudo-sala" style="display: none;">
            <h3>SALA 3</h3>
            <p>Estado do ar, tomada etc</p>
        </div>
        </div>
</header>
    
<script src="script.js"></script>
</body>
</html>