<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-24 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="/consultation" class="flex items-center p-2 text-indigo-900 rounded-lg hover:bg-indigo-200 {{ Request::is('consultation') ? 'bg-indigo-200' : '' }}">
                    <ion-icon name="happy" class="w-6 h-6 text-indigo-900 transition duration-75 group-hover:text-indigo-900" fill="currentColor"></ion-icon>
                    <span class="ml-3">Konsultasi</span>
                </a>
            </li>
            <li>
                <a href="/characteristic" class="flex items-center p-2 text-indigo-900 rounded-lg hover:bg-indigo-200 {{ Request::is('characteristic*') ? 'bg-indigo-200' : '' }}">
                    <ion-icon name="library" class="w-6 h-6 text-indigo-900 transition duration-75 group-hover:text-indigo-900" fill="currentColor"></ion-icon>
                    <span class="flex-1 ml-3 whitespace-nowrap">Minat Bakat</span>
                </a>
            </li>
            <li>
                <a href="/intelligence" class="flex items-center p-2 text-indigo-900 rounded-lg hover:bg-indigo-200 {{ Request::is('intelligence*') ? 'bg-indigo-200' : '' }}">
                    <ion-icon name="medical" class="w-6 h-6 text-indigo-900 transition duration-75 400 group-hover:text-indigo-900" fill="currentColor"></ion-icon>
                    <span class="flex-1 ml-3 whitespace-nowrap">Kategori Kecerdasan</span>
                </a>
            </li>
            <li>
                <a href="/study" class="flex items-center p-2 text-indigo-900 rounded-lg hover:bg-indigo-200 {{ Request::is('study*') ? 'bg-indigo-200' : '' }}">
                    <ion-icon name="school" class="w-6 h-6 text-indigo-900 transition duration-75 400 group-hover:text-indigo-900" fill="currentColor"></ion-icon>
                    <span class="flex-1 ml-3 whitespace-nowrap">Program Studi</span>
                </a>
            </li>
            <li>
                <a href="/knowledge" class="flex items-center p-2 text-indigo-900 rounded-lg hover:bg-indigo-200 {{ Request::is('knowledge*') ? 'bg-indigo-200' : '' }}">
                    <ion-icon name="server" class="w-6 h-6 text-indigo-900 transition duration-75 group-hover:text-indigo-900" fill="currentColor"></ion-icon>
                    <span class="flex-1 ml-3 whitespace-nowrap">Basis Pengetahuan</span>
                </a>
            </li>
            <li>
                <a href="/rules" class="flex items-center p-2 text-indigo-900 rounded-lg hover:bg-indigo-200 {{ Request::is('rules*') ? 'bg-indigo-200' : '' }}">
                    <ion-icon name="newspaper" class="w-6 h-6 text-indigo-900 transition duration-75 group-hover:text-indigo-900" fill="currentColor"></ion-icon>
                    <span class="flex-1 ml-3 whitespace-nowrap">Aturan</span>
                </a>
            </li>
            <li>
                <form action="/logout" method="POST" class="rounded-lg hover:bg-indigo-200">
                    @csrf
                    <button type="submit" class="flex items-center p-2 text-indigo-900">
                        <ion-icon name="log-out" class="w-6 h-6 text-indigo-900 transition duration-75 group-hover:text-indigo-900" fill="currentColor"></ion-icon>
                        <span class="flex-1 ml-3 whitespace-nowrap">Keluar</span>
                    </button>
                </form>
            </li>
        </ul>
    </div>
</aside>