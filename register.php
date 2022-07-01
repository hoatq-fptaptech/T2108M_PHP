<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resgiter</title>
</head>
<body>
    <form method="post" action="postRegister.php">
        <div class="form-group">
            <label>Fullname</label>
            <input required type="text" name="fullname" />
        </div>
        <div class="form-group">
            <label>Email</label>
            <input  required type="email" name="email" />
        </div>
        <div class="form-group">
            <label>Password</label>
            <input required type="password" name="pwd" />
        </div>
        <div class="form-group">
            <button type="submit">Register</button>
        </div>
    </form>
</body>
</html>
