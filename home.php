<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <?php
        $className = "T2108M";
        $listSv = [
            "Lê Đức Duy",
            "Lê Phú Cường",
            "Vũ Nhật Minh",
            "Tạ Tuấn Anh"
        ];
        $t2108m = [
            [
                "name"=>  "Lê Đức Duy",
                "age"=>19,
                "address"=>"Quang Trung, Ha dong"
            ],
            [
                "name"=>  "Lê Phú Cường",
                "age"=>18,
                "address"=>"Nam Tu Liem, HN"
            ]
        ];
    ?>
    <h1>Danh sách sinh viên <?php echo $className;?></h1>
    <ul>
       <?php foreach ($t2108m as $sv): ?>
           <li><?php echo $sv["name"]."--".$sv["age"]; ?></li>
      <?php endforeach; ?>
    </ul>
</body>
</html>
