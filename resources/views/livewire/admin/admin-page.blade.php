<div class="relative overflow-x-auto">
    {{-- <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    N°
                </th>
                <th scope="col" class="px-6 py-3">
                    Identifiant
                </th>
                <th scope="col" class="px-6 py-3">
                    Mois
                </th>
                <th scope="col" class="px-6 py-3">
                    Amount
                </th>
                <th scope="col" class="px-6 py-3">
                    Type
                </th>
                <th scope="col" class="px-6 py-3">
                    Perform date
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $item)
                
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$item->id}}
                </th>
                <td class="px-6 py-4">
                    {{$item->id}}
                </td>
                <td class="px-6 py-4">
                    {{$item->annee}}
                </td>
                <td class="px-6 py-4">
                    {{$item->mois}}
                </td>
                <td class="px-6 py-4">
                    {{$item->type_cotisation}}
                </td>
                <td class="px-6 py-4">
                    {{$item->description}}
                </td>
            </tr>
            @endforeach
       
        </tbody>
    </table> --}}
    <div class="flex-col md:grid md:gap-2 md:grid-cols-1 grid-rows-3 items-center content-center">
        {{-- @foreach ($transactions as $item) --}}
        <a class="w-full hover:opacity-60 text-white h-32 items-center  cursor-pointer">
            <div class="grid grid-cols-1 gap-4 content-center  border-2 h-32 bg-blue-500 hover:opacity-100">
                <h1 class="text-3xl text-center"></h1>
            </div>
        </a>
        {{-- @endforeach --}}
    </div>
</div>

