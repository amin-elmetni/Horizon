<x-layout>
    <h2 class="font-semibold mt-11">My Classes</h2>
    <div class="flex mt-8 gap-5">
        <x-card1>
            <x-slot name="icon"><i class="fa-solid fa-chalkboard"></i></x-slot>
            <x-slot name="value">{{ $totalClasses }} Classes</x-slot>
            <x-slot name="label">Total Classes</x-slot>
        </x-card1>
        <x-card2>
            <x-slot name="icon"><i class="fa-solid fa-chalkboard"></i></x-slot>
            <x-slot name="value">{{ $totalGrades }} grades</x-slot>
            <x-slot name="label">Total grades</x-slot>
        </x-card2>
        <x-card3>
            <x-slot name="icon"><i class="fa-solid fa-chalkboard group-hover:scale-105 transition"></i></x-slot>
            <x-slot name="value">Create Class</x-slot>
            <x-slot name="label">Add a new class here</x-slot>
        </x-card3>
    </div>
</x-layout>
