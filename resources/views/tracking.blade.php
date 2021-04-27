<x-guest-layout>
<nav class="fixed top-0 z-30 w-full text-white bg-white">
        <div class="container flex flex-wrap items-center justify-between w-full py-2 mx-auto mt-0">
            <div class="flex items-center pl-4">
                <a class="text-2xl font-bold text-white no-underline hover:no-underline lg:text-4xl" href="#">
                    <button
                        id="nav"
                        class="px-8 py-4 mx-auto mt-4 font-bold bg-white bg-blue-900 rounded-md shadow opacity-75 text-white-800 lg:mx-0 hover:underline lg:mt-0 focus:outline-none focus:shadow-outline hover:scale-105">
                        LASMGSI
                    </button>
                </a>
            </div>
                <div class="block pr-12 lg:hidden">
                    <button id="nav-toggle" class="flex items-center p-1 text-pink-800 transition duration-300 ease-in-out transform hover:text-white-900 focus:outline-none focus:shadow-outline hover:scale-105">
                        <svg class="w-6 h-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Menu</title>
                                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                        </svg>
                    </button>
                </div>
            <div class="z-20 flex-grow hidden w-full p-4 mt-2 text-black bg-white lg:flex lg:items-center lg:w-auto lg:mt-0 lg:bg-transparent lg:p-0" id="nav-content">
                <ul class="items-center justify-end flex-1 list-reset lg:flex">
                    <li class="mr-3">
                        <a class="inline-block px-4 py-2 text-black no-underline" href="#">HOME</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block px-4 py-2 text-black no-underline" href="#">CREATE SHIPMENT</a>
                    </li>
                        <li class="mr-3">
                            <a class="inline-block px-4 py-2 text-black no-underline hover:text-gray-800 hover:text-underline" href="#">REGISTER</a>
                        </li>
                        <li class="mr-3">
                            <a class="inline-block px-4 py-2 text-black no-underline hover:text-gray-800 hover:text-underline" href="#">CONTACT US</a>
                        </li>
                    <li class="mr-3">
                        <a class="inline-block px-4 py-2 text-black no-underline hover:text-gray-800 hover:text-underline" href="#">ABOUT US</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block px-4 py-2 font-bold text-black no-underline hover:text-gray-800 hover:text-underline" href="#">TRACK</a>
                    </li>
                </ul>
                <button
                    id="nav"
                    class="px-8 py-4 mx-auto mt-4 font-bold text-white bg-white bg-blue-900 rounded-md shadow opacity-75 lg:mx-0 hover:underline lg:mt-0 focus:outline-none focus:shadow-outline hover:scale-105">
                    LOGIN
                </button>
            </div>
        </div>
    </nav>
    <section class="w-full pl-72 lg:w-4/5">
            <!--divider-->
            <hr class="my-12 bg-gray-300">

            <!--Title-->
            <br>
            <br>
            <br>
            <h2 id='section1' class="w-full px-2 pb-8 font-sans text-3xl font-bold text-white break-normal">L-3A Tracking</h2>

        <div class="container items-center justify-center w-full font-sans text-black bg-gray-400 border rounded">
            <div class="flex border rounded">
                <input type="text" class="items-center justify-center w-full h-12 mx-auto text-white bg-gray-400" placeholder="Track your shipment..">
                    <button class="flex items-center justify-center px-4 border-l">
                        <svg class="w-4 h-4 text-grey-dark" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"/></svg>
                    </button>
            </div>
        </div>
    </section>
</x-guest-layout>
