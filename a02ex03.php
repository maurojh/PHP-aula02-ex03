<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <title>Aula 2 - Exercício 3</title>
</head>

<body>
    <?php
    if( isset($_GET['x']) == false ) {
?>
    <form action="#">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <div class="field">
                        <div class="field-label">
                            <label class="label">X:</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control">
                                    <input class="input" type="text" name="x">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="field">
                        <div class="field-label">
                            <label class="label">Y:</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control">
                                    <input class="input" type="text" name="y">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="field">
                        <div class="field-body">
                            <div class="field">
                                <p class="control">
                                    <input class="button" type="submit" value="Enviar">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <?php
    } else {
?>
    <div class="container">
        <div class="columns">
            <div class="column">
                <?php
        $x = $_GET['x'];
        $y = $_GET['y'];

        $soma = $x;
        $sub = $x;
        $mul = $x;
        $div = $x;

        // Simplifique as operações abaixo:
        $soma = $soma + $y;
        $sub = $sub - $y;
        $mul = $mul * $y;
        $div = $div / $y;

        echo "X: $x Y: $y";
?>
            </div>
        </div>
        <div class="columns">
            <div class="column">
            <?php 
                echo "Soma: $soma";
            ?>
            </div>
        </div>
        <div class="columns">
            <div class="column">
            <?php 
                echo "Subtração: $sub";
            ?>
            </div>
        </div>
        <div class="columns">
            <div class="column">
            <?php 
                echo "Multiplicação: $mul";
            ?>
            </div>
        </div>
        <div class="columns">
            <div class="column">
            <?php 
                echo "Divisão: $div";
            ?>
            </div>
        </div>
    </div>
    <?php        
    }
?>
</body>

</html>