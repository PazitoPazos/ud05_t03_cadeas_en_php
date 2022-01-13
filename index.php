<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Construción de expresións en PHP</h3>

        <?php
            $primeira="Primeira liña de texto";
            $segunda="Segunda liña de texto";
            $terceira="Terceira liña de texto";
            $primeira=$primeira."<br/>".$segunda."<br/>".$terceira;
            echo $resultado;
            echo "<br/> O número de carácteres da cadea resultante é: ".strlen($resultado);
        ?>
    </body>
</html>