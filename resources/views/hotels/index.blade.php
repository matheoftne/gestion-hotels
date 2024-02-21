<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Hôtels') }}
        </h2>
    </x-slot>

    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex gap-4 flex-col">
            <div class="flex justify-end">
                <a class="text-white rounded-lg p-4 border-transparent dark:bg-gray-800" href="{{ route('hotels.create') }}">Ajouter un hôtel</a>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl font-semibold mb-6">Liste des hôtels</h1>
                    <table class="w-full">
                        <thead>
                            <tr>
                                <th class="border-b-2 p-2 dark:border-gray-700">ID</th>
                                <th class="border-b-2 p-2 dark:border-gray-700">Nom</th>
                                <th class="border-b-2 p-2 dark:border-gray-700">Adresse</th>
                                <th class="border-b-2 p-2 dark:border-gray-700">Étoiles</th>
                                <th class="border-b-2 p-2 dark:border-gray-700">Email</th>
                                <th class="border-b-2 p-2 dark:border-gray-700">Téléphone</th>
                                <th class="border-b-2 p-2 dark:border-gray-700">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($hotels as $hotel)
                                <tr>
                                    <td class="border-b p-2 dark:border-gray-700">{{ $hotel->id }}</td>
                                    <td class="border-b p-2 dark:border-gray-700">{{ $hotel->name }}</td>
                                    <td class="border-b p-2 dark:border-gray-700">{{ $hotel->adress }}</td>
                                    <td class="border-b p-2 dark:border-gray-700">{{ $hotel->stars }}</td>
                                    <td class="border-b p-2 dark:border-gray-700">{{ $hotel->email }}</td>
                                    <td class="border-b p-2 dark:border-gray-700">{{ $hotel->telephone }}</td>
                                    <td class="border-b p-2 dark:border-gray-700 flex flex-row gap-4 justify-center">
                                        <a class="text-yellow-300" href="{{ route('hotels.edit', $hotel->id) }}"><i class="fa-regular fa-pen-to-square"></i></a>
                                        <form action="{{ route('hotels.destroy') }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" value="{{ $hotel->id }}" name="id">
                                            <button type="submit"><i class="fa-solid fa-trash text-red-500"></i></button>
                                        </form>
                                        <a href="{{ route('hotels.show', $hotel->id) }}"><i class="fa-solid fa-bed"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
