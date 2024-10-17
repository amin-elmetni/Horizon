<x-layout>
    @error('name')
        <x-UIcomponents.errorItem :message="$message" />
    @enderror

    <h2 class="font-semibold mb-6">Students</h2>
    <div class="flex gap-5 mb-6">
        <x-UIcomponents.card1>
            <x-slot name="icon"><i class="fa-solid fa-users"></i></i></x-slot>
            <x-slot name="value">{{ $totalStudents }} Students</x-slot>
            <x-slot name="label">Total students enroled</x-slot>
        </x-UIcomponents.card1>
        {{-- <x-UIcomponents.card2>
          <x-slot name="icon"><i class="fa-solid fa-graduation-cap"></i></x-slot>
          <x-slot name="value">{{ $totalGrades }} grades</x-slot>
          <x-slot name="label">Total grades</x-slot>
      </x-UIcomponents.card2> --}}
        <x-UIcomponents.card3 other="add-student-btn">
            <x-slot name="icon"><i class="fa-solid fa-chalkboard-user"></i></i></x-slot>
            <x-slot name="value">Add Student</x-slot>
            <x-slot name="label">Add a new student here</x-slot>
        </x-UIcomponents.card3>
    </div>
    <div class="flex gap-12">
        <div class="flex flex-col w-[68%] text-sm">
            <!-- Header (first flex) -->
            <div class="flex items-center justify-center text-gray1 bg-bg1 h-10 mb-2 px-8">
                <span class="capitalize flex-1 text-center">Name</span>
                <span class="capitalize flex-1 text-center">Classes</span>
                <span class="capitalize flex-1 text-center">Contact</span>
                <span class="capitalize flex-1 text-center">Profits</span>
            </div>

            <!-- Content (second flex) -->
            @foreach ($students as $student)
                <x-students.studentItem :student="$student" />
            @endforeach
            <div class="w-full mt-3">
                {{ $students->links() }}
            </div>
        </div>
        @foreach ($students as $student)
            <x-students.studentDetailsItem :student="$student" />
        @endforeach
        <x-students.createStudentForm />
    </div>
    <x-slot name="javascript"> @vite('resources/js/students.js')</x-slot>
</x-layout>
