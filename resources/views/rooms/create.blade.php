<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Ajouter une chambre') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('rooms.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="hotelId" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">ID hôtel</label>
                            <select class="dark:text-gray-900" name="hotelId" id="hotelId">
                                <option class="dark:text-gray-900" value="">-- Choisissez un hôtel --</option>
                                @foreach ($hotels as $hotel)
                                    <option class="dark:text-gray-900" value="{{ $hotel->id }}">{{ $hotel->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="roomNumber" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Numéro de chambre</label>
                            <input type="number" name="roomNumber" id="roomNumber" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-900 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mb-4">
                            <label for="capacity" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Capacité</label>
                            <input type="number" name="capacity" id="capacity" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-900 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mb-4">
                            <label for="price" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Prix</label>
                            <input type="number" name="price" id="price" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-900 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <button type="submit" class="">Ajouter la chambre</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
