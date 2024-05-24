<?php
use src\Conexao\Conexao;


$pdo = Conexao::getInstance();


?>

<h1>Início</h1>
<h4>Olá, <?php  echo $Usuario->GetNomeCompleto(); ?></h4>
<h3>Mensages:</h3>
