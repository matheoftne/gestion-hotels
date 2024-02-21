<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Modifier un hôtel') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form class="flex flex-col gap-4" action="{{ route('hotels.update', $hotel->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Nom</label>
                            <input required type="text" name="name" id="name" value="{{ $hotel->name }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-900 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mb-4">
                            <label for="adress" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Adresse</label>
                            <input required type="text" name="adress" id="adress" value="{{ $hotel->adress }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-900 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mb-4">
                            <label for="stars" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Étoiles</label>
                            <input required type="number" name="stars" id="stars" value="{{ $hotel->stars }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-900 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Email</label>
                            <input required type="email" name="email" id="email" value="{{ $hotel->email }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-900 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mb-4">
                            <label for="telephone" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Téléphone</label>
                            <input required type="text" name="telephone" id="telephone" value="{{ $hotel->telephone }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-900 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <button type="submit" class="mt-4">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
