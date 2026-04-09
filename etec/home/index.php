<!DOCTYPE html>
<html lang="pt-br ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.9.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <?php
echo '<section class="Navbar">';
echo '    <header class="Nav">';
echo '        <div>';
echo '            <img src="../img/logo_etec.png" alt="">';
echo '        </div>';
echo '        <div class="icons">';
echo '          <a href=""><i class="ri-instagram-fill"></i></a>';
echo '          <a href=""><i class="ri-facebook-box-fill"></i></a>';
echo '          <a href=""><i class="ri-twitter-x-fill"></i></a>';
echo '        </div>';
echo '        <nav class="menu">';
echo '            <ul><li><a href="../home/index.php"><span style="color: rgb(160, 8, 8)">Home</span></a></li></ul>';
echo '            <ul><li><a href="../cursos/cursos.php">Cursos</a></li></ul>';
echo '            <ul><li><a href="../gestao/gestai.php">Gestão</a></li></ul>';
echo '            <ul><li><a href="../contato/contato.php">Contato</a></li></ul>';
echo '        </nav>';
echo '    </header>';
echo '</section>';

echo '<section class="Hero">';
echo '    <div class="card_background">';
echo '        <div class="info">';
echo '            <h1>Conheça a ETEC Zona da Leste</h1>';
echo '            <h2>Desenvolvendo o amanhã.</h2>';
echo '            <p>Descubra o ambiente de aprendizado único da ETEC Zona da Leste.</p>';
echo '            <a href="../cursos/cursos.php">Saiba mais</a>';
echo '        </div>';
echo '        <div class="hero_logo">';
echo '            <img src="../img/etec-logo2.png" alt="">';
echo '        </div>';
echo '    </div>';
echo '</section>';

echo '<section class="sobre">';
echo '    <div class="texto_hero">';
echo '        <div class="titulo">';
echo '            <h1>Sobre a ETEC</h1>';
echo '            <h2>Excelência que Transforma seu Futuro</h2>';
echo '        </div>';
echo '        <p>Ensino público, gratuito e de alta qualidade no coração da Zona Leste. Unimos inovação tecnológica e tradição acadêmica para preparar você para os reais desafios do mercado de trabalho.</p>';
echo '        <a href="../cursos/cursos.php">Conheça os Cursos</a>';
echo '    </div>';
echo '    <div class="card">';
echo '        <img src="../img/etec_cima.webp" alt="">';
echo '    </div>';
echo '</section>';

echo '<section class="cursos">';
echo '    <h2 class="titulo2">Cursos</h2>';
echo '    <div class="cards">';
echo '        <div class="card_etec">';
echo '            <i class="ri-school-fill"></i>';
echo '            <h2>Serviços Jurídicos</h2>';
echo '            <p>Atue na área jurídica com conhecimento prático e atualizado.</p>';
echo '            <a href="../cursos/cursos.php">Saiba mais</a>';
echo '        </div>';
echo '        <div class="card_etec">';
echo '            <i class="ri-truck-fill"></i>';
echo '            <h2>Logística</h2>';
echo '            <p>Prepare-se para o mercado com conhecimentos em transporte e armazenamento.</p>';
echo '            <a href="../cursos/cursos.php">Saiba mais</a>';
echo '        </div>';
echo '        <div class="card_etec">';
echo '            <i class="ri-macbook-fill"></i>';
echo '            <h2>Desenvolvimento de Sistemas</h2>';
echo '            <p>Aprenda programação, desenvolvimento de softwares e aplicativos.</p>';
echo '            <p class="obs">obs: Tem a modalidade AMS</p>';
echo '            <a href="../cursos/cursos.php">Saiba mais</a>';
echo '        </div>';
echo '        <div class="card_etec">';
echo '            <i class="ri-archive-2-fill"></i>';
echo '            <h2>Administração</h2>';
echo '            <p>Domine conceitos essenciais de gestão empresarial e liderança.</p>';
echo '            <a href="../cursos/cursos.php">Saiba mais</a>';
echo '        </div>';
echo '        <div class="card_etec">';
echo '            <i class="ri-hourglass-fill"></i>';
echo '            <h2>Recursos Humanos</h2>';
echo '            <p>Desenvolva habilidades para gestão de pessoas e recrutamento.</p>';
echo '            <a href="../cursos/cursos.php">Saiba mais</a>';
echo '        </div>';
echo '        <div class="card_etec">';
echo '            <i class="ri-book-open-fill"></i>';
echo '            <h2>Vestibulinho</h2>';
echo '            <p>O processo seletivo para ingresso nos nossos cursos técnicos.</p>';
echo '            <a href="../cursos/cursos.php">Saiba mais</a>';
echo '        </div>';
echo '    </div>';
echo '</section>';

echo '<section class="aviso">';
echo '    <div class="titulo_avisos"><h2>Quadro de Avisos</h2></div>';
echo '    <div class="layout_avisos">';
echo '        <div class="Container_avisos">';
echo '            <div class="texto_aviso">';
echo '                <h2>Fique por dentro!</h2>';
echo '                <p>Acompanhe as redes sociais oficiais e o site da unidade.</p>';
echo '            </div>';
echo '            <ul>';
echo '                <li><div class="card_aviso"><h3>Inscrições Abertas</h3><p>Cursos técnicos com inscrições abertas até o fim do mês.</p></div></li>';
echo '                <li><div class="card_aviso"><h3>Evento de Tecnologia</h3><p>Participe do nosso evento anual de tecnologia.</p></div></li>';
echo '                <li><div class="card_aviso"><h3>Reunião de Pais</h3><p>A reunião será realizada na próxima semana.</p></div></li>';
echo '            </ul>';
echo '            <div class="button"><a href="https://bkpsitecpsnew.blob.core.windows.net/..." target="_blank">Ver calendário</a></div>';
echo '        </div>';
echo '        <div class="card_img"><img src="../img/etc.jpeg" alt=""></div>';
echo '    </div>';
echo '</section>';

echo '<section class="numeros">';
echo '    <div class="card_num">';
echo '        <h2>Etec Zona Leste</h2>';
echo '        <div class="grid_numeros">';
echo '            <div class="card_numero"><h3>+500</h3><p>Alunos estudando hoje!</p></div>';
echo '            <div class="card_numero"><h3>+15</h3><p>Turmas formadas anualmente</p></div>';
echo '            <div class="card_numero"><h3>+20 anos</h3><p>Tradição no ensino técnico.</p></div>';
echo '        </div>';
echo '    </div>';
echo '</section>';

echo '<section class="Infraestrutura">';
echo '    <div class="layout_infra">';
echo '        <div class="layout_card_infra">';
echo '            <div class="card_infra"><img src="../img/sala_maker.jpg"><h3>Sala Maker</h3><a href="https://eteczonaleste.cps.sp.gov.br/infraestrutura/"><i class="ri-arrow-right"></i></a></div>';
echo '            <div class="card_infra"><img src="../img/auditorio.png"><h3>Auditorio</h3><a href="https://eteczonaleste.cps.sp.gov.br/infraestrutura/"><i class="ri-arrow-right"></i></a></div>';
echo '            <div class="card_infra"><img src="../img/lab_q.jpg"><h3>Laboratorio Quimica</h3><a href="https://eteczonaleste.cps.sp.gov.br/infraestrutura/"><i class="ri-arrow-right"></i></a></div>';
echo '            <div class="card_infra"><img src="../img/lab.jpg"><h3>Laboratorio</h3><a href="https://eteczonaleste.cps.sp.gov.br/infraestrutura/"><i class="ri-arrow-right"></i></a></div>';
echo '            <div class="card_infra"><img src="../img/Quadra.jpg"><h3>Quadra</h3><a href="https://eteczonaleste.cps.sp.gov.br/infraestrutura/"><i class="ri-arrow-right"></i></a></div>';
echo '            <div class="card_infra"><img src="../img/sala.jpeg"><h3>Salas</h3><a href="https://eteczonaleste.cps.sp.gov.br/infraestrutura/"><i class="ri-arrow-right"></i></a></div>';
echo '        </div>';
echo '        <div class="infra_info">';
echo '            <img src="../img/etec-logo2.png">';
echo '            <h2>Infraestrutura de Ponta</h2>';
echo '            <p>Laboratórios modernos e salas de aula equipadas.</p>';
echo '        </div>';
echo '    </div>';
echo '</section>';

echo '<section class="atalhos">';
echo '    <div class="layout_atalhos">';
echo '        <div class="card_texto"><h2>Acesso Rápido</h2><p>Encontre tudo o que precisa em um clique!</p></div>';
echo '        <div class="card_layout"><a href="../cursos/cursos.php" class="card_atalho"><i class="ri-book-open-fill"></i><h3>Vestibulinho</h3></a></div>';
echo '        <div class="card_layout"><a href="../gestao/gestai.php" class="card_atalho"><i class="ri-briefcase-fill"></i><h3>Gestão</h3></a></div>';
echo '        <div class="card_layout"><a href="../contato/contato.php" class="card_atalho"><i class="ri-mail-fill"></i><h3>NSA</h3></a></div>';
echo '    </div>';
echo '</section>';

echo '<section class="Footer">';
echo '    <footer class="Rodapé">';
echo '        <div><img src="../img/logo_etec.png"></div>';
echo '        <div class="menuFo">';
echo '            <ul><li><a href="../home/index.php">Home</a></li></ul>';
echo '            <ul><li><a href="../cursos/cursos.php">Cursos</a></li></ul>';
echo '            <ul><li><a href="../gestao/gestai.php">Gestão</a></li></ul>';
echo '            <ul><li><a href="../contato/contato.php">Contato</a></li></ul>';
echo '        </div>';
echo '    </footer>';
echo '</section>';
?>
</body>
</html>