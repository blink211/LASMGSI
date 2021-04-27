<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="mt-10 sm:mt-0">
                    <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="md:col-span-1">
                            <div class="px-4 sm:px-0">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                                <p class="mt-1 text-sm text-gray-600">
                                    Edit your personal information
                                </p>
                            </div>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <form method="POST" action="{{ route('users.update', $user->id) }}">
                                @csrf
                                @method('patch')

                                <div class="overflow-hidden shadow sm:rounded-md">
                                    <div class="px-4 py-5 bg-white sm:p-6">
                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="name" class="block text-sm font-medium text-gray-700">Name
                                                </label>
                                                <input type="text" name="name" id="name" value="{{ $user->name }}"
                                                    autocomplete="given-name"
                                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            </div>
                                            <div class="col-span-6 sm:col-span-4">
                                                <label for="email" class="block text-sm font-medium text-gray-700">Email
                                                    address</label>
                                                <input type="text" name="email" value="{{ $user->email }}" id="email"
                                                    autocomplete="email"
                                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
                                        <button type="submit"
                                            class="flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-500 rounded-md hover:bg-red-200 hover:text-gray-800 group">
                                            EDIT
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <form method="POST" action="{{ route('users.destroy', $user->id) }}">
                                @csrf
                                @method('delete')
                                <button type="submit"
                                    class="flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-500 rounded-md hover:bg-red-200 hover:text-gray-800 group">
                                    DELETE
                                </button>

                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
