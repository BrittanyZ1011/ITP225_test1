<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputText = $_POST["inputText"];

    // Generate MD5 and SHA1 hashes
    $md5Hash = md5($inputText);
    $sha1Hash = sha1($inputText);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hashing Utility</title>
</head>
<body>
    <h2>Simple Hashing Utility (MD5 & SHA1)</h2>
    <form method="post">
        <label for="inputText">Enter text to hash:</label>
        <input type="text" name="inputText" required>
        <button type="submit">Generate Hashes</button>
    </form>

    <?php if (!empty($inputText)): ?>
        <h3>Results:</h3>
        <p><strong>Original Text:</strong> <?php echo htmlspecialchars($inputText); ?></p>
        <p><strong>MD5 Hash:</strong> <?php echo $md5Hash; ?></p>
        <p><strong>SHA1 Hash:</strong> <?php echo $sha1Hash; ?></p>
    <?php endif; ?>
</body>
</html>
