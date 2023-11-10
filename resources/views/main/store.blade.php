
<x-app-layout>
    @include('main.partials.pet-list')
    <div class="p-3 ">
        <div class="w-full md:w-1/2 mx-auto ">
            <div class="bg-white shadow-2xl rounded-3xl">
                <div class="p-6 text-gray-900 w-full">
                    <div class="p-3 ">
                        <div class="w-full md:w-1/2 mx-auto ">
                            <div class="bg-white shadow-2xl rounded-3xl">
                                <div class="p-6 text-gray-900 w-full">

                                    <div class="p-2 border mx-auto">
                                        <div class=" w-full">
                                            <div class="flex flex-col items-center justify-center">
                                               <div class="flex flex-col">
                                                <img src="{{ asset('/img/dog.png') }}" class="h-40 w-40 mx-auto mt-5 rounded-full text-center" alt="pet_profile">
                                                    <button>Edit Profile</button>
                                                </div>
                                                <div class="flex flex-col items-center w-full gap-5">
                                                    <div class="flex flex-col items-center justify-center gap-3">
                                                        <div class="text-xl">

                                                            <p class="text-4xl underline capitalize">
                                                                @foreach ($pet as $details)
                                                                {{ $details -> name }}
                                                                @endforeach
                                                            </p>

                                                        </div>
                                                        <div>
                                                            <p class="text-2xl uppercase">
                                                                @foreach ($pet as $details)
                                                                {{ $details -> gender }}
                                                                @endforeach
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="flex justify-between w-full">
                                                        <div>
                                                            <p class="text-xl uppercase">
                                                                @foreach ($pet as $details)
                                                                {{ $details -> breed }}
                                                                @endforeach
                                                            </p>
                                                        </div>
                                                        <div>
                                                            <p class="text-xl uppercase">
                                                                @foreach ($pet as $details)
                                                                {{ $details -> color }}
                                                                @endforeach</div>
                                                            </p>
                                                    </div>
                                                    <div class="flex flex-col justify-between">
                                                        <div>
                                                            <p class="text-md uppercase">
                                                                @foreach ($pet as $details)
                                                                {{ $details -> birthday }}
                                                                @endforeach
                                                            </p>
                                                        </div>
                                                        <div>
                                                            <p class="text-md">
                                                                @foreach ($pet as $details)
                                                                {{ $details -> age }}
                                                                @endforeach
                                                                Month/s Old
                                                            </p>

                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
@include('components/bottom-navbar')
