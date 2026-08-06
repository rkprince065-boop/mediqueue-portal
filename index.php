<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediQueue Hospital</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 font-sans pt-20">

    <!-- Dynamically pull in our new navigation bar -->
    <?php include 'navbar.php'; ?>

    <!-- Hero Section -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-32 flex flex-col lg:flex-row items-center gap-12">
        <div class="lg:w-1/2 space-y-8 text-center lg:text-left">
            <h1 class="text-5xl lg:text-6xl font-extrabold text-slate-900 leading-tight">
                Smart Healthcare, <br>
                <span class="text-blue-600">Simplified.</span>
            </h1>
            <p class="text-lg text-slate-600 max-w-2xl mx-auto lg:mx-0">
                A centralized, multi-clinic platform designed to streamline appointment scheduling, eliminate booking errors, and securely manage your medical records.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                <a href="login.php" class="bg-blue-600 hover:bg-blue-700 text-white font-bold px-8 py-4 rounded-xl shadow-lg transition-all transform hover:-translate-y-1">
                    Book Appointment
                </a>
                <a href="#features" class="bg-white border-2 border-slate-200 text-slate-700 hover:border-blue-600 hover:text-blue-600 font-bold px-8 py-4 rounded-xl transition-all">
                    Learn More
                </a>
            </div>
        </div>
        <div class="lg:w-1/2">
            <img src="https://images.unsplash.com/photo-1538108149393-fbbd81895907?q=80&w=2000&auto=format&fit=crop" alt="Hospital Technology" class="rounded-2xl shadow-2xl object-cover h-[500px] w-full">
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-900 py-12 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p class="text-slate-400 font-medium">
                © 2026 MediQueue Hospital | Made By <span class="text-blue-400">Coffee & Coders</span>
            </p>
        </div>
    </footer>

</body>
</html>