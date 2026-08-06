<?php
// Determine if a session exists safely
$is_logged_in = isset($_SESSION['user_id']);
?>
<header class="fixed top-0 left-0 w-full bg-white shadow-sm z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <div class="flex-shrink-0 flex items-center gap-2">
                <span class="text-2xl font-bold text-blue-600">⚕️ MediQueue</span>
            </div>
            
            <nav class="hidden md:flex space-x-8">
                <a href="index.php" class="text-slate-600 hover:text-blue-600 font-medium transition-colors">Home</a>
                <a href="features.php" class="text-slate-600 hover:text-blue-600 font-medium transition-colors">Features</a>
                <a href="contact.php" class="text-slate-600 hover:text-blue-600 font-medium transition-colors">Contact</a>
            </nav>

            <div class="hidden md:flex items-center space-x-4">
                <?php if ($is_logged_in): ?>
                    <a href="dashboard.php" class="text-slate-600 font-medium hover:text-blue-600">Dashboard</a>
                    <a href="logout.php" class="bg-red-50 text-red-600 hover:bg-red-100 px-5 py-2.5 rounded-lg font-semibold transition-colors">Log Out</a>
                <?php else: ?>
                    <a href="login.php" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2.5 rounded-lg font-semibold transition-colors shadow-sm">Sign In</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>