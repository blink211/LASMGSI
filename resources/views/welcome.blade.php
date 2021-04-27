<x-guest-layout>
        <nav class="fixed top-0 z-30 w-full text-white bg-white">
        <div class="container flex flex-wrap items-center justify-between w-full py-2 mx-auto mt-0">
            <div class="flex items-center pl-4">
            <a class="text-2xl font-bold text-white no-underline hover:no-underline lg:text-4xl" href="#">
            <button
                id="nav"
                class="px-8 py-4 mx-auto mt-4 font-bold bg-white bg-blue-900 rounded-md shadow opacity-75 text-white-800 lg:mx-0 hover:underline lg:mt-0 focus:outline-none focus:shadow-outline hover:scale-105"
            >
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
                <a class="inline-block px-4 py-2 font-bold text-black no-underline" href="#">HOME</a>
                </li>
                <li class="mr-3">
                <a class="inline-block px-4 py-2 text-black no-underline hover:text-gray-800 hover:text-underline" href="#">CREATE SHIPMENT</a>
                </li>
                <li class="mr-3">
                <a class="inline-block px-4 py-2 text-black no-underline hover:text-gray-800 hover:text-underline" href="#">REGISTER</a>
                </li>
                <li class="mr-3">
                <a class="inline-block px-4 py-2 text-black no-underline hover:text-gray-800 hover:text-underline" href="#">CONTACT US</a>
                </li>
                <li class="mr-3">
                <a class="inline-block px-4 py-2 text-black no-underline hover:text-gray-800 hover:text-underline" href="#">ABOUT US</a>
                <li class="mr-3">
                <a class="inline-block px-4 py-2 text-black no-underline hover:text-gray-800 hover:text-underline" href="#">TRACK</a>
                </li>
                </li>
            </ul>
            <button
                id="nav"
                class="px-8 py-4 mx-auto mt-4 font-bold text-white bg-white bg-blue-900 rounded-md shadow opacity-75 lg:mx-0 hover:underline lg:mt-0 focus:outline-none focus:shadow-outline hover:scale-105">
                LOGIN
            </button>
            </div>
        </div>
        <hr class="py-0 my-0 border-b border-gray-100 opacity-25" />
        </nav>
        <div class="w-full mt-20">
        <section class="py-8 bg-white border-b">
        <div class="container max-w-5xl m-8 mx-auto">
            <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
            L-3A's FREIGHT EXPRESS
            <br/>
            <br/>
            </h1>
            <div class="w-full mb-4">
            <div class="w-64 h-1 py-0 mx-auto my-0 rounded-t opacity-25 gradient"></div>
            </div>
            <div class="flex flex-wrap">
            <div class="w-5/6 p-6 sm:w-1/2">
                <br/>
                <h3 class="mb-3 text-2xl font-bold leading-none text-center text-gray-800">
                Welcome to L3A's Freight Express!
                </h3>
                <p class="mb-8 text-center text-gray-600 ">
                Our company makes sure that the shipments will be delivered safe and sound. The company has reliability and dependability when it comes to shipments around the globe.
                <br>
                </p>
                <div class="flex justify-center w-auto h-12 font-sans text-black bg-white">
                <div class="flex overflow-hidden border rounded">
                    <input type="text" class="px-4 py-2" placeholder="Track your shipment..">
                        <button class="flex items-center justify-center px-4 border-l">
                            <svg class="w-4 h-4 text-grey-dark" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"/></svg>
                        </button>
                    </div>
                </div>
            </div>
                <div>   
                    <img class="rounded-md ml-7 h-52 w-96" src="{{ asset('parcel.jpg') }}">
                </div>
                
            <div class="items-center justify-center w-full p-6 mb-3 leading-none">
                <div class="grid grid-cols-3 gap-12">
                <div class="align-middle">
                    <br>
                    <br>
                    <div>   
                    <img class="h-32 rounded-md ml-7 w-82" src="{{ asset('land.png') }}">
                    </div>
                    <h3 class="pr-32 mb-3 text-3xl font-bold leading-none text-center text-gray-800">
                    <br/>
                        LAND
                    </h3>
                    <p class="mb-3 text-xs font-bold leading-none text-center text-gray-800 pr-28">
                    LEARN MORE 🡆
                    </p>
                </div>
                <div class="align-middle">
                    <br>
                    <br>
                    <div>   
                        <img class="h-32 rounded-md ml-7 w-82" src="{{ asset('air.png') }}">
                    </div>
                    <h3 class="pr-40 mb-3 text-3xl font-bold leading-none text-center text-gray-800">
                    <br/>
                        AIR
                    </h3>
                    <p class="mb-3 text-xs font-bold leading-none text-center text-gray-800 pr-28">
                    LEARN MORE 🡆
                    </p>
                </div>
                <div class="align-middle">
                    <br>
                    <br>
                    <div>   
                        <img class="h-32 rounded-md ml-7 w-82" src="{{ asset('sea.png') }}">
                    </div>
                        <h3 class="mb-3 text-3xl font-bold leading-none text-center text-gray-800 pr-36">
                        <br/>
                            SEA
                    </h3>
                    <p class="mb-3 text-xs font-bold leading-none text-center text-gray-800 pr-28">
                    LEARN MORE 🡆
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
            
        <!--Footer-->
    <footer class="bg-white">
        <div class="container px-8 mx-auto">
            <div class="flex flex-col w-full py-6 md:flex-row">
            <div class="flex-1 mb-6 text-black">
                <br>
                <br>
                <a class="text-2xl font-bold text-pink-600 no-underline hover:no-underline lg:text-2xl" href="#">
                <svg class="inline h-8 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.005 512.005">
                    <rect fill="#2a2a31" x="16.539" y="425.626" width="479.767" height="50.502" transform="matrix(1,0,0,1,0,0)" />
                    <path
                    class="plane-take-off"
                    d=" M 510.7 189.151 C 505.271 168.95 484.565 156.956 464.365 162.385 L 330.156 198.367 L 155.924 35.878 L 107.19 49.008 L 211.729 230.183 L 86.232 263.767 L 36.614 224.754 L 0 234.603 L 45.957 314.27 L 65.274 347.727 L 105.802 336.869 L 240.011 300.886 L 349.726 271.469 L 483.935 235.486 C 504.134 230.057 516.129 209.352 510.7 189.151 Z "
                    />
                </svg>
                LASMGSI
                </a>
            </div>
            <div class="flex-1">
                <p class="text-gray-500 uppercase md:mb-6">Links</p>
                <ul class="mb-6 list-reset">
                <li class="inline-block mt-2 mr-2 md:block md:mr-0">
                    <a href="#" class="text-gray-800 no-underline hover:underline hover:text-pink-500">FAQ</a>
                </li>
                <li class="inline-block mt-2 mr-2 md:block md:mr-0">
                    <a href="#" class="text-gray-800 no-underline hover:underline hover:text-pink-500">Help</a>
                </li>
                <li class="inline-block mt-2 mr-2 md:block md:mr-0">
                    <a href="#" class="text-gray-800 no-underline hover:underline hover:text-pink-500">Support</a>
                </li>
                </ul>
            </div>
            <div class="flex-1">
                <p class="text-gray-500 uppercase md:mb-6">Legal</p>
                <ul class="mb-6 list-reset">
                <li class="inline-block mt-2 mr-2 md:block md:mr-0">
                    <a href="#" class="text-gray-800 no-underline hover:underline hover:text-pink-500">Terms</a>
                </li>
                <li class="inline-block mt-2 mr-2 md:block md:mr-0">
                    <a href="#" class="text-gray-800 no-underline hover:underline hover:text-pink-500">Privacy</a>
                </li>
                </ul>
            </div>
            <div class="flex-1">
                <p class="text-gray-500 uppercase md:mb-6">Social</p>
                <ul class="mb-6 list-reset">
                <li class="inline-block mt-2 mr-2 md:block md:mr-0">
                    <a href="#" class="text-gray-800 no-underline hover:underline hover:text-pink-500">Facebook</a>
                </li>
                <li class="inline-block mt-2 mr-2 md:block md:mr-0">
                    <a href="#" class="text-gray-800 no-underline hover:underline hover:text-pink-500">Linkedin</a>
                </li>
                <li class="inline-block mt-2 mr-2 md:block md:mr-0">
                    <a href="#" class="text-gray-800 no-underline hover:underline hover:text-pink-500">Twitter</a>
                </li>
                </ul>
            </div>
            <div class="flex-1">
                <p class="text-gray-500 uppercase md:mb-6">Company</p>
                <ul class="mb-6 list-reset">
                <li class="inline-block mt-2 mr-2 md:block md:mr-0">
                    <a href="#" class="text-gray-800 no-underline hover:underline hover:text-pink-500">Official Blog</a>
                </li>
                <li class="inline-block mt-2 mr-2 md:block md:mr-0">
                    <a href="#" class="text-gray-800 no-underline hover:underline hover:text-pink-500">About Us</a>
                </li>
                <li class="inline-block mt-2 mr-2 md:block md:mr-0">
                    <a href="#" class="text-gray-800 no-underline hover:underline hover:text-pink-500">Contact</a>
                </li>
                </ul>
            </div>
            </div>
        </div>
    </footer>
        <script>
        var scrollpos = window.scrollY;
        var header = document.getElementById("header");
        var navcontent = document.getElementById("nav-content");
        var navaction = document.getElementById("navAction");
        var brandname = document.getElementById("brandname");
        var toToggle = document.querySelectorAll(".toggleColour");

        document.addEventListener("scroll", function () {
            /*Apply classes for slide in bar*/
            scrollpos = window.scrollY;

            if (scrollpos > 10) {
            header.classList.add("bg-white");
            navaction.classList.remove("bg-white");
            navaction.classList.add("gradient");
            navaction.classList.remove("text-gray-800");
            navaction.classList.add("text-white");
            //Use to switch toggleColour colours
            for (var i = 0; i < toToggle.length; i++) {
                toToggle[i].classList.add("text-gray-800");
                toToggle[i].classList.remove("text-white");
            }
            header.classList.add("shadow");
            navcontent.classList.remove("bg-gray-100");
            navcontent.classList.add("bg-white");
            } else {
            header.classList.remove("bg-white");
            navaction.classList.remove("gradient");
            navaction.classList.add("bg-white");
            navaction.classList.remove("text-white");
            navaction.classList.add("text-gray-800");
            //Use to switch toggleColour colours
            for (var i = 0; i < toToggle.length; i++) {
                toToggle[i].classList.add("text-white");
                toToggle[i].classList.remove("text-gray-800");
            }

            header.classList.remove("shadow");
            navcontent.classList.remove("bg-white");
            navcontent.classList.add("bg-gray-100");
            }
        });
        </script>
        <script>

        var navMenuDiv = document.getElementById("nav-content");
        var navMenu = document.getElementById("nav-toggle");

        document.onclick = check;
        function check(e) {
            var target = (e && e.target) || (event && event.srcElement);

            //Nav Menu
            if (!checkParent(target, navMenuDiv)) {
            // click NOT on the menu
            if (checkParent(target, navMenu)) {
                // click on the link
                if (navMenuDiv.classList.contains("hidden")) {
                navMenuDiv.classList.remove("hidden");
                } else {
                navMenuDiv.classList.add("hidden");
                }
            } else {
                // click both outside link and outside menu, hide menu
                navMenuDiv.classList.add("hidden");
            }
            }
        }
        function checkParent(t, elm) {
            while (t.parentNode) {
            if (t == elm) {
                return true;
            }
            t = t.parentNode;
            }
            return false;
        }
        </script>
    </body>
    </html>
</x-guest-layout>