<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/ketquadangkyhocphan.css">
    <title>Đăng ký học phần</title>
</head>
<body>
<?php include("header.php") ?>
    <div class="content">
    <?php include("sidebar.php") ?>
        <div class="main-content">
            <div class="panel">
                <div class="panel-heading"><strong>Đăng ký học phần</strong></div>
                <div class="panel-body">
                    <label>Chương trình đào tạo:</label>
                    <fieldset>
                        <table>
                            <thead>
                                <th>STT</th>
                                <th>Mã học phần</th>
                                <th>Tên học phần</th>
                                <th>STC</th>
                                <th>Ngày đăng ký</th>
                            </thead>
                            <tbody>
                            <?php include("connectSQL.php"); ?>

                                <?php
                                    $sql = "SELECT * FROM Ketquadangkyhocphan";
                                    $result = $conn->query($sql);
                                ?>

                                <?php while($row = $result->fetch_assoc()): ?>
                                    <tr>
                                        <td><?php echo $row['Stt']; ?></td>
                                        <td><?php echo $row['Mahocphan']; ?></td>
                                        <td><?php echo $row['Tenhocphan']; ?></td>
                                        <td><?php echo $row['STC']; ?></td>
                                        <td><?php echo $row['Ngaydangky']; ?></td>

                                    </tr>

                                <?php endwhile; ?>  
                            </tbody>
                        </table>
                    </fieldset>
                    
                </div>
            </div>
        </div>  
            
        </div>
    </div>
    <?php include("footer.php") ?>
</body>
</html>
