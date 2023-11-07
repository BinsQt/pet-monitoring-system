
<div class="fixed w-11/12 h-16 max-w-lg -translate-x-1/2 rounded-full bottom-4 left-1/2 bg-blue-800 z-50">
    <div class="flex justify-evenly h-full max-w-lg grid-cols-5 mx-auto w-full">
        <a href="dashboard" class="w-full inline-flex flex-col items-center justify-center hover:bg-blue-50 group {{ request()->is('dashboard') ? 'bg-blue-50':''}} {{ request()->is('dashboard') ? 'rounded-l-full':''}} ">
            <svg class="w-5 h-5 mb-1 group-hover:text-blue-950 text-blue-50 {{ request()->is('dashboard') ? 'text-blue-950':''}}" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path  stroke="currentColor" fill="white" stroke-linejoin="round" stroke-width="2"  d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
            </svg>
            <span class="text-blue-200 group-hover:text-blue-950 {{ request()->is('dashboard') ? 'text-blue-950':''}}">Home</span>
        </a>

        <a href="status" class="w-full  inline-flex flex-col items-center justify-center hover:bg-blue-50 group {{ request()->is('status') ? 'bg-blue-50':''}} ">
            <svg class="w-6 h-6 mb-1 group-hover:text-blue-950 text-blue-50 {{ request()->is('status') ? 'text-blue-950':''}}" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path  stroke="currentColor" fill="white" stroke-linejoin="round" stroke-width="2"   d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z"/>
            </svg>
            <span class="text-blue-200 group-hover:text-blue-950 {{ request()->is('status') ? 'text-blue-950':''}}">Status</span>
        </a>


        <a href="/settings" class="w-full  inline-flex flex-col items-center justify-center hover:bg-blue-50 group {{ request()->is('settings') ? 'bg-blue-50':''}} ">
            <svg class="w-6 h-6 mb-1 group-hover:text-blue-950 text-blue-50 {{ request()->is('settings') ? 'text-blue-950':''}}" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path  stroke="currentColor" fill="white" stroke-linejoin="round" stroke-width="2"   d="M4 12.25V1m0 11.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M4 19v-2.25m6-13.5V1m0 2.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M10 19V7.75m6 4.5V1m0 11.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5ZM16 19v-2"/>
            </svg>
            <span class="text-blue-200 group-hover:text-blue-950 {{ request()->is('settings') ? 'text-blue-950':''}}">Settings</span>
        </a>

        <a href="/user" class="w-full  inline-flex flex-col items-center justify-center hover:bg-blue-50 group {{ request()->is('user') ? 'bg-blue-50':''}} {{ request()->is('home') ? 'rounded-r-full':''}}">
            <svg class="w-6 h-6 mb-1 group-hover:text-blue-950 text-blue-50 {{ request()->is('user') ? 'text-blue-950':''}}" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path stroke="currentColor" fill="white" stroke-linejoin="round" stroke-width="2" d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
            </svg>
            <span class="text-blue-200 group-hover:text-blue-950 {{ request()->is('user') ? 'text-blue-950':''}}">User</span>
        </a>

    </div>
</div>
