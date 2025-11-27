<?php
// --- DADOS DO PERFIL (PREENCHA COM SEUS DADOS) ---
$nome = "Carollayne";

$bio = "Diva rata de livros, desenhos e futura programadora";

// Pegue o link da SUA foto.
$imagem = "https://i.pinimg.com/736x/b6/d6/4a/b6d64acd3d3211d8f10a6f3a43799225.jpg"; 

$links = [
  "Instagram" => "https://instagram.com/Carol_ferreira0411",
  "WhatsApp" => "https://wa.me/551799645-9940",
  "Meu Jogo Favorito" => "https://www.google.com/search?gs_ssp=eJzj4tVP1zc0LCtJMsnOMMo1YPTizkktS81RSEkty8wBAHveCQM&q=level+devil&oq=le&gs_lcrp=EgZjaHJvbWUqCggCEC4YsQMYgAQyBggAEEUYOTIQCAEQLhjHARixAxjRAxiABDIKCAIQLhixAxiABDIKCAMQLhixAxiABDIWCAQQLhiDARjHARixAxjRAxiABBiKBTIGCAUQRRg9MgYIBhBFGD0yBggHEEUYPNIBCDM0NDlqMGo3qAIAsAIA&sourceid=chrome&ie=UTF-8",
  "Música do Momento" => "https://www.youtube.com/watch?v=GJ2v96T9xOk&list=RDGJ2v96T9xOk&start_radio=1"
];

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
            <?php
            foreach ($links as $texto => $url) {
                $classe_extra = "";

                // DESAFIO: Se o texto for "WhatsApp" (ou outro que você queira), mude a variável $classe_extra para "destaque". Escreva o IF aqui:
                if ($texto == "Instagram") {
                     $classe_extra = "destaque";
                }
                // O PHP constrói o botão HTML
                echo "<a href='$url' class='btn $classe_extra' target='_blank'>
                    $texto
                    </a>";
            }
            ?>
        </div>
    </div>
</body>