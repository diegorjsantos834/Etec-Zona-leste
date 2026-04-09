<!DOCTYPE html>
<html lang="pt-br ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.9.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="cursos.css">
</head>
<body>
<?php
echo '<section class="Navbar">';
echo '    <header class="Nav">';
echo '        <div>';
echo '            <img src="../img/logo_etec.png" alt="">';
echo '        </div>';
echo '        <div class="icons">';
echo '            <a href=""><i class="ri-instagram-fill"></i></a>';
echo '            <a href=""><i class="ri-facebook-box-fill"></i></a>';
echo '            <a href=""><i class="ri-twitter-x-fill"></i></a>';
echo '        </div>';
echo '        <nav class="menu">';
echo '            <ul><li><a href="../home/index.php">Home</a></li></ul>';
echo '            <ul><li><a href="../cursos/cursos.php"><span style="color: rgb(160, 8, 8)">Cursos</span></a></li></ul>';
echo '            <ul><li><a href="../gestao/gestai.php">Gestão</a></li></ul>';
echo '            <ul><li><a href="../contato/contato.php">Contato</a></li></ul>';
echo '        </nav>';
echo '    </header>';
echo '</section>';

echo '<section class="banner">';
echo '    <div class="texto">';
echo '        <h1><i class="ri-book-open-fill"></i> Cursos Técnicos</h1>';
echo '        <p>Descubra os cursos técnicos oferecidos pela ETEC e escolha o caminho para o seu futuro profissional.</p>';
echo '        <a href="../gestao/gestai.php">Conhecer a Gestão</a>';
echo '    </div>';
echo '    <div class="imagem_banner">';
echo '        <img src="../img/estudando.jpg" alt="">';
echo '    </div>';
echo '</section>';

echo '<section class="Cursos_oferecidos">';
echo '    <h2 class="titulo">Cursos oferecidos</h2>';
echo '    <div class="cards">';
echo '        <div class="card_etec">';
echo '            <i class="ri-school-fill"></i>';
echo '            <h2>Serviços Jurídicos</h2>';
echo '            <p>Atue na área jurídica com conhecimento prático e atualizado. Aprenda sobre legislação, contratos e rotinas jurídicas.</p>';
echo '        </div>';
echo '        <div class="card_etec">';
echo '            <i class="ri-truck-fill"></i>';
echo '            <h2>Logística</h2>';
echo '            <p>Prepare-se para o mercado com conhecimentos em transporte, armazenamento e distribuição.</p>';
echo '        </div>';
echo '        <div class="card_etec">';
echo '            <i class="ri-macbook-fill"></i>';
echo '            <h2>Desenvolvimento de Sistemas</h2>';
echo '            <p>Entre no mundo da tecnologia criando soluções digitais. Aprenda programação e lógica computacional.</p>';
echo '            <p class="obs">obs: Tem a modalidade AMS(articulado médio superior)</p>';
echo '        </div>';
echo '        <div class="card_etec">';
echo '            <i class="ri-archive-2-fill"></i>';
echo '            <h2>Administração</h2>';
echo '            <p>Domine conceitos essenciais de gestão empresarial, finanças e liderança.</p>';
echo '        </div>';
echo '        <div class="card_etec">';
echo '            <i class="ri-hourglass-fill"></i>';
echo '            <h2>Recursos Humanos</h2>';
echo '            <p>Desenvolva habilidades para gestão de pessoas, recrutamento e seleção.</p>';
echo '            <p>obs: Tem a modalidade AMS(articulado médio superior)</p>';
echo '        </div>';
echo '    </div>';
echo '</section>';

echo '<div class="fundo">';
echo '    <div class="container-pedagogico">';

// DESENVOLVIMENTO DE SISTEMAS
echo '        <section class="curso-item DS">';
echo '            <h2 class="curso-titulo">Desenvolvimento de Sistemas</h2>';
echo '            <p class="curso-descricao">O curso de Desenvolvimento de Sistemas é focado na capacitação de profissionais para atuar no dinâmico mercado de tecnologia da informação. Ao longo da formação, o aluno desenvolve competências essenciais para analisar, projetar, implementar e atualizar sistemas computacionais utilizando as linguagens de programação mais requisitadas. O currículo abrange desde a lógica estruturada e orientação a objetos até o desenvolvimento para dispositivos móveis e ambientes web de alta performance, preparando o estudante para criar soluções seguras, escaláveis e alinhadas às demandas atuais da indústria 4.0 e da transformação digital.</p>';
echo '            <div class="ams-destaque">';
echo '                <span class="ams-label">Programa AMS (Articulação Médio-Superior)</span>';
echo '                <p>Esta modalidade oferece um percurso formativo único e integrado. O diferencial do AMS é permitir que o aluno curse o Ensino Médio Técnico e a Graduação Tecnológica de forma sequencial e otimizada, reduzindo o tempo de espera e garantindo uma transição acadêmica fluida para o ensino superior, com foco direto na inserção profissional.</p>';
echo '                <p class="ams-periodo"><strong>Período:</strong> 5 anos (3 anos Médio + 2 anos Tecnólogo).</p>';
echo '            </div>';
echo '        </section>';

echo '        <hr class="divisor-suave">';

// LOGÍSTICA
echo '        <section class="curso-item log">';
echo '            <h2 class="curso-titulo">Logística</h2>';
echo '            <p class="curso-descricao">A área de Logística é fundamental para a eficiência e competitividade das empresas no cenário globalizado. O curso prepara o profissional para planejar, operar e controlar de forma inteligente o fluxo de materiais, serviços e informações. O aluno aprende a gerenciar processos complexos de compras, armazenamento, movimentação de estoque e transporte multimodal, utilizando ferramentas tecnológicas de ponta para otimizar custos e garantir que os prazos de entrega sejam cumpridos com precisão. É a escolha ideal para quem busca atuar estrategicamente na gestão de grandes centros de distribuição e cadeias de suprimentos globais.</p>';
echo '        </section>';

echo '        <hr class="divisor-suave">';

// SERVIÇOS JURÍDICOS (Adicionado conforme solicitado)
echo '        <section class="curso-item ServicoJuri">';
echo '            <h2 class="curso-titulo">Serviços Jurídicos</h2>';
echo '            <p class="curso-descricao">O curso de Serviços Jurídicos forma profissionais capacitados para prestar suporte técnico-administrativo essencial no setor legal. O estudante desenvolve habilidades críticas para a redação de documentos oficiais, acompanhamento de prazos processuais e organização minuciosa de arquivos jurídicos, além de compreender profundamente as rotinas do sistema judiciário brasileiro. A formação permite atuação em escritórios de advocacia, cartórios, departamentos jurídicos corporativos e órgãos públicos, garantindo que os fluxos administrativos ocorram com conformidade legal, ética e organização técnica rigorosa.</p>';
echo '        </section>';

echo '        <hr class="divisor-suave">';

// ADMINISTRAÇÃO (Adicionado conforme solicitado)
echo '        <section class="curso-item adm">';
echo '            <h2 class="curso-titulo">Administração</h2>';
echo '            <p class="curso-descricao">Formar gestores com visão sistêmica e empreendedora é o objetivo central do curso de Administração. O programa oferece uma base sólida em áreas fundamentais como gestão financeira, marketing, planejamento estratégico e processos operacionais. O aluno é incentivado a desenvolver competências de liderança, tomada de decisão baseada em análise de dados e inovação. Com uma atuação extremamente versátil, o profissional de administração é capaz de gerir recursos humanos e financeiros em organizações de qualquer porte, buscando sempre a eficiência operacional e a sustentabilidade do negócio no mercado.</p>';
echo '        </section>';

echo '        <hr class="divisor-suave">';

// RECURSOS HUMANOS
echo '        <section class="curso-item RH">';
echo '            <h2 class="curso-titulo">Recursos Humanos</h2>';
echo '            <p class="curso-descricao">O foco deste curso é o capital mais importante de qualquer organização: as pessoas. A formação em Recursos Humanos capacita o aluno para atuar em todas as etapas da jornada do colaborador, desde os processos estratégicos de recrutamento e seleção até o treinamento, desenvolvimento e retenção de talentos. Além da sensibilidade humana, o curso aprofunda conhecimentos técnicos em legislação trabalhista, cálculos de folha de pagamento e programas de qualidade de vida, preparando o profissional para equilibrar as metas estratégicas da empresa com o bem-estar, a ética e a produtividade da equipe de trabalho.</p>';
echo '            <div class="ams-destaque">';
echo '                <span class="ams-label">Programa AMS (Articulação Médio-Superior)</span>';
echo '                <p>No modelo AMS, o estudante de RH inicia sua trajetória profissional já no ensino médio, conectando-se diretamente com o currículo da graduação tecnológica em Gestão de Recursos Humanos. Isso garante uma especialização técnica superior precoce e um posicionamento estratégico diferenciado no mercado de trabalho, otimizando a formação acadêmica.</p>';
echo '                <p class="ams-periodo"><strong>Período:</strong> 5 anos (Conclusão integrada entre o nível médio técnico e o superior).</p>';
echo '            </div>';
echo '        </section>';

echo '    </div>';
echo '</div>';

echo '<section class="vestibulinho">';
echo '    <div class="container_vestibulinho">';
echo '        <div class="texto_vestibulinho">';
echo '            <h2 class="titulo_v">Vestibulinho</h2>';
echo '            <p class="descricao_v">Fique por dentro do processo seletivo para ingressar na ETEC.</p>';
echo '            <a href="../contato/contato.php" class="botao_v">Inscreva-se agora</a>';
echo '        </div>';
echo '        <div class="imagem_vestibulinho">';
echo '            <img src="../img/vestibulinho-etec.jpg" alt="Estudantes Etec">';
echo '        </div>';
echo '    </div>';
echo '</section>';

echo '<section class="Footer">';
echo '    <footer class="Rodapé">';
echo '        <div><img src="../img/logo_etec.png" alt=""></div>';
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