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
        }

        .navbar {
            background-color: #879eb7;
        }

        .navbar-brand, .navbar-nav .nav-link {
            color: #ffffff;
        }

        .navbar-nav {
            margin-left: 5px;
        }

        .nav-item {
            margin-right: 15px;
        }

        .dropdown-menu {
            background-color: #f8f9fa;
            border: 1px solid #ced4da;
        }

        .dropdown-item {
            color: #343a40;
        }

        .profile-name {
            margin-right: 15px;
            font-weight: bold;
        }

        .profile-picture {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }
    </style>
</head>
<body>
<div>
    @yield("nav")
</div>
    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
