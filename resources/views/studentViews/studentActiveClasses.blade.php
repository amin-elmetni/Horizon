@php
    $incomes = $studentClasses->sum('amount');

    $discounts = $studentClasses->sum('discount');

    $profits = $incomes - $discounts;
@endphp

<x-layout>
    <h2 class="text-gray1">Back to <a href="/students" class="text-black underline hover:text-primary">Students</a></h2>

    <div class="flex gap-8 mt-10">
        <x-students.studentSections :studentName="$student->name" :avatar="$student->avatar" />

        <div class="flex flex-col gap-6">
            <div class="flex justify-around capitalize border-2 p-4 w-full text-lg rounded-md border-primary mb-2">
                <span>Incomes : <span class="text-third font-medium">{{ $incomes }} MAD</span></span>

                <span>Discounts : <span class="text-danger font-medium">{{ $discounts }} MAD</span>
                </span>

                <span>Profits : <span
                        class="{{ $profits > 0 ? 'text-primary' : 'text-danger' }} font-medium">{{ $profits }}
                        MAD</span>
                </span>
            </div>

            <div class="grid grid-cols-2 gap-6">
                @foreach ($studentClasses as $studentClass)
                    <x-students.studentClassItem :studentClass="$studentClass" />
                    <x-students.updateStudentClassForm :studentClass="$studentClass" />
                @endforeach
            </div>
        </div>
    </div>
    <div class="w-[690px] self-end mt-3">
        {{ $studentClasses->links() }}
    </div>
    <x-slot name="javascript"> @vite('resources/js/studentActiveClasses.js')</x-slot>
</x-layout>
