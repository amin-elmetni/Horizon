<x-layout>
    @error('name')
        <x-UIcomponents.errorItem :message="$message" />
    @enderror

    <h2 class="font-semibold mb-6">Teachers</h2>
    <div class="flex gap-5 mb-6">
        <x-UIcomponents.card1>
            <x-slot name="icon"><i class="fa-solid fa-users"></i></i></x-slot>
            <x-slot name="value">{{ $totalTeachers }} Teachers</x-slot>
            <x-slot name="label">Total teachers hired</x-slot>
        </x-UIcomponents.card1>
        {{-- <x-UIcomponents.card2>
            <x-slot name="icon"><i class="fa-solid fa-graduation-cap"></i></x-slot>
            <x-slot name="value">{{ $totalGrades }} grades</x-slot>
            <x-slot name="label">Total grades</x-slot>
        </x-UIcomponents.card2> --}}
        <x-UIcomponents.card3 other="add-teacher-btn">
            <x-slot name="icon"><i class="fa-solid fa-chalkboard-user"></i></i></x-slot>
            <x-slot name="value">Add Teacher</x-slot>
            <x-slot name="label">Add a new teacher here</x-slot>
        </x-UIcomponents.card3>
    </div>
    <div class="flex gap-12">
        <div class="flex flex-col w-[68%] text-sm">
            <!-- Header (first flex) -->
            <div class="flex items-center justify-center text-gray1 bg-bg1 h-10 mb-2 px-8">
                <span class="capitalize flex-1 text-center">Name</span>
                <span class="capitalize flex-1 text-center">Classes</span>
                <span class="capitalize flex-1 text-center">Contact</span>
                <span class="capitalize flex-1 text-center">Monthly wage</span>
            </div>

            <!-- Content (second flex) -->
            @foreach ($teachers as $teacher)
                <x-teachers.teacherItem :teacher="$teacher" />
            @endforeach
            <div class="w-full mt-3">
                {{ $teachers->links() }}
            </div>
        </div>
        @foreach ($teachers as $teacher)
            <x-teachers.teacherDetailsItem :teacher="$teacher" />
        @endforeach
        <x-teachers.createTeacherForm />
    </div>
    <x-slot name="javascript"> @vite('resources/js/teachers.js')</x-slot>
</x-layout>
