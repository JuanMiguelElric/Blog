<?php
include_once '../informacoes/informacoes.php';

$postar = new Informacoes;
$postagem = $postar->Components();

foreach($postagem as $post) : ?>

    <td><?php echo $post?></td>
<?php endforeach ?>