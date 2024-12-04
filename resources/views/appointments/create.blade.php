<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nieuwe Afspraak') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('appointments.store') }}">
                        @csrf
                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700">Omschrijving</label>
                            <input type="text" name="description" id="description" class="mt-1 block w-full">
                        </div>
                        <div class="mt-4">
                            <label for="appointment_date" class="block text-sm font-medium text-gray-700">Datum en Tijd</label>
                            <input type="datetime-local" name="appointment_date" id="appointment_date" class="mt-1 block w-full">
                        </div>
                        <div class="mt-6">
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg px-4 py-2">
                                Afspraak Aanmaken
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
