<x-app-layout>
    <x-slot name="header" >
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} <span class="text-gray-400 ">{{__('Gerer vos cotisations en toutes simplicité')}}</span>
        </h2>
        <div class=" text-end">
            <a  href="{{route('newTransactionRequest')}}"
            class="p-2 rounded-md
            bg-blue-500 text-white
             border-2 shadow-lg hover:bg-blue-700 
            border-blue-700">Nouveau paiement</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (Route::is('dashboard_cotisations'))
            
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    @livewire('cotisations', ['transactions' => $transactions])
                </div>
            @elseif (Route::is("newTransactionRequest"))
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    @livewire('transactions')
                </div>
            @else
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
            @endif

        </div>
    </div>
</x-app-layout>
