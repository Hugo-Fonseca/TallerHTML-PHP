<!DOCTYPE html>

<html>

<head>

    <title>Ordenar y Separar Numeros</title>

    <link rel="stylesheet" href="calcular.css">

</head>

<body>

    <div class="container">

        <h2>Ordenar y Separar Numeros</h2>

        <form method="post" action="">

            <input type="text" name="inputNumbers" placeholder="Ingrese numeros separados por comas">

            <button type="submit" name="submit">Ordenar y Separar</button>

        </form>

 

        <?php

        if (isset($_POST['submit'])) {

            $inputNumbers = $_POST['inputNumbers'];

            $numbers = array_map('intval', explode(",", $inputNumbers));

 

            $sortedNumbers = $numbers;

            sort($sortedNumbers);

 

            $sortedEvenNumbers = array_filter($numbers, function ($num) {

                return $num % 2 === 0;

            });

            rsort($sortedEvenNumbers);

 

            $sortedOddNumbers = array_filter($numbers, function ($num) {

                return $num % 2 !== 0;

            });

            sort($sortedOddNumbers);

        ?>

 

        <h3>Numeros Ordenados de Menor a Mayor:</h3>

        <ul>

            <?php

            foreach ($sortedNumbers as $number) {

                echo "<li>$number</li>";

            }

            ?>

        </ul>

 

        <h3>Numeros Pares Ordenados de Mayor a Menor:</h3>

        <ul>

            <?php

            foreach ($sortedEvenNumbers as $number) {

                echo "<li>$number</li>";

            }

            ?>

        </ul>

 

        <h3>Numeros Impares Ordenados de Menor a Mayor:</h3>

        <ul>

            <?php

            foreach ($sortedOddNumbers as $number) {

                echo "<li>$number</li>";

            }

            ?>

        </ul>

        <?php

        }

        ?>

    </div>

 

    <button onclick="window.history.back()">Regresar</button>

</body>

</html>

