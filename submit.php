<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $gender = htmlspecialchars($_POST['gender']);
    $course = htmlspecialchars($_POST['course']);
    $address = htmlspecialchars($_POST['address']);
    
    echo "<!DOCTYPE html>";
    echo "<html lang='en'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>Submission Successful</title>";
    echo "<link rel='stylesheet' href='style.css'>";
    echo "</head>";
    echo "<body>";
    echo "<div class='form-container'>";
    echo "<h1>Submission Successful!</h1>";
    echo "<p>Thank you for registering, <strong>$name</strong>. Here are your details:</p>";
    echo "<ul>";
    echo "<li><strong>Email:</strong> $email</li>";
    echo "<li><strong>Phone:</strong> $phone</li>";
    echo "<li><strong>Gender:</strong> $gender</li>";
    echo "<li><strong>Course:</strong> $course</li>";
    echo "<li><strong>Address:</strong> $address</li>";
    echo "</ul>";
    echo "<a href='index.html'><button>Go Back</button></a>";
    echo "</div>";
    echo "</body>";
    echo "</html>";
}
?>
