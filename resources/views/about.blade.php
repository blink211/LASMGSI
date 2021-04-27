<x-guest-layout>
    <body class="leading-normal tracking-wider bg-transparent text-white-900">

        <nav id="header" class="fixed top-0 z-10 w-full bg-white shadow">

            <div class="container flex flex-wrap items-center justify-between w-full mx-auto my-4">

                <div class="pl-4 md:pl-0">
                    <a class="flex items-center font-sans text-base font-extrabold text-blue-700 no-underline xl:text-xl hover:no-underline" href="#">
                        <svg class="inline-block h-6 mr-4 text-blue-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M16 2h4v15a3 3 0 0 1-3 3H3a3 3 0 0 1-3-3V0h16v2zm0 2v13a1 1 0 0 0 1 1 1 1 0 0 0 1-1V4h-2zM2 2v15a1 1 0 0 0 1 1h11.17a2.98 2.98 0 0 1-.17-1V2H2zm2 8h8v2H4v-2zm0 4h8v2H4v-2zM4 4h8v4H4V4z" />
                        </svg> LASMGSI Help Desk
                    </a>
                </div>

                <div class="flex justify-end pr-0">

                    <div class="relative flex inline-block float-right">

                        <div class="relative text-sm">

                            <button id="userButton" class="flex items-center px-4 py-2 mr-3 text-sm font-bold text-white bg-blue-700 rounded shadow hover:bg-blue-500 focus:shadow-outline focus:outline-none md:text-base">
                                SETTINGS
                                <svg class="h-2 pl-2 text-white fill-current" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129">
                                    <g>
                                        <path d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z" />
                                    </g>
                                </svg>
                            </button>

                            <div id="userMenu" class="absolute top-0 right-0 z-30 invisible min-w-full mt-2 mt-12 mr-2 overflow-auto bg-white rounded shadow-md">
                                <ul class="list-reset">
                                    <li><a href="#" class="block px-4 py-2 no-underline hover:bg-gray-400 hover:no-underline">My account</a></li>
                                    <li><a href="#" class="block px-4 py-2 no-underline hover:bg-gray-400 hover:no-underline">Notifications</a></li>
                                    <li>
                                        <hr class="mx-2 border-t border-gray-400">
                                    </li>
                                    <li><a href="#" class="block px-4 py-2 font-bold text-blue-600 no-underline hover:bg-blue-600 hover:text-white hover:no-underline">Logout</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </nav>
        <!--Container-->
        <div class="container flex flex-wrap w-full px-2 pt-8 mx-auto mt-16 lg:pt-16">
            <div class="w-full px-6 text-xl leading-normal text-white lg:w-1/5">
                <p class="py-2 text-base font-bold text-white lg:pb-6">MENU</p>
                <div class="sticky inset-0 block lg:hidden">
                    <button id="menu-toggle" class="flex justify-end w-full px-3 py-3 bg-white border border-gray-600 rounded appearance-none lg:bg-transparent hover:border-yellow-600 focus:outline-none">
                        <svg class="float-right h-3 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </button>
                </div>
                <div class="sticky inset-0 z-20 hidden w-full my-2 mt-0 overflow-x-hidden overflow-y-auto bg-white border border-white shadow max-h-64 lg:h-auto lg:overflow-y-hidden lg:block lg:my-0 lg:border-transparent lg:shadow-none lg:bg-transparent" style="top:6em;" id="menu-content">
                    <ul class="py-2 list-reset md:py-0">
                        <li class="py-1 font-bold border-l-4 border-transparent border-white-600 md:my-2 hover:bg-white lg:hover:bg-transparent">
                            <a href='#' class="block pl-4 text-white no-underline align-middle hover:text-blue-700">
                                <span class="pb-1 text-sm md:pb-0">Home</span>
                            </a>
                        </li>
                        <li class="py-1 font-bold border-l-4 border-transparent border-white-600 md:my-2 hover:bg-white lg:hover:bg-transparent">
                            <a href='#' class="block pl-4 text-white no-underline align-middle hover:text-blue-700">
                                <span class="pb-1 text-sm md:pb-0">Tracking</span>
                            </a>
                        </li>
                        <li class="py-1 font-bold border-l-4 border-transparent border-white-600 md:my-2 hover:bg-white lg:hover:bg-transparent">
                            <a href='#' class="block pl-4 text-white no-underline align-middle hover:text-blue-700">
                                <span class="pb-1 text-sm md:pb-0">Register</span>
                            </a>
                        </li>
                        <li class="py-1 font-bold border-l-4 border-transparent border-white-600 md:my-2 hover:bg-white lg:hover:bg-transparent">
                            <a href='#' class="block pl-4 text-white no-underline align-middle hover:text-blue-700">
                                <span class="pb-1 text-sm md:pb-0">Contact Us</span>
                            </a>
                        </li>                       
                    </ul>
                </div>
            </div>

            <!--Section container-->
            <section class="w-full lg:w-4/5">

                <!--Title-->
                <h2 id='section1' class="px-2 pb-8 font-sans text-xl font-bold text-white break-normal">About Us</h2>

                <!--Card-->
                <div class="p-8 mt-6 leading-normal bg-white rounded shadow lg:mt-0">
                    <li>L3A’s Freight Express was established in January 24, 2006 as part of the expansion of its mother company, LAS Management and General Services, Inc. It is a forwarding company that is primarily engaged in express local and international delivery and freight services. Some of the local clients of the company are Ayala Group of Companies, Megaworld Corporation, and Condominium Corporations in Makati City while the international clients of the company such as Japan International Cooperation Agency (JICA), Embassy of Brazil, Sumitomo Corporation of the Philippines, Oglivy and Mather Philippines Inc., and Everestpharma Inc among others.</li>
                    <br/>
                    <li>Mission and Vision : To provide personalized services to various clients, field personnel and applicants efficiently and effectively for the attainment of maximum customer satisfaction and contribute in the development of the country's economy by sharing with government agencies and their mission of increasing employment rate.</li>
                </div>
                <!--/Card-->
                <hr class="my-12 bg-gray-300">
                </div>
                
        <script>

            var userMenuDiv = document.getElementById("userMenu");
            var userMenu = document.getElementById("userButton");

            var helpMenuDiv = document.getElementById("menu-content");
            var helpMenu = document.getElementById("menu-toggle");

            document.onclick = check;

            function check(e){
            var target = (e && e.target) || (event && event.srcElement);

            //User Menu
            if (!checkParent(target, userMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, userMenu)) {
                // click on the link
                if (userMenuDiv.classList.contains("invisible")) {
                    userMenuDiv.classList.remove("invisible");
                } else {userMenuDiv.classList.add("invisible");}
                } else {
                // click both outside link and outside menu, hide menu
                userMenuDiv.classList.add("invisible");
                }
            }

            //Help Menu
            if (!checkParent(target, helpMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, helpMenu)) {
                // click on the link
                if (helpMenuDiv.classList.contains("hidden")) {
                    helpMenuDiv.classList.remove("hidden");
                } else {helpMenuDiv.classList.add("hidden");}
                } else {
                // click both outside link and outside menu, hide menu
                helpMenuDiv.classList.add("hidden");
                }
            }

            }

            function checkParent(t, elm) {
            while(t.parentNode) {
                if( t == elm ) {return true;}
                t = t.parentNode;
            }
            return false;
            }

            </script>

            <!-- jQuery -->
            <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

            <!-- Scroll Spy -->
            <script>

            // Cache selectors
            var lastId,
                topMenu = $("#menu-content"),
                topMenuHeight = topMenu.outerHeight()+175,
                // All list items
                menuItems = topMenu.find("a"),
                // Anchors corresponding to menu items
                scrollItems = menuItems.map(function(){
                var item = $($(this).attr("href"));
                if (item.length) { return item; }
                });
        </script>        
    </body>
</x-guest-layout>
