<?php
session_start(); // inicia a sessão

// verifica se o usuário está logado
$usuarioLogado = isset($_SESSION['usuario_id']);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/AtlasArcaico/css/continentes/africa.css">
    <script src="/AtlasArcaico/js/continentes/africa.js"></script>
    <title>Atlas Arcaico</title>
</head>

<body>
    <nav class="nav"> <!-- barra de navegação principal -->
        <div class="nav-logo">
            <p>
                <a href="/AtlasArcaico/php/index/index.php">
                    <img src="/AtlasArcaico/imagens/logo/atlasarcaico_logo.png" alt="Atlas Arcaico">
                </a>
            </p>
        </div>
        <div class="nav-menu" id="navMenu">
            <ul>
                <li><a href="/AtlasArcaico/php/atlas_arcaico/atlas_arcaico.php" class="link active">Atlas Arcaico</a></li>
                <li><a href="/AtlasArcaico/php/sobre/sobre.php" class="link">Sobre</a></li>
                <li><a href="/AtlasArcaico/php/forum/forum.php" class="link">Fórum</a></li>
            </ul>
        </div>
        <div class="nav-button">
            <?php if ($usuarioLogado): ?>
                <!-- Exibe apenas o botão Perfil se o usuário estiver logado -->
                <a href="perfil.php" class="btn white-btn">Perfil</a>
            <?php else: ?>
                <!-- Exibe os botões Entrar e Cadastre-se se o usuário não estiver logado -->
                <a href="/AtlasArcaico/php/autenticacao/usuario.php" class="btn white-btn" id="entrarBtn">Entrar</a>
                <a href="/AtlasArcaico/php/autenticacao/usuario.php#cadastro" class="btn" id="cadastroBtn">Cadastre-se</a>
            <?php endif; ?>
        </div>
        <div class="search-container">
    <input type="text" id="searchInput" placeholder="Digite o nome do animal..." oninput="searchSlide()">
</div>
    </nav>
    <div class="slider-container"> <!-- container para os slides -->
        <div class="slider"> <!-- área que contém os slides -->
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/africa/animais/afrovenator_africa.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                <h3>Afrovenator</h3>
<p>Nome: Afrovenator (caçador africano).
    <br><br> Pronúncia: Af-ro-vee-nay-tor.
    
    <br><br> Classificação: Chordata, Reptilia, Dinosauria, Saurischia, Theropoda, Tetanurae, Megalosauridae.
    <br><br> Nomeado por: Paul Sereno e outros - 1994.
    <br><br> Dieta: Carnívoro.
    <br><br> Espécies: A. abakensis.
    <br><br> Tamanho: 7-8 metros.
    <br><br> Localizações: África, Níger, Abaka, Formação de Tiouraren.
    <br><br> Período: Hauteriviano a Barremiano do Cretáceo (aproximadamente 133 a 125 milhões de anos atrás).
    <br><br> Representação fóssil: Um esqueleto quase completo, com partes faltando.
    <br><br> Extinção: Durante a extinção em massa do Cretáceo.
    <br><br><br><br>
</p>

                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/africa/animais/jobaria_africa.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                <h3>Jobaria</h3>
<p>Nome: Jobaria (Jobar - em referência a uma criatura da mitologia africana).
    <br><br> Pronúncia: Jo-ba-re-ah.
    
    <br><br> Classificação: Chordata, Reptilia, Dinosauria, Saurischia, Sauropodomorpha, Sauropoda.
    <br><br> Nomeado por: P.C. Sereno e outros - 1999.
    <br><br> Dieta: Herbívoro.
    <br><br> Espécies: J. tiguidensis (tipo).
    <br><br> Tamanho: Cerca de 21 metros.
    <br><br> Localizações: Níger, Abaka, Formação de Tiouraren.
    <br><br> Período: Hauteriviano a Barremiano do Cretáceo, mas estudos sugerem os estágios Bathoniano a Oxfordiano do Jurássico médio.
    <br><br> Representação fóssil: Dois espécimes individuais.
    <br><br> Extinção: Durante a extinção do final do Cretáceo.
    <br><br><br><br>
</p>


                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/africa/animais/kaprosuchus_africa.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                <h3>Kaprosuchus</h3>
<p>Nome: Kaprosuchus (crocodilo javali).
    <br><br> Pronúncia: Kap-roe-soo-kuss.
    
    <br><br> Classificação: Chordata, Reptilia, Crocodylomorpha, Mahajangasuchidae.
    <br><br> Nomeado por: Paul Sereno e Hans Larsson - 2009.
    <br><br> Dieta: Carnívoro.
    <br><br> Espécies: K. saharicus.
    <br><br> Tamanho: Crânio holótipo com 507 mm e mandíbulas inferiores com 603 mm. Estimado originalmente em 6 metros, mas comparações sugerem cerca de 3,3 metros de comprimento total.
    <br><br> Localizações: África, Níger, Formação de Echkar.
    <br><br> Período: Cenomaniano do Cretáceo.
    <br><br> Representação fóssil: Crânio quase completo e mandíbulas inferiores.
    <br><br> Extinção: Durante a extinção do final do Cretáceo.
    <br><br><br>
</p>


                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/africa/animais/malawisaurus_africa.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                <h3>Malawisaurus</h3>
<p>Nome: Malawisaurus (lagarto de Malawi).
    <br><br> Pronúncia: Ma-la-wee-sore-us.
    
    <br><br> Classificação: Chordata, Reptilia, Dinosauria, Saurischia, Sauropodomorpha, Sauropoda, Titanosauria, Titanosauroidea, Lithostrotia.
    <br><br> Dieta: Herbívoro.
    <br><br> Espécies: M. dixeyi.
    <br><br> Tamanho: Aproximadamente 16 metros.
    <br><br> Localizações: África, Malawi - Formação Dinosaur Beds.
    <br><br> Período: Aptiano do Cretáceo.
    <br><br> Representação fóssil: Vários espécimes de restos parciais, incluindo material parcial do crânio.
    <br><br> Extinção: Durante a extinção do final do Cretáceo.
    <br><br><br><br><br><br><br>
</p>


                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/africa/animais/nigersaurus_africa.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                <h3>Nigersaurus</h3>
<p>Nome: Nigersaurus (lagarto de Níger).
    <br><br> Pronúncia: Nee-jer-sore-us.
    
    <br><br> Classificação: Saurischia, Sauropodomorpha, Sauropoda, Diplodocidae, Rebbachisauridae.
    <br><br> Nomeado por: Sereno e outros - 1999.
    <br><br> Dieta: Herbívoro.
    <br><br> Espécies: N. taqueti.
    <br><br> Tamanho: Aproximadamente 9 metros.
    <br><br> Localizações: África, Níger, Formação Elrhaz.
    <br><br> Período: Aptiano ou Albiano do Cretáceo.
    <br><br> Representação fóssil: Restos de vários indivíduos e alguns filhotes.
    <br><br> Extinção: Durante a extinção do final do Cretáceo.
    <br><br><br><br><br><br>
</p>


                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/africa/animais/ouranosaurus_africa.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                <h3>Ouranosaurus</h3>
<p>Nome: Ouranosaurus (lagarto bravo).
    <br><br> Pronúncia: Or-an-o-sor-us.
    
    <br><br> Classificação: Chordata, Reptilia, Dinosauria, Ornithischia, Ornithopoda, Styracosterna, Hadrosauriformes.
    <br><br> Nomeado por: Philippe Taquet - 1976.
    <br><br> Dieta: Herbívoro.
    <br><br> Espécies: O. nigeriensis.
    <br><br> Tamanho: 7 a 8 metros de comprimento, crânio de 67 cm.
    <br><br> Localizações: África, Níger - Formação Echkar. Espécimes conhecidos de outras partes da África.
    <br><br> Período: Aptiano a Cenomaniano do Cretáceo.
    <br><br> Representação fóssil: 2 indivíduos quase completos.
    <br><br> Extinção: Durante a extinção do final do Cretáceo.
    <br><br><br><br>
</p>


                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/africa/animais/pakasuchus_africa.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                <h3>Pakasuchus</h3>
<p>Nome: Pakasuchus (crocodilo gato).
    <br><br> Pronúncia: Pak-ah-soo-kus.
    
    <br><br> Classificação: Chordata, Reptilia, Crocodylomorpha, Notosuchia, Ziphosuchia.
    <br><br> Nomeado por: P. M. O'Connor, J. J. W. Sertich, N. J. Stevens, E. M. Roberts, M. D. Gottfried, T. L. Hieronymus, Z. A. Jinnah, R. Ridgely, S. E. Ngasala & J. Temba - 2010.
    <br><br> Dieta: Insetívoro/Carnívoro?.
    <br><br> Espécies: P. kapilimai.
    <br><br> Tamanho: Cerca de 50 centímetros de comprimento.
    <br><br> Localizações: Tanzânia - Formação Galula.
    <br><br> Período: Aptiano do Cretáceo.
    <br><br> Representação fóssil: Indivíduo quase completo.
    <br><br> Extinção: Durante o final do Cretáceo.
    <br><br><br><br><br>
</p>


<a href="smilodon_norte.php">
    <button>Veja mais</button>
</a>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/africa/animais/spinosaurus_africa.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                <h3>Spinosaurus</h3>
<p>Nome: Spinosaurus (lagarto espinho), Sigilmassasaurus? 
    <br><br> Pronúncia: Spine-oh-sore-us.
    
    <br><br> Classificação: Chordata, Reptilia, Dinosauria, Saurischia, Theropoda, Megalosauroidea, Spinosauridae, Spinosaurinae.
    <br><br> Nomeado por: Ernst Stromer - 1915.
    <br><br> Dieta: Piscívoro/Carnívoro.
    <br><br> Espécies: S. aegyptiacus.
    <br><br> Tamanho: Entre 12,6 e 18 metros de comprimento total, com crânio de 1,5 a 1,75 metros.
    <br><br> Localizações: Norte da África, Egito - Formação Bahariya, Marrocos - Camadas Kem Kem.
    <br><br> Período: Albiano a Cenomaniano do Cretáceo.
    <br><br> Representação fóssil: Pelo menos seis espécimes parciais de crânio, mandíbula e restos pós-cranianos. Dentes são comuns.
    <br><br> Extinção: Durante o Cretáceo.
    <br>
</p>


<a href="tyrannosaurus_norte.php">
    <button>Veja mais</button>
</a>
                </div>
            </div>
        </div>
        <button class="prev" onclick="moveSlider(-1)">&#10094;</button>
        <!-- botão para mover o slide para a esquerda -->
        <button class="next" onclick="moveSlider(1)">&#10095;</button> <!-- botão para mover o slide para a direita -->
    </div>


</body>

</html>