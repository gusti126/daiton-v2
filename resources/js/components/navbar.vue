<template>
    <div>
        <nav class="relative flex flex-wrap items-center justify-between px-2  bg-white mb-3">
        <div class="container px-2 md:px-4 mx-auto flex flex-wrap items-center justify-between">
            <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
                <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-gray-800"
                    href="/">
                    <img :src="'/gambar/logo.svg'" alt="">
                </a>
                
                <div
                    class="text-gray-800 cursor-pointer text-xl h-auto  px-3 py-1  rounded bg-transparent block lg:hidden outline-none focus:outline-none"
                    v-on:click="toggleNavbar()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-black" v-bind:class="{'hidden': showMenu}" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" v-bind:class="{'hidden': !showMenu, 'flex': showMenu}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg> 
                </div>
            </div>
            <div v-bind:class="{'hidden': !showMenu, 'flex': showMenu}" class="lg:flex lg:flex-grow flex items-center">
                <div class="flex flex-col lg:flex-row list-none ml-auto">
                    <div>Hello</div>
                    
                </div>
            </div>
        </div>
    </nav>
    </div>
</template>

<script>
    export default {
        name: "navbar",
        data() {
            return {
                showMenu: false
            }
        },
        mounted(){
            console.log("hello");
        },
        methods: {
            toggleNavbar: function() {
                this.showMenu = !this.showMenu;
            }
        }
    }
</script>
