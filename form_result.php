<?php
//مداد
$username = trim($_POST['username'] ?? '');
$email = trim($_POST['email'] ?? '');
$age = trim($_POST['age'] ?? '');
$password = trim($_POST['password'] ?? '');
$confirm_password = trim($_POST['confirm_password'] ?? '');

$errors = [];


if (empty($username)) {
    $errors[] = "Username is required.";
}
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Valid email is required.";
}
if (!is_numeric($age) || $age < 18) {
    $errors[] = "Age must be a number and at least 18.";
}
if (strlen($password) < 6) {
    $errors[] = "Password must be at least 6 characters.";
}
if ($password !== $confirm_password) {
    $errors[] = "Passwords do not match.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form Result</title>
</head>

<body>

    <h2>Form Result</h2>

    <?php if (!empty($errors)): ?>
        <h3 style="color: red;">Errors:</h3>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?= htmlspecialchars($error) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p style="color: green;"><strong>✅ Form Submitted Successfully!</strong></p>
        <p><strong>Username:</strong> <?= htmlspecialchars($username) ?></p>
        <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
        <p><strong>Age:</strong> <?= htmlspecialchars($age) ?></p>
        <p><strong>Password:</strong> (Hidden for security)</p>
    <?php endif; ?>

   
    <a href="index.php" style="display: inline-block; margin-top: 20px; color: blue; text-decoration: underline;">
        🔄 إعادة تعبئة النموذج
    </a>

</body>

</html>