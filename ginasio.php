<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ginásio</title>
    <link rel="stylesheet" href="style.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&display=swap" rel="stylesheet">
</head>
<body>
 <header>
        <div class="container">
            <h1>Ginásio</h1>
        </div>
        <nav>
        <p class="titulo">Selecione um espaço abaixo</p>
        </nav>
</header>

<div class="principal">
        <div class="menu-salas">
            <button class="tab-btn active" onclick="mudarSala(event, 'quadra')"> Quadra </button>
            <button class="tab-btn onclick" onclick="mudarSala(event, 'sala_lutas')"> Sala de Lutas </button>
            <button class="tab-btn" onclick="mudarSala(event, 'sala_coordenacao')"> Sala da coordenação</button>
            <button class="tab-btn" onclick="mudarSala(event, 'banheiro_m')"> Banheiro masculino </button>
            <button class="tab-btn" onclick="mudarSala(event, 'banheiro_f')"> Banheiro feminino </button>
            <button class="tab-btn" onclick="mudarSala(event, 'sala_mat')"> Sala materiais esportivos </button>
            <button class="tab-btn" onclick="mudarSala(event, 'academia')"> Academia </button>
            <button class="tab-btn" onclick="mudarSala(event, 'sala_dança')"> Sala de dança </button>
        </div>

         <div id="quadra" class="conteudo-sala" style="display: block;">
            <div class="interno-flex">
                <div class="imagem">
                <img src="OIP.jpg" alt="visual" class="visual">
                </div>
                 
                 <div class="ir-forms">
                <a href="" class="opcoes-form">Fazer alocações</a> <br>
                <a href="" class="opcoes-form">Registrar manutenção</a> <br>
                <a href="mostrardados.php?sala=10" class="opcoes-form">Ver dados</a>
                 </div>
                </div>
            </div>

</div>
</body>
</head>
<body>
    


<script src="script.js"></script>
</body>
</html>