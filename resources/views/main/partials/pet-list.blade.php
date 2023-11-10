<section>
    <div class="container flex flex-col items-center sticky top-1 bg-blue-300 w-full h-14 z-50 text-center mx-auto md:hidden ">
        <div x-data="{ open: false }" class="w-full relative">
            <button @click="open = ! open" class="bg-blue-600 w-9/12 h-8 mx-auto text-blue-50 rounded-xl mt-3">PETS</button>

            <div x-show="open"
            @click.outside="open = false"
            class="flex flex-col items-center h-auto mt-5 mx-2 bg-blue-300 p-3 z-50">
            @foreach ($pets as $pet)
            <form action="/show" method="GET" class="w-full">
                @csrf
                <button name="submit" value="{{$pet -> pid}}" class="uppercase w-full bg-gray-100 p-2 text-md border-b-2 border-black shadow-md">
                    {{ $pet -> name }}
                </button>
            </form>

            @endforeach


            <div x-data="{ open: false }"  class="sticky bottom-1 bg-gray-300 w-full h-auto">
                <button @click="open = ! open" class="w-full h-auto">Add Pet</button>

                <div x-show="open"
                @click.outside="open = false" class="my-3">

                    <div class="container absolute bg-blue-400 my-5 p-5 flex flex-col">

                        <form action="/addpet" method="post" class="flex flex-col gap-3 overflow-scroll">
                            @csrf
                            <div class="flex flex-col">
                                <label for="name">Pet Name</label>
                                <input type="text" name="petname">
                            </div>

                            <div class="flex flex-col">
                                <label for="name">Gender</label>
                                <select name="gender" id="gender">
                                    <option value=""></option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>

                            <div class="flex flex-col">
                                <label for="name">Breed</label>
                                <input type="text" name="breed">
                            </div>

                            <div class="flex flex-col">
                                <label for="name">Dominant Color</label>
                                <input type="text" name="color">
                            </div>

                            <div class="flex flex-col">
                                <label for="name">Birthday</label>
                                <input type="date" name="birthday">
                            </div>
                            <div>
                             <button type="submit" class="bg-green-300">Add Pet</button>
                            </div>

                        </form>
                    </div>


                </div>
            </div>

            </div>

        </div>

    </div>
</section>
