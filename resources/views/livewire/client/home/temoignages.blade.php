<div id="temoignage" class="py-10 bg-gray-100 md:px-20 lg:px-20 sm:px-20">
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="flex flex-col items-center justify-center pb-20 text-center">
        <h1 class="text-xl font-bold text-center xl:text-3xl md:text-1xl lg:text-2xl">Témoignages</h1>
        <h1 class="w-10 mt-1 border-b-8 border-yellow-600"></h1>
    </div>


    <div class="grid items-center justify-center grid-cols-1 gap-4 py-5 md:px-5 md:grid-rows-1 lg:grid-cols-2 xl:px-40 lg:px-20">
        @foreach ($temoignages as $tem)
        <div class="w-full px-5 pt-5 pb-10 mx-auto text-gray-800 bg-white rounded-lg shadow-lg dark:bg-gray-800 dark:text-gray-50">
            <div class="w-full pt-1 pb-5 mx-auto -mt-16 text-center">
                <a href="#" class="relative block">
                    <img alt="profil" src="{{asset('storage/temoignage/'.$tem->id.'.png')}}?{{ rand() }}" class="object-cover w-20 h-20 mx-auto rounded-full "/>
                </a>
            </div>
            <div class="w-full mb-10">
                <div class="h-3 text-3xl leading-tight text-left text-indigo-500">
                    “
                </div>
                <p class="px-5 text-sm text-center text-gray-600 dark:text-gray-100">
                    {{$tem->descri}}
                </p>
                <div class="h-3 -mt-3 text-3xl leading-tight text-right text-indigo-500">
                    ”
                </div>
            </div>
            <div class="w-full">
                <p class="font-bold text-center text-indigo-500 text-md">
                    {{$tem->noms}}
                </p>
                <p class="text-xs text-center text-gray-500 dark:text-gray-300">
                    {{$tem->email}}
                </p>
            </div>
        </div>
        @endforeach
    </div>

</div>
