<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>شرکت پروبیوتیک | سلامت روده، سلامت زندگی</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Vazirmatn:wght@400;500;700&display=swap');
    
    body {
      font-family: 'Vazirmatn', sans-serif;
      min-height: 100vh;
      background-color: #f0fdf4;
    }
    
    .glow-container {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
      overflow: hidden;
    }
    
    .glow-effect {
      position: absolute;
      width: 200%;
      height: 200%;
      background: radial-gradient(
        circle at center, 
        rgba(34, 197, 94, 0.4) 0%,
        rgba(34, 197, 94, 0.2) 50%,
        transparent 70%
      );
      animation: glow-move 15s infinite alternate ease-in-out;
    }
    
    @keyframes glow-move {
      0% {
        transform: translate(-30%, -20%);
      }
      50% {
        transform: translate(10%, 10%);
      }
      100% {
        transform: translate(20%, 30%);
      }
    }
    
    .section-container {
      background-color: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(8px);
      border-radius: 1rem;
      box-shadow: 0 4px 20px -5px rgba(0, 0, 0, 0.1);
      border: 1px solid rgba(34, 197, 94, 0.15);
    }
    
    .hero-section {
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
                  url('https://images.unsplash.com/photo-1584473457407-6a0a7be0e5bb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80');
      background-size: cover;
      background-position: center;
      animation: hero-entrance 1s ease-out;
    }
    
    .service-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 30px -5px rgba(34, 197, 94, 0.3);
    }

    /* بهبودهای جدید اضافه شده */
    button, .service-card, .product-card {
      transition: all 0.3s ease-in-out !important;
    }

    button:active {
      transform: scale(0.98) !important;
      opacity: 0.9 !important;
    }

    html {
      scroll-behavior: smooth;
    }

    /* اسکلتون برای تصاویر */
    img {
      background-color: #e5e7eb;
      background-image: linear-gradient(90deg, #e5e7eb 0px, #f3f4f6 40px, #e5e7eb 80px);
      background-size: 200% 100%;
      animation: shimmer 1.5s infinite linear;
      border-radius: 0.5rem;
    }

    @keyframes shimmer {
      0% { background-position: -200% 0; }
      100% { background-position: 200% 0; }
    }

    /* استایل‌های هدر جدید */
    .nav-link-hover-effect span {
      transition: all 0.3s ease;
    }
    .nav-link-hover-effect:hover span {
      width: 100%;
    }

    /* انیمیشن‌های جدید */
    @keyframes hero-entrance {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .staggered-item {
      opacity: 0;
      transform: translateY(30px);
      animation: staggered-item 0.6s ease-out forwards;
    }

    @keyframes staggered-item {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .hover-3d {
      transition: transform 0.3s ease-out, box-shadow 0.3s ease-out;
    }
    .hover-3d:hover {
      transform: perspective(1000px) rotateX(5deg) rotateY(-5deg) translateZ(10px);
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    }

    /* استایل منوی موبایل جدید */
    #mobile-menu {
      position: fixed;
      top: 0;
      right: -100%;
      width: 300px;
      height: 100vh;
      transition: all 0.3s ease-in-out;
      z-index: 1000;
      overflow-y: auto;
      background-color: white;
      box-shadow: -4px 0 15px rgba(0, 0, 0, 0.1);
    }

    #mobile-menu.active {
      right: 0;
    }

    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      z-index: 999;
      display: none;
    }
    /* استایل هدر */
.header {
    position: relative;
    height: 60px;
    background: #333;
    padding: 0 20px;
}

/* دکمه همبرگری */
.hamburger-btn {
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    background: none;
    border: none;
    cursor: pointer;
    padding: 10px;
    z-index: 1000;
}

.line {
    display: block;
    width: 30px;
    height: 3px;
    background: #fff;
    margin: 5px 0;
    transition: all 0.3s ease;
}

/* حالت فعال دکمه همبرگری */
.hamburger-btn.active .line:nth-child(1) {
    transform: translateY(8px) rotate(45deg);
}
.hamburger-btn.active .line:nth-child(2) {
    opacity: 0;
}
.hamburger-btn.active .line:nth-child(3) {
    transform: translateY(-8px) rotate(-45deg);
}

/* پنل سایدبار */
.sidebar {
    position: fixed;
    top: 0;
    right: -300px;
    width: 300px;
    height: 100vh;
    background: #f5f5f5;
    box-shadow: -2px 0 10px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    z-index: 999;
}

.sidebar.active {
    right: 0;
}

/* آیتمهای منو */
.menu-items {
    padding: 80px 20px 20px;
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.menu-btn {
    padding: 12px 20px;
    background: #fff;
    color: #333;
    text-decoration: none;
    border-radius: 8px;
    transition: all 0.3s ease;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.menu-btn:hover {
    background: #007bff;
    color: #fff;
    transform: translateX(-10px);
}
/* ✅ استایل نوار اپلیکیشن پایین صفحه در موبایل */
.mobile-bottom-nav {
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
  background: #ffffff;
  border-top: 1px solid #e5e7eb;
  box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.05);
  display: flex;
  justify-content: space-around;
  padding: 8px 0;
  z-index: 1000;
  font-family: 'Vazirmatn', sans-serif;
}

.mobile-bottom-nav a {
  text-align: center;
  flex: 1;
  color: #333;
  text-decoration: none;
  font-size: 12px;
  transition: color 0.3s;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.mobile-bottom-nav a .icon {
  font-size: 20px;
  margin-bottom: 4px;
}

.mobile-bottom-nav a:hover {
  color: #10b981;
}

.mobile-bottom-nav a:active {
  transform: scale(0.95);
  opacity: 0.9;
}
@media (min-width: 768px) {
  .mobile-bottom-nav {
    display: none;
  }
}

  </style>
</head>
<body class="text-gray-800">
  <svg class="hidden">
    <symbol id="finger-print" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0 1 19.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 0 0 4.5 10.5a7.464 7.464 0 0 1-1.15 3.993m1.989 3.559A11.209 11.209 0 0 0 8.25 10.5a3.75 3.75 0 1 1 7.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 0 1-3.6 9.75m6.633-4.596a18.666 18.666 0 0 1-2.485 5.33" />
</symbol>
<symbol id="shopping-bag" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
</symbol>
<symbol id="magnifying-glass" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
  <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
</symbol>



  </svg>
  <!-- هاله نورانی پررنگ در پس‌زمینه -->
  <div class="glow-container">
    <div class="glow-effect"></div>
    <div class="glow-effect" style="
      background: radial-gradient(circle at center, rgba(34, 197, 94, 0.3) 0%, transparent 70%);
      animation-delay: -5s;
      animation-duration: 20s;
    "></div>
  </div>

  <!-- هدر جدید و بهبود یافته -->
  
  <header class="bg-gradient-to-l from-green-700 to-green-600 shadow-lg sticky top-0 z-50 ">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16 md:h-20">
        
        <!-- لوگو و نام شرکت -->
        <div class="flex-shrink-0 flex items-center absolute right-4 top-1/2 transform -translate-y-1/2">
          <img src="Images/photo_2025-05-13_23-44-49.jpg" alt="لوگو سایت" class="w-12 h-12 md:w-16 md:h-16 object-contain">
          <div class="mr-2 hidden sm:block text-white font-bold text-xl">
    دانش پژوهان زیست یار
  </div>
          
        </div>
        <!-- باکس ورود و ثبت نام -->
         <div class="absolute left-4 top-1/2 transform -translate-y-1/2 hidden md:flex items-center gap-1 text-sm w-36 md:gap-2 md:text-base md:w-auto ">
  <!-- آیکون جستجو -->
  <button class="w-10 h-10 flex items-center justify-center bg-white text-green-700 rounded-full shadow hover:bg-green-100 transition">
    <svg class="w-5 h-5" fill="none">
      <use xlink:href="#magnifying-glass"></use>
    </svg>
  </button>

  <!-- آیکون سبد خرید -->
  <button class="w-10 h-10 flex items-center justify-center bg-white text-green-700 rounded-full shadow hover:bg-green-100 transition">
    <svg class="w-5 h-5" fill="none">
      <use xlink:href="#shopping-bag"></use>
    </svg>
  </button>

  <!-- دکمه ورود -->
  <a href="login.php" class="flex items-center justify-center gap-2 bg-white text-green-700 hover:bg-green-100 px-4 py-2.5 rounded-full text-sm font-semibold transition duration-200 shadow">
    <svg class="w-5 h-5 text-green-600" fill="none">
      <use xlink:href="#finger-print"></use>
    </svg>
    ورود و ثبت نام
  </a>
</div>

        


        <!-- منوی اصلی - نسخه دسکتاپ -->
        <nav class="hidden md:flex space-x-8 space-x-reverse absolute right-1/2 translate-x-1/2 top-1/2 transform -translate-y-1/2">
          <a href="index.php" class="text-white hover:text-green-200 px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 flex flex-col items-center nav-link-hover-effect">
            <div class="flex items-center">
              <i class="fas fa-home ml-1 text-xs opacity-70 group-hover:opacity-100 transition-all"></i>
              خانه
            </div>
            <span class="bg-green-200 h-0.5 w-0 transition-all duration-300 mt-1"></span>
          </a>
          <a href="#" class="text-white hover:text-green-200 px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 flex flex-col items-center nav-link-hover-effect">
            <div class="flex items-center">
              <i class="fas fa-pills ml-1 text-xs opacity-70 group-hover:opacity-100 transition-all"></i>
              محصولات
            </div>
            <span class="bg-green-200 h-0.5 w-0 transition-all duration-300 mt-1"></span>
          </a>
          <a href="#" class="text-white hover:text-green-200 px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 flex flex-col items-center nav-link-hover-effect">
            <div class="flex items-center">
              <i class="fas fa-book ml-1 text-xs opacity-70 group-hover:opacity-100 transition-all"></i>
              مقالات
            </div>
            <span class="bg-green-200 h-0.5 w-0 transition-all duration-300 mt-1"></span>
          </a>
          <a href="#" class="text-white hover:text-green-200 px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 flex flex-col items-center nav-link-hover-effect">
            <div class="flex items-center">
              <i class="fas fa-flask ml-1 text-xs opacity-70 group-hover:opacity-100 transition-all"></i>
              تحقیقات
            </div>
            <span class="bg-green-200 h-0.5 w-0 transition-all duration-300 mt-1"></span>
          </a>
          <a href="#" class="text-white hover:text-green-200 px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 flex flex-col items-center nav-link-hover-effect">
            <div class="flex items-center">
              <i class="fas fa-info-circle ml-1 text-xs opacity-70 group-hover:opacity-100 transition-all"></i>
              درباره ما
            </div>
            <span class="bg-green-200 h-0.5 w-0 transition-all duration-300 mt-1"></span>
          </a>
          <a href="courses.php" class="bg-white text-green-700 px-4 py-2 rounded-lg text-sm font-semibold shadow hover:bg-green-100 transition duration-200">
            ثبت نام دوره
</a>

 

          
        </nav>

        <!-- بخش سمت چپ (جستجو و آیکون‌ها) -->
        <div class="flex items-center">
        </div>
         

          
            <!-- دکمه ورود و ثبت‌نام برای موبایل -->
<div class="ml-4 md:hidden">
  <a href="login.php" class="flex items-center gap-2 bg-white text-green-700 hover:bg-green-100 px-4 py-2 rounded-full text-sm font-semibold shadow transition">
    <svg class="w-5 h-5 text-green-600" fill="none">
      <use xlink:href="#finger-print"></use>
    </svg>
    ورود / ثبت‌نام
  </a>
</div>

            
          </div>
        </div>
      </div>
    </div>
    <header>
      <!-- منوی سه‌خطی -->
      <div class="hamburger" onclick="openPanel()">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </header>
    
  </header>

  <!-- منوی موبایل جدید -->
  <div class="overlay" id="overlay"></div>
  <div id="mobile-menu">
    <div class="px-4 py-4">
      <div class="flex justify-between items-center mb-6">
        <span class="text-green-700 text-xl font-bold">منو</span>
        <button id="close-menu-close" class="text-gray-600">
          <i class="fas fa-times text-2xl"></i>
        </button>
      </div>
      <div class="space-y-4">
        <a href="#" class="flex items-center text-gray-700 hover:text-green-700 p-3 rounded-lg transition">
          <i class="fas fa-home ml-3"></i>
          خانه
        </a>
        <a href="#" class="flex items-center text-gray-700 hover:text-green-700 p-3 rounded-lg transition">
          <i class="fas fa-pills ml-3"></i>
          محصولات
        </a>
        <a href="#" class="flex items-center text-gray-700 hover:text-green-700 p-3 rounded-lg transition">
          <i class="fas fa-book ml-3"></i>
          مقالات
        </a>
        <a href="#" class="flex items-center text-gray-700 hover:text-green-700 p-3 rounded-lg transition">
          <i class="fas fa-flask ml-3"></i>
          تحقیقات
        </a>
        <a href="#" class="flex items-center text-gray-700 hover:text-green-700 p-3 rounded-lg transition">
          <i class="fas fa-info-circle ml-3"></i>
          درباره ما
        </a>
      </div>
    </div>
  </div>

  <!-- محتوای اصلی -->
  <main class="max-w-7xl mx-auto px-4 py-8">
    <!-- بخش هیرو -->
    <section class="hero-section text-white py-32 px-4 text-center rounded-xl mb-8">
      <h1 class="text-4xl md:text-5xl font-bold mb-6">سلامت روده، پایه‌ی سلامت بدن</h1>
      <p class="text-xl mb-8 max-w-2xl mx-auto">محصولات پروبیوتیک ما با بالاترین کیفیت و استانداردهای جهانی تولید می‌شوند تا سلامت شما را تضمین کنند.</p>
      <div class="flex justify-center gap-4">
        <button class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg text-lg font-medium transition duration-200 hover-3d">
          محصولات ما
        </button>
        <button class="bg-transparent hover:bg-white/10 text-white border border-white px-6 py-3 rounded-lg text-lg font-medium transition duration-200 hover-3d">
          مقالات علمی
        </button>
      </div>
    </section>

    <!-- بخش مزایا -->
    <section class="section-container p-8 mb-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold mb-4 text-green-700">چرا پروبیوتیک؟</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">پروبیوتیک‌ها باکتری‌های مفیدی هستند که فواید بی‌شماری برای سلامت بدن دارند</p>
      </div>
      
      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border border-green-100 service-card staggered-item hover-3d" style="animation-delay: 0.2s">
          <div class="text-green-600 text-3xl mb-4">
            <i class="fas fa-heart"></i>
          </div>
          <h3 class="text-xl font-bold mb-3 text-green-700">تقویت سیستم ایمنی</h3>
          <p class="text-gray-600">پروبیوتیک‌ها با تقویت میکروبیوم روده، سیستم ایمنی بدن را بهبود می‌بخشند</p>
        </div>
        
        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border border-green-100 service-card staggered-item hover-3d" style="animation-delay: 0.4s">
          <div class="text-green-600 text-3xl mb-4">
            <i class="fas fa-brain"></i>
          </div>
          <h3 class="text-xl font-bold mb-3 text-green-700">سلامت روان</h3>
          <p class="text-gray-600">ارتباط مستقیم بین سلامت روده و سلامت روان از طریق محور روده-مغز</p>
        </div>
        
        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border border-green-100 service-card staggered-item hover-3d" style="animation-delay: 0.6s">
          <div class="text-green-600 text-3xl mb-4">
            <i class="fas fa-weight"></i>
          </div>
          <h3 class="text-xl font-bold mb-3 text-green-700">کنترل وزن</h3>
          <p class="text-gray-600">تعادل باکتری‌های روده می‌تواند در مدیریت وزن موثر باشد</p>
        </div>
      </div>
    </section>

    <!-- بخش محصولات -->
    <section class="section-container p-8 mb-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold mb-4 text-green-700">محصولات ما</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">محصولات پروبیوتیک با کیفیت و استانداردهای بین‌المللی</p>
      </div>
      
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300 border border-green-100 product-card hover-3d">
          <div class="relative">
            <img src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=987&q=80" alt="کپسول پروبیوتیک" class="w-full h-48 object-cover">
            <span class="absolute top-2 left-2 bg-green-600 text-white text-xs px-2 py-1 rounded">پرفروش</span>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold mb-2 text-green-700">کپسول پروبیوتیک</h3>
            <p class="text-gray-600 mb-4">حاوی 10 میلیارد CFU باکتری مفید در هر کپسول</p>
            <div class="flex justify-between items-center">
              <span class="text-green-600 font-bold">290,000 تومان</span>
              <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg text-sm transition duration-200 add-to-cart">
                افزودن به سبد
              </button>
            </div>
          </div>
        </div>
        
        <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300 border border-green-100 product-card hover-3d">
          <img src="https://images.unsplash.com/photo-1550583724-b2692b85b150?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=987&q=80" alt="ماست پروبیوتیک" class="w-full h-48 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-bold mb-2 text-green-700">ماست پروبیوتیک</h3>
            <p class="text-gray-600 mb-4">حاوی 5 سویه باکتری مفید برای سلامت گوارش</p>
            <div class="flex justify-between items-center">
              <span class="text-green-600 font-bold">45,000 تومان</span>
              <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg text-sm transition duration-200 add-to-cart">
                افزودن به سبد
              </button>
            </div>
          </div>
        </div>
        
        <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300 border border-green-100 product-card hover-3d">
          <img src="https://images.unsplash.com/photo-1631729371254-42c2892f0e6e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="پودر پروبیوتیک کودکان" class="w-full h-48 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-bold mb-2 text-green-700">پروبیوتیک کودکان</h3>
            <p class="text-gray-600 mb-4">مخصوص کودکان با طعم میوه‌ای طبیعی</p>
            <div class="flex justify-between items-center">
              <span class="text-green-600 font-bold">180,000 تومان</span>
              <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg text-sm transition duration-200 add-to-cart">
                افزودن به سبد
              </button>
            </div>
          </div>
        </div>
        
        <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300 border border-green-100 product-card hover-3d">
          <img src="https://images.unsplash.com/photo-1587854692152-cbe660dbde88?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80" alt="مکمل پروبیوتیک حیوانات" class="w-full h-48 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-bold mb-2 text-green-700">پروبیوتیک حیوانات</h3>
            <p class="text-gray-600 mb-4">مخصوص حیوانات خانگی برای سلامت گوارش</p>
            <div class="flex justify-between items-center">
              <span class="text-green-600 font-bold">220,000 تومان</span>
              <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg text-sm transition duration-200 add-to-cart">
                افزودن به سبد
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- بخش مقالات -->
    <section class="section-container p-8 mb-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold mb-4 text-green-700">آخرین مقالات</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">جدیدترین یافته‌های علمی درباره پروبیوتیک‌ها و سلامت روده</p>
      </div>
      
      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300 border border-green-100 hover-3d">
          <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="مقاله 1" class="w-full h-48 object-cover">
          <div class="p-6">
            <span class="text-green-600 text-sm font-medium">تحقیقات علمی</span>
            <h3 class="text-xl font-bold mb-3 mt-2">تاثیر پروبیوتیک‌ها بر افسردگی</h3>
            <p class="text-gray-600 mb-4">چگونه باکتری‌های روده می‌توانند بر سلامت روان تاثیر بگذارند؟</p>
            <a href="#" class="text-green-600 font-medium hover:text-green-800 transition duration-200 flex items-center">
              مطالعه مقاله 
              <i class="fas fa-arrow-left mr-2"></i>
            </a>
          </div>
        </div>
        
        <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300 border border-green-100 hover-3d">
          <img src="https://images.unsplash.com/photo-1505576399279-565b52d4ac71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="مقاله 2" class="w-full h-48 object-cover">
          <div class="p-6">
            <span class="text-green-600 text-sm font-medium">تغذیه سالم</span>
            <h3 class="text-xl font-bold mb-3 mt-2">پروبیوتیک‌های طبیعی در غذاها</h3>
            <p class="text-gray-600 mb-4">کدام مواد غذایی حاوی پروبیوتیک‌های طبیعی هستند؟</p>
            <a href="#" class="text-green-600 font-medium hover:text-green-800 transition duration-200 flex items-center">
              مطالعه مقاله 
              <i class="fas fa-arrow-left mr-2"></i>
            </a>
          </div>
        </div>
        
        <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300 border border-green-100 hover-3d">
          <img src="https://images.unsplash.com/photo-1498837167922-ddd27525d352?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="مقاله 3" class="w-full h-48 object-cover">
          <div class="p-6">
            <span class="text-green-600 text-sm font-medium">سلامت کودکان</span>
            <h3 class="text-xl font-bold mb-3 mt-2">پروبیوتیک و سیستم ایمنی کودکان</h3>
            <p class="text-gray-600 mb-4">چگونه پروبیوتیک‌ها می‌توانند سیستم ایمنی کودکان را تقویت کنند؟</p>
            <a href="#" class="text-green-600 font-medium hover:text-green-800 transition duration-200 flex items-center">
              مطالعه مقاله 
              <i class="fas fa-arrow-left mr-2"></i>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- بخش تماس -->
    <section class="bg-green-700 rounded-2xl p-8 md:p-12 text-white mb-8">
      <div class="grid md:grid-cols-2 gap-12">
        <div>
          <h3 class="text-2xl font-bold mb-6">با ما در تماس باشید</h3>
          <p class="mb-8">سوالات، پیشنهادات و انتقادات خود را با ما در میان بگذارید. کارشناسان ما آماده پاسخگویی به شما هستند.</p>
          <div class="space-y-4">
            <div class="flex items-start gap-4">
              <i class="fas fa-map-marker-alt text-green-300 mt-1"></i>
              <div>
                <h4 class="font-medium">آدرس</h4>
                <p class="text-green-100">تهران، خیابان ولیعصر، کوچه فلان، پلاک ۱۲</p>
              </div>
            </div>
            <div class="flex items-start gap-4">
              <i class="fas fa-phone text-green-300 mt-1"></i>
              <div>
                <h4 class="font-medium">تلفن</h4>
                <p class="text-green-100">۰۲۱-۱۲۳۴۵۶۷۸</p>
              </div>
            </div>
            <div class="flex items-start gap-4">
              <i class="fas fa-envelope text-green-300 mt-1"></i>
              <div>
                <h4 class="font-medium">ایمیل</h4>
                <p class="text-green-100">info@probiotic.ir</p>
              </div>
            </div>
          </div>
        </div>
        
        <div>
          <form class="space-y-4 ">
            <div>
              <label for="name" class="block mb-1 font-medium">نام کامل</label>
              <input type="text" id="name" class="w-full px-4 py-2 rounded-lg bg-green-800 text-white focus:outline-none focus:ring-2 focus:ring-green-300 border border-green-600 placeholder-green-300">
            </div>
            <div>
              <label for="email" class="block mb-1 font-medium">ایمیل</label>
              <input type="email" id="email" class="w-full px-4 py-2 rounded-lg bg-green-800 text-white focus:outline-none focus:ring-2 focus:ring-green-300 border border-green-600 placeholder-green-300">
            </div>
            <div>
              <label for="message" class="block mb-1 font-medium">پیام شما</label>
              <textarea id="message" rows="4" class="w-full px-4 py-2 rounded-lg bg-green-800 text-white focus:outline-none focus:ring-2 focus:ring-green-300 border border-green-600 placeholder-green-300"></textarea>
            </div>
            <button type="submit" class="bg-white hover:bg-gray-100 text-green-700 px-6 py-3 rounded-lg font-medium transition duration-200 w-full hover-3d">
              ارسال پیام
            </button>
          </form>
        </div>
      </div>
    </section>
  </main>
<!-- فوتر -->
  <footer class="bg-green-900 text-white py-12">
    <div class="max-w-7xl mx-auto px-4">
      <div class="grid md:grid-cols-4 gap-8">
        <div>
          <span class="text-white text-2xl font-bold mb-4 block">پروبیوتیک</span>
          <p class="text-green-300">تولید کننده محصولات پروبیوتیک با کیفیت و استانداردهای بین‌المللی برای سلامت شما</p>
        </div>
        <div>
          <h4 class="text-lg font-bold mb-4">لینک‌های سریع</h4>
          <ul class="space-y-2">
            <li><a href="#" class="text-green-300 hover:text-white transition duration-200">خانه</a></li>
            <li><a href="#" class="text-green-300 hover:text-white transition duration-200">محصولات</a></li>
            <li><a href="#" class="text-green-300 hover:text-white transition duration-200">مقالات علمی</a></li>
            <li><a href="#" class="text-green-300 hover:text-white transition duration-200">تماس با ما</a></li>
          </ul>
        </div>
        <div>
          <h4 class="text-lg font-bold mb-4">خدمات مشتریان</h4>
          <ul class="space-y-2">
            <li><a href="#" class="text-green-300 hover:text-white transition duration-200">پرسش‌های متداول</a></li>
            <li><a href="#" class="text-green-300 hover:text-white transition duration-200">شرایط بازگشت</a></li>
            <li><a href="#" class="text-green-300 hover:text-white transition duration-200">روش‌های پرداخت</a></li>
            <li><a href="#" class="text-green-300 hover:text-white transition duration-200">راهنمای خرید</a></li>
          </ul>
        </div>
        <div>
          <h4 class="text-lg font-bold mb-4">شبکه‌های اجتماعی</h4>
          <div class="flex gap-4">
            <a href="#" class="text-green-300 hover:text-white text-xl transition duration-200"><i class="fab fa-telegram"></i></a>
            <a href="#" class="text-green-300 hover:text-white text-xl transition duration-200"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-green-300 hover:text-white text-xl transition duration-200"><i class="fab fa-whatsapp"></i></a>
            <a href="#" class="text-green-300 hover:text-white text-xl transition duration-200"><i class="fab fa-linkedin"></i></a>
          </div>
          <div class="mt-6">
            <h5 class="font-medium mb-2">عضویت در خبرنامه</h5>
            <div class="flex">
              <input type="email" placeholder="ایمیل شما" class="px-4 py-2 rounded-r-lg bg-green-800 text-white focus:outline-none w-full border border-green-700">
              <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-l-lg transition duration-200 hover-3d">
                <i class="fas fa-paper-plane"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="border-t border-green-800 mt-12 pt-8 text-center text-green-400">
        <p>© ۲۰۲۵ شرکت پروبیوتیک. تمام حقوق محفوظ است.</p>
      </div>
    </div>
  </footer>

  <!-- نوار اپلیکیشنی مخصوص موبایل -->
<nav class="mobile-bottom-nav block md:hidden fixed bottom-0 left-0 w-full bg-white shadow-md z-50">
  <div class="container mx-auto flex justify-between items-center">
    <a href="#"><div>☰</div><span>منو</span></a>
  <a href="index.php"><div>🏠</div><span>خانه</span></a>
  <a href="courses.php"><div>🎓</div><span>دوره‌ها</span></a>
  <a href="products.php"><div>🛍</div><span>محصولات</span></a>
  </div>
</nav>




  

  <!-- دکمه بازگشت به بالا -->
  <button id="backToTop" class="fixed bottom-6 left-6 bg-green-600 text-white p-3 rounded-full shadow-lg hidden hover:bg-green-700 transition-all hover-3d">
    <i class="fas fa-arrow-up"></i>
  </button>

  <script>
    function openPanel() {
    document.getElementById("myPanel").style.width = "250px";
  }

  function closePanel() {
    document.getElementById("myPanel").style.width = "0";
  }
    // مدیریت منوی موبایل
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const overlay = document.getElementById('overlay');
    const mobileMenuClose = document.getElementById('mobile-menu-close');

    function toggleMenu() {
      mobileMenu.classList.toggle('active');
      overlay.style.display = mobileMenu.classList.contains('active') ? 'block' : 'none';
      document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : 'auto';
    }

    mobileMenuButton.addEventListener('click', toggleMenu);
    mobileMenuClose.addEventListener('click', toggleMenu);
    overlay.addEventListener('click', toggleMenu);

    // بستن منو هنگام کلیک خارج از آن
    document.addEventListener('click', (e) => {
      if (!mobileMenu.contains(e.target) && !mobileMenuButton.contains(e.target)) {
        mobileMenu.classList.remove('active');
        overlay.style.display = 'none';
        document.body.style.overflow = 'auto';
      }
    });

    // بقیه اسکریپت ها...
    window.addEventListener('DOMContentLoaded', () => {
  const button = document.getElementById('backToTop');

  window.addEventListener('scroll', () => {
    button.classList.toggle('hidden', window.scrollY <= 300);
  });

  button.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
});
    document.querySelectorAll('.add-to-cart').forEach(button => {
      button.addEventListener('click', function(e) {
        e.preventDefault();
        const originalText = this.innerHTML;
        this.innerHTML = '<i class="fas fa-check"></i> افزوده شد!';
        this.classList.add('bg-green-700');
        setTimeout(() => {
          this.innerHTML = originalText;
          this.classList.remove('bg-green-700');
        }, 2000);
      });
    });

    // انیمیشن‌های پلکانی
    document.querySelectorAll('.staggered-item').forEach((el, index) => {
      el.style.animationDelay = `${index * 0.1}s`;
    });
    const hamburger = document.getElementById('hamburger');
const sidebar = document.getElementById('sidebar');

// باز و بسته کردن سایدبار
hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    sidebar.classList.toggle('active');
});

// بستن سایدبار با کلیک خارج از آن
document.addEventListener('click', (e) => {
    if (!sidebar.contains(e.target) && !hamburger.contains(e.target)) {
        hamburger.classList.remove('active');
        sidebar.classList.remove('active');
    }
});

// بستن سایدبار با کلید ESC
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        hamburger.classList.remove('active');
        sidebar.classList.remove('active');
    }
});
  </script>
</body>
</html>
