<div class="px-2 py-20 bg-gray-100 md:px-10">
    {{-- Success is as dangerous as failure. --}}
    
    <div class="flex flex-col gap-5">
        <div class="grid w-full gap-4 md:grid-cols-2">
            <div class="col-span-1 row-span-1 ">
                <select name="hh" id="" wire:model="objet_id" class="w-full px-1 py-2 text-lg border rounded-lg">
                    <option class="text-lg font-bold">Choisir un l'objet</option>
                    @foreach ($objets as $objet)
                        <option value="{{$objet['id']}}" class="text-lg font-bold">{{$objet['lib']}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-span-2 row-span-2 ">
                <input type="text" placeholder="Noms (Ex : Jean nsilu antoine)" class="w-full rounded-lg" wire:model="noms">
            </div>
        </div>
        <div class="grid w-full gap-4 md:grid-cols-2">
            <div class="">
                <input type="text" placeholder="Email" class="w-full rounded-lg" wire:model="email">
            </div>
            <div class="col-span-2 row-span-2 ">
                <input type="text" placeholder="Num de contact(Ex: +243 895633267)" class="w-full rounded-lg" wire:model="tel">
            </div>
        </div>
        <div>
            <textarea name="" id=""  class="w-full" wire:model="message"></textarea>
        </div>
        <div class="flex justify-end">
            <button class="px-6 py-2 text-white bg-blue-900" wire:click="store">Envoyer</button>
        </div>
        @if ($errors->any())
            
                <div class="">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    </div>
</div>
