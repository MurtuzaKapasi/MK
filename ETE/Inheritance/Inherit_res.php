<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Calculator</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(45deg, #3498db, #e74c3c);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        .result {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            padding: 30px;
            box-sizing: border-box;
            transition: transform 0.3s ease-in-out;
            margin-bottom: 20px;
            text-align: center;
            color: #333;
            font-size: 18px;
            transition : transform 0.3s ease-in-out;
        }
        .result:hover{
            transform: scale(1.05);
        }

    </style>
</head>

<body>

    <?php
    define('pi', 3.14);

    interface shape
    {
        function calc_area($r, $h);
        function calc_vol($r, $h);
    }

    class sphere implements shape {
        function calc_area($r, $h)
        {
            return 4 * pi * $r * $r;
        }

        function calc_vol($r, $h)
        {
            return (4 / 3) * pi * $r * $r * $r;
        }
    }

    class cylinder implements shape{
        function calc_area($r, $h)
        {
            return 2 * pi * $r * ($r + $h);
        }

        function calc_vol($r, $h)
        {
            return pi * $r * $r * $h;
        }
    }

    class cone implements shape{
        function calc_area($r, $h)
        {
            return 0.5 * $r * $r * $h;
        }

        function calc_vol($r, $h)
        {
            return (1 / 3) * pi * $r * $r * $h;
        }
    }

    $op = isset($_GET['op']) ? $_GET['op'] : null;

    switch ($op) {
        case "Cone":
            $r = isset($_GET['rC']) ? (int)$_GET['rC'] : 0;
            $h = isset($_GET['hC']) ? (int)$_GET['hC'] : 0;
            $ob = new cone();
            $a = $ob->calc_area($r, $h);
            $v = $ob->calc_vol($r, $h);
            echo '<div class="result ">Area of Cone is: ' . $a . '<br>Volume of Cone is: ' . $v . '</div>';
            break;

        case "Cylinder":
            $r = isset($_GET['r']) ? (int)$_GET['r'] : 0;
            $h = isset($_GET['h']) ? (int)$_GET['h'] : 0;
            $ob = new cylinder();
            $a = $ob->calc_area($r, $h);
            $v = $ob->calc_vol($r, $h);
            echo '<div class="result ">Area of Cylinder is: ' . $a . '<br>Volume of Cylinder is: ' . $v . '</div>';
            break;

        case "Sphere":
            $r = isset($_GET['r1']) ? (int)$_GET['r1'] : 0;
            $ob = new sphere();
            $a = $ob->calc_area($r, 0); // Height is not used in sphere calculations
            $v = $ob->calc_vol($r, 0); // Height is not used in sphere calculations
            echo '<div class="result ">Area of Sphere is: ' . $a . '<br>Volume of Sphere is: ' . $v . '</div>';
            break;

        default:
            echo "Invalid operation.";
    }
    ?>
</body>

</html>
