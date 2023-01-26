<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> FibCalc </title>

</head>


<body>

<div class=main>
    <p> FibCalc Szymon Czopek 2.1 </p>
    <form action="index.php" method="post">
        <input name="number" type="number" placeholder="Numer ciągu Fibonacciego">
        <input name="submit" type="submit" value="Oblicz">
    </form>

    <?php
    if(filter_input(INPUT_POST,"submit")) {
        $n = $_POST['number'];
        function fibonacci($n)
        {
            if ($n < 2) {
                return $n;
            }

            return fibonacci($n - 1) + fibonacci($n - 2);
        }


        if($n)echo "<p>". $n . " element ciągu Fibonacciego to:  " . fibonacci($n)."</p>";
        else echo "<p> Podaj liczbe </p>";
    }
    ?>
</div>


</body>

</html>