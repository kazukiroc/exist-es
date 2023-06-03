<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-indigo-500 rounded-lg sm:hidden hover:bg-indigo-100 focus:outline-none focus:ring-2 focus:ring-indigo-200">
                    <span class="sr-only">Open sidebar</span>
                    <ion-icon name="reorder-four" class="w-6 h-6 text-indigo-600"></ion-icon>
                </button>
                <img src="../../assets/exist.png" class="h-16" alt="Exist Logo" />
            </div>
            <div class="flex items-center ml-3">
                <button type="button" class="flex text-sm rounded-full focus:ring-4 focus:ring-indigo-900" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                    <span class="sr-only">Open user menu</span>
                    <ion-icon name="person-circle" class="w-12 h-12 text-indigo-900 transition duration-75 group-hover:text-indigo-900" fill="currentColor"></ion-icon>
                </button>
            </div>
            @auth
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-indigo-100 rounded shadow" id="dropdown-user">
                <div class="px-4 py-3" role="none">
                    <p class="text-sm text-indigo-900" role="none">
                        {{ auth()->user()->name }}
                    </p>
                    <p class="text-sm font-medium text-indigo-900 truncate" role="none">
                        {{ auth()->user()->email }}
                    </p>
                </div>
            </div>
            @endauth
        </div>
    </div>
</nav>