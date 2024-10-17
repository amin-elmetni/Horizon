@php
    $incomes = $teacher->teacherClasses->sum(function ($teacherClass) {
        return $teacherClass->studentsClass->sum('amount');
    });

    $dues = $teacher->teacherClasses->sum('amount');

    $profits = $incomes - $dues;
@endphp

<div
    class="flex items-center px-8 py-4 border-b-2 border-bg1 hover:bg-bg3 cursor-pointer transition teacher-item teacher-item-{{ $teacher->teacherID }}">
    <div class="flex items-center gap-3 flex-1">
        <img src="/storage/{{ $teacher->avatar }}" alt="no image found" class="w-8 h-8 rounded-full">
        <span>{{ $teacher->name }}</span>
    </div>

    <span class="flex-1 text-center">{{ preg_replace('/(\d{2})/', '$1 ', $teacher->phoneNumber) }}</span>

    <span class="text-third font-medium  text-base flex-1 text-center">{{ $teacher->teacherClasses->sum('amount') }}
        MAD</span>

    <span
        class="flex-1 font-medium text-base text-center {{ $profits > 0 ? 'text-primary' : 'text-danger' }}">{{ $profits }}
        MAD</span>

</div>
