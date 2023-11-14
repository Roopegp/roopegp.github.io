<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="get">
        <input type="text" name="num1" placeholder = "number 1">
        <input type="text" name="num2" placeholder = "number 2">
        <select name="operator" id="">
            <option >None</option>
            <option >Add</option>
            <option >Subtract</option>
            <option >Multiply</option>
            <option>Divide</option>
            <option >Modular</option>
        </select>
        <button type="submit" name="submit" value="submit">Calculate</button>
    </form>
    <p>the answer is</p>
    <?php 
        if(isset($_GET["submit"])) {
            $num1 = $_GET["num1"];
            $num2 = $_GET["num2"];
            $operator = $_GET["operator"];
            switch($operator) {
                case "None":
                    echo "Select an operator";
                    break;
                case "Add":
                    echo $num1 + $num2;
                      break;    
                case "Subtract":
                    echo $num1 - $num2;
                    break;
                case "Multiply":
                    echo $num1 * $num2;
                    break;
                case "Divide":
                    echo $num1 / $num2;
                    break;
                case "Modular":
                    echo $num1 % $num2;     
                    break;
            }
        }
    ?>
</body>
</html>