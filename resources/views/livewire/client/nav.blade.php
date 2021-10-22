<div class="top-0 w-full" x-data="{cepro:false, domaine:false, open:false}" {{-- :class="{'bg-black-transparent-nav':cepro===false, 'bg-black-transparent-nav-1':cepro===true}" --}} id="nav" x-init="navInit()">
    <nav class="" x-show="navType">
        <div class="max-w-full px-2 mx-auto lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center justify-between w-full">
                    {{-- actu projetRecent nous temoignage partenaires volontaires --}} 
                    <a href="{{route('client')}}" class="flex flex-row ">
                        <img src="{{asset('images/logocepro.png')}}" alt="" class="w-10 h-10 ">
                        <div class="relative px-3 text-white md:block">
                            <h1 class="font-bold">CEPROMOR &AEPH </h1>
                            <h1 class="text-xs font-bold">ASBL/ONGD</h1>
                        </div>
                    </a>
                    <div class="hidden lg:block">
                        <ul class="flex items-baseline ml-10 space-x-4">
                            <a href="#" @click="cepro = !cepro" @click.outside="cepro=false" class="px-3 py-2 text-sm font-bold text-white rounded-md hover:text-gray-500">
                                CEPROMOR & AEPH 
                            </a>
                            <a href="#projetRecent" class="px-3 py-2 text-sm font-bold text-white rounded-md hover:text-gray-500">PROJETS</a>
                            <a href="#actu" class="px-3 py-2 text-sm font-bold text-white rounded-md hover:text-gray-500">ACTUALITÉS</a>
                            <a href="#" class="px-3 py-2 text-sm font-bold text-white rounded-md hover:text-gray-500" @click="domaine=!domaine" @click.outside="domaine=false">DOMAINES D'INTERVENTIONS</a>
                            <a href="#footer" class="px-3 py-2 text-sm font-bold text-yellow-600 rounded-md hover:text-gray-500">CONTACTS</a>
                        </ul>
                    </div>
                </div>
                
                <div class="block">
                    <div class="flex items-center ml-4 lg:ml-6"></div>
                </div>
                {{-- <div class="w-full px-20 py-3 text-center text-white lg:hidden">
                    <h1 class="font-bold">CEPROMOR &AEPH </h1>
                    <h1 class="text-xs font-bold">ASBL/ONGD</h1>
                </div> --}}
                <div class="flex -mr-2 lg:hidden">
                    <button class="inline-flex items-center justify-center p-2 text-white rounded-md dark:text-white hover:text-white focus:outline-none" @click="open=!open">
                        <svg width="20" height="20" fill="currentColor" class="w-8 h-8" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1664 1344v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="lg:hidden " style="background-color: #111827;">
            <div class="flex flex-col px-2 pt-2 pb-3 space-y-1 transform sm:px-3" x-show="open"
                :class=""
                x-transition.durantion.500ms
            >
                <a href="{{route('client')}}" class="px-3 py-2 text-sm font-bold text-white rounded-md hover:text-gray-800">Accueil fdf</a>
                <a href="#" class="px-3 py-2 text-sm font-bold text-white rounded-md hover:text-gray-800" @click="cepro=!cepro;open=!open" {{-- @click.outside="cepro=false" --}}>
                    CEPROMOR &AEPH 
                </a>
                <a href="{{route('client')}}" class="px-3 py-2 text-sm font-bold text-white rounded-md hover:text-gray-800">PROJETS</a>
                <a href="{{route('client')}}" class="px-3 py-2 text-sm font-bold text-white rounded-md hover:text-gray-800">ACTUALITÉS</a>
                <a href="#" class="px-3 py-2 text-sm font-bold text-white rounded-md hover:text-gray-800" @click="domaine=!domaine;open=!open" {{-- @click.outside="domaine=false" --}}>DOMAINES D'INTERVENTIONS</a>
                <a href="{{route('client')}}" class="px-3 py-2 text-sm font-bold text-yellow-500 rounded-md hover:text-gray-800">CONTACTS</a>
            </div>
        </div>
        <div class="w-full text-white transform border-t h-1/2"  x-show="cepro" x-transition.duration.500ms >
            <h1 class="hidden pb-10 font-extrabold text-center divide-y-2">A PROPOS DE CEPROMOR  & AEPH </h1>
            <div class="flex justify-between px-2 py-1 bg-yellow-600 lg:hidden">
                <h1 class="font-extrabold">A PROPOS DE CEPROMOR  & AEPH </h1>
                <button class="bg-yellow-600" @click="cepro=!cepro;open=!open">X</button>
            </div>
            <div class="grid text-left bg-gray-900 divide-y-2 divide-gray-600 md:bg-transparent lg:grid-cols-5">
                @foreach ($ceproInfos as $inf)
                    <a href="{{route('pages', ['page' => 'cepromor', 'el'=> $inf->id.'/#info'.$inf->id])}}" class="px-2 py-5 text-xl font-bold text-left transition duration-300 transform bg-black-transparent hover:scale-95">{{$inf->lib}}</a>
                @endforeach
            </div>
        </div>
        <div class="w-full text-white transform border-t h-1/2"  x-show="domaine" x-transition.duration.500ms >
            <h1 class="hidden pb-10 font-extrabold text-center divide-y-2 divide-gray-800">DOMAINES D'INTERVENTIONS DE CEPROMOR  & AEPH </h1>
            <div class="flex justify-between bg-yellow-600 lg:hidden">
                <h1 class="font-extrabold">DOMAINES D'INTERVENTIONS DE CEPROMOR  & AEPH </h1>
                <button class="px-4 bg-yellow-600" @click="domaine=!domaine;open=!open">X</button>
            </div>
            <div class="grid {{-- divide-y-2 divide-yellow-600 --}} md:bg-transparent lg:grid-cols-2 {{-- lg:hidden --}}">
                @foreach ($domaines as $dom)
                    <a href="{{route('pages', ['page' => 'activite', 'el'=> $dom->id.'/#domaine'.$dom->id])}}" class="py-5 font-bold text-center transition duration-300 transform border border-gray-800 hover:scale-95" {{-- style="background-color: rgba(0, 0, 255, 0.137)" --}}>{{$dom->lib}}</a>
                @endforeach
            </div>
        </div>
    </nav>
    {{-- Nav type.... --}}
    <nav class="" x-show="!navType">
        <div class="max-w-full px-2 mx-auto lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center justify-between w-full">
                    {{-- actu projetRecent nous temoignage partenaires volontaires --}} 
                    <a href="{{route('client')}}" class="flex flex-row ">
                        <img src="{{asset('images/logocepro.png')}}" alt="" class="w-10 h-10 ">
                        <div class="relative px-3 text-white md:block">
                            <h1 class="font-bold">CEPROMOR &AEPH </h1>
                            <h1 class="text-xs font-bold">ASBL/ONGD</h1>
                        </div>
                    </a>
                    <div class="hidden lg:block">
                        <ul class="flex items-baseline ml-10 space-x-4">
                            <a href="#" @click="cepro = !cepro" @click.outside="cepro=false" class="px-3 py-2 text-sm font-bold text-white rounded-md hover:text-gray-500">
                                CEPROMOR & AEPH 
                            </a>
                            <a href="{{route('pages', ['page'=>'projet', 'el'=>'null'])}}" class="px-3 py-2 text-sm font-bold text-white rounded-md hover:text-gray-500">PROJETS</a>
                            <a href="#actu" class="px-3 py-2 text-sm font-bold text-white rounded-md hover:text-gray-500">ACTUALITÉS</a>
                            <a href="#" class="px-3 py-2 text-sm font-bold text-white rounded-md hover:text-gray-500" @click="domaine=!domaine" {{-- @click.outside="domaine=false" --}}>DOMAINES D'INTERVENTIONS</a>
                            <a href="#footer" class="px-3 py-2 text-sm font-bold text-yellow-600 rounded-md hover:text-gray-500">CONTACTS</a>
                        </ul>
                    </div>
                </div>
                
                <div class="block">
                    <div class="flex items-center ml-4 lg:ml-6"></div>
                </div>
                {{-- <div class="w-full px-20 py-3 text-center text-white lg:hidden">
                    <h1 class="font-bold">CEPROMOR &AEPH </h1>
                    <h1 class="text-xs font-bold">ASBL/ONGD</h1>
                </div> --}}
                <div class="flex -mr-2 lg:hidden">
                    <button class="inline-flex items-center justify-center p-2 text-white rounded-md dark:text-white hover:text-white focus:outline-none" @click="open=!open">
                        <svg width="20" height="20" fill="currentColor" class="w-8 h-8" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1664 1344v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="lg:hidden">
            <div class="flex flex-col px-2 pt-2 pb-3 space-y-1 transform sm:px-3" x-show="open"
                :class=""
                x-transition.durantion.500ms
            >
                <a href="{{route('client')}}" class="px-3 py-2 text-sm font-bold text-white rounded-md hover:text-gray-800">Accueil</a>
                <a href="#" class="px-3 py-2 text-sm font-bold text-white rounded-md hover:text-gray-800" @click="cepro=!cepro;open=!open" {{-- @click.outside="cepro=false" --}}>
                    CEPROMOR &AEPH 
                </a>
                <a href="{{route('client')}}" class="px-3 py-2 text-sm font-bold text-white rounded-md hover:text-gray-800">PROJETS</a>
                <a href="{{route('client')}}" class="px-3 py-2 text-sm font-bold text-white rounded-md hover:text-gray-800">ACTUALITÉS</a>
                <a href="#" class="px-3 py-2 text-sm font-bold text-white rounded-md hover:text-gray-800" @click="domaine=!domaine;open=!open" {{-- @click.outside="domaine=false" --}}>DOMAINES D'INTERVENTIONS</a>
                <a href="{{route('client')}}" class="px-3 py-2 text-sm font-bold text-yellow-500 rounded-md hover:text-gray-800">CONTACTS</a>
            </div>
        </div>
        <div class="w-full text-white transform border-t h-1/2"  x-show="cepro" x-transition.duration.500ms >
            <h1 class="hidden pb-10 font-extrabold text-center divide-y-2">A PROPOS DE CEPROMOR  & AEPH </h1>
            <div class="flex justify-between px-2 py-1 bg-yellow-600 lg:hidden">
                <h1 class="font-extrabold">A PROPOS DE CEPROMOR  & AEPH </h1>
                <button class="bg-yellow-600" @click="cepro=!cepro;open=!open">X</button>
            </div>
            <div class="grid text-left bg-gray-900 divide-y-2 divide-gray-600 md:bg-transparent lg:grid-cols-5">
                @foreach ($ceproInfos as $inf)
                    <a href="{{route('pages', ['page' => 'cepromor', 'el'=> $inf->id.'/#info'.$inf->id])}}" class="px-2 py-5 text-xl font-bold text-left transition duration-300 transform bg-black-transparent hover:scale-95">{{$inf->lib}}</a>
                @endforeach
            </div>
        </div>
        <div class="w-full text-white transform border-t h-1/2"  x-show="domaine" x-transition.duration.500ms >
            <h1 class="hidden pb-10 font-extrabold text-center divide-y-2 divide-gray-800">DOMAINES D'INTERVENTIONS DE CEPROMOR  & AEPH </h1>
            <div class="flex justify-between bg-yellow-600 lg:hidden">
                <h1 class="font-extrabold">DOMAINES D'INTERVENTIONS DE CEPROMOR  & AEPH </h1>
                <button class="px-4 bg-yellow-600" @click="domaine=!domaine;open=!open">X</button>
            </div>
            <div class="grid {{-- divide-y-2 divide-yellow-600 --}} md:bg-transparent lg:grid-cols-2 {{-- lg:hidden --}}">
                @foreach ($domaines as $dom)
                    <a href="{{route('pages', ['page' => 'activite', 'el'=> $dom->id.'/#domaine'.$dom->id])}}" class="py-5 font-bold text-center transition duration-300 transform border border-gray-800 hover:scale-95" {{-- style="background-color: rgba(0, 0, 255, 0.137)" --}}>{{$dom->lib}}</a>
                @endforeach
            </div>
        </div>
    </nav>
</div>
