<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construction Admin - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        .auth-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f5f0e8; /* Light construction-like background */
        }
        .auth-card {
            max-width: 500px;
            width: 100%;
            border: 1px solid #8c6b3e; /* Construction-themed border */
            background-color: #fff;
        }
        .auth-card .card-header {
            background-color: #d4a373; /* Sandy beige */
            color: #3d2c1e;
        }
        .btn-primary {
            background-color: #3d2c1e;
            border-color: #3d2c1e;
        }
        .btn-primary:hover {
            background-color: #5b3e2b;
            border-color: #5b3e2b;
        }
        @media (max-width: 576px) {
            .auth-card {
                margin: 10px;
            }
            .form-label, .form-control {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <div class="auth-container">
        <div class="auth-card card">
            <div class="card-header text-center">
                <h3>Construction Admin Login</h3>
            </div>
            <div class="card-body">
                <!-- Login Form -->
                <form id="loginForm">
                    <div class="mb-3">
                        <label for="loginEmail" class="form-label"><i class="fas fa-envelope me-2"></i>Email</label>
                        <input type="email" class="form-control" id="loginEmail" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <label for="loginPassword" class="form-label"><i class="fas fa-lock me-2"></i>Password</label>
                        <input type="password" class="form-control" id="loginPassword" placeholder="Enter your password" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100"><i class="fas fa-sign-in-alt me-2"></i>Login</button>
                </form>
                <div class="text-center mt-3">
                    <a href="#" class="text-muted">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Login Form Submission
        document.getElementById('loginForm').addEventListener('submit', function (e) {
            e.preventDefault();
            const email = document.getElementById('loginEmail').value;
            const password = document.getElementById('loginPassword').value;
            if (email && password) {
                alert(`Logging in with email: ${email}`);
                // Add backend logic here (e.g., API call)
                window.location.href = 'categories.html'; // Redirect to categories page
            } else {
                alert('Please fill in all fields.');
            }
        });
    </script>
</body>
</html>
