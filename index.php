<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <title>Sparks Bank</title>
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
  <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>

  
</head>

<body>
  <!-- Navbar -->
 

  <header class="text-gray-400 bg-gray-900 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
        <img src="images/logo.png" alt="logo" style="width:40px;">
      </a>
      <span class="ml-3 text-xl">Sparks</span>
    </a>
    <div class="mobile-container">

     <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-700	flex flex-wrap items-center text-base justify-center">
      <a class="mr-5 hover:text-white" aria-current="page" href=" index.php " >Home</a>
      <a class="mr-5 hover:text-white"  href="#about" >About</a>
      <a class="mr-5 hover:text-white"  href="#services" >Services</a>
      <a class="mr-5 hover:text-white"  href="#contact1" >Contact</a>
    </nav>
    </div>

     <!-- <input type="search" id="search" name="name" class="bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-purple-500 focus:bg-gray-900 focus:ring-2 focus:ring-purple-900 text-base outline-none text-gray-100 py-1.5 px-5 leading-8 transition-colors duration-200 ease-in-out">
      <button class="inline-flex items-center bg-gray-800 border-0 py-1 px-3 focus:outline-none hover:bg-purple-700 rounded text-base mt-4 md:mt-0">Search
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
      </button>-->
    </div> 
</header>
  <!-- End Navbar -->


  <!-- Home -->
 
  <section class="text-gray-400 bg-gray-900 body-font">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white">Basic Banking System
      </h1>
      <p class="mb-8 leading-relaxed"> Banking online means accessing your bank account and carrying out financial transactions through the internet on your smartphone, tablet or computer. It's quick, usually free and allows you to do tasks, such as paying bills and transferring money, without having to visit or call your bank. </p>
      <div class="flex justify-center">
      <a href="#services" class="ml-4 inline-flex text-gray-400 bg-gray-800 border-0 py-2 px-6 focus:outline-none hover:bg-purple-700 hover:text-white rounded text-lg">Get Started</a>
    </div>
    </div>
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
      <img class="object-cover object-center rounded" alt="hero" src="images\Finance app-rafiki.png">
    </div>
  </div>
</section>
  <!-- End Home -->

  <!-- About -->
 

  <section id="about" class="text-gray-400 bg-gray-900 body-font">
  <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white">About Us</h1>
  </div>
  <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
    <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="Sparks Bank" src="images\bankmoney.png">
    <div class="text-center lg:w-2/3 w-full">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white">Sparks Bank</h1>
      <p class="leading-relaxed mb-8">It is a Basic Banking System for making transactions between users.
              It can transfer Money between multiple accounts,view all Customer's data and view all the past
              transactions happened between different accounts..<br>
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis, odio reprehenderit quia voluptatibus unde quidem error aliquid temporibus? Nesciunt quae excepturi qui assumenda placeat temporibus numquam odio, distinctio id aperiam expedita similique eveniet et voluptate eius voluptatum saepe odit natus nam ipsa libero? Sunt magni ad in nihil perspiciatis sint!</p>
      </div>
    </div>

</section>
  <!-- End About -->

  <!-- Services -->
 

  <section id="services" class="text-gray-400 bg-gray-900 body-font">
  <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white">Our Services</h1>
  </div>
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4">
      <div class="p-4 md:w-1/3">
        <div class="h-full border-2 border-gray-800 rounded-lg overflow-hidden">
          <img class="card-img-top mt-3 img" src="https://img.icons8.com/external-kiranshastry-gradient-kiranshastry/512/000000/external-group-cyber-security-kiranshastry-gradient-kiranshastry-3.png" alt="Responsive image ">
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-500 mb-1">Customers</h2>
            <h1 class="title-font text-lg font-medium text-white mb-3">View All Customers data and check total transfered money</h1>
            <div class="flex items-center flex-wrap ">
              <a href="transfermoney.php" class="text-purple-400 inline-flex items-center md:mb-2 lg:mb-0">View Customers
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14"></path>
                  <path d="M12 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="p-4 md:w-1/3">
        <div class="h-full border-2 border-gray-800 rounded-lg overflow-hidden">
          <img class="card-img-top mt-3 img" src="https://img.icons8.com/external-kiranshastry-gradient-kiranshastry/512/000000/external-search-interface-kiranshastry-gradient-kiranshastry.png" alt="Responsive image">
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-500 mb-1">Transactions</h2>
            <h1 class="title-font text-lg font-medium text-white mb-3">View all past transations happened between different accounts</h1>
            
            <div class="flex items-center flex-wrap">
              <a href="transactionhistory.php" class="text-purple-400 inline-flex items-center md:mb-2 lg:mb-0">View Transactions
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14"></path>
                  <path d="M12 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="p-4 md:w-1/3">
        <div class="h-full border-2 border-gray-800 rounded-lg overflow-hidden">
          <img class="card-img-top mt-3 img" src="https://img.icons8.com/external-kiranshastry-gradient-kiranshastry/512/000000/external-transfer-management-kiranshastry-gradient-kiranshastry-1.png" alt="Responsive image">
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-500 mb-1">Transfer Money</h2>
            <h1 class="title-font text-lg font-medium text-white mb-3">Transfer Money between multiple accounts</h1>
            
            <div class="flex items-center flex-wrap ">
              <a href="transfermoney.php" class="text-purple-400 inline-flex items-center md:mb-2 lg:mb-0">Transfer
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14"></path>
                  <path d="M12 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <!-- End Services -->

  <!-- Contact -->
  

  <section id="contact1" class="text-gray-400 bg-gray-900 body-font relative">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white">Contact Us</h1>
      
    </div>
    <div class="lg:w-1/2 md:w-2/3 mx-auto">
      <div class="flex flex-wrap -m-2">
        <div class="p-2 w-1/2">
          <div class="relative">
          <form action="contact.php" method="POST" class="newsletter-form">
            <label for="name" class="leading-7 text-sm text-gray-400">Name</label>
            <input type="text" id="name" name="name" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-purple-500 focus:bg-gray-900 focus:ring-2 focus:ring-purple-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
        <div class="p-2 w-1/2">
          <div class="relative">
            <label for="email" class="leading-7 text-sm text-gray-400">Email</label>
            <input type="email" id="email" name="email" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-purple-500 focus:bg-gray-900 focus:ring-2 focus:ring-purple-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
        <div class="p-2 w-full">
          <div class="relative">
            <label for="message" class="leading-7 text-sm text-gray-400">Message</label>
            <textarea id="message" name="message" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-purple-500 focus:bg-gray-900 focus:ring-2 focus:ring-purple-900 h-32 text-base outline-none text-gray-100 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
          </div>
        </div>
        <div class="p-2 w-full">
          <button  name="save" class="flex mx-auto text-white bg-purple-500 border-0 py-2 px-8 focus:outline-none hover:bg-purple-600 rounded text-lg">Submit</button>
        </div>
        </form>
        
      </div>
    </div>
  </div>
</section>
  <!-- End Contact -->

  <!-- Footer -->
  

  <footer class="text-gray-600 body-font">
  <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
    <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
    <a class="navbar-brand" href="index.php">

      <img src="images/logo.png" alt="logo" style="width:40px;">
    </a>
      <span class="ml-3 text-xl">Sparks</span>
    </a>
    <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2020 Sparks — All rights reserved
      
    </p>
    <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
      <a href="#facebook" class="text-gray-500">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
        </svg>
      </a>
      <a href="#twitter" class="ml-3 text-gray-500">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
        </svg>
      </a>
      <a href="#instagram" class="ml-3 text-gray-500">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
          <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
        </svg>
      </a>
      <a href="#linkedin" class="ml-3 text-gray-500">
        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
          <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
          <circle cx="4" cy="4" r="2" stroke="none"></circle>
        </svg>
      </a>
    </span>
  </div>
</footer>

  <!-- End Footer -->

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>