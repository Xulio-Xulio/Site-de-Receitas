<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<style>
    * {
        margin: 1%;
    }
    
    section {
        text-align: center;
    }
</style>
<body>
    <!-- PHP for -->
    <section>
        <h1>Verificar se um número é par ou ímpar</h1>
        <h2>Adicionar "BONUS" após o terceiro evento</h2>
        <p>
        <?php
            for ($number=1; $number <=13 ; $number++) { 
                $resto = $number % 2;
                if ($number % 4 == 0 ){
                    echo "BONUS <br>";
                } else if ($resto == 0) {
                    echo $number." = PAR <br>";
                } else {
                    echo $number." = IMPAR <br>";
                }
            }
        ?>
        </p>
    </section>
</body>
</html>