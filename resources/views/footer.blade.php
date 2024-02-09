~
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Smart Website</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
            font-family: 'Arial', sans-serif;
            margin-bottom: 60px; /* Adjust margin to make space for the footer */
        }

        .footer {
            background-color: #007bff;
            color: #ffffff;
            padding: 20px 0;
        }

        .footer-columns {
            display: flex;
            justify-content: space-between;
        }

        .footer-column {
            flex: 0 0 30%; /* Adjust column width as needed */
            max-width: 30%;
        }

        .footer-links a {
            color: #ffffff;
            text-decoration: none;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }

        .social-media-icons a {
            color: #ffffff;
            margin-right: 15px;
        }

        .social-media-icons a:hover {
            color: #ffffff;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <!-- Your website content goes here -->

    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <div class="footer-columns">
                <!-- Navigation Links -->
                <div class="footer-column footer-links">
                    <h5>Navigation</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>

                <!-- Contact Information -->
                <div class="footer-column">
                    <h5>Contact Us</h5>
                    <p>Email: info@example.com</p>
                    <p>Phone: +1 (123) 456-7890</p>
                </div>

                <!-- Social Media Links -->
                <div class="footer-column social-media-icons">
                    <h5>Follow Us</h5>
                    <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
