 <br>
 <br>
 <br>

 <?php
    echo view('Chatbox');
    ?>

 <?php
    echo view('RequestSampleCase');
    ?>

 <!-- Hero Section with Schema.org markup -->
 <section itemscope itemtype="https://schema.org/DentalClinic">
     <div class="w-full sm:h-screen">
         <div class="w-full h-[70%] bg-[url('public/images/1366120.jpg')] bg-cover bg-center bg-no-repeat z-50"
             role="img" aria-label="Dental laboratory workspace with precision tools">
             <div class="w-full h-full relative top-10 pb-20">
                 <div class="lg:px-16 md:px-8 px-4 flex sm:flex-row flex-col flex-col-reverse gap-6 justify-center items-center">
                     <div class="sm:text-left text-center text-white md:mt-12" itemprop="description">
                         <div class="sm:md:text-2xl text-xl text-3xl rounded-xl w-fit bg-gray-900/90 p-4">
                             <h1 class="mt-4 sm:text-4xl md:text-2xl text-xl" itemprop="name">Hello ,
                                 <span class="typing libre-baskerville-bold text-green-500"
                                     aria-live="polite"
                                     role="status">
                                 </span>
                             </h1>

                             <p class="mt-4 text-lg capitalize" itemprop="slogan">
                                 Where precision, care, and collaboration come together to create exceptional dental solutions. Let’s achieve greatness together!
                             </p>
                         </div>

                         <div class="mt-6 flex sm:flex-row flex-col gap-4 sm:justify-start justify-center md:w-[50%] w-[100%]">
                             <button onclick="togglePopup()"
                                 class="rounded-sm p-3 grow text-center bg-yellow-500 text-black font-bold uppercase text-sm tracking-widest hover:bg-yellow-600 transition"
                                 aria-label="Sign up for BravoDent dental lab services"
                                 itemprop="potentialAction" itemscope itemtype="https://schema.org/RegisterAction">
                                 Sign Up Now
                                 <meta itemprop="url" content="https://bravodentdesigns.com/signup" />
                             </button>
                             <a href="prodservice.html"
                                 target="_self"
                                 class="rounded-sm p-3 grow border text-center border-green-500 bg-green-500 text-black hover:bg-green-700 hover:border-green-700 font-bold uppercase text-sm tracking-widest transition"
                                 aria-label="Learn more about BravoDent dental lab products and services"
                                 itemprop="knowsAbout">
                                 Learn More
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>


 <!-- The Bravodent Collaboration section with Schema markup -->
 <section class="py-16 md:-mt-[400px]" itemscope itemtype="https://schema.org/Service">
     <div class="max-w-7xl mx-auto px-6 sm:px-8">
         <div class="text-center mb-12 md:hidden">
             <h1 class="text-3xl font-extrabold text-purple-800 sm:text-4xl" itemprop="name">The Bravodent Collaboration</h1>
             <p class="text-gray-600 text-lg mt-4" itemprop="description">
                 Empowering dental professionals with innovative solutions tailored to meet every need.
             </p>
         </div>
         <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
             <!-- Feature 1 -->
             <div class="relative bg-white border border-gray-200 shadow-lg rounded-xl p-8 transition transform hover:scale-105 hover:shadow-2xl"
                 itemprop="hasOfferCatalog" itemscope itemtype="https://schema.org/OfferCatalog">
                 <div class="absolute top-0 left-0 h-2 w-16 bg-purple-500 rounded-bl-lg rounded-tr-md"></div>
                 <h2 class="text-lg font-bold text-purple-700 mb-4" itemprop="name">01 | Advanced CAD Design Solutions</h2>
                 <p class="text-gray-600 leading-relaxed" itemprop="description">
                     Delivering precise digital dental designs, BravoDent offers a full suite of services powered by cutting-edge technology to support your workflow and deliver exceptional results.
                 </p>
                 <meta itemprop="category" content="Dental CAD/CAM Services" />
             </div>
             <!-- Feature 2 -->
             <div class="relative bg-white border border-gray-200 shadow-lg rounded-xl p-8 transition transform hover:scale-105 hover:shadow-2xl"
                 itemprop="hasOfferCatalog" itemscope itemtype="https://schema.org/OfferCatalog">
                 <div class="absolute top-0 left-0 h-2 w-16 bg-purple-500 rounded-bl-lg rounded-tr-md"></div>
                 <h2 class="text-lg font-bold text-purple-700 mb-4" itemprop="name">02 | Expert-Led Collaboration</h2>
                 <p class="text-gray-600 leading-relaxed" itemprop="description">
                     Partner with certified dental professionals who deeply understand the challenges of labs and clinics, ensuring every case meets the highest standards of quality and reliability.
                 </p>
                 <meta itemprop="category" content="Dental Lab Consulting" />
             </div>
             <!-- Feature 3 -->
             <div class="relative bg-white border border-gray-200 shadow-lg rounded-xl p-8 transition transform hover:scale-105 hover:shadow-2xl"
                 itemprop="hasOfferCatalog" itemscope itemtype="https://schema.org/OfferCatalog">
                 <div class="absolute top-0 left-0 h-2 w-16 bg-purple-500 rounded-bl-lg rounded-tr-md"></div>
                 <h2 class="text-lg font-bold text-purple-700 mb-4" itemprop="name">03 | Seamless Workflow Integration</h2>
                 <p class="text-gray-600 leading-relaxed" itemprop="description">
                     Experience effortless collaboration with our intuitive Portal, designed to simplify communication, provide real-time updates, and ensure a smooth design-to-delivery process.
                 </p>
                 <meta itemprop="category" content="Dental Workflow Solutions" />
             </div>
         </div>
     </div>
 </section>

 <!-- Welcome to BravoDent Design Center, India! with Organization markup -->
 <section class="md:py-16 py-4 md:px-8 px-2" itemscope itemtype="https://schema.org/DentalClinic">
     <div class="max-w-8xl mx-auto md:px-6 px-4 flex flex-col sm:flex-row items-center justify-center gap-12">
         <!-- Left side content -->
         <div class="sm:w-1/3 text-left">
             <h1 class="text-3xl font-bold text-gray-900 sm:text-3xl leading-tight mb-6" itemprop="name">
                 Welcome to BravoDent Design Center, India
             </h1>
             <p class="text-gray-600 text-lg mt-4 leading-relaxed" itemprop="description">
                 BravoDent is a leading provider of <span class="font-semibold text-blue-600" itemprop="knowsAbout">3Shape design services</span> in India, offering specialized outsourcing solutions to dental laboratories and technicians worldwide.
             </p>
             <p class="text-gray-600 text-lg mt-4 leading-relaxed" itemprop="description">
                 We are committed to delivering <span class="font-semibold text-blue-600" itemprop="knowsAbout">exceptional dental designs</span> that enhance the capabilities of dental labs. Our dedicated teams work closely with each client to provide tailored solutions that meet specific needs and ensure seamless integration with their operations.
             </p>
             <p class="text-gray-600 text-lg mt-4 leading-relaxed" itemprop="description">
                 At BravoDent, we prioritize <span class="font-semibold text-blue-600" itemprop="knowsAbout">quality, precision, and long-term collaboration</span>. Our focus is on building lasting partnerships with our clients through consistently reliable service and innovative design solutions.
             </p>
             <div class="mt-8">
                 <a href="aboutUs.html" target="_self" class="inline-block px-8 py-4 bg-blue-600 text-white font-semibold md:text-lg text-sm md:rounded-xl rounded-sm shadow-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-105"
                     itemprop="url" aria-label="Learn more about BravoDent dental lab services">
                     Learn More
                 </a>
             </div>
         </div>

         <!-- Right side video -->
         <div class="sm:w-1/2 flex justify-center items-center">
             <video src="public/images/Welcome BravoDent Home.mp4"
                 alt="BravoDent Design Center dental laboratory workspace"
                 class="w-full h-auto max-w-full rounded-xl shadow-2xl hover:scale-105 transition-all duration-300 md:ml-24"
                 loop autoplay muted playsinline itemprop="video">
                 <source src="public/images/Welcome BravoDent Home.mp4" type="video/mp4" itemprop="contentUrl">
                 Your browser does not support the video tag.
             </video>
         </div>
     </div>
 </section>

 <!-- ISO Certified Excellence with Review markup -->
 <section class="md:py-16 py-4 md:px-8 px-2" itemscope itemtype="https://schema.org/Review">
     <div class="container mx-auto px-4 sm:px-2">
         <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
             <div class="bg-white rounded-lg shadow-lg md:p-8 p-2 max-w-4xl mx-auto mt-12 transform transition-all duration-300 hover:scale-105"
                 itemprop="itemReviewed" itemscope itemtype="https://schema.org/DentalClinic">
                 <h1 class="text-indigo-700 font-semibold text-2xl sm:text-4xl lg:text-4xl mb-6 text-center tracking-tight" itemprop="name">
                     ISO Certified Excellence - BravoDent Design Center
                 </h1>

                 <!-- Stylish Box for the Key Features -->
                 <div class="text-white rounded-lg p-4 mb-8 flex justify-center items-center">
                     <p class="text-sm sm:text-base font-medium text-center flex flex-wrap justify-center">
                         <span class="px-3 py-1 bg-[#007BFF] rounded-full mx-1 my-1" itemprop="keywords">Quality</span>
                         <span class="px-3 py-1 bg-[#28A745] rounded-full mx-1 my-1" itemprop="keywords">Confidentiality</span>
                         <span class="px-3 py-1 bg-[#FFC107] rounded-full mx-1 my-1" itemprop="keywords">Data Security</span>
                         <span class="px-3 py-1 bg-[#6F42C1] rounded-full mx-1 my-1" itemprop="keywords">Client Privacy</span>
                     </p>
                 </div>

                 <p class="text-gray-800 text-sm sm:text-base mb-6 leading-relaxed" itemprop="reviewBody">
                     Our ISO Certification stands as a symbol of our unwavering commitment to confidentiality, quality, and precision by adhering to globally recognized standards.
                     <br><br>
                     We ensure that every design and product delivered is crafted with the highest level of safety, reliability, and trust, setting a benchmark in excellence for our partners.
                 </p>
                 <div itemprop="author" itemscope itemtype="https://schema.org/Organization">
                     <meta itemprop="name" content="BravoDent Designs" />
                 </div>
                 <meta itemprop="datePublished" content="2023-01-01" />
             </div>

             <!-- Right Card: Image Section -->
             <div class="bg-white rounded-lg shadow-lg p-4 max-w-4xl mx-auto mt-12 transform transition-all duration-300 hover:scale-105">
                 <img src="public/images/What We Offer.jpg" alt="ISO Certified Dental Laboratory - BravoDent Design Center"
                     class="h-full w-full rounded-lg shadow-xl transition-all duration-300 hover:scale-105"
                     itemprop="image">
             </div>
         </div>

         <!-- Why ISO Matters Section -->
         <section itemscope itemtype="https://schema.org/AggregateRating">
             <div class="bg-gray-50 py-4 mt-12 rounded-lg shadow-xl hover:scale-100 transform transition-all duration-300 md:px-8 px-2">
                 <!-- Client Stats Grid -->
                 <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 md:mt-8">
                     <!-- Projects Completed -->
                     <div class="flex flex-col items-center bg-white p-8 rounded-lg shadow-md hover:shadow-lg hover:scale-105 transition-transform duration-300 ease-in-out">
                         <div class="w-14 h-14 rounded-full bg-blue-600 text-white flex items-center justify-center mb-6">
                             <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                             </svg>
                         </div>
                         <dt class="text-lg font-semibold text-gray-800">Cases Completed</dt>
                         <div class="relative w-full mt-4">
                             <div class="h-2 rounded-full bg-gray-200 overflow-hidden">
                                 <div class="h-full bg-blue-500" style="width: 90%"></div>
                             </div>
                             <dd class="mt-2 text-4xl font-bold text-gray-800" data-count="1000000" itemprop="ratingCount">0</dd>
                         </div>
                     </div>

                     <!-- Expert Designers -->
                     <div class="flex flex-col items-center bg-white p-8 rounded-lg shadow-md hover:shadow-lg hover:scale-105 transition-transform duration-300 ease-in-out">
                         <div class="w-14 h-14 rounded-full bg-green-600 text-white flex items-center justify-center mb-6">
                             <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6L12 18L21 6" />
                             </svg>
                         </div>
                         <dt class="text-lg font-semibold text-gray-800">Expert Designers</dt>
                         <div class="relative w-full mt-4">
                             <div class="h-2 rounded-full bg-gray-200 overflow-hidden">
                                 <div class="h-full bg-green-500" style="width: 75%"></div>
                             </div>
                             <dd class="mt-2 text-4xl font-bold text-gray-800" data-count="50">0</dd>
                         </div>
                     </div>

                     <!-- Satisfied Clients -->
                     <div class="flex flex-col items-center bg-white p-8 rounded-lg shadow-md hover:shadow-lg hover:scale-105 transition-transform duration-300 ease-in-out">
                         <div class="w-14 h-14 rounded-full bg-yellow-500 text-white flex items-center justify-center mb-6">
                             <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6h18M3 12h18M3 18h18" />
                             </svg>
                         </div>
                         <dt class="text-lg font-semibold text-gray-800">Satisfied Clients</dt>
                         <div class="relative w-full mt-4">
                             <div class="h-2 rounded-full bg-gray-200 overflow-hidden">
                                 <div class="h-full bg-yellow-400" style="width: 95%"></div>
                             </div>
                             <dd class="mt-2 text-4xl font-bold text-gray-800" data-count="300" itemprop="ratingValue">0</dd>
                         </div>
                     </div>

                     <!-- Countries Served -->
                     <div class="flex flex-col items-center bg-white p-8 rounded-lg shadow-md hover:shadow-lg hover:scale-105 transition-transform duration-300 ease-in-out">
                         <div class="w-14 h-14 rounded-full bg-red-500 text-white flex items-center justify-center mb-6">
                             <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18M3 12h18M3 21h18" />
                             </svg>
                         </div>
                         <dt class="text-lg font-semibold text-gray-800">Countries Served</dt>
                         <div class="relative w-full mt-4">
                             <div class="h-2 rounded-full bg-gray-200 overflow-hidden">
                                 <div class="h-full bg-red-500" style="width: 65%"></div>
                             </div>
                             <dd class="mt-2 text-4xl font-bold text-gray-800" data-count="10">0</dd>
                         </div>
                     </div>
                 </div>

                 <!-- Call to Action -->
                 <div class="mt-12 text-center">
                     <a href="" target="_self"
                         class="inline-block px-6 py-3 bg-indigo-600 text-white font-medium rounded-lg shadow-md hover:bg-indigo-700 transition-all duration-300"
                         itemprop="url" aria-label="Choose BravoDent for ISO certified dental lab services">
                         Choose Bravodent for a certified and professional experience that prioritizes your success.
                     </a>
                 </div>
                 <meta itemprop="bestRating" content="300" />
                 <meta itemprop="worstRating" content="1" />
             </div>
             <script>
                 document.addEventListener('DOMContentLoaded', function() {
                     const counters = document.querySelectorAll('[data-count]');

                     function countUp(element) {
                         const target = parseInt(element.getAttribute('data-count'));
                         let current = 0;
                         const increment = target / 100;
                         const interval = setInterval(function() {
                             current += increment;
                             if (current >= target) {
                                 element.textContent = target.toLocaleString() + "+";
                                 clearInterval(interval);
                             } else {
                                 element.textContent = Math.floor(current).toLocaleString() + "+";
                             }
                         }, 30);
                     }

                     const observer = new IntersectionObserver((entries, observer) => {
                         entries.forEach(entry => {
                             if (entry.isIntersecting) {
                                 countUp(entry.target);
                                 observer.unobserve(entry.target);
                             }
                         });
                     }, {
                         threshold: 0.2
                     });

                     counters.forEach(counter => observer.observe(counter));
                 });
             </script>
         </section>

         <!-- Fast Turnaround Section with Offer markup -->
         <section class="md:py-24 py-12 mt-12" itemscope itemtype="https://schema.org/OfferCatalog">
             <div class="container mx-auto md:px-8 px-2 text-center">
                 <h2 class="text-2xl sm:text-3xl font-semibold text-gray-800 mb-6" itemprop="name">
                     Fast Turnaround Time - BravoDent
                 </h2>
                 <p class="text-sm sm:text-base mb-8 mx-auto max-w-4xl text-gray-700 leading-relaxed" itemprop="description">
                     Designs delivered with speed and precision. Choose your preferred timeline: Double Speed, Super Fast, or Next Day.
                 </p>

                 <!-- Logistics Cards Grid -->
                 <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
                     <!-- Super Fast Card (1-2 Hours) -->
                     <div class="bg-white rounded-2xl shadow-xl md:p-8 p-4 transition-transform transform hover:scale-105 hover:shadow-2xl"
                         itemprop="itemListElement" itemscope itemtype="https://schema.org/Offer">
                         <div class="mb-6">
                             <div class="flex items-center justify-center mb-6">
                                 <img class="w-24 h-24 rounded-full border-4 border-indigo-600 shadow-lg"
                                     src="public/images/superfirst.jpg"
                                     alt="Super Fast 1-2 Hour Dental Design Delivery"
                                     itemprop="image">
                             </div>
                         </div>
                         <h3 class="text-2xl font-semibold text-gray-800 mb-4" itemprop="name">1-2 Hours</h3>
                         <p class="text-gray-600 text-sm sm:text-base leading-relaxed" itemprop="description">
                             Rush Delivery (1-2 Hours)
                             <br>
                             Need it fast? Get your designs within 1-2 hours.
                         </p>
                         <meta itemprop="price" content="Varies" />
                         <meta itemprop="priceCurrency" content="USD" />
                     </div>

                     <!-- Double Speed Card (6 Same Day) -->
                     <div class="bg-white rounded-2xl shadow-xl md:p-8 p-4 transition-transform transform hover:scale-105 hover:shadow-2xl"
                         itemprop="itemListElement" itemscope itemtype="https://schema.org/Offer">
                         <div class="mb-6">
                             <div class="flex items-center justify-center mb-6">
                                 <img class="w-24 h-24 rounded-full border-4 border-indigo-600 shadow-lg"
                                     src="public/images/first.webp"
                                     alt="Same Day 6 Hour Dental Design Service"
                                     itemprop="image">
                             </div>
                         </div>
                         <h3 class="text-2xl font-semibold text-gray-800 mb-4" itemprop="name">6 Hours</h3>
                         <p class="text-gray-600 text-sm sm:text-base leading-relaxed" itemprop="description">
                             Same-Day Delivery (6 Hours)
                             <br>
                             Perfect for same-day needs—your designs will be ready in 6 hours.
                         </p>
                         <meta itemprop="price" content="Varies" />
                         <meta itemprop="priceCurrency" content="USD" />
                     </div>

                     <!-- Standard Speed Card (12 Hours Next Day) -->
                     <div class="bg-white rounded-2xl shadow-xl md:p-8 p-4 transition-transform transform hover:scale-105 hover:shadow-2xl"
                         itemprop="itemListElement" itemscope itemtype="https://schema.org/Offer">
                         <div class="mb-6">
                             <div class="flex items-center justify-center mb-6">
                                 <img class="w-24 h-24 rounded-full border-4 border-indigo-600 shadow-lg"
                                     src="public/images/slow.jpg"
                                     alt="Next Day 12 Hour Dental Design Service"
                                     itemprop="image">
                             </div>
                         </div>
                         <h3 class="text-2xl font-semibold text-gray-800 mb-4" itemprop="name">12 Hours</h3>
                         <p class="text-gray-600 text-sm sm:text-base leading-relaxed" itemprop="description">
                             Next-Day Delivery (12 Hours)
                             <br>
                             Plan ahead—your designs will be ready by the next morning.
                         </p>
                         <meta itemprop="price" content="Varies" />
                         <meta itemprop="priceCurrency" content="USD" />
                     </div>
                 </div>
             </div>
         </section>

         <!-- Dedicated Support Section -->
         <div class="bg-white py-12 p-6 border-t-4 border-teal-500 rounded-lg shadow-md hover:scale-105 transform transition-all duration-300"
             itemscope itemtype="https://schema.org/CustomerService">
             <h3 class="text-lg sm:text-xl font-semibold text-center text-gray-800" itemprop="name">Dedicated Support?</h3>
             <p class="mt-4 text-gray-700 text-center text-sm sm:text-base" itemprop="description">
                 24/6 assistance from our expert team. Always here to ensure the success of your cases.
             </p>
             <meta itemprop="serviceType" content="Dental Lab Support" />
             <meta itemprop="hoursAvailable" content="Mo,Tu,We,Th,Fr,Sa 00:00-24:00" />
         </div>
     </div>
 </section>

 <!-- Design Products & Services, We Provide -->
 <section class="md:py-8 py-4" id="section-1">
     <div class="mx-auto max-w-7xl px-6 lg:px-8">
         <!-- Section Header -->
         <div class="text-center space-y-6">
             <h2 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl">Our Design Products & Services</h2>
             <p class="text-lg leading-8 text-gray-600">Explore precision-driven design solutions for your dental lab, crafted to meet global standards and elevate your practice.</p>
         </div>

         <!-- Product List and Description Area -->
         <div class="mt-16 flex flex-col lg:flex-row items-start justify-center space-y-8 lg:space-y-0 lg:space-x-12">
             <!-- Left Side: Product List -->
             <div class="w-full max-w-md lg:w-1/3 bg-white rounded-lg shadow-xl md:p-6 p-2">
                 <div class="space-y-[8%]">
                     <!-- Accordion Item -->
                     <div class="accordion-item w-full">
                         <button
                             class="item w-full p-4 py-6 bg-gray-700 rounded-lg cursor-pointer hover:bg-blue-600 transition-transform duration-300 hover:scale-105 shadow-lg hover:text-white text-white"
                             onclick="toggleAccordion(this)">
                             Fixed Designs
                         </button>
                         <div class="accordion-content hidden px-4 py-2 bg-gray-100 rounded-md text-gray-600">
                             High-quality, durable solutions for crowns, bridges, and full-arch restorations that ensure precision and reliability.
                         </div>
                     </div>

                     <!-- Accordion Item -->
                     <div class="accordion-item w-full">
                         <button
                             class="item w-full p-4 py-6 bg-gray-700 rounded-lg cursor-pointer hover:bg-green-600 transition-transform duration-300 hover:scale-105 shadow-lg hover:text-white text-white"
                             onclick="toggleAccordion(this)">
                             Implant Designs
                         </button>
                         <div class="accordion-content hidden px-4 py-2 bg-gray-100 rounded-md text-gray-600">
                             Precision-crafted implant restorations designed for functionality, longevity, and patient satisfaction.
                         </div>
                     </div>

                     <!-- Accordion Item -->
                     <div class="accordion-item w-full">
                         <button
                             class="item w-full p-4 py-6 bg-gray-700 rounded-lg cursor-pointer hover:bg-red-600 transition-transform duration-300 hover:scale-105 shadow-lg hover:text-white text-white"
                             onclick="toggleAccordion(this)">
                             Removable Designs
                         </button>
                         <div class="accordion-content hidden px-4 py-2 bg-gray-100 rounded-md text-gray-600">
                             Flexible and adaptable solutions for complete and partial dentures, offering unparalleled freedom and convenience.
                         </div>
                     </div>

                     <!-- Accordion Item -->
                     <div class="accordion-item w-full">
                         <button
                             class="item w-full p-4 py-6 bg-gray-700 rounded-lg cursor-pointer hover:bg-yellow-600 transition-transform duration-300 hover:scale-105 shadow-lg hover:text-white text-white"
                             onclick="toggleAccordion(this)">
                             Cost-Effective Solutions
                         </button>
                         <div class="accordion-content hidden px-4 py-2 bg-gray-100 rounded-md text-gray-600">
                             Designs delivered in as little as 2–3 hours or within customized timelines.
                         </div>
                     </div>

                     <!-- Accordion Item -->
                     <div class="accordion-item w-full">
                         <button
                             class="item w-full p-4 py-6 bg-gray-700 rounded-lg cursor-pointer hover:bg-purple-600 transition-transform duration-300 hover:scale-105 shadow-lg hover:text-white text-white"
                             onclick="toggleAccordion(this)">
                             Global Reach
                         </button>
                         <div class="accordion-content hidden px-4 py-2 bg-gray-100 rounded-md text-gray-600">
                             Supporting dental labs worldwide with personalized care.
                         </div>
                     </div>
                 </div>

                 <script>
                     function toggleAccordion(button) {
                         // Get the content div next to the clicked button
                         const content = button.nextElementSibling;

                         // Toggle visibility
                         if (content.classList.contains("hidden")) {
                             // Close all other accordion items
                             document.querySelectorAll(".accordion-content").forEach((div) => {
                                 div.classList.add("hidden");
                             });

                             // Show the current one
                             content.classList.remove("hidden");
                         } else {
                             // Hide the current one
                             content.classList.add("hidden");
                         }
                     }
                 </script>

             </div>

             <!-- Right Side: Description Area -->
             <div class="w-full max-w-3xl lg:w-2/3 bg-white rounded-lg shadow-xl p-8 transition-all duration-500 ease-in-out opacity-100" id="description-container-1">
                 <h2 class="text-3xl font-semibold text-gray-900 mb-4 text-center">Welcome to BravoDent Design Center</h2>
                 <p class="text-lg text-gray-600"></p>

                 <video autoplay loop muted playsinline class="bg-black rounded-lg shadow-xl">
                     <source src="public/images/DentalVideo.mp4" type="video/mp4">
                     Your browser does not support the video tag.
                 </video>
             </div>
         </div>
     </div>
 </section>
 <!-- Design Products & Services, We Provide -->


 <!-- our happy client -->
 <section class="bg-gradient-to-r from-blue-100 via-indigo-200 to-blue-100 md:py-16 py-4">
     <div class="container mx-auto text-center">
         <h2 class="text-4xl font-semibold text-gray-900 mb-8">Our Happy Clients</h2>
         <p class="text-xl text-gray-700 mb-12 mx-auto max-w-2xl">We value our clients and they trust us. Here’s what they have to say about their experiences working with us!</p>

         <!-- Client Testimonials Slider -->
         <div id="client-carousel" class="relative w-full max-w-5xl mx-auto overflow-hidden rounded-lg shadow-xl bg-white">
             <div class="carousel-inner flex transition-all duration-700 ease-in-out">
                 <!-- Testimonials will be injected here dynamically -->
             </div>

             <!-- Carousel Controls -->
             <button id="prev-btn" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-indigo-600 text-white p-4 rounded-full shadow-lg hover:bg-indigo-700 transition duration-300 ease-in-out focus:outline-none">
                 &laquo;
             </button>
             <button id="next-btn" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-indigo-600 text-white p-4 rounded-full shadow-lg hover:bg-indigo-700 transition duration-300 ease-in-out focus:outline-none">
                 &raquo;
             </button>
         </div>
     </div>

     <!-- JavaScript for carousel functionality -->
     <script>
         const clients = [{
                 name: "Emily Carter (Owner)",
                 address: "California, USA",
                 comments: ["BravoDent's remote assistance has been invaluable, always quick and professional."]

             },
             {
                 name: "Michael Adams (Operations Manager)",
                 address: "New York, USA",
                 comments: ["The BravoDent team provides excellent support, ensuring smooth workflow and timely resolutions."],
             },
             {
                 name: "Sarah Williams (CAD/CAM Manager)",
                 address: "Texas, USA",
                 comments: ["Thanks to BravoDent, we’ve never faced delays, their remote assistance is a lifesaver."],
             },
             {
                 name: "David Brown (Digital Dental Designer)",
                 address: "Florida, USA",
                 comments: ["BravoDent’s team is always available to solve our technical issues, ensuring minimal downtime."],
                 who: ""
             },
             {
                 name: "Olivia Martin (Laboratory Technician)",
                 address: "Illinois, USA",
                 comments: ["BravoDent offers fast, reliable support that keeps our systems running smoothly every time."],
                 who: ""
             },
             {
                 name: "Jack Reynolds (Quality Control Specialist)",
                 address: "Georgia, USA",
                 comments: ["I rely on BravoDent’s remote team for quick fixes and guidance, their professionalism is top-notch."]
             },
             {
                 name: "Lisa Green (Implant Specialist)",
                 address: "Nevada, USA",
                 comments: ["The remote support provided by BravoDent has been indispensable in managing our practice’s needs."]
             },
             {
                 name: "Alan Miller (Removables Specialist)",
                 address: "Ohio, USA",
                 comments: ["BravoDent’s customer service team responds immediately and efficiently resolves any challenges we face."]
             },
             {
                 name: "Dr. Michelle Clark",
                 address: "Michigan, USA",
                 comments: ["BravoDent has become an essential partner for us, their support team is always helpful and quick."]
             },
             {
                 name: "Dr. Brian Scott",
                 address: "Washington, USA",
                 comments: ["With BravoDent's excellent remote assistance, we’ve streamlined our operations and reduced downtime."]
             }
         ];

         const carouselInner = document.querySelector('.carousel-inner');

         // Function to dynamically render testimonials
         const renderTestimonials = () => {
             let i = 1;
             clients.forEach(client => {
                 const testimonialElement = document.createElement('div');
                 testimonialElement.classList.add('carousel-item', 'flex-shrink-0', 'w-full', 'px-6', 'py-8');

                 // Constructing HTML for each client
                 testimonialElement.innerHTML = `
                        <div class="flex items-center justify-center mb-6">
                            <img class="w-24 h-24 rounded-full border-4 border-indigo-600 shadow-lg" src="public/images/user.png" alt="${client.name}">
                        </div>
                        <p class="md:text-xl tex-sm text-gray-800 mb-4 italic px-6">"${client.comments.join(' ')}"</p>
                        <h3 class="font-semibold md:text-xl text-sm text-gray-900">${client.name}</h3>
                        <p class="text-gray-600">${client.address}</p>
                        <p class="text-gray-600">${i} / 10</p>`;

                 carouselInner.appendChild(testimonialElement);
                 i++;
             });
         };

         const prevBtn = document.getElementById('prev-btn');
         const nextBtn = document.getElementById('next-btn');
         let currentIndex = 0;

         // Function to update the carousel view
         const updateCarousel = () => {
             const offset = -100 * currentIndex; // Percentage-based movement
             carouselInner.style.transform = `translateX(${offset}%)`;
         };

         prevBtn.addEventListener('click', () => {
             currentIndex = (currentIndex === 0) ? clients.length - 1 : currentIndex - 1;
             updateCarousel();
         });

         nextBtn.addEventListener('click', () => {
             currentIndex = (currentIndex === clients.length - 1) ? 0 : currentIndex + 1;
             updateCarousel();
         });

         // Initialize carousel
         renderTestimonials();
         updateCarousel();
     </script>
 </section>
 <!-- our happy client -->