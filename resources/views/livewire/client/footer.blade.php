<div class="px-10 py-20 bg-blue-900" id="footer"> 
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="grid grid-cols-1 gap-3 xl:gap-20 md:grid-cols-2 lg:grid-cols-3">
        <div class="flex flex-col gap-4">
            <a class="flex flex-col items-center text-center md:items-start md:flex-row md:text-left" href="{{route('client')}}">

                <img src="{{asset('images/logocepro.png')}}" alt="" class="w-12 h-12">
                <div class="relative w-4/5 px-3 text-white md:block">
                    <h1 class="font-bold">CEPROMOR &AEPH </h1>
                    <h1 class="text-xs font-bold">ASBL/ONGD</h1>
                </div>
            </a>
            <p class="text-center text-white md:text-justify">
                CENTRE POUR LA PROMOTION  DU MONDE RURALACTION EVANGILE ET  PROMOTION HUMAINE
                ASBL/ONGD<br/>
                BP.195 Inkisi /Kongo central<br/>
                République Démocratique du Congo
            </p>

            <div class="grid grid-rows-1 gap-2 text-gray-400 li jus">
                <a href="#" class="px-10 py-1 text-center transition duration-150 transform border-r-8 bg-black-transparent hover:-skew-x-12 md:text-justify">Projets</a> 
                <a href="#" class="px-10 py-1 text-center transition duration-150 transform border-r-8 bg-black-transparent hover:-skew-x-12 md:text-justify">Actualités</a> 
                <a href="#" class="px-10 py-1 text-center transition duration-150 transform border-r-8 bg-black-transparent hover:-skew-x-12 md:text-justify">Domaines d'intervention</a> 
                {{-- <a href="#" class="px-10 py-1 text-center transition duration-150 transform border-r-8 bg-black-transparent hover:-skew-x-12 md:text-justify">Donnations</a> 
                <a href="#" class="px-10 py-1 text-center transition duration-150 transform border-r-8 bg-black-transparent hover:-skew-x-12 md:text-justify">FAQ</a> 
                <a href="#" class="px-10 py-1 text-center transition duration-150 transform border-r-8 bg-black-transparent hover:-skew-x-12 md:text-justify">Volontaires</a> --}} 
            </div>
        </div>
        <div class="text-center">
            <h1 class="pb-10 text-xl font-bold text-white">Projets récents</h1>

            <ul class="font-bold text-gray-300">
                @foreach ($projets as $pro)
                    <li><b>{{$loop->index + 1}}. </b>{{$pro->nom}}</li>
                @endforeach
            </ul>

            <h1 class="py-10 text-xl font-bold text-white">Actualités récentes</h1>

            <ul class="font-bold text-gray-300">
                @foreach ($actualites as $actu)
                    <li><b>{{$loop->index + 1}}. </b>{{$actu->titre}}</li>
                @endforeach
            </ul>
        </div>
        <div class="text-center md:text-left">
            <h1 class="pb-10 text-xl font-bold text-yellow-600">Contacts</h1>
            <div class="grid grid-rows-1 gap-4">
                @foreach ($conts as $ligne)
                <a class="flex border-b-2 md:justify-start felx-col" href="{{(str_contains($ligne->lib, '@') ? 'mailto:'.$ligne->lib : (str_contains($ligne->lib, '+243') ? 'tel:'.$ligne->lib : 'http://'.$ligne->lib))}}">
                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{$ligne->icon}}"></path></svg>
                    <b class="flex-1 py-2 text-center text-white ">{{$ligne->lib}}</b>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="py-2 text-xs text-center text-white bg-gray-900 divide-y-2">
    2020 by Glodi nsuadi kiese & Lebeau yamba => devéloppeurs
</div>
