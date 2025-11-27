<?php

// --- DADOS DO PERFIL (PREENCHA COM SEUS DADOS) ---
$nome = "Carollayne";

$bio = "Diva rata de livros, desenhos e futura programadora";
$imagem = "https://i.pinimg.com/736x/b6/d6/4a/b6d64acd3d3211d8f10a6f3a43799225.jpg"; // Pegue o link da SUA foto.
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BioLink de
        <?php echo $nome; ?>
    </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <img src="<?php echo $imagem; ?>" alt="Foto de Perfil" class="avatar">
        <h1>
            <?php echo $nome; ?>
        </h1>
        <p>
            <?php echo $bio; ?>
        </p>
        <div class="lista-links">

        </div>
    </div>
</body>