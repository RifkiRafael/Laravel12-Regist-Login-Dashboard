]<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Profile</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-950 text-gray-200">

  <!-- Navbar -->
  <nav class="fixed top-0 z-50 w-full border-b border-gray-800 bg-gray-900/90">
    <div class="px-4 py-3 flex items-center justify-between">
      <!-- Logo / Title -->
      <div class="flex items-center">
        <button class="p-2 text-gray-300 rounded-lg hover:bg-gray-800">
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
          </svg>
        </button>
        <span class="ml-3 text-xl font-semibold text-blue-400">Dashboard</span>
      </div>

      <!-- User Profile -->
      <div class="flex items-center">
        <button class="flex items-center bg-gray-800 rounded-full p-1 focus:ring-2 focus:ring-gray-700">
          <img src="ini.poto" alt="user" class="w-8 h-8 rounded-full">
        </button>
      </div>
    </div>
  </nav>

  <!-- Sidebar -->
  <aside class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 border-r border-gray-800 bg-gray-900/90 -translate-x-full sm:translate-x-0">
    <div class="h-full px-3 pb-4 overflow-y-auto">
      <ul class="space-y-2 font-medium">
        <li>
          <a href="#" class="flex items-center p-2 rounded-lg hover:bg-gray-800 group">
            <span class="ml-2 group-hover:text-blue-400">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#" class="flex items-center p-2 rounded-lg hover:bg-gray-800 group">
            <span class="ml-2 group-hover:text-blue-400">Profile</span>
          </a>
        </li>
        <li>
          <a href="#" class="flex items-center p-2 rounded-lg hover:bg-gray-800 group">
            <span class="ml-2 group-hover:text-blue-400">Projects</span>
          </a>
        </li>
        <li>
          <a href="#" class="flex items-center p-2 rounded-lg hover:bg-gray-800 group">
            <span class="ml-2 group-hover:text-blue-400">Contact</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>

  <!-- Main Content -->
  <main class="p-4 pt-20 sm:ml-64">
    <div class="p-6 border border-gray-800 bg-gray-900/90 shadow-xl rounded-2xl">
      <div class="flex flex-col items-center">
        <!-- Profile Image -->
        <img src="poto.aku" alt="Profile" class="w-24 h-24 border-2 border-blue-400 rounded-full object-cover">
        <h2 class="mt-3 text-lg font-semibold text-blue-400">Muhammad Rifki Rafael</h2>

        <hr class="my-4 w-full border-gray-800">

        <!-- About -->
        <p class="text-center text-gray-300 max-w-lg">
          HAIII!!!, perkenalkan nama aku Muhammad Rifki Rafael kalian bisa panggil aku ell atau kira. oh iyaa, aku cinta mie sedaap singapore laksa d:
        </p>

        <!-- Button -->
        <a href="https://www.instagram.com/rifkirfl07_?igsh=MWJ4N2I0aXp5c3NwNg==" target="_blank"
           class="mt-4 px-5 py-2 rounded-lg bg-blue-400 text-black font-medium hover:bg-blue-500 transition">
          View medsos
        </a>
      </div>
    </div>
  </main>

</body>
</html>
