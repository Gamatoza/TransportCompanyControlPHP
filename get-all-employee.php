<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <title>Главная</title>
</head>

<body id="mainbody">
    <?php require "check/IsLogOn.php" ?>
    <table width='100%' class='table table-striped'>
        <tr>
            <th>Type</th>
            <th>NIS</th>
            <th>ID</th>
        </tr>
        <?php
        $mysqli = new mysqli('localhost', 'root', 'qwerty', 'CompanyDataBase');
        $result = $mysqli->query("SELECT 'FarRobber' as `Type`,NIS,FRID as `ID` FROM FarRobbers fr
        UNION
        SELECT 'Loader' as `Type`,NIS,LID as `ID` FROM Loaders ld
        UNION
        SELECT 'Accountant' as `Type`,NIS,AID as `ID` FROM Accountants ac");
        while (($row = $result->fetch_assoc()) != false) {
            $Type = $row['Type'];
            $NIS = $row['NIS'];
            $ID = $row['ID'];
            echo "<tr><td>$Type</td><td>$NIS</td><td>$ID</td></tr>";
        }
        ?>
    </table>
    <?php require "blocks/footer.php" ?>
</body>

</html>