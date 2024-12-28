<div class="flex">
<aside class="w-64 bg-gray-800 text-white h-screen">
    <div class="p-4">
        <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" class="flex items-center text-sm pe-1 font-medium text-white rounded-full hover:text-blue-600 dark:hover:text-blue-500 md:me-0 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-white" type="button">
            <span class="sr-only">Open user menu</span>
            <img class="w-8 h-8 me-2 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="user photo">
           {{auth()->User()->username}}
            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
        </button>
        
            <!-- Dropdown menu -->
            <div id="dropdownAvatarName" class="z-10 hidden bg-white divide-y dark-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                  <li>
                    <a href="/dashboard" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                  </li>
                  <li>
                    <a href="/" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home</a>
                  </li>
                </ul>
                <form action="/logout" method="POST">
                  @csrf
                <div class="py-2">
                  <button type="submit" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</button>
                </div>
              </form>
            </div>
            
    </div>
    <ul class="space-y-2 p-4">
        <li>
            <a class="flex items-center p-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded" href="/dashboard/posts">
                <i class="fas fa-blog mr-2"></i> Manage Blog
            </a>
        </li>
        <li>
            <a class="flex items-center p-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded" href="/dashboard/pricelist">
                <i class="fas fa-list-alt mr-2"></i> Manage Pricelist
            </a>
        </li>
        <li>
            <a class="flex items-center p-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded" href="/dashboard/order">
                <i class="fas fa-shopping-cart mr-2"></i> Manage Orders
            </a>
        </li>
    </ul>
</aside>



