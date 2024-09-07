<?php
include 'database/db_connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo '<script language="javascript">';
        echo 'alert("message successfully sent")';
        echo '</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Sigma Code</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="contact.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand " href="#">Sigma Code</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Class</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">FAQ</a></li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
                    <li class="nav-item"><a class="btn btn-primary" href="#">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Contact Us Section -->
    <section class="contact-us py-5 mx-auto">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Contact us</h2>
                    <form method="post">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="name" name="name">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Email" name="email">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="5" placeholder="Message" name="message"></textarea>
                        </div>
                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="newsletterCheck">
                            <label class="form-check-label" for="newsletterCheck">
                                I would like to receive the newsletter.
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <p>Borem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</p>
                    <div class="mb-3">
                        <img src="SMK.png" alt="Map" class="img-fluid">
                    </div>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-geo-alt-fill"></i> NYC, United States</li>
                        <li><i class="bi bi-telephone-fill"></i> 00011222333</li>
                        <li><i class="bi bi-envelope-fill"></i> somebody@gmail.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
      <!-- Footer -->
      <footer class="py-4 bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h5>Company</h5>
                    <ul class="list-unstyled">
                        <li><a href="about.html" class="text-light">About us</a></li>
                        <li><a href="#" class="text-light">Blog</a></li>
                        <li><a href="#" class="text-light">Contact us</a></li>
                        <li><a href="#" class="text-light">Pricing</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Support</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light">Help center</a></li>
                        <li><a href="#" class="text-light">Terms of service</a></li>
                        <li><a href="#" class="text-light">Legal</a></li>
                        <li><a href="#" class="text-light">Privacy policy</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Follow Us</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light">Facebook</a></li>
                        <li><a href="#" class="text-light">Instagram</a></li>
                        <li><a href="#" class="text-light">Twitter</a></li>
                        <li><a href="#" class="text-light">YouTube</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Stay up to date</h5>
                    <input type="email" class="form-control mb-2" placeholder="Your email address">
                    <button class="btn btn-primary">Subscribe</button>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
