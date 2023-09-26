<?php
    $arrs = ['PHP', 'HTML', 'CSS', 'JS'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,th,td{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th><strong>Tên khoá học</strong></th>
            </tr>
        </thead>
        <tbody>
            <?php
            for($i = 0;$i < count($arrs);$i++){
                echo "<tr>";
                echo "<td>$arrs[$i]</td>";
                echo"</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
