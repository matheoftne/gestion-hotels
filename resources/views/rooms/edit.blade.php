<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Modifier une chambre') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form class="flex flex-col gap-4 justify-center" action="{{ route('rooms.update', $room->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="hotelId" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Hôtel</label>
                            <input required value="{{ $room->hotelId }}" type="hidden" name="hotelId" id="hotelId" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-900 leading-tight focus:outline-none focus:shadow-outline">
                            <p class="dark:bg-slate-100 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-900 leading-tight focus:outline-none focus:shadow-outline">{{ $room->hotel->name }}</p>
                            
                        </div>
                        <div class="mb-4">
                            <label for="roomNumber" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Numéro de chambre</label>
                            <input required value="{{ $room->roomNumber }}" type="number" name="roomNumber" id="roomNumber" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-900 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mb-4">
                            <label for="capacity" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Capacité</label>
                            <input required value="{{ $room->capacity }}" type="number" name="capacity" id="capacity" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-900 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mb-4">
                            <label for="price" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Prix</label>
                            <input required value="{{ $room->price }}" type="number" name="price" id="price" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-900 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <button type="submit" class="mt-4 dark:text-gray-50">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
