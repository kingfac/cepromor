<div x-data class="absolute top-0 left-0 w-full min-h-screen bg-white">
    <div class="flex justify-between pr-6">
        <button class="p-3 text-lg font-bold text-white bg-blue-900" @click="type=false">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
        </button>
        <h1 class="py-3 text-lg">Type des partenaires</h1>
    </div>
    <hr>
    <div class="px-5 py-5">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="grid grid-cols-2 gap-4 divide-y-2">
            <div class="p-2 shadow">   
                <h1 class="text-xl font-bold divide-x-4 divide-gray-300">Gestion des type de partenaire</h1>
                <div class="flex flex-col gap-8 py-10">
                    <input type="text" class="w-full p-2 placeholder-gray-700 border-2 rounded-lg" placeholder="Saisir le type ici" id="lib" wire:model="lib">
                    {{-- <textarea name="h" id="detail" wire:model="detail" class="p-2 placeholder-gray-600 transition transform border" placeholder="Votre detail" ></textarea> --}}
                    <div class="grid grid-cols-4 gap-4">
                        <button class="p-3 text-lg font-bold text-white bg-blue-900" @click="modalController(0,'Confirmation','Etes-vous sûr de vouloir enregistrer')">Enregistrer</button>        
                        <button class="p-3 text-lg font-bold text-white bg-yellow-600" @click="modalController(1,'Confirmation','Etes-vous sûr de vouloir modifier')">Modifier</button>        
                        <button class="p-3 text-lg font-bold text-white bg-red-900" @click="modalController(2,'Confirmation','Etes-vous sûr de vouloir supprimer')">Supprimer</button>        
                        <button class="p-3 text-lg font-bold text-white bg-gray-500" wire:click="resetFields" @click="detail='';lib='';id=0">Clear</button>        
                    </div>
                </div> 
            </div>
            <div>
                <div class="flex flex-col gap-2 divide-y-2">
                    @foreach ($types as $ligne)
                        <div class="flex flex-col">
                            <button class="flex justify-between p-2 font-bold text-white transition duration-300 bg-blue-900 shadow cursor-pointer hover:bg-blue-800" wire:click="charger({{$ligne}})">
                                <h1><?php echo $ligne->lib; ?></h1>
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z"></path></svg>
                            </button>
                        </div>
                    @endforeach
                </div>
            </div>
            
        </div>
    </div>
    {{-- Modal --}}
    <div class="absolute top-0 flex items-center justify-center w-full min-h-full p-10 bg-black-transparent" x-show="modal" x-transition.duration.500ms>
        <div class="flex flex-col w-full gap-4 p-5 bg-white shadow md:w-2/3 lg:w-1/4">
            <div class="flex justify-between w-full">
                <h1 class="text-lg font-bold" x-text="modalTitle"></h1>
                <button class="px-5 text-white transition duration-500 bg-red-600 hover:bg-red-900" @click="modal=false" @click.away="modal=false">X</button>
            </div>
            <hr>
            <div class="grid grid-rows-2 mt-4">
                <div class="font-bold text-center">
                    <h1 class="pb-10" x-text="modalMessage">Message du modal</h1>
                    {{-- <button wire:click="aa" class="p-3 bg-red-500">glodi</button> --}}
                    <hr>
                </div>
                <div class="grid grid-cols-2 gap-4">{{-- modalController --}}
                    <button class="text-lg font-bold text-white transition duration-500 bg-blue-800 hover:bg-blue-900" x-show="modalButton==0" wire:click="store">
                        Enregistrer
                    </button>
                    <button class="text-lg font-bold text-white transition duration-500 bg-blue-800 hover:bg-blue-900" x-show="modalButton==1" wire:click="update">
                        Modifier
                    </button>
                    <button class="text-lg font-bold text-white transition duration-500 bg-blue-800 hover:bg-blue-900" x-show="modalButton==2" wire:click="delete">
                        Supprimer
                    </button>
                    <button class="text-lg font-bold text-white transition duration-500 bg-red-600 hover:bg-red-900" @click="modal=false">
                        Non
                    </button>
                </div>
            </div>        
        </div>    
    </div>
</div>