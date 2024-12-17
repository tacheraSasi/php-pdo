<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Page</title>
</head>
<body>
    <h1>Donate to Our Cause</h1>
    <form action="process_donation.php" method="POST">
        <label for="amount">Donation Amount:</label>
        <input type="number" id="amount" name="amount" min="1" required>
        <button type="submit">Donate</button>
    </form>
</body>
</html>
