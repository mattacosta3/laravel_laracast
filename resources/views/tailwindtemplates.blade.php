<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8" />

  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />

  <meta
    content="width=device-width, initial-scale=1, shrink-to-fit=no"
    name="viewport"
  />

  <title>Homepage</title>

  <meta property="og:title" content="Homepage" />

  <meta property="og:locale" content="en_US" />

  <link
    rel="canonical"
    href="//"
  />

  <meta
    property="og:url"
    content="//"
  />

  <meta
    name="description"
    content="Learn more about Matthew Acosta"
  />

  <link rel="icon" type="image/png" href="/assets/img/blog-author.jpg" />

  <meta name="theme-color" content="#5540af" />

  <meta property="og:site_name" content="Matthews Portfolio" />

  <meta property="og:image" content="/assets/img/blog-author.jpg" />

  <link
    crossorigin="crossorigin"
    href="https://fonts.gstatic.com"
    rel="preconnect"
  />

  <link
    as="style"
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Raleway:wght@400;500;600;700&display=swap"
    rel="preload"
  />

  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Raleway:wght@400;500;600;700&display=swap"
    rel="stylesheet"
  />

  <link
    href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
    rel="stylesheet"
  />

  <link
    crossorigin="anonymous"
    href="\resources\css\main.min.css"
    media="screen"
    rel="stylesheet"
  />
  
  <script
    defer
    src="https://unpkg.com/@alpine-collective/toolkit@1.0.0/dist/cdn.min.js"
  ></script>

  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

  <style>
    html {
        scroll-behavior: smooth;
    }
</style>

  
</head>


  <body
    :class="{ 'overflow-hidden max-h-screen': mobileMenu }"
    class="relative"
    x-data="{ mobileMenu: false }"
  >
    
    <div id="main" class="relative">
      <div
  x-data="{
    triggerNavItem(id) {
        $scroll(id)
    },
    triggerMobileNavItem(id) {
        mobileMenu = false;
        this.triggerNavItem(id);
    }
}"
>
  <div class="w-full z-50 top-0 py-3 sm:py-5  absolute
  ">
    <div class="hidden lg:block">
      <ul class="flex items-center justify-center">
        
        <li class="group pl-6">
          
          <span
            @click="triggerNavItem('#about')"
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white text-xl"
            >About</span
          >
          
          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>
        
        <li class="group pl-6">
          
          <span
            @click="triggerNavItem('#services')"
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white text-xl"
            >Services</span
          >
          
          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>
        
        <li class="group pl-6">
          
          <span
            @click="triggerNavItem('#portfolio')"
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white text-xl"
            >Portfolio</span
          >
          
          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>
        
        <!-- <li class="group pl-6">
          
          <span
            @click="triggerNavItem('#clients')"
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            >Testimonials</span
          >
          
          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li> -->
        
        <li class="group pl-6">
          
          <span
            @click="triggerNavItem('#contact')"
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white text-xl"
            >Contact</span
          >
          
          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>
        
      </ul>
    </div>
    <div class="block lg:hidden" style="position: absolute; right: 0;">
      <button @click="mobileMenu = true">
        <i class="font-bold text-5xl bx bx-menu text-4xl text-white"></i>
      </button>
    </div>
  </div>


<div
  class="pointer-events-none fixed inset-0 z-70 min-h-screen bg-black bg-opacity-70 opacity-0 transition-opacity lg:hidden"
  :class="{ 'opacity-100 pointer-events-auto': mobileMenu }"
>
  <div
    class="absolute right-0 min-h-screen w-2/3 bg-primary py-4 px-8 shadow md:w-1/3"
  >
    <button
      class="absolute top-0 right-0 mt-4 mr-4"
      @click="mobileMenu = false"
    >
      <img src="/assets/img/icon-close.svg" class="h-10 w-auto" alt="" />
    </button>

    <ul class="mt-8 flex flex-col">
      
      <li class="py-2">
        
        <span
          @click="triggerMobileNavItem('#about')"
          class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white text-xl"
          >About</span
        >
        
      </li>
      
      <li class="py-2">
        
        <span
          @click="triggerMobileNavItem('#services')"
          class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white text-xl"
          >Services</span
        >
        
      </li>
      
      <li class="py-2">
        
        <span
          @click="triggerMobileNavItem('#portfolio')"
          class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white text-xl"
          >Portfolio</span
        >
        
      </li>
      
      <li class="py-2">
        
        <span
          @click="triggerMobileNavItem('#contact')"
          class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white text-xl"
          >Contact</span
        >
        
      </li>
      
    </ul>
  </div>
</div>
</div>
      <div><div
  class="relative bg-cover bg-center bg-no-repeat py-8"
  style="background-image: url(/assets/img/bg-hero.jpg)"
>
  <div
    class="absolute inset-0 z-20 bg-gradient-to-tr from-blue-900 to-transparent bg-cover bg-center bg-no-repeat"
  ></div>

  <div
    class="container relative z-30 pt-20 pb-12 sm:pt-56 sm:pb-48 lg:pt-64 lg:pb-48"
  >
    <div class="flex flex-col items-center justify-center lg:flex-row">
      <div class="rounded-full border-8 border-primary shadow-xl">
        <img
          src="public/imgs/blog-author.png"
          class="h-48 rounded-full sm:h-56"
          alt="author"
        />
      </div>
      <div class="pt-8 sm:pt-10 lg:pl-8 lg:pt-0">
        <h1
          class="text-center font-header text-4xl text-white sm:text-left sm:text-5xl md:text-6xl"
        >
          Hello I'm Matthew Acosta!
        </h1>
        <div
          class="flex flex-col justify-center pt-3 sm:flex-row sm:pt-5 lg:justify-start"
        >
          <div
            class="flex items-center justify-center pl-0 sm:justify-start md:pl-1"
          >
            <a href="#contact" class="hover:text-yellow cursor-pointer font-body text-lg uppercase text-white">Let's connect</a>
            <div class="hidden sm:block">
              <i class="bx bx-chevron-right text-3xl text-yellow"></i>
            </div>
          </div>
          <div
            class="flex items-center justify-center pt-5 pl-2 sm:justify-start sm:pt-0"
          >
            <a href="//www.linkedin.com/in/mattacosta3" class="pl-4">
              <i
                class="bx bxl-linkedin text-2xl text-white hover:text-yellow"
              ></i>
            </a>
            
            <a href="https://github.com/mattacosta311" class="pl-4">
              <i class="bx bxl-github text-2xl text-white hover:text-yellow"></i>
            </a>

            <a href="Matthew_Acosta_Resume.pdf" style="text-decoration: underline;"
          class="font-bold font-header pl-4 text-2xl text-white hover:text-yellow">
          Resume</a>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="bg-grey-50" id="about">
  <div class="container flex flex-col items-center py-16 md:py-20 lg:flex-row">
    <div class="w-full text-center sm:w-3/4 lg:w-3/5 lg:text-left">
      <h2
        class="font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl"
      >
        About Me
      </h2>
      <h4
        class="pt-6 font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl"
      >
        Web Developer & Eletrican
      </h4>
      <p class="pt-6 font-body leading-relaxed text-grey-20">
        Web Developer with a years experience in PHP using Laravel. Strong understanding of object-oriented programming, MVC design patterns, and database design principles 
        
        Passionate for Engineering and efficient in delivering dynamic and scalable solutions independently or in highly collaborative projects.
      </p>
      <div
        class="flex flex-col justify-center pt-6 sm:flex-row lg:justify-start"
      >
        <div class="flex items-center justify-center sm:justify-start">
          <a href="#contact" class="hover:text-yellow font-body text-lg font-semibold uppercase text-grey-20">
            Connect with me
          </a>
          <div class="hidden sm:block">
            <i class="bx bx-chevron-right text-2xl text-primary"></i>
          </div>
        </div>
        <div
          class="flex items-center justify-center pt-5 pl-2 sm:justify-start sm:pt-0"
        >
          <a href="//www.linkedin.com/in/mattacosta3" class="pl-4">
            <i
              class="bx bxl-linkedin text-2xl text-primary hover:text-yellow"
            ></i>
          </a>
          <a href="https://github.com/mattacosta311" class="pl-4">
              <i class="bx bxl-github text-2xl text-primary hover:text-yellow"></i>
            </a>
          <a href="Matthew_Acosta_Resume.pdf" style="text-decoration: underline;"
          class="font-bold font-header pl-4 text-2xl text-primary hover:text-yellow">
          Resume
        </a>

        </div>
      </div>
    </div>
    <div class="w-full pl-0 pt-10 sm:w-3/4 lg:w-2/5 lg:pl-12 lg:pt-0">
      <div>
        <div class="flex items-end justify-between">
          <h4 class="font-body font-semibold uppercase text-black">
            HTML & CSS
          </h4>
          <h3 class="font-body text-3xl font-bold text-primary">85%</h3>
        </div>
        <div class="mt-2 h-3 w-full rounded-full bg-lila">
          <div class="h-3 rounded-full bg-primary" style="width: 85%"></div>
        </div>
      </div>
      <div class="pt-6">
        <div class="flex items-end justify-between">
          <h4 class="font-body font-semibold uppercase text-black">TailWindCSS</h4>
          <h3 class="font-body text-3xl font-bold text-primary">70%</h3>
        </div>
        <div class="mt-2 h-3 w-full rounded-full bg-lila">
          <div class="h-3 rounded-full bg-primary" style="width: 70%"></div>
        </div>
      </div>
      <div class="pt-6">
        <div class="flex items-end justify-between">
          <h4 class="font-body font-semibold uppercase text-black">
            PHP
          </h4>
          <h3 class="font-body text-3xl font-bold text-primary">98%</h3>
        </div>
        <div class="mt-2 h-3 w-full rounded-full bg-lila">
          <div class="h-3 rounded-full bg-primary" style="width: 98%"></div>
        </div>
      </div>
      <div class="pt-6">
        <div class="flex items-end justify-between">
          <h4 class="font-body font-semibold uppercase text-black">Laravel</h4>
          <h3 class="font-body text-3xl font-bold text-primary">91%</h3>
        </div>
        <div class="mt-2 h-3 w-full rounded-full bg-lila">
          <div class="h-3 rounded-full bg-primary" style="width: 91%"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container py-16 md:py-20" id="services">
  <h2
    class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl"
  >
    Here's what I'm good at
  </h2>
  <h3
    class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl"
  >
    These are the services I offer
  </h3>

  <div
    class="grid grid-cols-1 gap-6 pt-10 sm:grid-cols-2 md:gap-10 md:pt-12 lg:grid-cols-3"
  >
    <div class="group rounded px-8 py-12 shadow hover:bg-primary">
      <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
        <div class="hidden group-hover:block">
          <img
            src="/assets/img/icon-development-white.svg"
            alt="development icon"
          />
        </div>
        <div class="block group-hover:hidden">
          <img
            src="/assets/img/icon-development-black.svg"
            alt="development icon"
          />
        </div>
      </div>
      <div class="text-center">
        <h3
          class="pt-8 text-lg font-semibold uppercase text-primary group-hover:text-yellow lg:text-xl"
        >
          WEB DEVELOPMENT
        </h3>
        <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
          Skills in Front-end and Back-end Development, from authenticantion and building databases to styling responsive Web Applications.
        </p>
      </div>
    </div>
    <div class="group rounded px-8 py-12 shadow hover:bg-primary">
      <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
        <div class="hidden group-hover:block">
          <img
            src="/assets/img/icon-mobile-white.svg"
            alt="Mobile Application icon"
          />
        </div>
        <div class="block group-hover:hidden">
          <img
            src="/assets/img/icon-mobile-black.svg"
            alt="Mobile Application icon"
          />
        </div>
      </div>
      <div class="text-center">
        <h3
          class="pt-8 text-lg font-semibold uppercase text-primary group-hover:text-yellow lg:text-xl"
        >
          Mobile Development
        </h3>
        <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
          Worked with Andriod Studios and Kotlin
        </p>
      </div>
    </div>
  
    <div class="group rounded px-8 py-12 shadow hover:bg-primary">
      <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
        <div class="hidden group-hover:block">
          <img
            src="/assets/img/icon-graphics-white.svg"
            alt="Graphic Design icon"
          />
        </div>
        <div class="block group-hover:hidden">
          <img
            src="/assets/img/icon-graphics-black.svg"
            alt="Graphic Design icon"
          />
        </div>
      </div>
      <div class="text-center">
        <h3
          class="pt-8 text-lg font-semibold uppercase text-primary group-hover:text-yellow lg:text-xl"
        >
          Web Design
        </h3>
        <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
          Designing layouts and efficient website navigations for a better user experience.
        </p>
      </div>
    </div>
  </div>
</div>

<div class="container py-16 md:py-20" id="portfolio">
  <h2
    class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl"
  >
    Check out my Portfolio
  </h2>
  <h3
    class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl"
  >
    Here's what I have done with the past
  </h3>

  <div 
    class="mx-auto grid w-full grid-cols-1 gap-8 pt-12 sm:w-3/4 md:gap-10 lg:w-full lg:grid-cols-2"
  >
    <a
      href="javascript:void(0)"
      class="mx-auto transform transition-all hover:scale-105 md:mx-0"
    >
      <img
        src="/assets/img/portfolio-apple.jpeg"
        class="w-full shadow"
        alt="portfolio image"
      />
    </a>
    <a
      href="https://www.xpertrn.com"
      class="mx-auto transform transition-all hover:scale-105 md:mx-0"
    >
      <img
        src="/assets/img/portfolio-stripe.jpeg"
        class="w-full shadow"
        alt="portfolio image"
      />
    </a>
    <a
      href="javascript:void(0)"
      class="mx-auto transform transition-all hover:scale-105 md:mx-0"
    >
      <img id="img"
        src="/assets/img/portfolio-fedex.jpeg"
        class="w-full shadow"
        alt="portfolio image"
      />
    </a>
    <a
      href="javascript:void(0)"
      class="mx-auto transform transition-all hover:scale-105 md:mx-0"
    >
      <img
        src="/assets/img/portfolio-microsoft.jpeg"
        class="w-full shadow"
        alt="portfolio image"
      />
    </a>
  </div>
</div>

<div class="container py-16 md:py-20" id="contact">
  <h2
    class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl"
  >
    Contact Me
  </h2>
  <div class="flex flex-col pt-16 lg:flex-row">
    <div
      class="w-full border-l-2 border-t-2 border-r-2 border-b-2 border-grey-60 px-6 py-6 sm:py-8 lg:w-1/3"
    >
      <div class="flex items-center">
        <i class="bx bx-phone text-2xl text-grey-40"></i>
        <p class="pl-2 font-body font-bold uppercase text-grey-40 lg:text-lg">
          My Phone
        </p>
      </div>
      <p class="pt-2 text-left font-body font-bold text-primary lg:text-lg">
        (239) 206-7458
      </p>
    </div>
    <div
      class="w-full border-l-2 border-t-0 border-r-2 border-b-2 border-grey-60 px-6 py-6 sm:py-8 lg:w-1/3 lg:border-l-0 lg:border-t-2"
    >
      <div class="flex items-center">
        <i class="bx bx-envelope text-2xl text-grey-40"></i>
        <p class="pl-2 font-body font-bold uppercase text-grey-40 lg:text-lg">
          My Email
        </p>
      </div>
      <p class="pt-2 text-left font-body font-bold text-primary lg:text-lg">
        mattacosta311@gmail.com
      </p>
    </div>
    <div
      class="w-full border-l-2 border-t-0 border-r-2 border-b-2 border-grey-60 px-6 py-6 sm:py-8 lg:w-1/3 lg:border-l-0 lg:border-t-2"
    >
      <div class="flex items-center">
        <i class="bx bx-map text-2xl text-grey-40"></i>
        <p class="pl-2 font-body font-bold uppercase text-grey-40 lg:text-lg">
          My Address
        </p>
      </div>
      <p class="pt-2 text-left font-body font-bold text-primary lg:text-lg">
        Naples Fl 34110
      </p>
    </div>
  </div>
</div>

<div
  class="h-72 bg-cover bg-center bg-no-repeat sm:h-64 md:h-72 lg:h-96"
  style="background-image: url(/assets/img/map.png)"
></div>

      <div class="bg-primary">
  <div class="container flex flex-col justify-between py-6 sm:flex-row">
    <a href="/" class="hover:text-yellow text-lg font-bold font-header justify-center text-white">
      Back to Top
    </a>
    <script src="/assets/js/main.js"></script>
    <script> window.onload = function() { // add window.onload here and set it euqal to a function
      // Get the modal
      var modal = document.getElementById('img');
    
      // Get the image and insert it inside the modal - use its "alt" text as a caption
      var img = document.getElementById('img');
      var modalImg = document.getElementById("img");
      img.onclick = function() {
        modal.style.display = "block";
        modalImg.src = this.src;
      }
    
      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];
    
      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
        modal.style.display = "none";
      }
    }
  
      </script>

    
  </body>
</html>
