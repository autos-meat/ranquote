<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Quote Generator</title>
</head>
<body>

    <h1>Random Quote Generator</h1>

    <?php
    include 'quote_generator.php';

    $quote = getRandomQuote();

    echo "<p>$quote</p>";
    ?>

</body>
</html>
