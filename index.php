<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>svream</title>
    <link rel="stylesheet" href="index.css">
    <link rel="icon" href="icons/faviocon.ico ">
    <style>
        * {
            margin: 0;
        }

        section {
            width: 1200px;
        }

        @media (max-width: 1200px) {
            section {
                width: 100px;
            }
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<header>
    <div class="content_header container_img">
        <img src="Logo_Streamer_Ousado_verde_Limão_e_Preto-removebg-preview.png">
    </div>
    <div class="content_header container_content">
        <h1>BIBLIOTECA</h1>
         <div class="dropdown">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    JOGOS
                </button>
                 <ul class="dropdown-menu">
                    <a href="games1/bambu.html"><li><button class="dropdown-item" type="button">Bambustriker</button></li></a>
                   <a href="game2/game2.html"> <li><button class="dropdown-item" type="button">Bublekid</button></li></a>
                   <a href="game3/game3.html"> <li><button class="dropdown-item" type="button">Explosion race</button></li>
                    <a href="games4/game4.html"><li><button class="dropdown-item" type="button"> Speedbird</button></li></a>
                   <a href="games5/game5.html"> <li><button class="dropdown-item" type="button">Bombsword</button></li></a>
                    <a href="https://store.steampowered.com/app/367520/Hollow_Knight/"><li><button class="dropdown-item" type="button">Hollow Knight</button></li></a>
                </ul> 
            </div>
        </div>
    </div> 
    <div class="content_header container_hour">
        <div id="day"></div>
        <div id="clock"></div>
    </div>

</header>

<body>

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
              <a href="games1/bambu.html">  <img src="bambustriker.jpg" class="d-block w-100" alt="..."></a>
            </div>
            <div class="carousel-item">
                <a href="game2/game2.html"><img src="bannergame-bublekid.png" class="d-block w-100" alt="..."></a>
            </div>
            <div class="carousel-item">
                <a href="game3/game3.html"><img src="explosion race.jpg" class="d-block w-100" alt="..."></a>
            </div>
            <div class="carousel-item">
               <a href="games4/game4.html"><img src="speedbird.png" class="d-block w-100" alt="..."></a>
            </div>
            <div class="carousel-item">
             <a href="games5/game5.html"><img src="WhatsApp Image 2024-06-10 at 20.42.07.jpeg" class="d-block w-100" alt="..."></a>
            </div>
            <div class="carousel-item">
                <a href="https://store.steampowered.com/app/367520/Hollow_Knight/"><img src="capsule_616x353.jpg" class="d-block w-100" alt="..."></a>
             </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4" style="margin-right: 0px;">
        <div class="col" style="padding-right: 0px;">
            <a href="games1/bambu.html"><div class="card">
                <img src="bambustriker.jpg" class="card-img-top" alt="...">
                <div class="card-body"></a>
                    <h5 class="card-title">Bambustriker</h5>
                    <p class="card-text">Com precisão e habilidade, ele divide o bambu em dois, deixando apenas um sussurro no ar. <em> Desenvolvido por Kassio Jose Pedrosa</em></p>
                    <a href="games1/bambu.html"><button type="button" class="btn btn-success">JOGAR</button></a>
                </div>
            </div>
        </div>
        <div class="col" style="padding-right: 0px;">
            <div class="card">
              <a href="game2/game2.html">  <img src="bannergame-bublekid.png" class="card-img-top" alt="...">
                <div class="card-body"></a>
                    <h5 class="card-title">Bublekid</h5>
                    <p class="card-text">Seu brilho suave ilumina o caminho enquanto ele se aproxima de seu lar, cada vez mais perto de encontrar a paz. <em>Desenvolvido por Gabriel De Barros</em></p>
                   <a href="game2/game2.html"> <button type="button" class="btn btn-success">JOGAR</button></a>
                </div>
            </div>
        </div>
        <div class="col" style="padding-right: 0px;">
         <a href="game3/game3.html"> <div class="card">
                <img src="explosion race.jpg" class="card-img-top" alt="...">
                <div class="card-body"></a>
                    <h5 class="card-title">Explosion race</h5>
                    <p class="card-text">Barris vermelhos diante de seus olhos, um teste de habilidade e reflexos. Não bata. <Em>Desenvolvido por Pedro Rorato</em></p>
                    <a href="game3.html"><button type="button" class="btn btn-success">JOGAR</button></a>
                </div>
            </div>
        </div>
        <div class="col" style="padding-right: 0px;">
            <div class="card">
             <a href="games4/game4.html"><img src="speedbird.png" class="card-img-top" alt="...">
                <div class="card-body"></a>
                    <h5 class="card-title">Speedbird</h5>
                    <p class="card-text">Cada inimigo evitado é uma vitória, cada voo uma jornada de liberdade e sobrevivência. <em>Desenvolvido por Samuel Ernandes</em></p>
                 <a href="games4/game4.html"><button type="button" class="btn btn-success">JOGAR</button></a> 
                </div>
            </div>
        </div>
        <div class="col" style="padding-right: 0px;">
            <div class="card">
               <a href="games5/game5.html"> <img src="WhatsApp Image 2024-06-10 at 20.42.07.jpeg" class="card-img-top" alt="...">
                <div class="card-body"></a>
                    <h5 class="card-title">Bombsword</h5>
                    <p class="card-text">O guerreiro luta bravamente, sua determinação inabalável, até que o último fantasma é banido de seu mundo. <em>Desenvolvido por Luis Miguel Oliveira</em></p>
                <a href="games5/game5.html"><button type="button" class="btn btn-success">JOGAR</button></a> 
                </div>
            </div>
        </div>
        <div class="col" style="padding-right: 0px;">
            <div class="card">
              <a href="https://store.steampowered.com/app/367520/Hollow_Knight/"> <img src="capsule_616x353.jpg" class="card-img-top" alt="...">
                <div class="card-body"></a> 
                    <h5 class="card-title">Hollow Knight</h5>
                    <p class="card-text">No reino subterrâneo de Hallownest, um cavaleiro solitário embarca em uma jornada sombria, enfrentando criaturas bizarras e descobrindo segredos antigos.</p>
                   <a href="https://store.steampowered.com/app/367520/Hollow_Knight/"> <button type="button" class="btn btn-success">JOGAR</button></a>
                </div>
            </div>
        </div>
    </div>


    <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

 <footer>
    
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Endereço de email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Nós nunca iremos compartilhar seu email</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Lembrar de mim</label>
        </div> 
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
     <a>Desenvolvido por Pedro Rorato</a>   
    
    </footer> 
</body>


</html>