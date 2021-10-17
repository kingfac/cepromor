<div class="py-10" id="volontaires">
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="flex flex-col items-center justify-center text-center">
        <h1 class="text-xl font-bold text-center xl:text-3xl md:text-1xl lg:text-2xl">Nos volontaires</h1>
        <h1 class="w-16 mt-1 border-b-8 border-yellow-600"></h1>
        <div class="pt-5 font-bold text-gray-400 sm:pt-20 md:pt-20 lg:pt-20">
            <p class="text-xs lg:text-lg md:text-lg sm:text-lg">Aidez aujourd'hui, ne ramenez pas ça à demain <br> Nous avons besoin de vous</p>
        </div>
    </div>
    <div class="grid w-full grid-cols-1 gap-6 px-10 mt-10 md:grid-cols-2 xl:px-72 md:px-10 lg:px-20 animate__animated animate__bounceIn">
        <div class="">
            <div class="">
                <img src="{{asset('storage/volontaire/'.$volontaires[0]->id.'.png')}}" alt="" srcset="">
            </div>
        </div>
        <div class="flex flex-col justify-center gap-4 ">
            <h1 class="font-bold sm:text-3xl md:text-3xl lg:text-3xl">Devenir un volonteur ?</h1>
            <p class="font-bold text-gray-400 sm:text-xl md:text-xl lg:text-xl">Rejoignez la team et profitez des moments inoubliable</p>
            <ol class="grid items-center grid-rows-3 gap-2 text-lg text-justify">
                <li class="px-5 py-3 text-gray-400 border-l-8 border-blue-900">Nous sommes des amis</li>
                <li class="px-5 py-3 text-gray-400 border-l-8 border-blue-900">C'est une opportunité de faire encore plus du bien</li>
                <li class="px-5 py-3 text-gray-400 border-l-8 border-blue-900">Aucune condition n'est requise</li>
            </ol>
        </div>
    </div>
</div>