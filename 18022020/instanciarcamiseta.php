<?php
    include "classcamiseta.php";
    include "cabecalho.php";

    $c = new camiseta();

    $c->cor = $_POST["cor"];
    $c->tamanho = $_POST["tamanho"];
    $c->tecido = $_POST["tecido"];
    $c->estampa = $_POST["estampa"];

    $_SESSION["camiseta"][] = $c;
?>
<h3>camiseta inserida com sucesso</h3>
</body>
</html>