<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Use the Linkin Park image for favicon -->
    <link rel="apple-touch-icon" sizes="76x76" href="https://e7.pngegg.com/pngimages/841/884/png-clipart-linkin-park-the-hunting-party-tour-logo-musical-ensemble-lynyrd-skynyrd-miscellaneous-album-thumbnail.png" />
    <link rel="icon" type="image/png" href="https://e7.pngegg.com/pngimages/841/884/png-clipart-linkin-park-the-hunting-party-tour-logo-musical-ensemble-lynyrd-skynyrd-miscellaneous-album-thumbnail.png" />
    <title>Late Pharmacy</title>
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      :root {
        --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        --secondary-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
      }
      
      body {
        font-family: 'Inter', sans-serif;
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        min-height: 100vh;
      }
      
      .glass-effect {
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
      }
      
      .card-shadow {
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
      }
      
      .hover-lift {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }
      
      .hover-lift:hover {
        transform: translateY(-5px);
        box-shadow: 0 25px 80px rgba(0, 0, 0, 0.15);
      }
      
      .input-glow:focus {
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        border-color: #667eea;
      }
      
      .btn-gradient {
        background: var(--primary-gradient);
        transition: all 0.3s ease;
      }
      
      .btn-gradient:hover {
        background: linear-gradient(135deg, #5a6fd8 0%, #6a3f9c 100%);
        transform: scale(1.02);
      }
      
      .image-slider {
        animation: slide 18s infinite;
      }
      
      @keyframes slide {
        0%, 28% { opacity: 1; }
        33%, 61% { opacity: 0; }
        66%, 94% { opacity: 0; }
        100% { opacity: 1; }
      }
      
      .slide-1 { animation-delay: 0s; }
      .slide-2 { animation-delay: 6s; }
      .slide-3 { animation-delay: 12s; }
      
      .floating {
        animation: floating 3s ease-in-out infinite;
      }
      
      @keyframes floating {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
      }
      
      .feature-icon {
        background: var(--primary-gradient);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }
      
      .section-title {
        position: relative;
      }
      
      .section-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 3px;
        background: var(--primary-gradient);
        border-radius: 2px;
      }
      
      .contact-card {
        transition: all 0.3s ease;
        cursor: pointer;
      }
      
      .contact-card:hover {
        transform: translateY(-5px) scale(1.02);
      }
      
      .contact-link {
        transition: all 0.3s ease;
      }
      
      .contact-link:hover {
        color: #667eea !important;
        transform: translateX(5px);
      }
      
      .logo-image {
        object-fit: contain;
        border-radius: 8px;
        transition: transform 0.3s ease;
      }
      
      .logo-image:hover {
        transform: rotate(5deg);
      }
      
      .pharmacy-badge {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-weight: bold;
      }
    </style>
  </head>

  <body class="antialiased">
    <!-- Header -->
    <header class="fixed top-0 left-0 right-0 z-50 py-4">
      <div class="container mx-auto px-4">
        <nav class="glass-effect rounded-2xl px-6 py-3 flex items-center justify-between card-shadow">
          <!-- Logo with Linkin Park Image -->
         <a href="#" class="flex items-center space-x-3">
            <img src="https://e7.pngegg.com/pngimages/841/884/png-clipart-linkin-park-the-hunting-party-tour-logo-musical-ensemble-lynyrd-skynyrd-miscellaneous-album-thumbnail.png" 
                 alt="Late Pharmacy Logo" 
                 class="w-12 h-12 logo-image">
            <div>
              <h1 class="text-xl font-bold text-gray-800">Late Pharmacy</h1>
              <p class="text-xs text-gray-500">Pharmacy Management</p>
            </div> 
          </a>

          <!-- Navigation -->
          <div class="hidden md:flex items-center space-x-8">
            <a href="#about" class="text-gray-700 hover:text-blue-600 transition-colors duration-300 font-medium">
              <i class="fas fa-info-circle mr-2"></i>About Us
            </a>
            <a href="#contact" class="text-gray-700 hover:text-blue-600 transition-colors duration-300 font-medium">
              <i class="fas fa-phone-alt mr-2"></i>Contact Us
            </a>
            <a href="../pages/sign-up.php" class="text-gray-700 hover:text-blue-600 transition-colors duration-300 font-medium">
              <i class="fas fa-user-plus mr-2"></i>Sign Up
            </a>
          </div>

          <!-- Mobile menu button -->
          <button id="mobile-menu-button" class="md:hidden text-gray-700">
            <i class="fas fa-bars text-xl"></i>
          </button>
        </nav>
      </div>
    </header>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden fixed inset-0 z-40 hidden">
      <div class="absolute inset-0 bg-black bg-opacity-50" onclick="toggleMobileMenu()"></div>
      <div class="absolute right-0 top-0 h-full w-64 bg-white shadow-xl p-6">
        <div class="flex justify-between items-center mb-8">
          <h2 class="text-xl font-bold text-gray-800">Menu</h2>
          <button onclick="toggleMobileMenu()" class="text-gray-500 hover:text-gray-700">
            <i class="fas fa-times text-xl"></i>
          </button>
        </div>
        <div class="space-y-6">
          <a href="#about" class="block text-gray-700 hover:text-blue-600 transition-colors duration-300" onclick="toggleMobileMenu()">
            <i class="fas fa-info-circle mr-3"></i>About Us
          </a>
          <a href="#contact" class="block text-gray-700 hover:text-blue-600 transition-colors duration-300" onclick="toggleMobileMenu()">
            <i class="fas fa-phone-alt mr-3"></i>Contact Us
          </a>
          <a href="../pages/sign-up.php" class="block text-gray-700 hover:text-blue-600 transition-colors duration-300" onclick="toggleMobileMenu()">
            <i class="fas fa-user-plus mr-3"></i>Sign Up
          </a>
        </div>
      </div>
    </div>

    <!-- Main Content -->
    <main class="pt-24 pb-16">
      <!-- Hero Section -->
      <section class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row items-center gap-12">
          <!-- Login Form -->
          <div class="lg:w-5/12">
            <div class="bg-white rounded-3xl card-shadow p-8 hover-lift">
              <!-- Success Messages -->
              <?php if(isset($_SESSION["success"])): ?>
                <div class="mb-6 p-4 rounded-xl bg-gradient-to-r from-green-50 to-emerald-50 border border-green-200">
                  <div class="flex items-center">
                    <div class="flex-shrink-0">
                      <i class="fas fa-check-circle text-green-500 text-xl"></i>
                    </div>
                    <div class="ml-3">
                      <p class="text-green-700 font-medium"><?php echo $_SESSION["success"]; unset($_SESSION["success"]); ?></p>
                    </div>
                  </div>
                </div>
              <?php endif; ?>

              <!-- Error Messages -->
              <?php if(isset($_SESSION["emptyfield"])): ?>
                <div class="mb-6 p-4 rounded-xl bg-gradient-to-r from-red-50 to-pink-50 border border-red-200">
                  <div class="flex items-center">
                    <div class="flex-shrink-0">
                      <i class="fas fa-exclamation-circle text-red-500 text-xl"></i>
                    </div>
                    <div class="ml-3">
                      <p class="text-red-700 font-medium"><?php echo $_SESSION["emptyfield"]; unset($_SESSION["emptyfield"]); ?></p>
                    </div>
                  </div>
                </div>
              <?php endif; ?>

              <?php if(isset($_SESSION["invalidpassword"])): ?>
                <div class="mb-6 p-4 rounded-xl bg-gradient-to-r from-red-50 to-pink-50 border border-red-200">
                  <div class="flex items-center">
                    <div class="flex-shrink-0">
                      <i class="fas fa-exclamation-triangle text-red-500 text-xl"></i>
                    </div>
                    <div class="ml-3">
                      <p class="text-red-700 font-medium"><?php echo $_SESSION["invalidpassword"]; unset($_SESSION["invalidpassword"]); ?></p>
                    </div>
                  </div>
                </div>
              <?php endif; ?>

              <?php if(isset($_SESSION["invalideusname"])): ?>
                <div class="mb-6 p-4 rounded-xl bg-gradient-to-r from-red-50 to-pink-50 border border-red-200">
                  <div class="flex items-center">
                    <div class="flex-shrink-0">
                      <i class="fas fa-user-times text-red-500 text-xl"></i>
                    </div>
                    <div class="ml-3">
                      <p class="text-red-700 font-medium"><?php echo $_SESSION["invalideusname"]; unset($_SESSION["invalideusname"]); ?></p>
                    </div>
                  </div>
                </div>
              <?php endif; ?>

              <!-- Login Form Header -->
              <div class="text-center mb-8">
                <!-- Pharmacy Logo in Login Form -->
                <div class="w-24 h-24 mx-auto mb-4 rounded-full bg-gradient-to-br from-blue-100 to-purple-100 flex items-center justify-center p-1 floating">
                  <img src="https://e7.pngegg.com/pngimages/841/884/png-clipart-linkin-park-the-hunting-party-tour-logo-musical-ensemble-lynyrd-skynyrd-miscellaneous-album-thumbnail.png" 
                       alt="Late Pharmacy Logo" 
                       class="w-full h-full rounded-full object-cover">
                </div>
                <h2 class="text-3xl font-bold text-gray-800 mb-2">Welcome Back</h2>
                <p class="text-gray-600">Sign in to access your pharmacy dashboard</p>
              </div>

              <!-- Login Form -->
              <form action="includes/login_inc.php" method="post" class="space-y-6">
                <div class="space-y-2">
                  <label class="text-sm font-medium text-gray-700 flex items-center">
                    <i class="fas fa-user-circle mr-2 text-blue-500"></i>
                    Username
                  </label>
                  <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                      <i class="fas fa-user text-gray-400"></i>
                    </div>
                    <input type="text" name="username" 
                           class="pl-10 w-full px-4 py-3 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 input-glow"
                           placeholder="Enter your username">
                  </div>
                </div>

                <div class="space-y-2">
                  <label class="text-sm font-medium text-gray-700 flex items-center">
                    <i class="fas fa-lock mr-2 text-blue-500"></i>
                    Password
                  </label>
                  <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                      <i class="fas fa-key text-gray-400"></i>
                    </div>
                    <input type="password" name="password"
                           class="pl-10 w-full px-4 py-3 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 input-glow"
                           placeholder="Enter your password">
                  </div>
                </div>


                <button type="submit" name="submit"
                        class="w-full py-3 px-4 rounded-xl btn-gradient text-white font-semibold shadow-lg hover:shadow-xl transition-all duration-600">
                  <i class="fas fa-sign-in-alt mr-2"></i>Sign In
                </button>

                <div class="text-center">
                  <p class="text-gray-600">
                    Don't have an account?
                    <a href="../pages/sign-up.php" class="text-blue-600 hover:text-blue-700 font-semibold transition-colors">
                      Sign up here
                    </a>
                  </p>
                </div>
              </form>
            </div>
          </div>

          <!-- Image Slider -->
          <div class="lg:w-7/12">
            <div class="relative rounded-3xl overflow-hidden card-shadow">
              <div class="image-slider slide-1">
                <img src="https://plus.unsplash.com/premium_photo-1661766456250-bbde7dd079de?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8cGhhcm1hY3l8ZW58MHx8MHx8fDA%3D" 
                     alt="Pharmacy 1" class="w-full h-[500px] object-cover">
              </div>
              <div class="image-slider slide-2 absolute top-0 left-0 w-full">
                <img src="https://images.unsplash.com/photo-1631549916768-4119b2e5f926?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8cGhhcm1hY3l8ZW58MHx8MHx8fDA%3D" 
                     alt="Pharmacy 2" class="w-full h-[500px] object-cover">
              </div>
              <div class="image-slider slide-3 absolute top-0 left-0 w-full">
                <img src="https://media.istockphoto.com/id/2176619433/photo/asia-female-pharmacist-using-digital-tablet-while-taking-inventory.webp?a=1&b=1&s=612x612&w=0&k=20&c=_hwrS1AI5HM7uzUoBWtwXWaW44XlzXLGc0zQO7hG-Mk=" 
                     alt="Pharmacy 3" class="w-full h-[500px] object-cover">
              </div>
              
              <!-- Overlay Content -->
              <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-8">
                <div class="text-white">
                  <h3 class="text-2xl font-bold mb-2">24/7 Pharmacy Services</h3>
                  <p class="opacity-90">Professional healthcare services whenever you need them</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- About Us Section -->
      <section id="about" class="container mx-auto px-4 mt-20 pt-16">
        <div class="text-center mb-12">
          <h2 class="section-title text-3xl font-bold text-gray-800 inline-block">About Us</h2>
          <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Learn more about our pharmacy and our commitment to your health</p>
        </div>
        
        <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-3xl p-8 md:p-12 card-shadow">
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
            <div>
              <div class="flex items-center mb-6">
                <img src="https://e7.pngegg.com/pngimages/841/884/png-clipart-linkin-park-the-hunting-party-tour-logo-musical-ensemble-lynyrd-skynyrd-miscellaneous-album-thumbnail.png" 
                    alt="Late Pharmacy Logo" 
                    class="w-16 h-16 logo-image mr-4">
                <div>
                  <h3 class="text-2xl font-bold text-gray-800">Late Pharmacy Story</h3>
                  <p class="text-gray-600">Established 2010</p>
                </div>
              </div>
              <p class="text-gray-700 mb-4">
                The Pharmacy Management System is a digital solution designed to simplify and automate daily pharmacy operations. The system helps pharmacies manage their business efficiently by organizing customers, suppliers, medicines, and invoices in one secure platform. It reduces manual work, minimizes errors, and improves overall productivity.
              </p>
              <div class="grid grid-cols-2 gap-4">
                <div class="flex items-center">
                  <i class="fas fa-check-circle text-green-500 mr-2"></i>
                  <span class="text-gray-700">Certified Pharmacists</span>
                </div>
                <div class="flex items-center">
                  <i class="fas fa-check-circle text-green-500 mr-2"></i>
                  <span class="text-gray-700">24/7 Services</span>
                </div>
                <div class="flex items-center">
                  <i class="fas fa-check-circle text-green-500 mr-2"></i>
                  <span class="text-gray-700">Digital Prescriptions</span>
                </div>
              </div>
            </div>
            
            <div class="relative">
              <div class="bg-white p-6 rounded-2xl card-shadow">
                <div class="flex items-center mb-6">
                  <div class="w-12 h-12 rounded-full bg-gradient-to-r from-blue-600 to-purple-600 flex items-center justify-center">
                    <i class="fas fa-heartbeat text-white text-xl">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                      <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                    </svg>

                    </i>
                  </div>
                  <div class="ml-4">
                    <h4 class="font-bold text-gray-800">Our Mission</h4>
                    <p class="text-sm text-gray-600">Health & Wellness First</p>
                  </div>
                </div>
                <p class="text-gray-700 italic border-l-4 border-blue-500 pl-4 py-2">
                  "Our mission is to provide an efficient, reliable, and user-friendly Pharmacy Management System that supports smooth pharmacy operations. The system focuses on accuracy, speed, and easy access to information, enabling pharmacists and staff"
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Contact Us Section -->
      <section id="contact" class="container mx-auto px-4 mt-20 pt-16">
        <div class="text-center mb-12">
          <h2 class="section-title text-3xl font-bold text-gray-800 inline-block">Contact Us</h2>
          <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Get in touch with us for any inquiries or support</p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
          <!-- Contact Information Cards -->
          <div class="space-y-6">
            <!-- Phone Contact Card -->
            <div class="bg-white rounded-2xl p-6 card-shadow contact-card">
              <div class="flex items-start">
                <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center flex-shrink-0">
                  <i class="fas fa-phone-alt text-blue-600 text-xl">
                  </i>
                </div>
                <div class="ml-4">
                  <h4 class="font-bold text-gray-800 text-lg">Phone Numbers</h4>
                  <div class="mt-4 space-y-3">
                    <div class="flex items-center contact-link">
                      <i class="fas fa-phone text-blue-500 mr-3"></i>
                      <a href="tel:+1234567890" class="text-gray-700 hover:text-blue-600 transition-colors text-lg font-medium">
                        +1 (123) 456-7890
                      </a>
                    </div>
                    <div class="flex items-center contact-link">
                      <i class="fas fa-mobile-alt text-blue-500 mr-3"></i>
                      <a href="tel:+0987654321" class="text-gray-700 hover:text-blue-600 transition-colors text-lg font-medium">
                        +0 (987) 654-321
                      </a>
                    </div>
                    <div class="flex items-center contact-link">
                      <i class="fas fa-headset text-blue-500 mr-3"></i>
                      <a href="tel:+1122334455" class="text-gray-700 hover:text-blue-600 transition-colors text-lg font-medium">
                        +1 (122) 334-455 (Emergency)
                      </a>
                    </div>
                  </div>
                  <p class="text-sm text-gray-500 mt-4">
                    <i class="fas fa-info-circle mr-1"></i>
                    Available 24/7 for all your medical needs
                  </p>
                </div>
              </div>
            </div>
            
            <!-- Email Contact Card -->
            <div class="bg-white rounded-2xl p-6 card-shadow contact-card">
              <div class="flex items-start">
                <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0">
                  <i class="fas fa-envelope text-green-600 text-xl">

                     
                  </i>
                </div>
                <div class="ml-4">
                  <h4 class="font-bold text-gray-800 text-lg">Email Addresses</h4>
                  <div class="mt-4 space-y-3">
                    <div class="flex items-center contact-link">
                      <i class="fas fa-envelope-open-text text-green-500 mr-3"></i>
                      <a href="mailto:info@latepharmacy.com" class="text-gray-700 hover:text-green-600 transition-colors text-lg font-medium">
                        info@latepharmacy.com
                      </a>
                    </div>
                    <div class="flex items-center contact-link">
                      <i class="fas fa-comment-medical text-green-500 mr-3"></i>
                      <a href="mailto:support@latepharmacy.com" class="text-gray-700 hover:text-green-600 transition-colors text-lg font-medium">
                        support@latepharmacy.com
                      </a>
                    </div>
                    <div class="flex items-center contact-link">
                      <i class="fas fa-first-aid text-green-500 mr-3"></i>
                      <a href="mailto:emergency@latepharmacy.com" class="text-gray-700 hover:text-green-600 transition-colors text-lg font-medium">
                        emergency@latepharmacy.com
                      </a>
                    </div>
                  </div>
                  <p class="text-sm text-gray-500 mt-4">
                    <i class="fas fa-clock mr-1"></i>
                    Response time: Within 2 hours
                  </p>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Contact Hours & Location -->
          <div class="space-y-6">
            <!-- Location Card -->
            <div class="bg-white rounded-2xl p-6 card-shadow hover-lift">
              <div class="flex items-start">
                <div class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center">
                  <i class="fas fa-map-marker-alt text-purple-600 text-xl">

                  </i>
                </div>
                <div class="ml-4">
                  <h4 class="font-bold text-gray-800 text-lg">Our Location</h4>
                  <div class="mt-3">
                    <p class="text-gray-700">
                      <i class="fas fa-building mr-2 text-purple-500"></i>
                      Late Pharmacy Center
                    </p>
                    <p class="text-gray-700 mt-2">
                      <i class="fas fa-map-pin mr-2 text-purple-500"></i>
                      123 Pharmacy Street, Healthcare City
                    </p>
                    <p class="text-gray-700 mt-2">
                      <i class="fas fa-city mr-2 text-purple-500"></i>
                      Puttalam District, Sri Lanka
                    </p>
                  </div>
                  <div class="mt-4 p-3 bg-purple-50 rounded-lg">
                    <p class="text-sm text-purple-700">
                      <i class="fas fa-car mr-1"></i>
                      Free parking available at the rear of the building
                    </p>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Working Hours Card -->
            <div class="bg-white rounded-2xl p-6 card-shadow hover-lift">
              <div class="flex items-start">
                <div class="w-12 h-12 rounded-full bg-yellow-100 flex items-center justify-center">
                  <i class="fas fa-clock text-yellow-600 text-xl">

                  </i>
                </div>
                <div class="ml-4">
                  <h4 class="font-bold text-gray-800 text-lg">Working Hours</h4>
                  <div class="mt-4 space-y-2">
                    <div class="flex justify-between items-center">
                      <span class="text-gray-700">Monday - Friday</span>
                      <span class="font-semibold text-blue-600">24 Hours</span>
                    </div>
                    <div class="flex justify-between items-center">
                      <span class="text-gray-700">Saturday</span>
                      <span class="font-semibold text-blue-600">12 Hours</span>
                    </div>
                    <div class="flex justify-between items-center">
                      <span class="text-gray-700">Sunday</span>
                      <span class="font-semibold text-blue-600">12 Hours</span>
                    </div>
                  </div>
                  <div class="mt-4 p-3 bg-yellow-50 rounded-lg">
                    <p class="text-sm text-yellow-700">
                      <i class="fas fa-exclamation-circle mr-1"></i>
                      Emergency services available at all times
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12 mt-20">
      <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
          <div>
            <!-- Footer Logo with Linkin Park Image -->
            <div class="flex items-center space-x-3 mb-4">
              <img src="https://e7.pngegg.com/pngimages/841/884/png-clipart-linkin-park-the-hunting-party-tour-logo-musical-ensemble-lynyrd-skynyrd-miscellaneous-album-thumbnail.png" 
                   alt="Late Pharmacy Logo" 
                   class="w-12 h-12 logo-image">
              <div>
                <h3 class="text-xl font-bold">Late Pharmacy</h3>
                <p class="text-sm text-gray-400">Health First Always</p>
              </div>
            </div>
            <p class="text-gray-400">Providing exceptional pharmaceutical care since 2010.</p>
          </div>
          
          <div>
            <h4 class="text-lg font-bold mb-4">Quick Links</h4>
            <ul class="space-y-2">
              <li><a href="#about" class="text-gray-400 hover:text-white transition-colors">About Us</a></li>
              <li><a href="#contact" class="text-gray-400 hover:text-white transition-colors">Contact Us</a></li>
              <li><a href="../pages/sign-up.php" class="text-gray-400 hover:text-white transition-colors">Sign Up</a></li>
            </ul>
          </div>
          
          <div>
            <h4 class="text-lg font-bold mb-4">Services</h4>
            <ul class="space-y-2">
              <li class="text-gray-400">Manage Customers</li>
              <li class="text-gray-400">Manage Suppliers</li>
              <li class="text-gray-400">Manage Medicines</li>
              <li class="text-gray-400">Manage Invoices</li>
            </ul>
          </div>
          
          <div>
            <h4 class="text-lg font-bold mb-4">Emergency Contact</h4>
            <div class="space-y-3">
              <div class="flex items-center">
                <i class="fas fa-phone text-blue-400 mr-3"></i>
                <a href="tel:+1122334455" class="text-gray-400 hover:text-white transition-colors">
                  +1 (122) 334-455
                </a>
              </div>
              <div class="flex items-center">
                <i class="fas fa-envelope text-green-400 mr-3"></i>
                <a href="mailto:emergency@latepharmacy.com" class="text-gray-400 hover:text-white transition-colors">
                  emergency@latepharmacy.com
                </a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="border-t border-gray-800 mt-8 pt-8 text-center">
          <p class="text-gray-400">© 2025 Late Pharmacy Management System. All rights reserved.</p>
        </div>
      </div>
    </footer>

    <script>
      // Mobile menu toggle
      function toggleMobileMenu() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
      }

      // Initialize mobile menu button
      document.getElementById('mobile-menu-button').addEventListener('click', toggleMobileMenu);

      // Smooth scrolling for anchor links
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
          e.preventDefault();
          const target = document.querySelector(this.getAttribute('href'));
          if (target) {
            target.scrollIntoView({
              behavior: 'smooth',
              block: 'start'
            });
          }
        });
      });

      // Add click effects to contact cards
      document.querySelectorAll('.contact-card').forEach(card => {
        card.addEventListener('click', function() {
          this.style.transform = 'scale(0.98)';
          setTimeout(() => {
            this.style.transform = '';
          }, 200);
        });
      });

      // Make phone and email links more interactive
      document.querySelectorAll('a[href^="tel:"], a[href^="mailto:"]').forEach(link => {
        link.addEventListener('click', function(e) {
          console.log('Contact link clicked:', this.href);
        });
      });
    </script>
  </body>
</html>