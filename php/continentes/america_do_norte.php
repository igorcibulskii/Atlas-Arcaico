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
    <link rel="stylesheet" href="/AtlasArcaico/css/continentes/america_do_norte.css">
    <script src="/AtlasArcaico/js/continentes/america_do_norte.js"></script>
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
                <a href="/AtlasArcaico/php/perfil/perfil.php" class="btn white-btn">Perfil</a>
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
                    <img src="/AtlasArcaico/imagens/america_do_norte/animais/ancientbision_norte.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                    <h3>Ancient Bison</h3>
                    <p>Nome: Ancient Bison (bisão antigo).
                        <br><br> Pronúncia: An-shent Bai-son.
                
                        <br><br> Classificação: Chordata, Mammalia, Artiodactyla, Bovidae.
                        <br><br> Espécies: A. magnificens.
                        <br><br> Dieta: Herbívoro.
                        <br><br> Tamanho: Cerca de 2 metros de altura no ombro.
                        <br><br> Localizações conhecidas: América do Norte.
                        <br><br> Período: Pleistoceno (aproximadamente 2,6 milhões a 10 mil anos atrás).
                        <br><br> Representação fóssil: Muitos espécimes são conhecidos, incluindo crânios e esqueletos bem preservados.
                        <br><br> Extinção: Provavelmente devido a mudanças climáticas no final do Pleistoceno, combinadas com a caça por humanos pré-históricos.
                        <br><br><br><br>
                    </p>
                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/america_do_norte/animais/ankylosaurus_norte.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                <h3>Ankylosaurus</h3> <!-- título do slide -->
<p>Nome: Ankylosaurus (Lagarto fundido).
    <br>
    <br>
    Pronúncia: An-kie-lo-sore-us.
    <br>
    <br>
    Classificação: Chordata, Reptilia, Dinosauria, Ornithischia, Thyreophora, Ankylosauridae.
    <br>
    <br>
    Espécies: A. magniventris.
    <br>
    <br>
    Dieta: Herbívoro.
    <br>
    <br>
    Tamanho: Aproximadamente 6,25 metros de comprimento.
    <br>
    <br>
    Localizações conhecidas: Canadá e EUA.
    <br>
    <br>
    Período: Maastrichtiano do Cretáceo (68-66 milhões de anos atrás).
    <br>
    <br>
    Representação fóssil: Crânio, dentes, osteodermas, vértebras e cauda.
    <br>
    <br>
    Extinção: Evento de extinção do Cretáceo-Paleógeno.
    <br><br><br><br><br><br>
</p>


                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/america_do_norte/animais/camelops_norte.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                <h3>Camelops</h3>
<p>Nome: Camelops (camelo extinto).
    <br><br> Pronúncia: Ka-me-lo-ps.
    
    <br><br> Classificação: Chordata, Mammalia, Artiodactyla, Camelidae.
    <br><br> Espécies: C. hesternus.
    <br><br> Dieta: Herbívoro.
    <br><br> Tamanho: Cerca de 2,2 metros de altura no ombro.
    <br><br> Localizações conhecidas: América do Norte.
    <br><br> Período: Pleistoceno (aproximadamente 2,6 milhões a 10 mil anos atrás).
    <br><br> Representação fóssil: Muitos espécimes são conhecidos, incluindo esqueletos quase completos.
    <br><br> Extinção: Provavelmente devido a mudanças climáticas no final do Pleistoceno, que afetaram os habitats e a disponibilidade de alimentos, além da caça por humanos pré-históricos.
    <br><br><br><br>
</p>

                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/america_do_norte/animais/canisedwardii_norte.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                <h3>Canis Edwardii</h3>
<p>Nome: Canis edwardii (lobo de Edward).
    <br><br> Pronúncia: Cay-niss ed-ward-ee.
    
    <br><br> Classificação: Chordata, Mammalia, Carnivora, Canidae.
    <br><br> Nomeado por: Gazin - 1942.
    <br><br> Dieta: Carnívoro.
    <br><br> Tamanho: Até 35 quilos.
    <br><br> Localizações conhecidas: América do Norte.
    <br><br> Período: Do Zancleano do Plioceno até o Ioniano do Pleistoceno (aproximadamente 5,3 milhões a 781 mil anos atrás).
    <br><br> Representação fóssil: Muitos espécimes são conhecidos.
    <br><br> Extinção: Provavelmente devido a mudanças climáticas e competição com outras espécies de Canis, como lobos cinzentos, além de alterações na cadeia alimentar.
    <br><br><br>
</p>

                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/america_do_norte/animais/diabloceratops_norte.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                <h3>Diabloceratops</h3> <!-- título do slide -->
<p>Nome: Diabloceratops (Rosto com chifres de diabo).
    <br>
    <br>
    Pronúncia: Dee-ab-low-seh-rah-tops.
    <br>
    <br>
    Classificação: Chordata, Reptilia, Dinosauria, Ornithischia, Ceratopsidae, Centrosaurinae.
    <br>
    <br>
    Espécies: D. eatoni.
    <br>
    <br>
    Dieta: Herbívoro.
    <br>
    <br>
    Tamanho: Estimado entre 5 e 6 metros de comprimento.
    <br>
    <br>
    Localizações conhecidas: EUA, Utah.
    <br>
    <br>
    Período: Campaniano do Cretáceo (80-73 milhões de anos atrás).
    <br>
    <br>
    Representação fóssil: Crânios e mandíbulas parciais.
    <br>
    <br>
    Extinção: Mudanças climáticas e competição com outros herbívoros.
    <br><br><br><br><br><br>
</p>


                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/america_do_norte/animais/edmontosaurus_norte.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                <h3>Edmontosaurus</h3> <!-- título do slide -->
<p>Nome: Edmontosaurus (Lagarto de Edmonton).
    <br>
    <br>
    Pronúncia: Ed-mon-toe-sore-us.
    <br>
    <br>
    Classificação: Chordata, Reptilia, Dinosauria, Ornithischia, Hadrosauridae.
    <br>
    <br>
    Espécies: E. regalis, E. annectens.
    <br>
    <br>
    Dieta: Herbívoro.
    <br>
    <br>
    Tamanho: Até 12 metros de comprimento e 4 toneladas de peso.
    <br>
    <br>
    Localizações conhecidas: EUA, Canadá.
    <br>
    <br>
    Período: Maastrichtiano do Cretáceo (72-66 milhões de anos atrás).
    <br>
    <br>
    Representação fóssil: Crânios, esqueletos completos e até pele fossilizada.
    <br>
    <br>
    Extinção: Impacto de asteroide e mudanças climáticas no final do Cretáceo.
    <br><br><br><br><br>
</p>



                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/america_do_norte/animais/hesperornis_norte.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                <h3>Hesperornis</h3> <!-- título do slide -->
<p>Nome: Hesperornis (Ave do oeste).
    <br>
    <br>
    Pronúncia: Hes-per-or-nis.
    <br>
    <br>
    Classificação: Chordata, Aves, Hesperornithiformes, Hesperornithidae.
    <br>
    <br>
    Espécies: H. regalis.
    <br>
    <br>
    Dieta: Piscívoro (alimentava-se de peixes).
    <br>
    <br>
    Tamanho: Cerca de 1,8 metros de comprimento.
    <br>
    <br>
    Localizações conhecidas: América do Norte.
    <br>
    <br>
    Período: Campaniano do Cretáceo (aproximadamente 83-70 milhões de anos atrás).
    <br>
    <br>
    Representação fóssil: Esqueletos quase completos e mandíbulas com dentes.
    <br>
    <br>
    Extinção: Eventos do final do Cretáceo e mudanças ambientais.
    <br><br><br><br><br><br>
</p>




                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/america_do_norte/animais/mastodon_norte.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                <h3>Mastodon</h3>
<p>Nome: Mastodon (mastodonte).
    <br><br> Pronúncia: Mas-to-don.
    
    <br><br> Classificação: Chordata, Mammalia, Proboscidea, Mammutidae.
    <br><br> Espécies: M. americanum (principal espécie conhecida).
    <br><br> Dieta: Herbívoro.
    <br><br> Tamanho: Cerca de 2,5 a 3 metros de altura no ombro.
    <br><br> Localizações conhecidas: América do Norte.
    <br><br> Período: Do Mioceno Superior até o Pleistoceno (aproximadamente 23 milhões a 10 mil anos atrás).
    <br><br> Representação fóssil: Muitos fósseis completos foram encontrados, incluindo dentes característicos usados para identificar a espécie.
    <br><br> Extinção: Provavelmente devido a mudanças climáticas no final do Pleistoceno, combinadas com caça intensiva por humanos pré-históricos e alterações nos habitats naturais.
    <br><br>
</p>

                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/america_do_norte/animais/megalonyx_norte.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                <h3>Megalonyx</h3>
<p>Nome: Megalonyx (garra gigante).
    <br><br> Pronúncia: Meg-ah-lon-ix.
    
    <br><br> Classificação: Chordata, Mammalia, Xenarthra, Pilosa, Megalonychidae.
    <br><br> Nomeado por: Richard Harlan - 1825.
    <br><br> Dieta: Herbívoro, possivelmente onívoro.
    <br><br> Tamanho: Até 3 metros de comprimento.
    <br><br> Localizações conhecidas: América do Norte e América Central.
    <br><br> Período: Do Tortoniano do Mioceno até o Tarantiano do Pleistoceno (aproximadamente 11 milhões a 11 mil anos atrás).
    <br><br> Representação fóssil: Muitos espécimes são conhecidos, com restos bem preservados encontrados em cavernas e depósitos sedimentares.
    <br><br> Extinção: Provavelmente devido a mudanças climáticas no final do Pleistoceno, redução de recursos alimentares e possível caça por humanos pré-históricos.
    <br>
</p>

                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/america_do_norte/animais/miracinonyx_norte.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                <h3>Miracinonyx</h3>
<p>Nome: Miracinonyx (guepardo incrível).
    <br><br> Pronúncia: Mih-rah-sin-oh-nix.
    
    <br><br> Classificação: Chordata, Mammalia, Carnivora, Felidae.
    <br><br> Dieta: Carnívoro.
    <br><br> Tamanho: Cerca de 85 centímetros de altura no ombro.
    <br><br> Localizações conhecidas: América do Norte.
    <br><br> Período: Pleistoceno (aproximadamente 2,6 milhões a 10 mil anos atrás).
    <br><br> Representação fóssil: Muitos espécimes são conhecidos, embora geralmente fragmentários.
    <br><br> Extinção: Provavelmente devido a mudanças climáticas no final do Pleistoceno, que alteraram os habitats e reduziram as presas disponíveis, além de possível competição com outros predadores emergentes.
    <br><br><br><br><br><br>
</p>

                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/america_do_norte/animais/pachycephalosaurus_norte.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                <h3>Pachycephalosaurus</h3> <!-- título do slide -->
<p>Nome: Pachycephalosaurus (Lagarto de cabeça espessa).
    <br>
    <br>
    Pronúncia: Pak-ee-sef-ah-low-sore-us.
    <br>
    <br>
    Classificação: Chordata, Reptilia, Dinosauria, Ornithischia, Pachycephalosauridae, Pachycephalosaurinae, Pachycephalosaurini.
    <br>
    <br>
    Espécies: P. wyomingensis.
    <br>
    <br>
    Dieta: Herbívoro/Onívoro (possivelmente).
    <br>
    <br>
    Tamanho: Aproximadamente 4,5 metros de comprimento, baseado em comparações com gêneros mais completos.
    <br>
    <br>
    Localizações conhecidas: Estados Unidos.
    <br>
    <br>
    Período: Maastrichtiano do Cretáceo (aproximadamente 70-66 milhões de anos atrás).
    <br>
    <br>
    Representação fóssil: Restos de crânios.
    <br>
    <br>
    Extinção: Parte do evento de extinção em massa do final do Cretáceo.
    <br><br><br>
</p>


                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/america_do_norte/animais/smilodon_norte.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                <h3>Smilodon</h3>
<p>Nome: Smilodon (dente de sabre).
    <br><br> Pronúncia: Smai-lo-don.
    
    <br><br> Classificação: Chordata, Mammalia, Carnivora, Felidae, Machairodontinae.
    <br><br> Espécies: S. fatalis, S. gracilis, S. populator.
    <br><br> Dieta: Carnívoro.
    <br><br> Tamanho: Até 1,2 metros de altura no ombro e peso variando de 160 a 400 quilos, dependendo da espécie.
    <br><br> Localizações conhecidas: Américas do Norte e do Sul.
    <br><br> Período: Do Pleistoceno até o início do Holoceno (aproximadamente 2,5 milhões a 10 mil anos atrás).
    <br><br> Representação fóssil: Muitos fósseis bem preservados foram encontrados, principalmente em La Brea Tar Pits, na Califórnia.
    <br><br> Extinção: Provavelmente devido à diminuição das presas de grande porte no final do Pleistoceno, combinada com mudanças climáticas e competição com outros predadores, além da possível influência da atividade humana.
    <br>
</p>

<a href="/AtlasArcaico/php/animais_paginas/america_do_norte/smilodon_norte.php">
    <button>Veja mais</button>
</a>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/america_do_norte/animais/styracosaurus_norte.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                <h3>Styracosaurus</h3> <!-- título do slide -->
<p>Nome: Styracosaurus (Lagarto espinhoso).
    <br>
    <br>
    Pronúncia: Sty-rak-oh-sore-us.
    <br>
    <br>
    Classificação: Chordata, Reptilia, Dinosauria, Ornithischia, Cerapoda, Ceratopsia, Ceratopsidae, Centrosaurinae.
    <br>
    <br>
    Espécies: S. albertensis.
    <br>
    <br>
    Dieta: Herbívoro.
    <br>
    <br>
    Tamanho: Cerca de 5,5 metros de comprimento, com alguns espécimes indicando que poderia crescer ligeiramente mais.
    <br>
    <br>
    Localizações conhecidas: Canadá, Alberta - Formação Dinosaur Park.
    <br>
    <br>
    Período: Campaniano do Cretáceo (aproximadamente 76-74 milhões de anos atrás).
    <br>
    <br>
    Representação fóssil: Inclui esqueletos quase completos e leitos ósseos com vários indivíduos.
    <br>
    <br>
    Extinção: Desapareceu antes do final do Cretáceo, possivelmente devido a mudanças ambientais e eventos ecológicos.
    
</p>


<a href="/AtlasArcaico/php/animais_paginas/america_do_norte/smilodon_norte.php">
    <button>Veja mais</button>
</a>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/america_do_norte/animais/triceratops_norte.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                <h3>Triceratops</h3> <!-- título do slide -->
<p>Nome: Triceratops (Rosto com três chifres).  
    <br>
    <br>
    Pronúncia: Tri-seh-rah-tops.  
    <br>
    <br>
    Classificação: Chordata, Reptilia, Dinosauria, Ornithischia, Ceratopsia, Ceratopsidae, Chasmosaurinae, Triceratopsini.  
    <br>
    <br>
    Espécies: T. horridus.  
    <br>
    <br>
    Dieta: Herbívoro.  
    <br>
    <br>
    Tamanho: Entre 8 e 9 metros de comprimento.  
    <br>
    <br>
    Localizações conhecidas: EUA (Colorado, Montana, Dakota do Sul, Wyoming) e Canadá (Alberta, Saskatchewan).  
    <br>
    <br>
    Período: Maastrichtiano final do Cretáceo (aproximadamente 68-66 milhões de anos atrás).  
    <br>
    <br>
    Representação fóssil: Diversos restos, incluindo espécimes quase completos.  
    <br>
    <br>
    Extinção: Desapareceu no evento de extinção do final do Cretáceo, possivelmente causado pelo impacto de um asteroide.  
    <br><br>
</p>



<a href="/AtlasArcaico/php/animais_paginas/america_do_norte/smilodon_norte.php">
    <button>Veja mais</button>
</a>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/america_do_norte/animais/tyrannosaurus_norte.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                <h3>Tyrannosaurus</h3>
<p>Nome: Tyrannosaurus Rex (lagarto tirano).
    <br><br> Pronúncia: Ty-ran-no-sore-us.
    
    <br><br> Classificação: Chordata, Reptilia, Dinosauria, Saurischia, Theropoda, Tyrannosauria, Tyrannosauridae.
    <br><br> Nomeado por: Henry Fairfield Osborn - 1905.
    <br><br> Dieta: Carnívoro.
    <br><br> Espécies: T. rex.
    <br><br> Tamanho: O espécime mais completo mede 12,3 metros, com restos sugerindo um tamanho de até 13 metros.
    <br><br> Localizações conhecidas: Oeste da América do Norte.
    <br><br> Período: Campaniano/Maastrichtiano do Cretáceo (aproximadamente 68 a 66 milhões de anos atrás).
    <br><br> Representação fóssil: Mais de 30 indivíduos conhecidos, incluindo esqueletos quase completos.
    <br><br> Extinção: Extinto durante o evento de impacto no final do Cretáceo, que eliminou cerca de 75% das espécies na Terra.
    
</p>

<a href="/AtlasArcaico/php/animais_paginas/america_do_norte/tyrannosaurus_norte.php">
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