<!-- Comments have been added throught the file to ensure readability
I have aimed to created the form page based on the website provided. -->
<?php
// This will ensure only one form is shown on the page
header("Cache-Control: no-cache, must-revalidate, max-age=0");
header("Expires: 0");
header("Pragma: no-cache");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // These will be the inputs
    $fullName = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $rating = (int)$_POST['rating'];

    // Gif from giphy.com
    $gifPath = "img/thank_you.gif";

    // This will retrieve the user's name
    $firstName = explode(' ', $fullName)[0];

    // This will display the thank-you message with the GIF
    echo <<<HTML
    <div class="thank-you-container d-flex flex-column justify-content-center align-items-center text-center vh-100">
        <h1 class="mb-3">Thank You, $firstName!</h1>
        <p class="mb-4">We appreciate your feedback. You rated us $rating/5!</p>
        <img src="$gifPath" alt="Feedback GIF" class="mb-4" style="width: 300px; height: auto;">
        <a href="index.php" class="btn btn-primary btn-lg px-4">Submit Another Rating</a>
    </div>
    HTML;

    exit;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rate Our Workshop</title>
    <!-- Bootstrap reference -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container mt-5">
        <header class="text-center mb-4">
            <h1>Rate Botterill & Bartlett’s 1-Day Business Workshop!</h1>
        </header>
        <main>
            <p class="text-center">We’re all ears! How was it for you? Rate us from 1 (awful) to 5 (awesome).</p>
            <form method="POST" id="ratingForm" class="p-4 rounded shadow">
                <div class="mb-3">
                    <label for="fullname" class="form-label">Full Name</label>
                    <input type="text" id="fullname" name="fullname" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="rating" class="form-label">Your Rating</label>
                    <select id="rating" name="rating" class="form-select" required>
                        <option value="" selected disabled>Choose a rating</option>
                        <option value="1">1 - Awful</option>
                        <option value="2">2 - Not Great</option>
                        <option value="3">3 - Okay</option>
                        <option value="4">4 - Good</option>
                        <option value="5">5 - Awesome</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit Your Rating</button>
            </form>
        </main>
    </div>
    <!-- This is the Js reference -->
    <script src="js/script.js"></script>
</body>
</html>
