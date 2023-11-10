
<x-app-layout>
    <div class="w-auto flex flex-col gap-5 md:m-20 py-3">

        <hr class="mx-auto w-11/12 my-2 px-10 md:hidden">
        <div class="p-3 m-auto bg-gray-300 drop-shadow-md rounded-xl w-full md:w-1/2 ">
            <p class="text-3xl text-center">Settings</p>
            <div class="p-3 relative text-blue-100">
                <ul>
                    <div x-data="{ open: false }" class="relative">
                        <li ><button @click="open = ! open" class="bg-gray-600 w-full h-10 text-center my-3">Account Settings</button></li>

                        <div x-show="open" x-transition @click.outside="open = false"
                        class="relative flex flex-col justify-between top-1 left-1 border w-full h-auto p-3 text-center rounded-xl z-50" >
                            <div class="border overflow-auto">
                                <p>content</p>

                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="relative">
                        <li ><button @click="open = ! open" class="bg-gray-600 w-full h-10 text-center my-3">Help And Support</button></li>

                        <div x-show="open" x-transition @click.outside="open = false"
                        class="relative flex flex-col justify-between top-1 left-1 border w-full h-auto p-3 text-center rounded-xl" >
                            <div class="border overflow-auto">
                                <p>content</p>

                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="relative">
                        <li ><button @click="open = ! open" class="bg-gray-600 w-full h-10 text-center my-3">Terms and agreement</button></li>

                        <div x-show="open" x-transition @click.outside="open = false"
                        class="relative flex flex-col justify-between top-1 left-1 border w-full h-auto p-3 text-center rounded-xl" >
                            <div class="border overflow-auto">
                                <p>content</p>

                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="relative">
                        <li ><button @click="open = ! open" class="bg-gray-600 w-full h-10 text-center my-3">About</button></li>

                        <div x-show="open" x-transition @click.outside="open = false"
                        class="relative flex flex-col justify-between top-1 left-1 border w-full h-auto p-3 text-center rounded-xl" >
                            <div class="border overflow-auto">
                                <p>content</p>

                            </div>
                        </div>
                    </div>

                    <li >
                        <form action="/logout" method="POST">
                            @csrf
                        <button class="text-center bg-red-500 border h-10 w-full m-auto my-3">Sign Out</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
@include('components/bottom-navbar')
