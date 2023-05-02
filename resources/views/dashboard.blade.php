<x-app-layout>
    <x-slot name="header" >
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} <span class="text-gray-400 ">{{__('Gerer vos cotisations en toutes simplicité')}}</span>
        </h2>

        @foreach ($user->roles as $role)
            @if ($role->role_uuid == "Ahg7iu/we3-R5g47")
            <div class="flex">
                <div class="flex mt-2">
                    <a  href="{{route('newEnrUser')}}"
                    class="" title="Ajouter un nouveau membre">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                        </svg>
                    </a>
                    <a href="{{route('newCotisation')}}" class="px-2" title="Ajouter une nouvelle cotisation">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-yellow-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                          </svg>
                    </a>
                </div>
                
            </div>
            @else
            <div class=" text-end">
                <a  href="/"
                class="p-2 rounded-md
                bg-blue-500 text-white
                 border-2 shadow-lg hover:bg-blue-700 
                border-blue-700">
                Nouveau paiement
            </a>
            </div>
            @endif
        @endforeach
        <div class="text-end">
            <div class="" id="rechercher">
                <span>
                    <input class="rounded-lg border-gray-300" type="text"  placeholder="Rechercher"/>
                </span>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-screen-2xl mx-auto sm:px-6 lg:px-8">
            @if (Route::is('dashboard_cotisations'))
            
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    @livewire('cotisations', ['transactions' => $transactions])
                </div>
            @elseif (Route::is("adminPage"))
                <div class="max-w-8xl bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    @livewire("admin.admin-page")
                </div>
            @elseif (Route::is("newTransactionRequest"))
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    @livewire('transactions')
                </div>
            @elseif (Route::is("newEnrUser"))
                <div class="bg-white overflow-y shadow-xl sm:rounded-lg md:grid place-items-center">
                    @livewire('admin.form.new-user-form')
                </div>
            @elseif (Route::is("newCotisation"))
                <div class="bg-white overflow-y shadow-xl sm:rounded-lg md:grid place-items-center">
                    @livewire('admin.form.cotisation-form')
                </div>
            
            @else
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
            @endif

        </div>
    </div>
</x-app-layout>
