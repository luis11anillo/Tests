<x-app-layout>
    @if (session('success'))        
        <div class="bg-sky-100 text-center text-gray-500 py-1 font-medium">
            {{ session('success') }}
        </div>
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="pb-6 text-2xl font-bold text-gray-600">
                Listado de clientes
            </h1>
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6">
                    <div class="flex items-center justify-between pb-2">
                        
                        {{-- FILTER --}}
                        
                        <form action="" method="GET" class="flex flex-1 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="gray" class="w-4 h-4 absolute ml-2">
                                <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
                            </svg>    
                            <input 
                                type="text"
                                class="rounded-l-md my-2 w-1/3 border-gray-300 pl-7 focus:ring-0 shadow-sm"
                                placeholder="Search by name"
                                name="search"
                            >
                            <button type="submit" class="bg-gray-400 hover:bg-gray-500 p-2 border border-gray-400 hover:border-gray-500 rounded-r-md text-white flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 01-.659 1.591l-5.432 5.432a2.25 2.25 0 00-.659 1.591v2.927a2.25 2.25 0 01-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 00-.659-1.591L3.659 7.409A2.25 2.25 0 013 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0112 3z" />
                                </svg> 
                                Filter
                            </button>
                        </form>

                        <a href="{{ route('cliente.create') }}" class="bg-blue-700 text-white px-6 py-2 rounded-md hover:bg-blue-600 font-bold">New client</a>
                    </div>

                    <div class="rounded-md overflow-hidden"> 
                        
                        {{-- TABLE --}}

                        <table class="w-full">
                            <thead>
                                <tr class="text-left text-white bg-slate-700">
                                    <th class="p-2">Name</th>
                                    <th class="text-left">City</th>
                                    <th class="text-center">Phone</th>
                                    <th class="text-center">Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clientes as $client)
                                <tr class="border-b border-gray-300 hover:bg-gray-100 clickable-row" data-href="#" id="hover-row">
                                    <td class="flex p-2 items-center">
                                        <img src="{{ $client->avatar() }}" alt="" class="h-10 w-10 bg-gray-500 rounded-full">
                                        <a href="{{ route('cliente.show', $client ) }}" class="pl-3">
                                            <p>{{ $client->name }} </p>
                                            <p class="text-gray-600">{{ $client->email }}</p>
                                        </a>
                                    </td>
                                    <td>{{ $client->city }}</td>
                                    <td class="text-center">{{ $client->phone }}</td>
                                    <td>
                                        <div class="flex justify-center">
                                            @include('components.status-client')
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="flex justify-center space-x-3">
                                            <a href="{{ route('cliente.edit', $client->id ) }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"  class="w-6 h-6 stroke-current text-gray-500 hover:text-yellow-500">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                </svg>
                                            </a>
                                            <a>
                                                @include('components.delete-icon')
                                            </a>
                                        </div>
                                    </td>
{{--                                     <td class="actions">
                                            show the options 
                                    </td> --}}
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

{{-- OPRIONS VISIBLE/INVISIBLE - EDIT & DELETE --}}

{{-- <script>
    document.addEventListener("DOMContentLoaded", function() {
    const rows = document.querySelectorAll(".clickable-row");

        rows.forEach(row => {
            row.addEventListener("click", function() {
                const href = this.getAttribute("data-href");
                if (href) {
                    window.location = href;
                }
            });

            row.addEventListener("mouseover", function() {
                const actionsCell = this.querySelector(".actions");
                actionsCell.innerHTML = `
                <div class="flex justify-center space-x-3">
                    <a href="{{ route('cliente.create') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="gray" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>
                    </a>
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="gray" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                        </svg>
                            
                    </a>
                </div>
                `;
            });

            row.addEventListener("mouseout", function() {
                const actionsCell = this.querySelector(".actions");
                actionsCell.innerHTML = '';
            });
        });
    });
</script> --}}
