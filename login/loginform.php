<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="./in.css">
</head>
<body style="background-image: url(./asdasd.jpg);">

    <form action="handlelogin.php" method="POST">
        <div class="div">
            <label for="fname">First Name</label>
            <input id="fname" type="text" name="FirstName" required>
        </div>
        <div class="div">
            <label for="lname">Last Name</label>
            <input id="lname" type="text" name="LastName" required>
        </div>
        <div class="div">
            <label for="em">Email</label>
            <input id="em" type="email" name="Email" required>
        </div>
        <div class="div">
            <label for="pass">Password</label>
            <input id="pass" type="password" name="Password" required>
        </div>
        <div class="div">
            <button type="submit" name="send">Submit</button>
        </div>
    </form>

</body>
</html>
