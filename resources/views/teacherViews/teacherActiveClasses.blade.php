@php
    $incomes = $teacherClasses->sum(function ($teacherClass) {
        return $teacherClass->studentsClass->sum('amount');
    });

    $dues = $teacherClasses->sum('amount');

    $profits = $incomes - $dues;
@endphp

<x-layout>
    <h2 class="text-gray1">Back to <a href="/teachers" class="text-black underline hover:text-primary">Teachers</a></h2>

    <div class="flex gap-8 mt-10">
        <x-teachers.teacherSections :teacherName="$teacher->name" :avatar="$teacher->avatar" />

        <div class="flex flex-col gap-6">
            <div class="flex justify-around capitalize border-2 p-4 w-full text-lg rounded-md border-primary mb-2">
                <span>Incomes : <span class="text-third font-medium">{{ $incomes }} MAD</span></span>

                <span>Dues : <span class="text-danger font-medium">{{ $dues }} MAD</span>
                </span>

                <span>Profits : <span
                        class="{{ $profits > 0 ? 'text-primary' : 'text-danger' }} font-medium">{{ $profits }}
                        MAD</span>
                </span>
            </div>

            <div class="grid grid-cols-2 gap-6">
                @foreach ($teacherClasses as $teacherClass)
                    <x-teachers.teacherClassItem :teacherClass="$teacherClass" />
                    <x-teachers.addSessionForm :teacher="$teacher" :teacherClass="$teacherClass" />
                    <x-teachers.updateTeacherClassForm :teacherClass="$teacherClass" />
                @endforeach
            </div>
        </div>
    </div>
    <div class="w-[690px] self-end mt-3">
        {{ $teacherClasses->links() }}
    </div>
    <x-slot name="javascript"> @vite('resources/js/teacherActiveClasses.js')</x-slot>
</x-layout>
