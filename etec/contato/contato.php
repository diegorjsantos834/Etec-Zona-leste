<!DOCTYPE html>
<html lang="pt-br ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.9.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="contato.css">
</head>
<body>


<?php
echo '<section class="Navbar">';
echo     '<header class="Nav">';
echo         '<div>';
echo             '<img src="../img/logo_etec.png" alt="">';
echo         '</div>';
echo         '<div class="icons">';
echo             '<a href=""><i class="ri-instagram-fill"></i></a>';
echo             '<a href=""><i class="ri-facebook-box-fill"></i></a>';
echo             '<a href=""><i class="ri-twitter-x-fill"></i></a>';
echo         '</div>';
echo         '<nav class="menu">';
echo             '<ul><li><a href="../home/index.php">Home</a></li></ul>';
echo             '<ul><li><a href="../cursos/cursos.php">Cursos</a></li></ul>';
echo             '<ul><li><a href="../gestao/gestai.php">Gestão</a></li></ul>';
echo             '<ul><li><a href="../contato/contato.php"><span style="color: rgb(160, 8, 8)">Contato</span></a></li></ul>';
echo         '</nav>';
echo     '</header>';
echo '</section>';

echo '<section class="forms">';
echo     '<div class="card_forms">';
echo         '<form class="formulario" action="processa.php" method="post">';
echo             '<div class="titulo">';
echo                '<h2><i class="ri-customer-service-2-fill"></i> Contato</h2>';
echo             '</div>';
echo             '<label for="nome">Digite seu nome: </label><br>';
echo             '<input class="caixa" type="text" name="nome"/><br>';
echo             '<label for="email">Digite seu email: </label><br>';
echo             '<input class="caixa" type="text" name="email" placeholder="exemplo@gmail.com"/><br>';
echo             '<label for="tema">Digite o assunto: </label><br>';
echo             '<input class="caixa" type="text" name="tema"/><br>';
echo             '<label for="msg">Digite a mensagem: </label><br>';
echo             '<input class="caixa" id="tamanho" type="text" name="mgs"/><br><br>';
echo             '<input class="button" type="submit" value="Enviar"/>';
echo         '</form>';
echo     '</div>';
echo     '<div class="card_image">';
echo          '<img src="../img/telemarket.png" alt="">';
echo     '</div>';
echo '</section>';

echo '<div id="meuModal" class="modal">';
echo     '<div class="modal-conteudo">';
echo         '<span class="fechar">&times;</span>';
echo         '<div id="mensagem-resposta"></div>';
echo     '</div>';
echo '</div>';

echo '<script src="processa.js"></script>';

echo '<section class="Footer">';
echo     '<footer class="Rodapé">';
echo         '<div><img src="../img/logo_etec.png" alt=""></div>';
echo         '<div class="menuFo">';
echo             '<ul><li><a href="../home/index.php">Home</a></li></ul>';
echo             '<ul><li><a href="../cursos/cursos.php">Cursos</a></li></ul>';
echo             '<ul><li><a href="../gestao/gestai.php">Gestão</a></li></ul>';
echo             '<ul><li><a href="../contato/contato.php">Contato</a></li></ul>';
echo         '</div>';
echo     '</footer>';
echo '</section>';
?>

</body>
</html>