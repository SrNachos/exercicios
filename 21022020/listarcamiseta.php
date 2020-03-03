<?php
    include "classcamiseta.php";
    include "cabecalho.php";
?>
objetos "camiseta" instanciados no sistema: <br>
<?php
    foreach($_SESSION["camiseta"] as $c){
        echo"cor: <span style='color:$c->cor'>$c->cor</span> <br>
        tamanho: $c->tamanho <br>
        tecido: $c->tecido <br>
        estampa: $c->estampa 
        <hr>";
    }
?>
</body>
</html>