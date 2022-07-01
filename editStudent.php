<?php
$serverName = "localhost";
$userName = "root";
$password = "root";
$dbName = "T2108M";
// connect db
$conn = new mysqli($serverName,$userName,$password,$dbName);
if($conn->connect_error){
    die($conn->connect_error);
}
$sql_txt = "select * from Students where id = ".$_GET["id"];
$result = $conn->query($sql_txt);
$student = null;
if($result->num_rows>0){
    while ($row = $result->fetch_assoc()){
        $student = $row;
    }
}
if($student == null){
    die("Student not found");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Student</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-6">
            <h2>Edit Student</h2>
            <form action="updateStudent.php?id=<?php echo $student["id"];?>" method="post">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input required type="text" value="<?php echo $student["studentName"];?>" name="studentName" class="form-control" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Date Of Birth</label>
                    <input required type="date" value="<?php echo $student["dateOfBirth"];?>" name="dateOfBirth" class="form-control" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <textarea required class="form-control" name="address" rows="3">
                         <?php echo $student["address"];?>
                    </textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" value="<?php echo $student["email"];?>" required name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp"  class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Telephone</label>
                    <input type="tel" value="<?php echo $student["phoneNumber"];?>" required name="phoneNumber" class="form-control" />
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col"></div>
    </div>
</div>
</body>
</html>
