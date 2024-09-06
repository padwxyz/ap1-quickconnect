<div id="sidebar" class="bg-white h-screen md:block shadow-xl px-5 w-40 md:w-60 lg:w-60 overflow-x-hidden transition-transform duration-300 ease-in-out flex flex-col fixed" x-show="sidenav" @click.away="sidenav = false">
    <div class="space-y-6 md:space-y-5 mt-10 flex flex-col flex-grow">
        <div class="flex items-center justify-center">
            <a href="{{ '/dashboard-admin' }}"><img src="{{ asset('img/logo.png') }}" class="h-6" alt=""></a>
        </div>
        <h1 class="font-bold text-4xl text-center md:hidden">
            Angkasa Pura I <span class="text-[#0045A4]">QuickConnect</span>
        </h1>
        <h1 class="hidden md:block font-bold text-sm md:text-xl text-center">
            Angkasa Pura I <span class="text-[#0045A4]">QuickConnect</span>
        </h1>
        
        <div id="menu" class="flex flex-col space-y-3 mt-10 pt-10 flex-grow">
            <a href="{{ '/dashboard-admin' }}" class="text-sm font-medium text-gray-700 py-2 px-3 hover:bg-[#0045A4] hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">
                <svg class="w-6 h-6 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                </svg>
                <span class="">Dashboard</span>
            </a>
            <a href="{{ '/master-data' }}" class="text-sm font-medium text-gray-700 py-2 px-3 hover:bg-[#0045A4] hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">
                <svg class="w-6 h-6 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                    <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                </svg>
                <span class="">Master Data</span>
            </a>
        </div>
        
        <div id="logout">
            <a href="" class="text-sm font-medium text-gray-700 py-2 px-3 hover:bg-red-600 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">
                <svg class="w-6 h-6 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h10a1 1 0 011 1v2a1 1 0 11-2 0V5H4v10h8v-1a1 1 0 112 0v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4z" clip-rule="evenodd"></path>
                    <path fill-rule="evenodd" d="M14.293 7.293a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 01-1.414-1.414L15.586 12H9a1 1 0 110-2h6.586l-1.293-1.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
                <span class="">Log Out</span>
            </a>
        </div>
    </div>
</div>
