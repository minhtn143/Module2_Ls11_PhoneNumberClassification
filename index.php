<?php
include_once "function.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $importList = explode(",", $_REQUEST["importNumber"]);
    $importList = str_replace(".", "", $importList);
}
/*test value:
viettel: 0868717722,0386042200,0389.26.00.77,0394.61.99.77
vina: 0833.38.1122, 0942.57.4422,0914.874.400
mobi: 0907.92.3311, 070.687.99.44, 0798.708.000
vietnammobile: 092.8888.024, 0922.410.788
0868717722,0386042200,0389.26.00.77,0394.61.99.77,0833.38.1122, 0942.57.4422,0914.874.400,0907.92.3311, 070.687.99.44, 0798.708.000,092.8888.024, 0922.410.788
*/

?>

<!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Phone Number Classification</title>
</head>
<body>
<div class="container">
    <h4>ENTER MOBILE NUMBER</h4>

    <div id="import-form">
        <form method="post" action="index.php">
            <label for="importNumber">
                <textarea id="importNumber" name="importNumber" style="height: 100px;width: 800px"></textarea>
            </label>
            <br>
            <button type="submit" class="btn btn-primary">IMPORT</button>
        </form>
    </div>


    <div id="showList" class="showList">
        <?php if (isset($importList)): ?>
            <h3>MOBILE NUMBER LIST</h3>
            <br>
            <strong>Vinaphone: </strong><br>
            <?php
            displayList(classify($importList, VINA));
            ?>
            <br>
            <strong>Mobiphone: </strong><br>
            <?php
            displayList(classify($importList, MOBI));
            ?>
            <br>
            <strong>Viettel: </strong><br>
            <?php
            displayList(classify($importList, VIETTEL));
            ?>
            <br>
            <strong>Vietnammobile: </strong><br>
            <?php
            displayList(classify($importList, VIETNAMMOBILE));
            ?>
            <br>
            <strong>Gmobile: </strong><br>
            <?php
            displayList(classify($importList, GMOBILE));
            ?>
            <br>
        <?php endif; ?>
    </div>

</body>
</html>