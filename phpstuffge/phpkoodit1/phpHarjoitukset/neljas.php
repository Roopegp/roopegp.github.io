<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.1">
    <title>Document</title>
</head>

<body>
    <form method="get">
        <label for="selectable[]">Valitse haluamasi</label>
        <select name="selectable[]" id="selectable[]" multiple="multiple">
            <option value="1">Old before i die</option>
            <option value="1.25"> Lazy days</option>
            <option value="1.25">Angels</option>
            <option value="1"> Let me Entertain you</option>
            <option value="1">Millenium</option>
            <option value="1.25">No regrets</option>
            <option value="1.25">Strong</option>
            <option value="1">shes the one</option>
            <option value="1">rockdj</option>
            <option value="1.25">kids</option>
            <option value="1.25">Supreme</option>
            <option value="1">Let Love be your energy</option>
            <option value="1.25">Eternity</option>
            <option value="1">Road to mandalay</option>
            <option value="1">feel</option>
            <option value="1">Come undone</option>
            <option value="1.25">sexed up</option>
            <option value="1.25">Feel</option>
            <option value="1">Radio</option>
            <option value="1">MisUnderstood</option>
        </select>
        <button type="submit" id="submit" name="submit">Osta</button>
        <?php
        if (isset($_GET["submit"])) {
            $selection = $_GET["selectable"];
            if (isset($selection)) {
                $total = 0;
                foreach ($selection as $key) {
                    $total += $key;
                }
                echo "<br> Your total is:".$total . "euroa";
            }
        }
        ?>
    </form>
</body>

</html>