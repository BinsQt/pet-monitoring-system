
<x-app-layout>
    <div class="my-10 mx-auto w-5/12 h-auto flex justify-center mb-24 bg-gray-300 drop-shadow-2xl rounded-3xl">
        <div class="flex flex-col gap-5 bg-blue-50 p-5 rounded-3xl">
            <div class="border relative w-full h-10 p-3 flex items-center shadow-md">
                @foreach ( $datas as $petstatus )
                <p class="text-xl">

                    @if ($petstatus->movement < 1)
                       Your dog is Resting
                    @elseif ($petstatus->movement = 1)
                        Your dog is active
                    @endif
                </p>
                 @endforeach
            </div>

            <div class="flex flex-col md:flex-row">
            {{-- heartrate --}}
            <div class="border relative w-full h-auto p-3 my-5 shadow-xl">
                <p class="text-2xl text-center">Heart Rate</p>
                <div class="my-10 mx-auto border-t-4 border-red-500 animate-spin rounded-full absolute w-64 h-64 z-10"></div>
                <div class="my-10 mx-auto bg-red-100 z-0 opacity-50 animate-pulse rounded-full w-64 h-64"></div>
                <div class="absolute top-32 left-32">
                    <svg xmlns="http://www.w3.org/2000/svg" height="3em" viewBox="0 0 512 512">
                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com
                            License - https://fontawesome.com/license (Commercial License) Copyright
                            2023 Fonticons, Inc. -->
                            <path stroke="currentColor" fill="red" d="M228.3 469.1L47.6 300.4c-4.2-3.9-8.2-8.1-11.9-12.4h87c22.6
                            0 43-13.6 51.7-34.5l10.5-25.2 49.3 109.5c3.8 8.5 12.1 14 21.4 14.1s17.8-5 22-13.3L320 253.7l1.7
                            3.4c9.5 19 28.9 31 50.1 31H476.3c-3.7 4.3-7.7 8.5-11.9 12.4L283.7 469.1c-7.5 7-17.4 10.9-27.7
                            10.9s-20.2-3.9-27.7-10.9zM503.7 240h-132c-3 0-5.8-1.7-7.2-4.4l-23.2-46.3c-4.1-8.1-12.4-13.3-21.5-13.3s-17.4 5.1-21.5
                            13.3l-41.4 82.8L205.9 158.2c-3.9-8.7-12.7-14.3-22.2-14.1s-18.1 5.9-21.8 14.8l-31.8 76.3c-1.2 3-4.2 4.9-7.4 4.9H16c-2.6
                            0-5 .4-7.3 1.1C3 225.2 0 208.2 0 190.9v-5.8c0-69.9 50.5-129.5 119.4-141C165 36.5 211.4 51.4 244 84l12 12 12-12c32.6-32.6
                            79-47.5 124.6-39.9C461.5 55.6 512 115.2 512 185.1v5.8c0 16.9-2.8 33.5-8.3 49.1z"/></svg>
                </div>

                    <svg class="absolute top-64 left-16" height="3em" viewBox="0 0 500 150" xml:space="preserve">
                        <g>
                            <polyline class="ekg" points="486.6,113.8 328.2,113.8 310.3,132.3 296,70.7 246.8,127.4 241.6,120.2 233.9,166.4 227,27.6
                            213.2,118.3 211.8,112.3 205.1,126.1 198.2,108.5 194.1,124.4 184.5,92.9 174.1,113 4.3,113 	"/>
                        </g>
                    </svg>

                    <div class="absolute top-44 left-20 z-10">
                         @foreach ( $datas as $petstatus )
                        <p class="text-7xl">
                            {{ $petstatus -> bpm }}
                        </p>
                         @endforeach
                    </div>

                    <div class="absolute top-56 left-48">
                        <p>BPM</p>
                    </div>
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = ! open" class="bg-gray-200 w-full h-10 text-center">Show more details</button>

                        <div x-show="open" x-transition @click.outside="open = false"
                        class="relative flex flex-col justify-between top-1 left-1 border w-full h-auto p-3 text-center rounded-xl z-50" >
                            <div class="overflow-auto flex flex-col w-full items-center justify-center">
                               <div class="flex gap-10">
                                <div>
                                    @foreach ($datas as $petstatus )
                                        @if ($petstatus -> bpm < 60)
                                            Your dogs heart rate is below normal. Please Check your dogs condition
                                        @elseif ($petstatus -> bpm > 140)
                                            Your dogs heart rate is above normal. Please Check your dogs condition
                                        @else
                                        Your dogs heart rate is normal.
                                        @endif
                                    @endforeach
                                </div>

                               </div>
                               <div class="flex gap-10">
                                <div class="border p-5 bg-gray-300">
                                    <ul>
                                        <li class="border-b-2 border-green-600">normal: 60 to 140 bpm</li>
                                        <li class="border-b-2 border-blue-600">below normal: below 59 bpm </li>
                                        <li class="border-b-2 border-red-600">above normal: above 141 bpm</li>
                                    </ul>
                                </div>

                               </div>

                            </div>
                        </div>
                    </div>

                </div>

            {{-- temperatue --}}
<div>
    <div class="border w-full h-auto p-3 relative my-5 shadow-xl">
        <p class="text-2xl text-center">Temperature</p>
        <div class="my-10 mx-auto border-t-4 relative border-blue-600 animate-spin rounded-full w-64 h-64"></div>
        <div class="absolute top-28 left-28 z-10">
            <svg xmlns="http://www.w3.org/2000/svg" height="4em" viewBox="0 -960 960 960">
                <path stroke="currentColor" fill="blue" d="M480-80q-83 0-141.5-58.5T280-280q0-48 21-89.5t59-70.5v-320q0-50 35-85t85-35q50 0 85 35t35 85v320q38 29 59 70.5t21 89.5q0 83-58.5 141.5T480-80Zm-40-440h80v-40h-40v-40h40v-80h-40v-40h40v-40q0-17-11.5-28.5T480-800q-17 0-28.5 11.5T440-760v240Z"/>
            </svg>
        </div>
        <div class="absolute top-44 left-20">
            <p class="text-7xl">
                @foreach ($datas as $datas)
                    {{$datas -> temp}}
                @endforeach
            </p>
        </div>
        <div class="absolute top-44 left-40">
            <p class="text-5xl">°</p>
        </div>

        <div class="absolute top-44 left-44">
            <p class="text-5xl">C</p>
        </div>
        <div x-data="{ open: false }" class="relative">
            <button @click="open = ! open" class="bg-gray-200 w-full h-10 text-center">Show more details</button>

            <div x-show="open" x-transition @click.outside="open = false"
            class="relative flex flex-col justify-between top-1 left-1 border w-full h-auto p-3 text-center rounded-xl z-50" >
                <div class="overflow-auto flex flex-col w-full items-center justify-center">
                   <div class="flex gap-10">
                    <div>

                    </div>

                   </div>
                   <div class="flex gap-10">
                    <div class="border p-5 bg-gray-300">
                        <ul>
                            <li class="border-b-2 border-green-600">normal: 38.3 to 39.2 °C</li>
                            <li class="border-b-2 border-blue-600">below normal: below 38.3 °C</li>
                            <li class="border-b-2 border-red-600">above normal: above 39.2 °C</li>
                        </ul>
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
