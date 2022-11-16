<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>
<div id="root">
<body>
    @yield('content')
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</body>

<footer class="p-4 bg-white rounded-lg shadow md:px-6 md:py-8 dark:bg-gray-900">
  <div class="sm:flex sm:items-center sm:justify-between">
      <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0">
          <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-8" alt="Flowbite Logo">
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
      </a>
      <ul class="flex flex-wrap items-center mb-6 text-sm text-gray-500 sm:mb-0 dark:text-gray-400">
          <li>
              <a href="#" class="mr-4 hover:underline md:mr-6 ">Sobre mí</a>
          </li>
          <li>
              <a href="#" class="mr-4 hover:underline md:mr-6">Mis trabajos</a>
          </li>
          <li>
              <a href="#" class="mr-4 hover:underline md:mr-6 ">Contacto</a>
          </li>
      </ul>
  </div>
  <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
  <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
  </span>
</footer>
</div>
</html>