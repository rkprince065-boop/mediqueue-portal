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
                <a href="features.html" class="bg-white border-2 border-slate-200 text-slate-700 hover:border-blue-600 hover:text-blue-600 font-bold px-8 py-4 rounded-xl transition-all">
                    Learn More
                </a>
            </div>
        </div>
        <div class="lg:w-1/2">
            <img src="https://images.unsplash.com/photo-1538108149393-fbbd81895907?q=80&w=2000&auto=format&fit=crop" alt="Hospital Technology" class="rounded-2xl shadow-2xl object-cover h-[500px] w-full">
        </div>
    </section>
<!-- --------------------------X------------------ -->
<style>
  .logo{
font-size:28px;
font-weight:bold;
color:#0077ff;
}

nav ul{

display:flex;
list-style:none;
gap:40px;

}

nav a{

text-decoration:none;
font-weight:600;
color:#333;

}

nav a:hover{
color:#0077ff;
}

.menu{
display:none;
font-size:25px;
cursor:pointer;
}

.hero{

display:flex;
justify-content:space-between;
align-items:center;

padding:150px 10% 80px;

min-height:100vh;

}

.hero-text{

max-width:500px;

}

.hero h1{

font-size:55px;
margin-bottom:20px;

}

.hero p{

font-size:20px;
margin-bottom:30px;
color:#666;

}

.buttons{

display:flex;
gap:20px;

}

.btn{

padding:15px 35px;

background:#0077ff;
color:white;

border:none;
border-radius:5px;

cursor:pointer;

}

.btn-outline{

padding:15px 35px;

background:white;
color:#0077ff;

border:2px solid #0077ff;
border-radius:5px;

cursor:pointer;

}

.hero img{

width:100%;
max-width:550px;

border-radius:15px;

}

.features{

padding:100px 10%;
text-align:center;

}

.features h2{
margin-bottom:50px;
font-size:40px;
}

.cards{

display:grid;

grid-template-columns:
repeat(auto-fit,minmax(250px,1fr));

gap:30px;

}

.card{

background:white;

padding:40px;

border-radius:10px;

box-shadow:0 10px 20px rgba(0,0,0,.08);

transition:.3s;

}

.card:hover{

transform:translateY(-10px);

}

.card i{

font-size:50px;
color:#0077ff;

margin-bottom:20px;

}

.about{

padding:100px 10%;
text-align:center;

}

.contact{

padding:100px 10%;

}

.contact h2{

text-align:center;
margin-bottom:30px;

}

form{

display:flex;
flex-direction:column;

gap:20px;

max-width:600px;
margin:auto;

}

input,textarea{

padding:15px;
border:1px solid #ccc;

border-radius:5px;

}

textarea{

height:150px;

}

form button{

padding:15px;

background:#0077ff;

color:white;

border:none;

cursor:pointer;

}
      
</style>
<!-- Hero-1 -->

    <section class="hero" id="home">

        <div class="hero-text">

            <h1>                                
                Our Hospital's Information 🏥
            </h1>

            <p>

                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea possimus harum nam, dolor at eos illum. Modi ex explicabo consectetur.

            </p>

            <div class="buttons">

                <button class="btn">
                    <a href="login.php">
                    Get Started
                    </a>
                </button>

                <button class="btn-outline">
                    <a href="features.html"> Learn More </a>
                </button>

            </div>

        </div>

        <div class="hero-image">

            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3Nfmu9cWWTZNbNMi5JtfVARRibtC7SKPIhIah6YeFoA&s=10"
                alt="Hero">

        </div>

    </section>

   
<!-- Hero-2 -->

    <section class="hero" id="home">

        <div class="hero-text">

            <h1>
                Our Doctor's Information
            </h1>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo at nihil illum accusantium fuga voluptas eaque hic dolor, soluta nemo?

            </p>

            <div class="buttons">

                <button class="btn">
                    <a href="login.php">
                    Get Started
                    </a>
                </button>

                <button class="btn-outline">
                    <a href="features.html"> Learn More </a>
                </button>

            </div>

        </div>

        <div class="hero-image">

            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvxu61b58TI91Mo06mde0ojgzVk8uBGE4T9dzXR2NRcQ&s=10"
                alt="Hero">

        </div>

    </section>

   
<!-- Hero-3 -->

    <section class="hero" id="home">

        <div class="hero-text">

            <h1>
                Diseases Information
            </h1>

            <p>

                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, quis. Minima cupiditate perspiciatis voluptatibus vel quam doloribus odit nisi necessitatibus.

            </p>

            <div class="buttons">

                <button class="btn">
                   <a href="login.php">
                    Get Started
                    </a>
                </button>

                <button class="btn-outline">
                    <a href="features.html"> Learn More </a>
                </button>

            </div>

        </div>

        <div class="hero-image">

            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGiCQr1QzEsFkIp39T6Qdh0dj1AslXC3da-0Vy7zTTQg&s=10"
                alt="Hero">

        </div>

    </section>

   
<!-- Hero-4 -->

    <section class="hero" id="home">

        <div class="hero-text">

            <h1>
                Cure Diseases
            </h1>

            <p>

                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil magni natus repellendus totam possimus, veritatis quis mollitia soluta voluptas facilis minus, id neque dolores, unde hic fugit itaque excepturi recusandae!

            </p>

            <div class="buttons">

                <button class="btn">
                    <a href="login.php">
                    Get Started
                    </a>
                </button>

                <button class="btn-outline">
                    <a href="features.html"> Learn More </a>
                </button>

            </div>

        </div>

        <div class="hero-image">

            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLe4tSZ7kr9CGGuzlbS5Vbj67Fg5J9-vc1U-8x8FSANg&s=10"
                alt="Hero">

        </div>

    </section>

   
<!-- Hero-5 -->

    <section class="hero" id="home">

        <div class="hero-text">

            <h1>
                We Care 
            </h1>

            <p>

                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor rem facilis esse dolorem, quos, aliquid provident cupiditate tenetur eos qui cumque saepe id, dolorum officiis odio velit placeat voluptatum iusto!

            </p>

            <div class="buttons">

                <button class="btn">
                    <a href="login.php">
                    Get Started
                    </a>
                </button>

                <button class="btn-outline">
                    <a href="features.html"> Learn More </a>
                </button>

            </div>

        </div>

        <div class="hero-image">

            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSc1RpSZAVuhf6XP54kGuDsiD03wvECx5tjDPj5wp65Aw&s=10"
                alt="Hero">

        </div>

    </section>

   
  
<!-- Hero-6 -->

    <section class="hero" id="home">

        <div class="hero-text">

            <h1>
                Medicine  
            </h1>

            <p>

                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor rem facilis esse dolorem, quos, aliquid provident cupiditate tenetur eos qui cumque saepe id, dolorum officiis odio velit placeat voluptatum iusto!

            </p>

            <div class="buttons">

                <button class="btn">
                    <a href="login.php">
                    Get Started
                    </a>
                </button>

                <button class="btn-outline">
                    <a href="features.html"> Learn More </a>
                </button>

            </div>

        </div>

        <div class="hero-image">

            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIFGWxobqgSLnp2ahA16AdugQIcXd3ZarZOBXyIfLA0A&s=10"
                alt="Hero">

        </div>

    </section>

   

     
<!-- Hero-6 -->

    <section class="hero" id="home">

        <div class="hero-text">

            <h1>
                Specialized Clinics 
            </h1>

            <p>

                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor rem facilis esse dolorem, quos, aliquid provident cupiditate tenetur eos qui cumque saepe id, dolorum officiis odio velit placeat voluptatum iusto!

            </p>

            <div class="buttons">

                <button class="btn">
                    <a href="login.php">
                    Get Started
                    </a>
                </button>

                <button class="btn-outline">
                    <a href="features.html"> Learn More </a>
                </button>

            </div>

        </div>

        <div class="hero-image">

            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbnFGtxiKkk8NlRfmEjHwQn89MZsIRMgYZegO4CNc-EA&s=10"
                alt="Hero">

        </div>

    </section>
 

        
<!-- Hero-7 -->

    <section class="hero" id="home">

        <div class="hero-text">

            <h1>
                Specializer's Advice
            </h1>

            <p>

                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor rem facilis esse dolorem, quos, aliquid provident cupiditate tenetur eos qui cumque saepe id, dolorum officiis odio velit placeat voluptatum iusto!

            </p>

            <div class="buttons">

                <button class="btn">
                    <a href="login.php">
                    Get Started
                    </a>
                </button>

                <button class="btn-outline">
                    <a href="features.html"> Learn More </a>
                </button>

            </div>

        </div>

        <div class="hero-image">

                <video src="" controls width="500px" autoplay muted ></video>

        </div>

    </section>
 
    
    
 <!-- Hero-8 -->

    <section class="hero" id="home">

        <div class="hero-text">

            <h1>
                Patients Openion 
            </h1>

            <p>

                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor rem facilis esse dolorem, quos, aliquid provident cupiditate tenetur eos qui cumque saepe id, dolorum officiis odio velit placeat voluptatum iusto!

            </p>

            <div class="buttons">

                <button class="btn">
                    <a href="login.php">
                    Get Started
                    </a>
                </button>

                <button class="btn-outline">
                    <a href="features.html"> Learn More </a>
                </button>

            </div>

        </div>

        <div class="hero-image">

                <video controls autoplay muted>
        <source src="" type="">
    </video>

        </div>

    </section>
 


     <!-- Hero-9 -->

    <section class="hero" id="home">

        <div class="hero-text">

            <h1>
                Our Channel 
            </h1>

            <p>

                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor rem facilis esse dolorem, quos, aliquid provident cupiditate tenetur eos qui cumque saepe id, dolorum officiis odio velit placeat voluptatum iusto!

            </p>

            <div class="buttons">

                <button class="btn">
                    <a href="login.php">
                    Get Started
                    </a>
                </button>

                <button class="btn-outline">
                    <a href="features.html"> Learn More </a>
                </button>

            </div>

        </div>

        <div class="hero-image">

            <iframe width="500" height="300" src="https://www.youtube.com/embed/BjCDBQEQzI8" title="বাংলাদেশের সেরা ১০ জন ডাক্তার। Top 10 doctors in Bangladeshi। বাংলাদেশের সেরা ১০ জন  চিকিৎসক।" frameborder="10" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        </div>

    </section>
 




<section class="features" id="features">
    <div class="cards">

        <div class="card">

            <i class="fas fa-address-card"> </i> 
                <p class="" style="padding-bottom: 30px; font-family:Arial,Helvetica,sans-serif;">
                    Are you a <strong>patient</strong> ? Then get the <em>appointment serial token ☟.</em>
                </p> 
            <a href="login.php" class="btn-outline"  style="text-decoration: none;"
             >Sign Up
            </a>
            
        </div>

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