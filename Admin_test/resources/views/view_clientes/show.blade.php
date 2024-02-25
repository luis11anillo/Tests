<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="pb-6 text-gray-600 text-center uppercase">
                Client
            </h1>
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="h-48 p-2" style="background-color: blue">
                    <div class="flex justify-end">
                        @include('components.status-client')
                    </div>
                </div>
                <div>
                    <div class="bg-white relative rounded-lg md:w-full lg:w-4/6 xl:w-full mx-auto">
                        <div class="flex justify-center">
                            <img src="{{ $client->avatar() }}" alt="" class="rounded-full mx-auto absolute -top-20 w-32 h-32 shadow-md border-4 border-white transition duration-200 transform hover:scale-110">
                        </div>
                        <div class="mt-16">
                            <h1 class="font-bold text-center text-3xl text-gray-900">{{ $client->name }}</h1>
                            <p class="text-center text-sm text-gray-400 font-medium pt-2">ID. #{{ $client->id }}</p>
                            <div class="my-5 px-6">
                                <a href="#" class="text-gray-200 block rounded-lg text-center font-medium leading-6 px-6 py-3 bg-slate-900 hover:bg-slate-950 hover:text-white">Connect by email: <span class="font-bold text-blue-400 hover:text-blue-200">{{ $client->email }}</span></a>
                            </div>
                            <div class="flex justify-between items-center my-5 px-6">
                                <a href="#" class="text-gray-900 bg-blue-100 rounded transition duration-150 ease-in font-medium text-sm text-center w-full py-3">Redes Sociales:</a>
                                <a href="" class="text-gray-500 hover:text-gray-900 hover:bg-blue-100 rounded transition duration-150 ease-in font-medium text-sm text-center w-full py-3">Twitter</a>
                                <a href="" class="text-gray-500 hover:text-gray-900 hover:bg-blue-100 rounded transition duration-150 ease-in font-medium text-sm text-center w-full py-3">Instagram</a>
                                <a href="" class="text-gray-500 hover:text-gray-900 hover:bg-blue-100 rounded transition duration-150 ease-in font-medium text-sm text-center w-full py-3">Facebook</a>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 px-8 mb-4">
                            <div class="">
                                <label class="font-bold text-sm text-gray-500 w-fit bg-gray-300 rounded-full px-3">CC.</label>
                                <p class="pl-2 bg-gray-100 rounded-md p-1 mt-1">{{ $client->CC }}</p>
                            </div>
                            <div class="">
                                <label class="font-medium text-sm text-gray-500 w-fit bg-gray-300 rounded-full px-3 uppercase">Age:</label>
                                <p class="pl-2 bg-gray-100 rounded-md p-1 mt-1">{{ $client->edad() }}</p>
                            </div>
                            <div class="">
                                <label class="font-medium text-sm text-gray-500 w-fit bg-gray-300 rounded-full px-3 uppercase">Phone:</label>
                                <p class="pl-2 bg-gray-100 rounded-md p-1 mt-1">{{ $client->phone }}</p>
                            </div>
                            <div class="">
                                <label class="font-medium text-sm text-gray-500 w-fit bg-gray-300 rounded-full px-3 uppercase">City:</label>
                                <p class="pl-2 bg-gray-100 rounded-md p-1 mt-1">{{ $client->city }}</p>
                            </div>
                            <div class=" col-span-2">
                                <label class="font-medium text-sm text-gray-500 w-fit bg-gray-300 rounded-full px-3 uppercase">Address:</label>
                                <p class="pl-2 bg-gray-100 rounded-md p-1 mt-1">{{ $client->address }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>