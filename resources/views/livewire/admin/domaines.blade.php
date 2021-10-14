<div x-data>
    {{-- {{$lastId}} --}}
    <div class="px-5 py-5">
        <div class="grid grid-cols-2 gap-4 divide-y-2">
            <div class="p-2 shadow">   
                <h1 class="text-xl font-bold divide-x-4 divide-gray-300">Domaines d'interventions</h1>
                <div class="flex flex-col gap-8 py-10">
                    <input type="text" class="w-full p-2 placeholder-gray-700 border-2 rounded-lg" placeholder="Domaine d'intervention" id="lib" wire:model="lib">
                    <textarea name="h" id="descri" wire:model="descri" class="p-2 placeholder-gray-600 transition transform border" placeholder="Votre description" ></textarea>
                    <div class="grid grid-rows-2 gap-4"
                    x-data="{ isUploading: false, progress: 0 }"
                    x-on:livewire-upload-start="isUploading = true"
                    x-on:livewire-upload-finish="isUploading = false"
                    x-on:livewire-upload-error="isUploading = false"
                    x-on:livewire-upload-progress="progress = $event.detail.progress"
                    >
                        <label class="flex flex-col items-center justify-center px-4 py-2 tracking-wide text-purple-600 uppercase transition-all duration-150 ease-linear bg-white border rounded-md shadow-md cursor-pointer border-blue hover:bg-purple-600 hover:text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                            <span class="px-3 mt-2 text-base leading-normal">Parcourir une image</span>
                            <input type='file' class="hidden" wire:model="photo" />
                            <div x-show="isUploading">
                                <progress max="100" x-bind:value="progress"></progress>
                                <b x-text="progress"></b>%
                            </div>
                        </label>
                        <button class="p-3 text-lg font-bold text-white bg-gray-500" wire:click="resetFields" @click="detail='';sous_titre='';id=0">Clear</button>        
                    </div>
                    <div class="grid grid-cols-4 gap-4">
                        <button class="p-3 text-lg font-bold text-white bg-blue-900" @click="modalController(0,'Confirmation','Etes-vous sûr de vouloir enregistrer')">Enregistrer</button>        
                        <button class="p-3 text-lg font-bold text-white bg-yellow-600" @click="modalController(1,'Confirmation','Etes-vous sûr de vouloir modifier')">Modifier</button>        
                        <button class="p-3 text-lg font-bold text-white bg-red-900" @click="modalController(2,'Confirmation','Etes-vous sûr de vouloir supprimer')">Supprimer</button>        
                        <button class="p-3 text-lg font-bold text-white bg-gray-500" wire:click="resetFields" @click="descri='';lib='';id=0">Clear</button>        
                    </div>
                    
                </div> 
            </div>
            <div>
                <div>
                    <div class="flex flex-col gap-2 divide-y-2">
                        @foreach ($domaines as $ligne)
                            <div class="flex flex-col">
                                <button class="flex justify-between p-2 font-bold text-white transition duration-300 bg-blue-900 shadow cursor-pointer hover:bg-blue-800" wire:click="charger({{$ligne}})">
                                    <h1><?php echo $ligne->lib; ?></h1>
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z"></path></svg>
                                </button>
                                <div class="hidden p-2 text-lg text-justify bg-gray-300">
                                    <?php echo $ligne->descri; ?>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                @if ($photo)
                    <a class="flex flex-col justify-center p-2 text-center shadow" href="#">
                        {{-- @if (Storage::exists('public/actualite/'.$inf->id.'.png'))     --}}
                            {{-- <img src="{{asset('storage/actualite/'.$inf->id.'.png')}}" > --}}
                            <img src="{{ $photo->temporaryUrl() }}" alt="Pas d'image pour cette actualite" srcset="" class="flex-1">
                        {{-- @endif --}}
                        <h1 class="text-lg font-bold ">Previsualiser l'image</h1>
                    </a>      
                @endif
                <div x-html="$wire.descri" class="mt-5"></div>
            </div>
            
        </div>
    </div>
    
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
