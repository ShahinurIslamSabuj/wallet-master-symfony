<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Accounts App</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
            font-family: 'Arial', sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        .account-form {
            max-width: 400px;
            margin: auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
        }

        .btn-submit {
            background-color: #007bff;
            color: #ffffff;
            width: 100%;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="account-form">
            <h2 class="text-center mb-4">Account Maintenance</h2>
            <form>
                <div class="form-group">
                    <label for="accountName">Account Name</label>
                    <input type="text" class="form-control" id="accountName" placeholder="Enter account name" required>
                </div>
                <div class="form-group">
                    <label for="balance">Balance</label>
                    <input type="number" class="form-control" id="balance" placeholder="Enter balance" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" rows="3" placeholder="Enter description"></textarea>
                </div>
                <button type="submit" class="btn btn-submit">Submit</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
