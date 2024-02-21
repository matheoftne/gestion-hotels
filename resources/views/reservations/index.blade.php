<div>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
</div>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Réservations') }}
        </h2>
    </x-slot>

    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex gap-4 flex-col">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl font-semibold mb-6">Liste des réservations</h1>
                    <table class="w-full">
                        <thead>
                            <tr>
                                <th class="border-b-2 p-2 dark:border-gray-700 dark:text-gray-100">ID</th>
                                <th class="border-b-2 p-2 dark:border-gray-700 dark:text-gray-100">Hôtel</th>
                                <th class="border-b-2 p-2 dark:border-gray-700 dark:text-gray-100">Chambre</th>
                                <th class="border-b-2 p-2 dark:border-gray-700 dark:text-gray-100">Nom</th>
                                <th class="border-b-2 p-2 dark:border-gray-700 dark:text-gray-100">Email</th>
                                <th class="border-b-2 p-2 dark:border-gray-700 dark:text-gray-100">Téléphone</th>
                                <th class="border-b-2 p-2 dark:border-gray-700 dark:text-gray-100">Date d'arrivée</th>
                                <th class="border-b-2 p-2 dark:border-gray-700 dark:text-gray-100">Date de sortie</th>
                                <th class="border-b-2 p-2 dark:border-gray-700 dark:text-gray-100">Nombre de personnes</th>
                                <th class="border-b-2 p-2 dark:border-gray-700 dark:text-gray-100">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($reservations as $reservation)
                                <tr>
                                    <td class="border-b p-2 dark:border-gray-700 dark:text-gray-100">{{ $reservation->id }}</td>
                                    <td class="border-b p-2 dark:border-gray-700 dark:text-gray-100">{{ $reservation->room->hotel->name }}</td>
                                    <td class="border-b p-2 dark:border-gray-700 dark:text-gray-100">{{ $reservation->room->roomNumber }}</td>
                                    <td class="border-b p-2 dark:border-gray-700 dark:text-gray-100">{{ $reservation->name }}</td>
                                    <td class="border-b p-2 dark:border-gray-700 dark:text-gray-100">{{ $reservation->email }}</td>
                                    <td class="border-b p-2 dark:border-gray-700 dark:text-gray-100">{{ $reservation->phone }}</td>
                                    <td class="border-b p-2 dark:border-gray-700 dark:text-gray-100">{{ $reservation->start_date }}</td>
                                    <td class="border-b p-2 dark:border-gray-700 dark:text-gray-100">{{ $reservation->end_date }}</td>
                                    <td class="border-b p-2 dark:border-gray-700 dark:text-gray-100">{{ $reservation->nb_person }}</td>   
                                    <td class="border-b p-2 dark:border-gray-700 flex flex-row gap-4 justify-center">
                                        <a class="text-yellow-300" href="{{ route('reservations.edit', $reservation->id) }}"><i class="fa-regular fa-pen-to-square"></i></a>
                                        <form action="{{ route('reservations.destroy') }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" value="{{ $reservation->id }}" name="id">
                                            <button type="submit"><i class="fa-solid fa-trash text-red-500"></i></button>
                                        </form>
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
