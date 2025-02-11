<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Input Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="fs-1">
    <div class="container mt-5 shadow p-5 bg-secondary-subtle">
        <h2>Enter Your Data</h2>
        <form action="result.php" method="post">
            <label for="number">Enter a number (e.g., birth year):</label>
            <input type="number" name="number" required><br><br>

            <label for="text">Enter a text message:</label>
            <input type="text" name="text" required><br><br>

            <input type="submit" value="Solve the Puzzle" class="btn btn-warning fs-1 fw-bold">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
