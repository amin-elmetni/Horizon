<x-layout>
    <h2 class="font-semibold mb-6">My Classes</h2>
    <div class="flex gap-5 mb-6">
        <x-card1>
            <x-slot name="icon"><i class="fa-solid fa-server"></i></i></x-slot>
            <x-slot name="value">{{ $totalClasses }} Classes</x-slot>
            <x-slot name="label">Total Classes Created</x-slot>
        </x-card1>
        <x-card2>
            <x-slot name="icon"><i class="fa-solid fa-graduation-cap"></i></x-slot>
            <x-slot name="value">{{ $totalGrades }} grades</x-slot>
            <x-slot name="label">Total grades</x-slot>
        </x-card2>
        <x-card3>
            <x-slot name="icon"><i class="fa-solid fa-chalkboard"></i></x-slot>
            <x-slot name="value">Create Class</x-slot>
            <x-slot name="label">Add a new class here</x-slot>
        </x-card3>
    </div>
    <div class="flex gap-8">
        <div class="flex flex-col gap-2 ">
            @foreach ($classes as $index => $class)
                @php
                    // Calculate the correct index based on current page and items per page
                    $itemIndex = ($classes->currentPage() - 1) * $classes->perPage() + $index;
                @endphp
                <x-classes.classItem :index="$itemIndex" :class="$class"></x-classes.classItem>
            @endforeach
            <div class="w-[570px]">
                {{ $classes->links() }}
            </div>
        </div>
        @foreach ($classes as $class)
            <x-classes.classDetailsItem :class="$class"></x-classes.classDetailsItem>
        @endforeach
    </div>
</x-layout>
