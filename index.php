<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng Cửu Chương</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container_header {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }
 
        table {
            width: 100%;
            text-align: center;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            border: 1px solid #ccc;
        }
        th {
            background-color: #f2f2f2;
        }
        td {
            font-size: 16px;
        }

        #main{
            padding: 10px;
        }
    </style>
</head>
<body>
    <div id="main">
        <div class="container">
            <div class="container_header">
                <p>Bảng Cửu Chương</p>
            </div>
            <div class="container_body">
                <table>
                    <thead>
                        <tr>
                            <th>Phép Tính</th>
                            <?php
                                for ($i = 1; $i <= 10; $i++) {
                                    echo "<th>Bảng nhân $i</th>";
                                }
                            ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            for ($j = 1; $j <= 10; $j++) {
                                echo "<tr>";
                                echo "<td>Lần $j</td>";
                                for ($i = 1; $i <= 10; $i++) {
                                    $result = $i * $j;
                                    echo "<td>$i * $j = $result</td>";
                                }
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
