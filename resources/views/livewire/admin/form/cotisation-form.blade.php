<div class="max-w-screen-lg mt-4">
    
    <form class="bg-gray-50 shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{ route('adminregisterNewCotisation') }}">
        <div class="mb-4">
            <h1 class="uppercase text-center text-xl">FORMULAIRE POUR RENSEIGNER UNE NOUVELLE LIGNE DE COTISATION</h1>
        </div>
        @csrf
        <div class="mt-2">
            <x-label for="type_cotisation" value="{{ __('Type de cotisation *') }}" />
            <select id="type_cotisation" 
            class="block mt-1 w-full rounded-lg border-gray-300" 
            type="text" name="type_cotisation" 
            :value="old('type_cotisation')" 
            required autofocus a
            utocomplete="type_cotisation">
            <option value="" class="text-gray-400">Selectionner un nom</option>
            <option value="Cotisation exceptionnelle">Cotisation exceptionnelle</option>
            <option value="Cotisation ordinaire (mensuelle)">Cotisation ordinaire (mensuelle)</option>
            </select>
        </div>
        <div class="flex-col md:grid md:gap-2 md:grid-cols-2 grid-rows-3 items-center content-center">
            
            <div class="mt-2">
                <x-label for="name" value="{{ __('Nom *') }}" />
                <select id="name" 
                class="block mt-1 w-full rounded-lg border-gray-300" 
                type="text" name="name" 
                :value="old('name')" 
                required autofocus a
                utocomplete="name">
                <option value="" class="text-gray-400">Selectionner un nom</option>
                @foreach ($members as $member)
                    <option value="{{$member->name}}">{{$member->name}}</option>
                @endforeach
            </select>
                
            </div>
            <div class="mt-2">
                <x-label for="surname" value="{{ __('Prenom *') }} "/>
                <select id="surname" 
                class="block mt-1 w-full rounded-lg border-gray-300" 
                type="text" name="surname" 
                :value="old('surname')" 
                required autofocus 
                autocomplete="surname">
                <option class="text-gray-400" value="">Selectionner un prenom</option>

                @foreach ($members as $member)
                    <option value="{{$member->prenom}}">{{$member->prenom}}</option>
                @endforeach
            </select>
                {{-- <div class="relative">
                    <div class="absolute bg-white w-64">
                        @foreach ($members as $member)
                            <div class="p-2 hover:bg-blue-500 mt-2"
                            wire:click="selected({{$member}})">{{$member->prenom}}</div>
                        @endforeach
                    </div>
                </div> --}}
            </div>
            <div class="mt-2">
                <x-label for="mois" value="{{ __('Mois *') }} "/>
                <select id="mois" class="block mt-1 w-full border-gray-300 rounded-lg" type="text" name="mois" :value="old('mois')" 
                required autofocus autocomplete="mois" 
                placeholder="Saisissez l'année à solder" >
                <option value="">Choisissez le mois à solder</option>
                <option value="Janvier">Janvier</option>
                <option value="Fevrier">Fevrier</option>
                <option value="Mars">Mars</option>
                <option value="Avril">Avril</option>
                <option value="Mai">Mai</option>
                <option value="Juin">Juin</option>
                <option value="Juillet">Juillet</option>
                <option value="Aout">Aout</option>
                <option value="Septembre">Septembre</option>
                <option value="Octobre">Octobre</option>
                <option value="Novembre">Novembre</option>
                <option value="Décembre">Décembre</option>
            </select>
            </div>
            <div class="mt-2">
                <x-label for="annee" value="{{ __('Année *') }} "/>
                <x-input id="annee" 
                class="block mt-1 w-full" type="text" 
                name="annee" :value="old('annee')" 
                required autofocus autocomplete="annee"
                placeholder="Saisissez l'année à solder" />
            </div>

            <div class="mt-2">
                <x-label for="date" value="{{ __('Date de paiement *') }} "/>
                <x-input id="date" class="block mt-1 w-full" type="date" name="date_paiement" :value="old('date')" required autofocus autocomplete="date" />
            </div>

            <div class="mt-2">
                <x-label for="montant" value="{{ __('Montant *') }} "/>
                <x-input id="montant" class="block mt-1 w-full" type="text" name="montant" :value="old('montant')" required autofocus autocomplete="montant" />
            </div>
        </div>
        

        <div class="flex items-center justify-end mt-4">

            <x-button class="ml-4">
                {{ __('ENREGISTER') }}
            </x-button>
        </div>
    </form>
</div>
