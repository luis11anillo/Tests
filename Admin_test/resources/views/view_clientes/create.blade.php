<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="pb-6 text-gray-600 text-center uppercase">
                create client
            </h1>
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6">
                    
                    {{-- FORM --}}
                    <form  method="POST" action="{{ route('cliente.store') }}">
                        @csrf

                        @include('components.create_form')

                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <a href="{{ route('cliente.index') }}" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                            <button 
                                type="submit" 
                                class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>