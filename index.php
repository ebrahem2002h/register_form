<!DOCTYPE html>
<html lang="en">

<!--add this view for show the data-->
<head>
    <meta charset="UTF-8">
    <title>Register Form</title>
</head>

<body>

    <h2>Register Form</h2>

    <form action="form_result.php" method="POST">
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>

        <div>
            <label for="age">Age:</label>
            <input type="number" name="age" id="age" required>
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
        </div>

        <div>
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" name="confirm_password" id="confirm_password" required>
        </div>

        <div>
            <button type="submit">Submit</button>
        </div>
    </form>

</body>

</html>