<x-layout>
    @error('className')
        <x-UIcomponents.errorItem :message="$message" />
    @enderror

    <h2 class="font-semibold mb-6">My Classes</h2>
    <div class="flex gap-5 mb-6">
        <x-UIcomponents.card1>
            <x-slot name="icon"><i class="fa-solid fa-server"></i></i></x-slot>
            <x-slot name="value">{{ $totalClasses }} Classes</x-slot>
            <x-slot name="label">Total classes created</x-slot>
        </x-UIcomponents.card1>
        <x-UIcomponents.card2>
            <x-slot name="icon"><i class="fa-solid fa-graduation-cap"></i></x-slot>
            <x-slot name="value">{{ $totalGrades }} grades</x-slot>
            <x-slot name="label">Total grades</x-slot>
        </x-UIcomponents.card2>
        <x-UIcomponents.card3 other="create-class-btn">
            <x-slot name="icon"><i class="fa-solid fa-chalkboard"></i></x-slot>
            <x-slot name="value">Create class</x-slot>
            <x-slot name="label">Add a new class here</x-slot>
        </x-UIcomponents.card3>
    </div>

    <div class="flex gap-8">
        <div class="flex flex-col gap-2 ">
            @foreach ($classes as $index => $class)
                @php
                    $itemIndex = ($classes->currentPage() - 1) * $classes->perPage() + $index;
                @endphp
                <x-classes.classItem :index="$itemIndex" :class="$class" />
            @endforeach
            <div class="w-[570px]">
                {{ $classes->links() }}
            </div>
        </div>
        @foreach ($classes as $class)
            <x-classes.classDetailsItem :class="$class" />
        @endforeach
        @foreach ($classes as $class)
            <x-classes.modifyClassForm :class="$class" />
            <x-classes.addSessionForm :class="$class" />
            <x-classes.addTeacherForm :class="$class" :teachers="$teachers" />
        @endforeach
        <x-classes.createClassForm />
    </div>
    <x-slot name="javascript"> @vite('resources/js/classes.js')</x-slot>
</x-layout>
