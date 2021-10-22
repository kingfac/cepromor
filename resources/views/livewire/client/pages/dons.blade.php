<div class="" x-data>
    <style>
    
        #don {
            background-image: url("{{asset('images/IMG_20200511_091026.jpg')}}");        
            background-repeat: no-repeat;
            background-position: center center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        
    </style>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="flex items-center justify-center h-1/3" id="don">
        {{-- <img src="{{asset('storage/domaine/'.$domaine_id.'.png')}}" alt="" srcset="" class="object-cover w-full h-full obj"> --}}
        <h1 class="p-3 font-bold text-center text-white md:text-2xl bg-orange-transparent">FAIRE UN DON A CEPROMO&AEPH</h1>
    </div>
    <div class="flex flex-col min-h-screen">
        <div class="px-5 py-4 text-xl text-justify md:mb-10 xl:px-60">
            <h1 class="py-6 font-extrabold text-center md:text-3xl text-orange">DON EN ESPECE (FINANCE)</h1>
            <p class="text-center">Pour ceux qui veulent nous faire un don financier veillez effectuer un virement aux comptes ci-dessous</p>
        </div>
        <div class="flex-1 px-2 xl:px-60">
            <h1 class="py-6 font-extrabold md:text-3xl text-orange">Comptes de virement</h1>
            @foreach ($banks as $bank)    
            <div class="flex flex-col items-center justify-center gap-4 p-4 mb-4 shadow md:flex-row">
                <div class="p-2">
                    <img src="{{asset('storage/bank/'.$bank->id.'.png')}}" alt="" class="md:w-1/2">
                </div>
                <div class="flex flex-col gap-5">
                    <div class="font-bold md:text-2xl">
                        <b class="w-full bg-gray-400">Nom du compte</b>
                        <p class="bg-white">{{$bank->nom}}</p>
                    </div>
                    <p>
                        <b class="">Numéro du compte </b>
                        <p>{{$bank->numero}}</p>
                    </p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="px-2 py-4 text-xl text-justify md:px-10 xl:px-60">
            <h1 class="py-6 font-extrabold text-center md:text-3xl text-orange">DON EN NATURE (RESSOURCES NON FINANCIERES)</h1>
            <p class="mb-10 text-center">Pour ceux qui veulent nous faire un don en nature (Matériel et Autres) veillez nous écrire ici bas</p>
            <livewire:client.requetes :id="2" />
        </div>
    </div>
    
</div>
