<?php
session_start();
require 'database.connection.php'; // Connect to the database

// Redirect if already logged in
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}

$error_message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($email) || empty($password)) {
        $error_message = "All form fields are mandatory.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = "Please provide a valid email format.";
    } else {
        // Professional Standard: Prepared Statements to prevent SQL Injection
        $stmt = $conn->prepare("SELECT user_id, email, password_hash, role FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($row = $result->fetch_assoc()) {
            // Verify the bcrypt hashed password
            if (password_verify($password, $row['password_hash'])) {
                session_regenerate_id(true); // Prevent session fixation
                
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['user_email'] = $row['email'];
                $_SESSION['user_role'] = $row['role'];
                $_SESSION['last_activity'] = time();

                header("Location: dashboard.php");
                exit();
            } else {
                $error_message = "Invalid password. Please try again.";
            }
        } else {
            $error_message = "No account found with that email address.";
        }
        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediQueue | Secure Sign In</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 font-sans flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-xl border border-slate-100 w-full max-w-md mx-4">
        <header class="mb-8 text-center">
            <h1 class="text-3xl font-bold text-blue-600">⚕️ MediQueue</h1>
            <p class="text-sm text-slate-500 mt-2">Sign in to manage your appointments.</p>
        </header>

        <?php if (!empty($error_message)): ?>
            <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-4 mb-6 text-sm" role="alert">
                <span class="font-medium">Error:</span> <?php echo htmlspecialchars($error_message); ?>
            </div>
        <?php endif; ?>

        <form action="login.php" method="POST" class="space-y-5">
            <div>
                <label for="email" class="block text-sm font-semibold text-slate-700 mb-1">Email Address</label>
                <input type="email" id="email" name="email" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none transition-all" placeholder="e.g., admin@mediqueue.org" value="<?php echo htmlspecialchars($email ?? ''); ?>">
            </div>
            <div>
                <label for="password" class="block text-sm font-semibold text-slate-700 mb-1">Password</label>
                <input type="password" id="password" name="password" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none transition-all" placeholder="••••••••">
            </div>
            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-lg transition-colors duration-200 shadow-md">
                Secure Sign-In
            </button>
        </form>
    </div>
</body>
</html>