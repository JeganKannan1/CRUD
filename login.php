<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
</head>
<body>
    <div id="form">
        <form action="process.php" method="POST">
            <p>
                <label>username:</label>
                <input type="text" id="username" name="username" />
            </p>
            <p>
                <label>password:</label>
                <input type="password" id="password" name="password" />
            </p>
            <p>
                <label>email:</label>
                <input type="text" id="email" name="email" />
            </p>
            <p>
                <input type="submit" id="btn" value="login" />
            </p>
    </div>
</body>
</html>