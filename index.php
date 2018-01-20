<!DOCTYPE html>
<html lang="pt-br">   
    <head>
        <meta charset="UTF-8">
        <title>Me Theme by W3Schools - Desafio 30 dias/ 30 sites</title>
        <meta name="viewport" content="width=device-widht, initial-scale=1.0">
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:400,500,700" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
         <!-- Semantica-->
        <header>
            <h1 class="fontzero">Me Theme by W3Schools - Desafio 30 dias/ 30 sites</h1>
        </header>
         <!-- Fim Semantica-->
        
         <!-- Menu de Navegação-->
        <nav class="navbar navbar-ligth">
            <h1 class="fontzero">Menu de Navegação</h1>
            <header class="container">
                <div class="navbar-header">
                    <button type="button" class="btn btn-outline-dark" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                        Home</button>

                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav justify-content-end">
                        <li><a href="#">WHO</a></li>
                        <li><a href="#">WHAT</a></li>
                        <li><a href="#">WHERE</a></li>
                    </ul>
                </div>
            </header>
        </nav>
          <!-- Fim menu de Navegação-->
         
         
         <!-- Meu Nome-->
        <article class="container-fluid bg-1 text-center">
            <h3>My name is Erik</h3>
            <img src="img/erik.jpg.jpg" class="rounded-circle img img-fluid margin" title="erik" alt="erik">
            <p class="tagline h3">I am a future web developer</p>

        </article>
          <!-- Fim Meu nome-->

         <!-- Quem eu sou-->
        <article class="container-fluid bg-2 text-center">
            <h3>Who I am?</h3>
            <p class="tagline">I am a student of the Internet Systems course, I have accepted the challenge of 30dias30sites, to improve my knowledge and stay in the news, I am very excited to see the results of my studies!</p>
            <a href="https://www.facebook.com/erik.fernando.96" target="_blank" rel="nofollow" class="facebook"><i class="fa fa-facebook fa-3x" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/erikfernando7/" target="_blank" rel="nofollow" class="instagram"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a>
            <a href="https://twitter.com/ErikPassos7" target="_blank" rel="nofollow" class="twitter"><i class="fa fa-twitter fa-3x" aria-hidden="true"></i></a>
            <a href="https://www.linkedin.com/in/erik-passos-297336110/" target="_blank" rel="nofollow" class="linkedin"><i class="fa fa-linkedin fa-3x" aria-hidden="true"></i></a>

        </article>
            <!-- Fim Quem eu sou-->
           
           
           
         <!-- Onde me encontrar-->
        <article class="container-fluid bg-3 text-center">
            <h3>Onde me encontrar</h3>
            <div class="row">
                <div class="col-sm-6">
                    <p class="tagline">he Municipality of Salvador includes, among other international organizations, the Common Market of Cities (Mercocities) and the Union of Luso-Afro-American-Asian Capital Cities. The international relations of the city by the mayor's office through the Salvador Cidade Global Office - which was preceded by the Municipal Office of the FIFA World Cup 2014 (ECOPA), by the International Relations Office (ARI), created by law on December 29 2008), and by the Extraordinary Secretariat for International Relations (SECRI). As part of Unesco's programs, UNESCO has also been a member of UNESCO's Creative Cities Network in the music category ("City of Music") since December 2015, and the Organization of World Heritage Cities (OWHC) since its founding in Morocco in 1993.</p>
                       <!-- API google maps-->
                    <div id="map" class="img-fluid"></div>
                    <script>
                        function initMap() {
                            var uluru = {lat: -12.94935626, lng: -38.48452806};
                            var map = new google.maps.Map(document.getElementById('map'), {
                                zoom: 11,
                                center: uluru
                            });
                            var marker = new google.maps.Marker({
                                position: uluru,
                                map: map
                            });
                        }
                    </script>
                     <!-- Fim google maps-->
                </div>
                
                <div class="col-sm-6 ssa_p">
                    <p class="tagline">Salvador, founded as São Salvador da Bahia de Todos os Santos, is a Brazilian municipality, capital of the state of Bahia, located in the Metropolitan Mesorregion of Salvador and Microregion of Salvador. Located in the Zona da Mata in the Northeastern Region of Brazil, Salvador is notable throughout the country for its gastronomy, music and architecture, also internationally recognized. The African influence in many cultural aspects of the city makes it the center of Afro-Brazilian culture. First seat of the Portuguese colonial administration of Brazil, the city is one of the oldest in America and one of the first planned cities, still in the Renaissance period.</p>
                    <img src="img/salvador.jpg" class="img-fluid ssa" title="cidade salvador" alt="salvador">
                </div>  
            </div>
        </article>
          <!-- Fim onde me encontrar-->

           <!-- Portifólio-->
        <article class="container-fluid bg-1 text-center">
            <h3>Portifólio</h3>
            <i class="fa fa-cog fa-spin fa-5x fa-fw"></i>
            <span class="sr-only">Loading...</span>
            <p class="tagline h3">Em Construção</h3>
        </article>
          <!-- Fim Portifólio-->


        <!-- Footer-->   
        <footer class="container-fluid bg-4 text-center">
            
            <h3>Tema Desenvolvido Por<a href="https://www.linkedin.com/in/erik-passos-297336110/">   Erik Passos</a></h3>
            <p class=" tagline  pull-center">Copyright © Erik Passos. All rights reserved.</p>

        </div>
    </footer>
    <!-- Fim do Footer-->

    <script async defer
            accesskey=""src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3T5q57hA7HaZrxqISEklSdHftdYt84aI&callback=initMap">
    </script>
</body>
</html>
