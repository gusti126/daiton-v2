<!-- Desktop Header -->
<header class="w-full items-center bg-white py-4 px-6 hidden sm:flex">
    <div class="w-1/2"></div>
    <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
        <button @click="isOpen = !isOpen" class="realtive z-10 ">
            {{ Auth::user()->name }}
        </button>
        <button x-show="isOpen" @click="isOpen = false" class="h-full w-full fixed inset-0 cursor-default"></button>
        <div x-show="isOpen" class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-16">

            <a href="#" class="block px-4 py-2 account-link hover:text-white">Sign Out</a>
        </div>
    </div>
</header>
