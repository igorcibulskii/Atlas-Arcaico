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
    <link rel="stylesheet" href="/AtlasArcaico/css/continentes/america_do_sul.css">
    <script src="/AtlasArcaico/js/continentes/america_do_sul.js"></script>
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
                <li><a href="/AtlasArcaico/php/atlas_arcaico/atlas_arcaico.php" class="link active">Atlas Arcaico</a>
                </li>
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
                    <img src="/AtlasArcaico/imagens/america_do_sul/animais/argentavis_sul.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                    <h3>Argentavis</h3>
                    <p>Nome: Argentavis (ave da Argentina).
                        <br><br> Pronúncia: Ar-jen-tay-vis..
                        <br><br> Nomeado por: Campbell e Tonni - 1980..
                        <br><br> Classificação: Chordata, Aves, Teratornithidae.
                        <br><br> Espécies: A. magnificens.
                        <br><br> Dieta: Carnívoro.
                        <br><br> Tamanho: Estimado entre 5,5 a 6,5 metros de envergadura, embora alguns sugiram até 7
                        metros.
                        <br><br> Localizações conhecidas: Argentina.
                        <br><br> Período: Messiniano do Mioceno (aproximadamente 7,2 a 5,3 milhões de anos atrás).
                        <br><br> Representação fóssil: Vários conjuntos de restos parciais.
                        <br><br> Extinção: Provavelmente devido a mudanças climáticas no final do Pleistoceno, que
                        alteraram os habitats e reduziram as presas disponíveis, além de possível competição com outros
                        predadores voadores emergentes.
                        <br>
                    </p>
                    <a href="/AtlasArcaico/php/animais_paginas/america_do_sul/argentavis_sul.php">
                        <button>Veja mais</button>
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/america_do_sul/animais/argentinosaurus_sul.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                    <h3>Argentinosaurus</h3>
                    <p>Nome: Argentinosaurus (lagarto da Argentina).
                        <br><br> Pronúncia: Ar-jen-teen-oh-sore-us.
                        <br><br> Nomeado por: José Bonaparte & Rodolfo Coria - 1993.
                        <br><br> Classificação: Chordata, Reptilia, Dinosauria, Saurischia, Sauropoda, Titanosauria,
                        Antarctosauridae.
                        <br><br> Espécies: A. huinculensis.
                        <br><br> Dieta: Herbívoro.
                        <br><br> Tamanho: Material incompleto torna o dimensionamento difícil. Estimativas variam de 22
                        a 40 metros de comprimento, mas mais comumente em torno de 30 a 35 metros de comprimento.
                        <br><br> Localizações conhecidas: Argentina, Formação Huincul.
                        <br><br> Período: Cenomaniano do Cretáceo (aproximadamente 100 a 94 milhões de anos atrás).
                        <br><br> Representação fóssil: Apenas alguns ossos, incluindo vértebras, sacro, costelas e tíbia
                        direita.
                        <br><br> Extinção: Provavelmente causada pelo impacto do asteroide no fim do Cretáceo.
                        <br>
                    </p>
                    <a href="/AtlasArcaico/php/animais_paginas/america_do_sul/argentinosaurus_sul.php">
                        <button>Veja mais</button>
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/america_do_sul/animais/argyrosaurus_sul.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                    <h3>Argyrosaurus</h3>
                    <p>Nome: Argyrosaurus (lagarto prateado).
                        <br><br> Pronúncia: Are-jie-roe-sore-us.
                        <br><br> Nomeado por: Richard Lydekker - 1893.
                        <br><br> Classificação: Chordata, Reptilia, Dinosauria, Saurischia, Sauropodomorpha, Sauropoda,
                        Titanosauria.
                        <br><br> Espécies: A. superbus.
                        <br><br> Dieta: Herbívoro.
                        <br><br> Tamanho: Incerteza devido à falta de restos.
                        <br><br> Localizações conhecidas: Argentina, Uruguai.
                        <br><br> Período: Turoniano do Cretáceo (aproximadamente 93,9 a 89,8 milhões de anos atrás).
                        <br><br> Representação fóssil: Restos parciais pós-cranianos.
                        <br><br> Extinção: Assim como outros dinossauros do Cretáceo Superior, foi extinto devido ao
                        impacto do asteroide que causou mudanças drásticas no clima e na cadeia alimentar global.
                        <br><br><br>
                    </p>
                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/america_do_sul/animais/astrapotherium_sul.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                    <h3>Astrapotherium</h3>
                    <p>Nome: Astrapotherium (grande besta relâmpago).
                        <br><br> Pronúncia: As-trah-po-fee-ree-um.
                        <br><br> Classificação: Chordata, Mammalia, Astrapotheria, Astrapotheriidae.
                        <br><br> Espécies: A. magnum.
                        <br><br> Dieta: Herbívoro.
                        <br><br> Tamanho: Cerca de 2,5 metros de comprimento.
                        <br><br> Localizações conhecidas: América do Sul.
                        <br><br> Período: Mioceno Inferior (aproximadamente 23 a 16 milhões de anos atrás).
                        <br><br> Representação fóssil: Restos bem preservados.
                        <br><br> Extinção: Provavelmente causado por mudanças climáticas e ecológicas no final do
                        Mioceno, que alteraram os habitats florestais e a disponibilidade de alimentos, além de possível
                        competição com espécies mais adaptadas.
                        <br><br><br><br>
                    </p>
                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/america_do_sul/animais/barinasuchus_sul.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                    <h3>Barinasuchus</h3>
                    <p>Nome: Barinasuchus (Jacaré monstro de Barinas).
                        <br><br> Pronúncia: Bah-ree-nah-su-kus.
                        <br><br> Classificação: Chordata, Reptilia, Crocodyliformes, Sebecidae.
                        <br><br> Espécies: Barinasuchus arveloi.
                        <br><br> Dieta: Carnívoro.
                        <br><br> Tamanho: Cerca de 7 a 10 metros de comprimento.
                        <br><br> Localizações conhecidas: América do Sul (principalmente Venezuela).
                        <br><br> Período: Mioceno Médio (aproximadamente 11 a 6 milhões de anos atrás).
                        <br><br> Representação fóssil: Restos fragmentados, incluindo crânios e ossos pós-cranianos.
                        <br><br> Extinção: Provavelmente devido a mudanças climáticas e ecológicas no final do Mioceno,
                        que impactaram os habitats terrestres e reduziram as presas disponíveis para grandes predadores.
                        <br><br><br>
                    </p>
                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/america_do_sul/animais/carbonemys_sul.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                    <h3>Carbonemys</h3>
                    <p>Nome: Carbonemys (Tartaruga do Carbonífero).
                        <br><br> Pronúncia: Car-bon-em-iss.
                        <br><br> Nomeado por: E. A. Cadena, D. T. Ksepka, C. A. Jaramillo & J. I. Bloch - 2012.
                        <br><br> Classificação: Chordata, Reptilia, Testudines, Pleurodira, Podocnemididae.
                        <br><br> Espécies: C. cofrinii.
                        <br><br> Dieta: Incerta/Carnívora?
                        <br><br> Tamanho: Carapaça de até 1,72 metros de comprimento; crânio com cerca de 25 centímetros
                        de comprimento.
                        <br><br> Localizações conhecidas: Colômbia – Formação Cerrejón.
                        <br><br> Período: Selandiano ao Thanetiano do Paleoceno (aproximadamente 60 a 58 milhões de anos
                        atrás).
                        <br><br> Representação fóssil: Carapaça parcial e crânio.
                        <br><br> Extinção: Mudanças climáticas e ecológicas no início do Eoceno afetaram ecossistemas e
                        predadores.
                        <br>
                    </p>
                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/america_do_sul/animais/doedicurus_sul.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                    <h3>Doedicurus</h3>
                    <p>Nome: Doedicurus (Cauda de Pilão).
                        <br><br> Pronúncia: Day-dih-core-us.
                        <br><br> Nomeado por: Hermann Burmeister - 1874.
                        <br><br> Classificação: Chordata, Mammalia, Xenarthra, Cingulata, Glyptodontidae.
                        <br><br> Espécies: D. clavicaudatus (tipo).
                        <br><br> Dieta: Herbívoro.
                        <br><br> Tamanho: Em média de 3,5 a 3,6 metros de comprimento; indivíduos maiores atingiam até 4
                        metros de comprimento.
                        <br><br> Localizações conhecidas: América do Sul.
                        <br><br> Período: Pleistoceno (aproximadamente 2,5 milhões a 11.000 anos atrás).
                        <br><br> Representação fóssil: Muitos espécimes conhecidos.
                        <br><br> Extinção: Provavelmente devido a mudanças climáticas ao final da Era do Gelo e à caça
                        por humanos pré-históricos, que impactaram as populações dessa espécie.
                        <br>
                    </p>
                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/america_do_sul/animais/giganotosaurus_sul.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                    <h3>Giganotosaurus</h3>
                    <p>Nome: Giganotosaurus (lagarto gigante do sul).
                        <br><br> Pronúncia: Gee-gah-note-oh-sore-us.
                        <br><br> Nomeado por: Rodolfo Coria & Leonardo Salgado - 1995.
                        <br><br> Classificação: Chordata, Reptilia, Dinosauria, Theropoda, Carcharodontosauridae,
                        Giganotosaurinae.
                        <br><br> Dieta: Carnívoro.
                        <br><br> Espécie: G. carolinii.
                        <br><br> Tamanho: 12 a 13 metros.
                        <br><br> Localizações: Argentina - Formação Candeleros.
                        <br><br> Período: Cenomaniano do Cretáceo.
                        <br><br> Fósseis: Primeiro espécime quase completo, incluindo crânio e esqueleto pós-craniano;
                        segundo espécime, mandíbula esquerda.
                        <br><br> Extinção: Mudanças climáticas e eventos de extinção em massa no final do Cretáceo.
                        <br><br><br>
                    </p>
                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/america_do_sul/animais/glyptodon_sul.png" alt="">
                </div>
                <div class="card-info"> <!-- quarto slide -->
                    <h3>Glyptodon</h3>
                    <p>Nome: Glyptodon (Dente esculpido).
                        <br><br> Pronúncia: Glip-to-don.
                        <br><br> Nomeado por: Richard Owen, 1839.
                        <br><br> Sinônimos: Glyptocoileus, Lepitherium, entre outros.
                        <br><br> Classificação: Chordata, Mammalia, Xenarthra, Cingulata, Glyptodontidae.
                        <br><br> Espécies: G. clavipes (tipo), G. euphractus, G. reticulatus, etc.
                        <br><br> Dieta: Herbívoro.
                        <br><br> Tamanho: 2,5 a 3,3 metros.
                        <br><br> Localizações: América do Sul, México e EUA.
                        <br><br> Período: Plioceno a Pleistoceno (3,6 milhões a 11.700 anos atrás).
                        <br><br> Fósseis: Mais de 150 indivíduos.
                        <br><br> Extinção: Mudanças climáticas e caça por humanos.
                        <br><br><br>
                    </p>
                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/america_do_sul/animais/guaibasaurus_sul.png" alt="">
                </div>
                <div class="card-info"> <!-- quarto slide -->
                    <h3>Guaibasaurus</h3>
                    <p>Nome: Guaibasaurus (lagarto Guaíba).
                        <br><br> Pronúncia: Gu-ay-bah-sore-us.
                        <br><br> Nomeado por: J. F. Bonaparte, J. Ferigolo, e A. M. Ribeiro - 1999.
                        <br><br> Classificação: Chordata, Reptilia, Dinosauria, Saurischia, Guaibasauridae.
                        <br><br> Dieta: Incerta.
                        <br><br> Espécie: G. candelariensis.
                        <br><br> Tamanho: Possivelmente até 3 metros.
                        <br><br> Localizações conhecidas: Brasil.
                        <br><br> Período: Noriano do Triássico.
                        <br><br> Fósseis: Esqueleto pós-craniano quase completo e membro posterior quase completo.
                        <br><br> Extinção: Provavelmente devido a mudanças climáticas e eventos de extinção em massa no
                        final do Triássico.
                        <br><br><br>
                    </p>
                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/america_do_sul/animais/homalodotherium_sul.png" alt="">
                </div>
                <div class="card-info"> <!-- quarto slide -->
                    <h3>Homalodotherium</h3>
                    <p>Nome: Homalodotherium (bicho plano).
                        <br><br> Pronúncia: Ho-ma-lo-do-te-ri-um.
                        <br><br> Nomeado por: Richard Owen - 1845.
                        <br><br> Classificação: Chordata, Mammalia, Xenarthra, Pilosa, Mylodontidae.
                        <br><br> Dieta: Herbívoro.
                        <br><br> Espécie: H. magnum (tipo).
                        <br><br> Tamanho: Aproximadamente 2 a 3 metros de comprimento.
                        <br><br> Localizações conhecidas: América do Sul.
                        <br><br> Período: Mioceno.
                        <br><br> Fósseis: Restos fósseis de esqueletos parciais.
                        <br><br> Extinção: Provavelmente devido a mudanças climáticas e adaptação a novos ecossistemas
                        no final do Mioceno.
                        <br><br><br><br>
                    </p>
                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/america_do_sul/animais/josephoartigasia_sul.png" alt="">
                </div>
                <div class="card-info"> <!-- quarto slide -->
                    <h3>Josephoartigasia</h3>
                    <p>Nome: Josephoartigasia.
                        <br><br> Pronúncia: Ho-say-foe-ar-tig-a-se-ah.
                        <br><br> Classificação: Chordata, Mammalia, Rodentia, Dinomyidae.
                        <br><br> Dieta: Herbívoro.
                        <br><br> Espécie: J. magna.
                        <br><br> Tamanho: Crânio de 53 cm; corpo estimado em 3 metros de comprimento, 1,5 metros de
                        altura, peso cerca de 1000 kg.
                        <br><br> Localizações conhecidas: Uruguai.
                        <br><br> Período: Zanclean do Plioceno ao Gelasiano do Pleistoceno.
                        <br><br> Fósseis: Crânio e dentes.
                        <br><br> Extinção: Provavelmente devido a mudanças climáticas e adaptações nos ecossistemas
                        durante o Pleistoceno.
                        <br><br><br><br>
                    </p>
                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card"> <!-- primeiro slide -->
                <div class="card-image"> <!-- área da imagem do slide -->
                    <img src="/AtlasArcaico/imagens/america_do_sul/animais/macrauchenia_sul.png" alt="">
                    <!-- imagem do animal -->
                </div>
                <div class="card-info"> <!-- área de informações do slide -->
                    <h3>Macrauchenia</h3> <!-- título do slide -->
                    <p>Nome: Macrauchenia (Llama longa).
                        <br>
                        <br>
                        Pronúncia: Mak-row-chen-e-a.
                        <br>
                        <br>
                        Nomeado por: Richard Owen - 1838.
                        <br>
                        <br>
                        Classificação: Chordata, Mammalia, Litopterna, Macraucheniidae.
                        <br>
                        <br>
                        Espécies: M. patachonica.
                        <br>
                        <br>
                        Dieta: Herbívoro.
                        <br>
                        <br>
                        Tamanho: 3 metros de comprimento.
                        <br>
                        <br>
                        Localizações conhecidas: Por toda a América do Sul, com fósseis encontrados na Argentina,
                        Bolívia, Chile e Venezuela.
                        <br>
                        <br>
                        Período: Do Mioceno ao final do Pleistoceno (aprox. 11.700 anos atrás), possivelmente entrando
                        no Holoceno.
                        <br>
                        <br>
                        Representação fóssil: Vários espécimes.
                        <br>
                        <br>
                        Extinção: Mudanças climáticas no final do Pleistoceno reduziram os habitats herbívoros
                        disponíveis, somadas à possível caça por humanos.
                    </p>
                    <button>Veja mais</button> <!-- botão para ver mais informações -->
                </div>
            </div>
            <div class="card"> <!-- segundo slide -->
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/america_do_sul/animais/megaterio_sul.png" alt="">
                </div>
                <div class="card-info">
                    <h3>Megatério</h3>
                    <p>Nome: Megatherium (Besta gigante).
                        <br><br> Pronúncia: Meg-ah-fee-ree-um.
                        <br><br> Nomeado por: Georges Cuvier, 1796.
                        <br><br> Classificação: Chordata, Mammalia, Xenarthra, Pilosa, Megatheriidae.
                        <br><br> Espécies: M. americanum (tipo), M. altiplanicum, M. gallardoi, etc.
                        <br><br> Dieta: Principalmente herbívoro, possivelmente onívoro.
                        <br><br> Tamanho: 6 metros.
                        <br><br> Localizações: América do Sul.
                        <br><br> Período: Início do Plioceno (5,3 milhões de anos) até o fim do Pleistoceno/início do
                        Holoceno (11.700 anos atrás).
                        <br><br> Fósseis: Muitos espécimes, permitindo reconstrução completa.
                        <br><br> Extinção: Mudanças climáticas e caça humana.
                        <br><br><br>
                    </p>
                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card"> <!-- primeiro slide -->
                <div class="card-image"> <!-- área da imagem do slide -->
                    <img src="/AtlasArcaico/imagens/america_do_sul/animais/mylodon_sul.png" alt="">
                    <!-- imagem do animal -->
                </div>
                <div class="card-info"> <!-- área de informações do slide -->
                    <h3>Mylodon</h3> <!-- título do slide -->
                    <p>Nome: Mylodon (Dente pacífico).
                        <br>
                        <br>
                        Pronúncia: My-low-don.
                        <br>
                        <br>
                        Nomeado por: Richard Owen - 1840.
                        <br>
                        <br>
                        Classificação: Chordata, Mammalia, Xenarthra, Pilosa, Mylodontidae, Mylodontinae.
                        <br>
                        <br>
                        Espécies: M. darwinii.
                        <br>
                        <br>
                        Dieta: Herbívoro.
                        <br>
                        <br>
                        Tamanho: Cerca de 3 metros de comprimento. Estimativa de peso em torno de 200 kg.
                        <br>
                        <br>
                        Localizações conhecidas: América do Sul.
                        <br>
                        <br>
                        Período: Do Pleistoceno ao início do Holoceno (aprox. 10.000 anos atrás).
                        <br>
                        <br>
                        Representação fóssil: Muitos espécimes, incluindo pelos e amostras de fezes excepcionalmente
                        preservados.
                        <br>
                        <br>
                        Extinção: Mudanças climáticas e caça humana no final do Pleistoceno contribuíram para o
                        desaparecimento da espécie.
                        <br><br>
                    </p>

                    <button>Veja mais</button> <!-- botão para ver mais informações -->
                </div>
            </div>
            <div class="card"> <!-- primeiro slide -->
                <div class="card-image"> <!-- área da imagem do slide -->
                    <img src="/AtlasArcaico/imagens/america_do_sul/animais/notosuchus_sul.png" alt="">
                    <!-- imagem do animal -->
                </div>
                <div class="card-info"> <!-- área de informações do slide -->
                    <h3>Notosuchus</h3> <!-- título do slide -->
                    <p>Nome: Notosuchus (Crocodilo do sul).
                        <br>
                        <br>
                        Pronúncia: No-toe-su-kuss.
                        <br>
                        <br>
                        Nomeado por: Arthur Smith Woodward - 1896.
                        <br>
                        <br>
                        Classificação: Chordata, Crocodylomorpha, Notosuchia, Notosuchidae.
                        <br>
                        <br>
                        Espécies: N. terrestris.
                        <br>
                        <br>
                        Dieta: Incerta, possivelmente herbívoro ou onívoro.
                        <br>
                        <br>
                        Tamanho: Cerca de 1,5 metros de comprimento.
                        <br>
                        <br>
                        Localizações conhecidas: Argentina, Patagônia - Formação Bajo de la Carpa.
                        <br>
                        <br>
                        Período: Do Coniaciano ao Santoniano no Cretáceo (aproximadamente 86 a 83 milhões de anos
                        atrás).
                        <br>
                        <br>
                        Representação fóssil: Crânios e grande parte do esqueleto pós-craniano de vários indivíduos,
                        embora os membros inferiores frequentemente faltem.
                        <br>
                        <br>
                        Extinção: Parte da extinção global do Cretáceo, possivelmente devido a eventos climáticos e
                        ambientais catastróficos.
                    </p>
                    <button>Veja mais</button> <!-- botão para ver mais informações -->
                </div>
            </div>
            <div class="card"> <!-- primeiro slide -->
                <div class="card-image"> <!-- área da imagem do slide -->
                    <img src="/AtlasArcaico/imagens/america_do_sul/animais/oxalaia_sul.png" alt="">
                    <!-- imagem do animal -->
                </div>
                <div class="card-info"> <!-- área de informações do slide -->
                    <h3>Oxalaia</h3> <!-- título do slide -->
                    <p>Nome: Oxalaia (Em homenagem à divindade Oxalá).
                        <br>
                        <br>
                        Pronúncia: Ox-ah-lie-ah.
                        <br>
                        <br>
                        Nomeado por: Alexander Kellner e equipe - 2011.
                        <br>
                        <br>
                        Classificação: Chordata, Reptilia, Dinosauria, Saurischia, Theropoda, Spinosauridae.
                        <br>
                        <br>
                        Espécies: O. quilombensis (tipo).
                        <br>
                        <br>
                        Dieta: Piscívoro.
                        <br>
                        <br>
                        Tamanho: 12 a 14 metros de comprimento.
                        <br>
                        <br>
                        Localizações conhecidas: Brasil, Ilha do Cajual - Formação Alcântara.
                        <br>
                        <br>
                        Período: Cenomaniano do Cretáceo (aprox. 100 a 94 milhões de anos atrás).
                        <br>
                        <br>
                        Representação fóssil: Pré-maxilas fundidas e fragmento de maxilar.
                        <br>
                        <br>
                        Extinção: Parte da extinção global do Cretáceo, causada por eventos climáticos e catastróficos.
                        <br><br><br>
                    </p>
                    <button>Veja mais</button> <!-- botão para ver mais informações -->
                </div>
            </div>
            <div class="card"> <!-- primeiro slide -->
                <div class="card-image"> <!-- área da imagem do slide -->
                    <img src="/AtlasArcaico/imagens/america_do_sul/animais/phorusrhacos_sul.png" alt="">
                    <!-- imagem do animal -->
                </div>
                <div class="card-info"> <!-- área de informações do slide -->
                    <h3>Phorusrhacos</h3> <!-- título do slide -->
                    <p>Nome: Phorusrhacos (Ladrão de trapos).
                        <br>
                        <br>
                        Pronúncia: Foe-roos-rah-coss.
                        <br>
                        <br>
                        Classificação: Chordata, Aves, Cariamae, Phorusrhacidae, Phorusrhacinae.
                        <br>
                        <br>
                        Espécies: P. longissimus.
                        <br>
                        <br>
                        Dieta: Carnívoro.
                        <br>
                        <br>
                        Tamanho: Entre 2,4 e 2,5 metros de altura, crânio com até 65 centímetros de comprimento.
                        <br>
                        <br>
                        Localizações conhecidas: Argentina, Província de Santa Cruz.
                        <br>
                        <br>
                        Período: Mioceno Médio (aproximadamente 15 a 10 milhões de anos atrás).
                        <br>
                        <br>
                        Representação fóssil: Muitos espécimes conhecidos.
                        <br>
                        <br>
                        Extinção: Mudanças ambientais e competição com mamíferos predadores podem ter contribuído para
                        seu desaparecimento.
                        <br><br><br><br>
                    </p>
                    <button>Veja mais</button> <!-- botão para ver mais informações -->
                </div>
            </div>
            <div class="card"> <!-- primeiro slide -->
                <div class="card-image"> <!-- área da imagem do slide -->
                    <img src="/AtlasArcaico/imagens/america_do_sul/animais/prionosuchus_sul.png" alt="">
                    <!-- imagem do animal -->
                </div>
                <div class="card-info"> <!-- área de informações do slide -->
                    <h3>Prionosuchus</h3> <!-- título do slide -->
                    <p>Nome: Prionosuchus.
                        <br>
                        <br>
                        Pronúncia: Pre-on-o-soo-kus.
                        <br>
                        <br>
                        Classificação: Chordata, Amphibia, Temnospondyli, Archegosauridae, Platyoposaurinae.
                        <br>
                        <br>
                        Espécies: P. plummeri.
                        <br>
                        <br>
                        Dieta: Carnívoro/Piscívoro.
                        <br>
                        <br>
                        Tamanho: A maioria dos espécimes estimada entre 2 e 2,5 metros de comprimento. Um crânio
                        excepcionalmente grande, com 1,6 metros, sugere um indivíduo de pelo menos 5,5 metros.
                        <br>
                        <br>
                        Localizações conhecidas: Brasil - Formação Pedra do Fogo.
                        <br>
                        <br>
                        Período: Permiano Médio (aproximadamente 270 a 260 milhões de anos atrás).
                        <br>
                        <br>
                        Representação fóssil: Vários indivíduos, geralmente representados por crânios.
                        <br>
                        <br>
                        Extinção: Durante o final do Permiano, devido a mudanças climáticas e extinção em massa.
                        <br><br>
                    </p>
                    <button>Veja mais</button> <!-- botão para ver mais informações -->
                </div>
            </div>
            <div class="card"> <!-- primeiro slide -->
                <div class="card-image"> <!-- área da imagem do slide -->
                    <img src="/AtlasArcaico/imagens/america_do_sul/animais/proterotherium_sul.png" alt="">
                    <!-- imagem do animal -->
                </div>
                <div class="card-info"> <!-- área de informações do slide -->
                    <h3>Proterotherium</h3> <!-- título do slide -->
                    <p>Nome: Proterotherium (Besta primitiva).
                        <br>
                        <br>
                        Pronúncia: Pro-ter-o-ther-ee-um.
                        <br>
                        <br>
                        Classificação: Chordata, Mammalia, Litopterna, Proterotheriidae.
                        <br>
                        <br>
                        Espécies: P. cavum.
                        <br>
                        <br>
                        Dieta: Herbívoro.
                        <br>
                        <br>
                        Tamanho: Cerca de 1 metro de altura no ombro, com comprimento estimado entre 1,5 e 2 metros.
                        <br>
                        <br>
                        Localizações conhecidas: América do Sul, principalmente na Argentina e Uruguai.
                        <br>
                        <br>
                        Período: Mioceno Tardio ao Plioceno (aproximadamente 9 a 2,5 milhões de anos atrás).
                        <br>
                        <br>
                        Representação fóssil: Muitos fósseis bem preservados, incluindo esqueletos quase completos.
                        <br>
                        <br>
                        Extinção: Durante o Pleistoceno, possivelmente devido a mudanças climáticas e competição com
                        ungulados introduzidos.
                        <br><br><br>
                    </p>
                    <button>Veja mais</button> <!-- botão para ver mais informações -->
                </div>
            </div>
            <div class="card"> <!-- primeiro slide -->
                <div class="card-image"> <!-- área da imagem do slide -->
                    <img src="/AtlasArcaico/imagens/america_do_sul/animais/purussaurus_sul.png" alt="">
                    <!-- imagem do animal -->
                </div>
                <div class="card-info"> <!-- área de informações do slide -->
                    <h3>Purussaurus</h3> <!-- título do slide -->
                    <p>Nome: Purussaurus (Lagarto do Purus - em referência ao Rio Purus).
                        <br>
                        <br>
                        Pronúncia: Puh-roo-sore-us.
                        <br>
                        <br>
                        Classificação: Chordata, Reptilia, Crocodylomorpha, Crocodylia, Alligatoridae, Caimaninae.
                        <br>
                        <br>
                        Espécies: P. brasiliensis.
                        <br>
                        <br>
                        Dieta: Carnívoro.
                        <br>
                        <br>
                        Tamanho: Comprimento estimado entre 11 e 13 metros, com crânio de até 1,4 metros.
                        <br>
                        <br>
                        Localizações conhecidas: América do Sul, especialmente na região amazônica.
                        <br>
                        <br>
                        Período: Mioceno (Tortoniano, aproximadamente 11 a 7 milhões de anos atrás).
                        <br>
                        <br>
                        Representação fóssil: Diversos espécimes, principalmente materiais cranianos.
                        <br>
                        <br>
                        Extinção: Mudanças climáticas e alterações nos ecossistemas fluviais podem ter contribuído para
                        seu desaparecimento.
                        <br><br>
                    </p>
                    <button>Veja mais</button> <!-- botão para ver mais informações -->
                </div>
            </div>
            <div class="card"> <!-- primeiro slide -->
                <div class="card-image"> <!-- área da imagem do slide -->
                    <img src="/AtlasArcaico/imagens/america_do_sul/animais/saturnalia_sul.png" alt="">
                    <!-- imagem do animal -->
                </div>
                <div class="card-info"> <!-- área de informações do slide -->
                    <h3>Saturnalia</h3> <!-- título do slide -->
                    <p>Nome: Saturnalia (Latim para carnaval, também nome de um antigo festival romano em homenagem ao
                        deus Saturno).
                        <br>
                        <br>
                        Pronúncia: Sat-urn-ay-lee-ah.
                        <br>
                        <br>
                        Classificação: Chordata, Reptilia, Dinosauria, Saurischia, Sauropodomorpha, Guaibasauridae,
                        Saturnaliinae.
                        <br>
                        <br>
                        Espécies: S. tupiniquim.
                        <br>
                        <br>
                        Dieta: Incerta.
                        <br>
                        <br>
                        Tamanho: Estimado em cerca de 1,5 metros de comprimento.
                        <br>
                        <br>
                        Localizações conhecidas: Brasil - Formação Santa Maria; Zimbábue - Formação Pebbly Arkose.
                        <br>
                        <br>
                        Período: Triássico (Carniano, aproximadamente 237 a 227 milhões de anos atrás).
                        <br>
                        <br>
                        Representação fóssil: Mandíbula, dentes e esqueleto pós-craniano parcial.
                        <br>
                        <br>
                        Extinção: Possivelmente devido a mudanças ambientais e competição com outros dinossauros
                        emergentes.
                        <br>
                    </p>
                    <button>Veja mais</button> <!-- botão para ver mais informações -->
                </div>
            </div>
            <div class="card"> <!-- primeiro slide -->
                <div class="card-image"> <!-- área da imagem do slide -->
                    <img src="/AtlasArcaico/imagens/america_do_sul/animais/staurikosaurus_sul.png" alt="">
                    <!-- imagem do animal -->
                </div>
                <div class="card-info"> <!-- área de informações do slide -->
                    <h3>Staurikosaurus</h3> <!-- título do slide -->
                    <p>Nome: Staurikosaurus (Lagarto da cruz do sul).
                        <br>
                        <br>
                        Pronúncia: Store-rick-oh-sore-us.
                        <br>
                        <br>
                        Classificação: Chordata, Reptilia, Dinosauria, Saurischia, Theropoda, Herrerasauridae.
                        <br>
                        <br>
                        Espécies: S. pricei.
                        <br>
                        <br>
                        Dieta: Carnívoro.
                        <br>
                        <br>
                        Tamanho: Aproximadamente 2,25 metros de comprimento.
                        <br>
                        <br>
                        Localizações conhecidas: Brasil - Formação Santa Maria.
                        <br>
                        <br>
                        Período: Triássico (Carniano, aproximadamente 237 a 227 milhões de anos atrás).
                        <br>
                        <br>
                        Representação fóssil: Mandíbula inferior e restos pós-cranianos parciais.
                        <br>
                        <br>
                        Extinção: Mudanças climáticas e a ascensão de outros grupos de dinossauros podem ter contribuído
                        para seu desaparecimento.
                        <br><br><br>
                    </p>
                    <button>Veja mais</button> <!-- botão para ver mais informações -->
                </div>
            </div>
            <div class="card"> <!-- primeiro slide -->
                <div class="card-image"> <!-- área da imagem do slide -->
                    <img src="/AtlasArcaico/imagens/america_do_sul/animais/thylacosmilus_sul.png" alt="">
                    <!-- imagem do animal -->
                </div>
                <div class="card-info"> <!-- área de informações do slide -->
                    <h3>Thylacosmilus</h3> <!-- título do slide -->
                    <p>Nome: Thylacosmilus (Sabre de bolsa).
                        <br>
                        <br>
                        Pronúncia: Fy-lac-o-smy-luss.
                        <br>
                        <br>
                        Classificação: Chordata, Mammalia, Sparassodonta, Thylacosmilidae.
                        <br>
                        <br>
                        Espécies: T. atrox.
                        <br>
                        <br>
                        Dieta: Carnívoro.
                        <br>
                        <br>
                        Tamanho: Cerca de 1,2 metros de comprimento.
                        <br>
                        <br>
                        Localizações conhecidas: América do Sul, especialmente Argentina.
                        <br>
                        <br>
                        Período: Mioceno Tardio ao Plioceno Inicial (aproximadamente 10 a 3 milhões de anos atrás).
                        <br>
                        <br>
                        Representação fóssil: Diversos restos encontrados, embora um espécime completo ainda não tenha
                        sido descoberto.
                        <br>
                        <br>
                        Extinção: Possivelmente causada por mudanças climáticas e competição com predadores placentários
                        que surgiram na mesma época.
                        <br><br><br>
                    </p>
                    <button>Veja mais</button> <!-- botão para ver mais informações -->
                </div>
            </div>
            <div class="card"> <!-- primeiro slide -->
                <div class="card-image"> <!-- área da imagem do slide -->
                    <img src="/AtlasArcaico/imagens/america_do_sul/animais/toxodonte_sul.png" alt="">
                    <!-- imagem do animal -->
                </div>
                <div class="card-info"> <!-- área de informações do slide -->
                    <h3>Toxodonte</h3> <!-- título do slide -->
                    <p>Nome: Toxodon (Dente curvado).
                        <br>
                        <br>
                        Pronúncia: Tóx-oh-don.
                        <br>
                        <br>
                        Nomeado por: Richard Owen - 1837.
                        <br>
                        <br>
                        Classificação: Chordata, Mammalia, Toxodontidae.
                        <br>
                        <br>
                        Espécies: T. platensis (tipo), T. burmeisteri, T. chapadmalensis, T. darwini, T. ensenadense, T.
                        expansidens, T. gracilis.
                        <br>
                        <br>
                        Dieta: Herbívoro.
                        <br>
                        <br>
                        Tamanho: 2,7 metros de comprimento, 1,5 metros de altura.
                        <br>
                        <br>
                        Localizações conhecidas: América do Sul.
                        <br>
                        <br>
                        Período: Do final do Piacenziano no Plioceno (aprox. 3,6 milhões de anos atrás) até o final do
                        Tarantiano no Pleistoceno (aprox. 11.700 anos atrás).
                        <br>
                        <br>
                        Representação fóssil: Vários espécimes.
                        <br><br> Extinção: Mudanças climáticas no final do Pleistoceno reduziram habitats herbívoros,
                        além de possível caça humana.

                    </p>
                    <button>Veja mais</button> <!-- botão para ver mais informações -->
                </div>
            </div>
            <div class="card"> <!-- terceiro slide -->
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/america_do_sul/animais/titanoboa_sul.png" alt="">
                </div>
                <div class="card-info">
                    <h3>Titanoboa</h3>
                    <p>Nome: Titanoboa (Boa Titã).
                        <br><br> Pronúncia: Ti-tan-o-bo-a.
                        <br><br> Nomeado por: Head em 2009.
                        <br><br> Classificação: Chordata, Reptilia, Squamata, Serpentes, Boidae, Boinae.
                        <br><br> Espécie: T. cerrejonensis (tipo).
                        <br><br> Dieta: Carnívoro.
                        <br><br> Tamanho: Entre 12,8 e 14,8 metros de comprimento. Até 1 metro de diâmetro na parte mais
                        grossa do corpo.
                        <br><br> Localizações conhecidas: Colômbia - Formação Cerrejón.
                        <br><br> Período: Do Selandiano no Paleoceno (aproximadamente 60 a 58 milhões de anos atrás).
                        <br><br> Representação fóssil: Restos de 28 indivíduos.
                        <br><br> Extinção: Provavelmente devido ao resfriamento climático no final do Paleoceno, que
                        reduziu as temperaturas e os ambientes tropicais necessários para a sobrevivência de répteis
                        gigantes.
                        <br>
                    </p>
                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card"> <!-- primeiro slide -->
                <div class="card-image"> <!-- área da imagem do slide -->
                    <img src="/AtlasArcaico/imagens/america_do_sul/animais/uberabatitan_sul.png" alt="">
                    <!-- imagem do animal -->
                </div>
                <div class="card-info"> <!-- área de informações do slide -->
                    <h3>Uberabatitan</h3> <!-- título do slide -->
                    <p>Nome: Uberabatitan (Titã de Uberaba).
                        <br>
                        <br>
                        Pronúncia: U-ber-ah-ty-tan.
                        <br>
                        <br>
                        Classificação: Chordata, Reptilia, Dinosauria, Saurischia, Sauropodomorpha, Sauropoda,
                        Titanosauria.
                        <br>
                        <br>
                        Espécies: U. ribeiroi.
                        <br>
                        <br>
                        Dieta: Herbívoro.
                        <br>
                        <br>
                        Tamanho: Indeterminado devido à incompletude dos fósseis.
                        <br>
                        <br>
                        Localizações conhecidas: Brasil - Formação Marília.
                        <br>
                        <br>
                        Período: Maastrichtiano do Cretáceo (aproximadamente 70 a 66 milhões de anos atrás).
                        <br>
                        <br>
                        Representação fóssil: Restos fragmentários incluindo membros, pelve e vértebras.
                        <br>
                        <br>
                        Extinção: Parte do evento que marcou o fim do Cretáceo, associado ao impacto de um asteroide e
                        mudanças ambientais globais.
                        <br><br><br><br>
                    </p>
                    <button>Veja mais</button> <!-- botão para ver mais informações -->
                </div>
            </div>
            <div class="card"> <!-- primeiro slide -->
                <div class="card-image"> <!-- área da imagem do slide -->
                    <img src="/AtlasArcaico/imagens/america_do_sul/animais/unaysaurus_sul.png" alt="">
                    <!-- imagem do animal -->
                </div>
                <div class="card-info"> <!-- área de informações do slide -->
                    <h3>Unaysaurus</h3> <!-- título do slide -->
                    <p>Nome: Unaysaurus (Lagarto das águas negras).
                        <br>
                        <br>
                        Pronúncia: Oo-nay-sore-us.
                        <br>
                        <br>
                        Classificação: Chordata, Reptilia, Dinosauria, Sauropodomorpha, Plateosauria, Plateosauridae.
                        <br>
                        <br>
                        Espécies: U. tolentinoi.
                        <br>
                        <br>
                        Dieta: Herbívoro.
                        <br>
                        <br>
                        Tamanho: Aproximadamente 2,5 metros de comprimento.
                        <br>
                        <br>
                        Localizações conhecidas: Brasil - Formação Caturrita.
                        <br>
                        <br>
                        Período: Final do Carniano ao início do Noriano do Triássico (aproximadamente 225 a 210 milhões
                        de anos atrás).
                        <br>
                        <br>
                        Representação fóssil: Crânio quase completo e restos pós-cranianos parciais.
                        <br>
                        <br>
                        Extinção: Extinto antes do início do Jurássico, possivelmente devido a mudanças ambientais e
                        competição com outros herbívoros emergentes.
                        <br><br><br>
                    </p>
                    <button>Veja mais</button> <!-- botão para ver mais informações -->
                </div>
            </div>
        </div>
        <button class="prev" onclick="moveSlider(-1)">&#10094;</button>
        <!-- botão para mover o slide para a esquerda -->
        <button class="next" onclick="moveSlider(1)">&#10095;</button> <!-- botão para mover o slide para a direita -->
    </div>
</body>
</html>