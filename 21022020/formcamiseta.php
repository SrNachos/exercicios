<?php
    include "cabecalho.php";
?>
    <h1>criar objeto camiseta<h1>
    <form action="instanciarcamiseta.php" method="post">
        Cor camiseta:
        <input type="color" name="cor">
        <br>
        <select name="tamanho">
            <option>PP</option>
            <option>P</option>
            <option>M</option>
            <option>G</option>
            <option>GG</option>
        </select>
        <br>
        <select name="tecido">
            <option>algodão</option>
            <option>malha</option>
            <option>tectel</option>
            <option>poliester</option>
        </select>
        <br>
        <select name="estampa">
            <option>sim</option>
            <option>não</option>
        </select>
        <br>
        <input type="submit" value="enviar camiseta">
    </form>
</body>
</html>