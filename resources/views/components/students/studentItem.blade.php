@php
    $profits = $student->studentClasses->sum('amount');
@endphp

<div
    class="flex items-center px-8 py-4 border-b-2 border-bg1 hover:bg-bg3 cursor-pointer transition student-item student-item-{{ $student->studentID }}">
    <div class="flex items-center gap-3 flex-1">
        <img src="/storage/{{ $student->avatar }}" alt="no image found" class="w-8 h-8 rounded-full">
        <span>{{ $student->name }}</span>
    </div>

    <span class="flex-1 text-base text-center">{{ $student->studentClasses->count() }}
        classes</span>

    <span class="flex-1 text-center">{{ preg_replace('/(\d{2})/', '$1 ', $student->phoneNumber) }}</span>

    <span class="flex-1 font-medium text-base text-center text-third">{{ $profits }}
        MAD</span>
</div>
