
<x-app-layout>
    @include('main.partials.pet-list')
    <div class="p-3 ">
        <div class="w-full md:w-1/2 mx-auto ">
            <div class="bg-white shadow-2xl rounded-3xl">
                <div class="p-6 text-gray-900 w-full">
                    @include('main.partials.pet-details')
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
@include('components/bottom-navbar')
