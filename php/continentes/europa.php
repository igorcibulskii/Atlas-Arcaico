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
    <link rel="stylesheet" href="/AtlasArcaico/css/continentes/europa.css">
    <script src="/AtlasArcaico/js/continentes/europa.js"></script>
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
                    <img src="/AtlasArcaico/imagens/europa/animais/archaeopteryx_europa.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                <h3>Archaeopteryx</h3>
<p>Nome: Archaeopteryx (asa antiga). Às vezes chamado de Urvogel, que em alemão significa ‘primeiro pássaro’, mas não é um nome binomial alternativo.
    <br><br> Pronúncia: Ar-kay-op-teh-rix.
    <br><br> Nomeado por: Não especificado.
    <br><br> Classificação: Chordata, Aves, Archaeopterygidae.
    <br><br> Dieta: Carnívoro/Insectívoro.
    <br><br> Espécies: Não especificada.
    <br><br> Tamanho: Até aproximadamente 50 centímetros de comprimento.
    <br><br> Localizações: Diversos locais na Alemanha.
    <br><br> Período: Tithoniano do Jurássico.
    <br><br> Representação fóssil: Muitos espécimes, alguns quase completos e preservados em uma placa, outros apenas de penas.
    <br><br> Extinção: Durante o Jurássico.
    <br><br><br>
</p>


                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/europa/animais/baryonyx_europa.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                <h3>Baryonyx</h3>
<p>Nome: Baryonyx (garras pesadas).
    <br><br> Pronúncia: Bah-ree-on-ix.
    <br><br> Nomeado por: Alan Charig & Angela Milner - 1986.
    <br><br> Classificação: Chordata, Reptilia, Dinosauria, Saurischia, Theropoda, Spinosauridae, Baryonychinae.
    <br><br> Dieta: Carnívoro.
    <br><br> Espécies: B. walkeri.
    <br><br> Tamanho: Cerca de 9 metros de comprimento no holótipo, um juvenil. Adulto totalmente desenvolvido seria maior.
    <br><br> Localizações: Inglaterra, Surrey; Espanha; Portugal; possivelmente Norte da África.
    <br><br> Período: Hauteriviano a Barremiano do Cretáceo.
    <br><br> Representação fóssil: Restos de muitos indivíduos.
    <br><br> Extinção: Durante o Cretáceo.
    <br><br><br><br>
</p>



                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/europa/animais/cervalces_latifrons_europa.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                <h3>Cervalces latifrons</h3> <!-- título do slide -->
<p>Nome: Cervalces latifrons (Alce de grandes galhos).  
    <br>
    <br>
    Pronúncia: Ser-val-sis lat-i-frons.  
    <br>
    <br>
    Classificação: Chordata, Mammalia, Artiodactyla, Cervidae.  
    <br>
    <br>
    Dieta: Herbívoro.  
    <br>
    <br>
    Tamanho: Aproximadamente 2,5 metros de altura e 3 metros de comprimento.  
    <br>
    <br>
    Localizações conhecidas: Europa (principalmente nas regiões da Europa Central).  
    <br>
    <br>
    Período: Pleistoceno.  
    <br>
    <br>
    Representação fóssil: Restos parciais de ossos, incluindo crânios e membros.  
    <br>
    <br>
    Extinção: Extinto no final do Pleistoceno, possivelmente devido a mudanças climáticas e caça excessiva.  
    <br><br><br><br><br><br><br>
</p>




                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/europa/animais/compsognathus_europa.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                <h3>Compsognathus</h3> <!-- título do slide -->
<p>Nome: Compsognathus (Mandíbula bonita).  
    <br>
    <br>
    Pronúncia: Komp-sog-nath-us.  
    <br>
    <br>
    Classificação: Chordata, Reptilia, Dinosauria, Saurischia, Theropoda, Compsognathidae.  
    <br>
    <br>
    Dieta: Carnívoro.  
    <br>
    <br>
    Espécie: C. longipes.  
    <br>
    <br>
    Tamanho: Até 125 centímetros de comprimento.  
    <br>
    <br>
    Localizações conhecidas: Alemanha, França, Possivelmente Portugal.  
    <br>
    <br>
    Período: Tithoniano do Jurássico (aproximadamente 152 a 145 milhões de anos atrás).  
    <br>
    <br>
    Representação fóssil: Dois espécimes, além de dentes adicionais.  
    <br>
    <br>
    Extinção: Mudanças climáticas e competições com outros predadores podem ter contribuído para sua extinção.  
    <br><br><br><br>
</p>





                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/europa/animais/europasaurus_europa.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                <h3>Europasaurus</h3> <!-- título do slide -->
<p>Nome: Europasaurus (Lagarto europeu).  
    <br>
    <br>
    Pronúncia: Yu-ro-pa-sore-us.  
    <br>
    <br>
    Classificação: Chordata, Reptilia, Dinosauria, Saurischia, Sauropodomorpha, Sauropoda, Macronaria, Camarasauromorpha.  
    <br>
    <br>
    Dieta: Herbívoro.  
    <br>
    <br>
    Espécie: E. holgeri.  
    <br>
    <br>
    Tamanho: Até 6,2 metros de comprimento.  
    <br>
    <br>
    Localizações conhecidas: Alemanha.  
    <br>
    <br>
    Período: Kimmeridgiano do Jurássico (aproximadamente 157 a 152 milhões de anos atrás).  
    <br>
    <br>
    Representação fóssil: Vários indivíduos representados por restos parciais, incluindo juvenis.  
    <br>
    <br>
    Extinção: Mudanças ambientais e competição com outros herbívoros podem ter levado à sua extinção.  
    <br><br><br><br><br>
</p>






                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/europa/animais/hypsilophodon_europa.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                <h3>Hypsilophodon</h3> <!-- título do slide -->
<p>Nome: Hypsilophodon (Dente de Hypsilophus).  
    <br>
    <br>
    Pronúncia: Hip-sil-o-foe-don.  
    <br>
    <br>
    Classificação: Chordata, Reptilia, Dinosauria, Ornithischia, Ornithopoda, Hypsilophodontidae.  
    <br>
    <br>
    Dieta: Herbívoro.  
    <br>
    <br>
    Espécie: H. foxii.  
    <br>
    <br>
    Tamanho: Em média, cerca de 1,5 metros de comprimento, mas espécimes maiores podem chegar até 1,8 metros.  
    <br>
    <br>
    Localizações conhecidas: Inglaterra, Ilha de Wight - Formação Wessex.  
    <br>
    <br>
    Período: Barremiano do Cretáceo (aproximadamente 129 a 125 milhões de anos atrás).  
    <br>
    <br>
    Representação fóssil: Restos de vários indivíduos.  
    <br>
    <br>
    Extinção: Possivelmente devido a mudanças climáticas e ambientais.  
    <br><br><br><br>
</p>






                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/europa/animais/iberomesornis_europa.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                <h3>Iberomesornis</h3>
<p>Nome: Iberomesornis (pássaro intermediário ibérico).
    <br><br> Pronúncia: I-beh-roe-may-sor-nis.
    <br><br> Nomeado por: J. L. Sanz & J. F. Bonaparte - 1992.
    <br><br> Classificação: Chordata, Aves, Ornithothoraces, Enantiornithes, Iberomesornithiformes, Iberomesornithidae.
    <br><br> Dieta: Incerta.
    <br><br> Espécies: I. romerali.
    <br><br> Tamanho: Cerca de 20 centímetros de envergadura.
    <br><br> Localizações: Espanha, Província de Cuenca - Formação Calizas de La Huerguina.
    <br><br> Período: Barremiano do Cretáceo.
    <br><br> Representação fóssil: Holótipo (LH-22) de um esqueleto pós-craniano parcial. Restos adicionais de um pé esquerdo (LH-8200) adicionados em 1994. Crânio desconhecido.
    <br><br> Extinção: Durante o Cretáceo.
    <br><br>
</p>



                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/europa/animais/iguanodon_europa.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                <h3>Iguanodon</h3>
<p>Nome: Iguanodon (dente de iguana).
    <br><br> Pronúncia: Ig-wah-no-don.
    <br><br> Nomeado por: Gideon Mantell - 1825.
    <br><br> Classificação: Chordata, Reptilia, Dinosauria, Ornithischia, Ornithopoda.
    <br><br> Dieta: Herbívoro.
    <br><br> Espécies: I. bernissartensis (neótipo).
    <br><br> Tamanho: Cerca de 10 metros de comprimento, com alguns atingindo até 13 metros.
    <br><br> Localizações: Europa Ocidental, África, Ásia e América do Norte.
    <br><br> Período: Kimmeridgiano do Jurássico até o Barremiano/Aptiano do Cretáceo. Alguns fósseis indicam o Cenomaniano.
    <br><br> Representação fóssil: Muitos espécimes, permitindo a reconstrução de exemplares completos.
    <br><br> Extinção: Durante o Cretáceo.
    <br><br>    
</p>



                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/europa/animais/leedsichthys_europa.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                <h3>Leedsichthys</h3> <!-- título do slide -->
<p>Nome: Leedsichthys (Peixe de Leed).  
    <br>
    <br>
    Pronúncia: Leeds-ick-fiss.  
    <br>
    <br>
    Classificação: Chordata, Actinopterygii, Pachycormiformes, Pachycormidae.  
    <br>
    <br>
    Dieta: Filtrador.  
    <br>
    <br>
    Espécie: L. problematicus (tipo).  
    <br>
    <br>
    Tamanho: Estimativas variam, mas os espécimes maiores podem ter alcançado até 16 metros de comprimento.  
    <br>
    <br>
    Localizações conhecidas: Inglaterra, França, Alemanha, Chile.  
    <br>
    <br>
    Período: Oxfordiano do Jurássico (aproximadamente 164 a 159 milhões de anos atrás).  
    <br>
    <br>
    Representação fóssil: Muitos espécimes de mais de 70 indivíduos são conhecidos.  
    <br>
    <br>
    Extinção: Mudanças ambientais e predadores podem ter contribuído para sua extinção.  
    <br><br><br>
</p>




                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/europa/animais/megaloceros_europa.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                <h3>Megaloceros</h3>
<p>Nome: Megaloceros (grande chifre).
    <br><br> Pronúncia: Meg-ah-loe-seh-ross.
    <br><br> Classificação: Chordata, Mammalia, Artiodactyla, Cervidae.
    <br><br> Dieta: Herbívoro.
    <br><br> Espécies: M. giganteus (alce irlandês) e outras menores.
    <br><br> Tamanho: Até 2,1 metros de altura nos ombros para a espécie maior, M. giganteus. Espécies menores podiam ter 1 metro de altura.
    <br><br> Localizações: Eurásia.
    <br><br> Período: Meio Iônio do Pleistoceno ao início do Holoceno.
    <br><br> Representação fóssil: Vários espécimes.
    <br><br> Extinção: Durante o Holoceno.
    <br><br><br><br><br>
</p>



                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/europa/animais/plateosaurus_europa.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                <h3>Plateosaurus</h3> <!-- título do slide -->
<p>Nome: Plateosaurus (Lagarto largo).  
    <br>
    <br>
    Pronúncia: Plat-e-o-sore-us.  
    <br>
    <br>
    Classificação: Chordata, Reptilia, Dinosauria, Saurischia, Sauropodomorpha, Plateosauridae.  
    <br>
    <br>
    Dieta: Herbívoro.  
    <br>
    <br>
    Espécie: P. engelhardti.  
    <br>
    <br>
    Tamanho: Entre 5 e 10 metros de comprimento, com grande variação no tamanho dos adultos.  
    <br>
    <br>
    Localizações conhecidas: Toda a Europa. Também na Groenlândia - Formação Fleming Fjord.  
    <br>
    <br>
    Período: Noriano a Rhaetiano do Triássico (aproximadamente 227 a 201 milhões de anos atrás).  
    <br>
    <br>
    Representação fóssil: Múltiplos indivíduos, alguns muito bem preservados. Adultos e subadultos conhecidos.  
    <br>
    <br>
    Extinção: Extinto no final do Triássico, provavelmente devido a mudanças ambientais e competição com outros dinossauros herbívoros.  
    <br><br><br>
</p>




                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/europa/animais/pliosaurus_europa.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                <h3>Pliosaurus</h3> <!-- título do slide -->
<p>Nome: Pliosaurus (Lagarto de Plios).  
    <br>
    <br>
    Pronúncia: Plee-oh-sore-us.  
    <br>
    <br>
    Classificação: Chordata, Reptilia, Dinosauria, Saurischia, Plesiosauria, Pliosauridae.  
    <br>
    <br>
    Dieta: Carnívoro.  
    <br>
    <br>
    Espécie: P. funkei.  
    <br>
    <br>
    Tamanho: Estimado entre 12 e 15 metros de comprimento.  
    <br>
    <br>
    Localizações conhecidas: Reino Unido, Noruega, Rússia.  
    <br>
    <br>
    Período: Toarciano do Jurássico (aproximadamente 183 a 174 milhões de anos atrás).  
    <br>
    <br>
    Representação fóssil: Restos de esqueletos parciais e mandíbula.  
    <br>
    <br>
    Extinção: Extinto devido ao final da era Jurássica, possivelmente por mudanças ambientais e competição com outros predadores marinhos.  
    <br><br><br><br>
</p>




                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/europa/animais/rhabdodon_europa.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                <h3>Rhabdodon</h3>
<p>Nome: Rhabdodon (Dente estriado).  
    <br><br>
    Pronúncia: Rab-doe-don.  
    <br><br>
    Classificação: Chordata, Reptilia, Dinosauria, Ornithischia, Ornithopoda, Iguanodontia, Rhabdodontidae.  
    <br><br>
    Dieta: Herbívoro.  
    <br><br>
    Espécie: R. priscus.  
    <br><br>
    Tamanho: Entre 4 e 6 metros de comprimento.  
    <br><br>
    Localizações: República Tcheca, França, Romênia e Espanha.  
    <br><br>
    Período: Campaniano final a Maastrichtiano inicial do Cretáceo (aproximadamente 72 a 66 milhões de anos atrás).  
    <br><br>
    Representação fóssil: Múltiplos indivíduos.  
    <br><br>
    Extinção: Final do Cretáceo, devido a mudanças climáticas e competição.  
    <br><br><br><br>
</p>






                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/europa/animais/ursusspelaeus_europa.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                <h3>Ursus spelaeus</h3>
<p>Nome: Ursus spelaeus.
    <br><br> Pronúncia: Ur-sus spel-ay-us.
    <br><br> Nomeado por: Johann Christian Rosenmüller - 1974.
    <br><br> Classificação: Chordata, Mammalia, Carnivora, Ursidae.
    <br><br> Dieta: Principalmente herbívoro, mas com evidências fósseis de ingestão ocasional de carne, sugerindo uma dieta onívora.
    <br><br> Espécies: U. spelaeus.
    <br><br> Tamanho: Entre 2,1 e 3 metros de comprimento, com machos maiores (400-500 kg) e fêmeas menores (225-250 kg).
    <br><br> Localizações: Europa, incluindo a Rússia ocidental e áreas do norte do Oriente Médio.
    <br><br> Período: Pleistoceno.
    <br><br> Representação fóssil: Tão abundante que é incerto quantas remanescências existem.
    <br><br> Extinção: Durante o Pleistoceno.
    <br><br>
</p>



                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/europa/animais/vulcanodon_europa.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                <h3>Vulcanodon</h3>
<p>Nome: Vulcanodon (dente do vulcão).
    <br><br> Pronúncia: Vul-can-o-don.
    <br><br> Nomeado por: Michael Raath - 1972.
    <br><br> Classificação: Chordata, Reptilia, Dinosauria, Saurischia, Sauropodomorpha, Sauropoda, Gravisauria, Vulcanodontidae.
    <br><br> Dieta: Herbívoro.
    <br><br> Espécies: V. karibaensis.
    <br><br> Tamanho: O holótipo inclui membros com comprimento de até 110 cm no fêmur e 70 cm no úmero. O comprimento total da porção preservada é estimado em 6,5 metros, sem contar o pescoço e crânio, sugerindo um tamanho maior.
    <br><br> Localizações: Zimbábue, Lago Kariba, Ilha 126/127 - Formação Vulcanodon Beds.
    <br><br> Período: Toarciano do Jurássico.
    <br><br> Representação fóssil: Restos parciais, mas articulados, do pós-crânio, incluindo pelve, membros e vértebras.
    <br><br>
</p>



<a href="smilodon_norte.php">
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