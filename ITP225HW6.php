<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $inputText = $_POST["inputText"];

    // Generate hashes
    $md5Hash = md5($inputText);
    $sha1Hash = sha1($inputText);
}
?>

<html>
<head>
    <title>Hashing Tool</title>
</head>
<body>

    <h2>Hashing Tool</h2>

    <!-- Simple form for user input -->
    <form method="post">
        <input type="text" name="inputText" placeholder="Enter text">
        <button type="submit">Hash</button>
    </form>

    <!-- Show results only if the user entered text -->
    <?php if (!empty($inputText)): ?>
        <p>Original: <?php echo htmlspecialchars($inputText); ?></p>
        <p>MD5: <?php echo $md5Hash; ?></p>
        <p>SHA1: <?php echo $sha1Hash; ?></p>
    <?php endif; ?>

</body>
</html>
