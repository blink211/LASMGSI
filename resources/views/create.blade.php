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
                        <a class="inline-block px-4 py-2 font-bold text-black no-underline" href="#">CREATE SHIPMENT</a>
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
                        <a class="inline-block px-4 py-2 text-black no-underline hover:text-gray-800 hover:text-underline" href="#">TRACK</a>
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
        <br>
            <br>
                <br>
            <br>
                <div class="grid grid-cols-2">
                    <div class="w-full h-full">
                            <form class="p-10 m-4 bg-white rounded shadow-xl">
                                        <p class="font-medium font-bold text-gray-800">FROM</p>
                                        <br>
                                <div class="">
                                    <label class="block text-sm text-gray-00" for="cus_name">Name</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_name" type="text" required="" placeholder="Your Name" aria-label="Name">
                                </div>
                                <div class="mt-2">
                                    <label class="block text-sm text-gray-600" for="cus_email">Email</label>
                                    <input class="w-full px-5 py-4 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type="text" required="" placeholder="Your Email" aria-label="Email">
                                </div>
                                <div class="mt-2">
                                    <label class="block text-sm text-gray-600 " for="cus_email">Address</label>
                                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type="text" required="" placeholder="Street" aria-label="Email">
                                </div>
                                <div class="mt-2">
                                    <label class="hidden block text-sm text-gray-600" for="cus_email">City</label>
                                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type="text" required="" placeholder="City" aria-label="Email">
                                </div>
                                <div class="inline-block w-1/2 pr-1 mt-2">
                                    <label class="hidden block text-sm text-gray-600" for="cus_email">Country</label>
                                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type="text" required="" placeholder="Country" aria-label="Email">
                                </div>
                                <div class="inline-block w-1/2 pl-1 mt-2 -mx-1">
                                    <label class="hidden block text-sm text-gray-600" for="cus_email">Zip</label>
                                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email"  name="cus_email" type="text" required="" placeholder="Zip" aria-label="Email">
                                </div>
                                <br/>
                                <p class="mt-4 font-medium text-gray-800">Package Description</p>
                                <textarea class="w-full h-32 border rounded-md">
                                </textarea>
                                
                                <p class="mt-4 font-medium text-gray-800">Payment information</p>
                                <div class="">
                                    <label class="block text-sm text-gray-600" for="cus_name">Card</label>
                                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_name" type="text" required="" placeholder="Card Number MM/YY CVC" aria-label="Name">
                                </div>
                                <div class="mt-4">
                                    <button class="px-4 py-1 font-light tracking-wider text-white bg-green-500 rounded" type="submit">$3.00</button>
                                </div>
                            </form>
                    </div>

                        <div class="w-full h-full">
                            <form class="p-10 m-4 bg-white rounded shadow-xl">
                                        <p class="font-medium font-bold text-gray-800">TO</p>
                                        <br>
                                <div class="">
                                    <label class="block text-sm text-gray-00" for="cus_name">Name</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_name" type="text" required="" placeholder="Your Name" aria-label="Name">
                                </div>
                                <div class="mt-2">
                                    <label class="block text-sm text-gray-600" for="cus_email">Email</label>
                                    <input class="w-full px-5 py-4 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type="text" required="" placeholder="Your Email" aria-label="Email">
                                </div>
                                <div class="mt-2">
                                    <label class="block text-sm text-gray-600 " for="cus_email">Address</label>
                                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type="text" required="" placeholder="Street" aria-label="Email">
                                </div>
                                <div class="mt-2">
                                    <label class="hidden block text-sm text-gray-600" for="cus_email">City</label>
                                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type="text" required="" placeholder="City" aria-label="Email">
                                </div>
                                <div class="inline-block w-1/2 pr-1 mt-2">
                                    <label class="hidden block text-sm text-gray-600" for="cus_email">Country</label>
                                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type="text" required="" placeholder="Country" aria-label="Email">
                                </div>
                                <div class="inline-block w-1/2 pl-1 mt-2 -mx-1">
                                    <label class="hidden block text-sm text-gray-600" for="cus_email">Zip</label>
                                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email"  name="cus_email" type="text" required="" placeholder="Zip" aria-label="Email">
                                </div>
                                <p class="mt-4 font-medium text-gray-800">Phone Number</p>
                                <div class="">
                                    <label class="block text-sm text-gray-600" for="cus_name"></label>
                                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_name" type="text" required="" placeholder="(+63) " aria-label="Name">
                                </div>
                                <div class="mt-4">
                                    <button class="px-4 py-1 font-light tracking-wider text-white bg-gray-900 rounded" type="submit">NEXT</button>
                                </div>
                            </form>
                        </div>
                </div>
</x-guest-layout>