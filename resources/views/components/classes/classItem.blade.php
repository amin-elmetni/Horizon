@php
    // Initialize an empty collection to keep track of unique days
    $allDays = $class->sessions->pluck('day')->unique();

    // Convert the days to their first 3 letters (Mon, Tue, etc.)
    $formattedDays = $allDays->map(function ($day) {
        return substr($day, 0, 3);
    });
@endphp



<div class="flex group class-item class-item-{{ $class->classID }}">
    <div
        class="target-1 flex border-l-2 border-t-2 border-b-2 border-gray-100 h-[60px] w-[550px] px-6 py-[10px] rounded-l-md  divide-x items-center capitalize group-hover:bg-bg1 group-hover:text-black cursor-pointer transition">
        <div class="flex items-center gap-6 pr-2 w-[170px]">
            <span class="text-2xl font-semibold">
                {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
            <div class="flex flex-col overflow-hidden">
                <span class="font-medium text-sm truncate">{{ $class->className }}</span>
                <span class="text-xs text-gray1 group-hover:text-black transition truncate">{{ $class->grade }}</span>
            </div>
        </div>
        <div class="flex flex-col pl-8 pr-4 w-[160px] overflow-hidden">
            <span class="font-medium text-sm truncate">{{ $class->teachersClass->count() }} Teachers</span>
            <div class="flex gap-2 text-gray1 group-hover:text-black transition text-xs">
                <i class="fa-solid fa-calendar-days"></i>
                <span class="truncate">
                    {{-- * INFO: Display the days with '-' between them --}}
                    {{ implode(' - ', $formattedDays->toArray()) }}
                </span>
            </div>
        </div>

        <div class="flex pl-8 items-center gap-3 text-md text-third w-[170px] overflow-hidden  transition">
            <i class="fa-solid fa-coins"></i>
            <span class="font-semibold truncate">{{ $class->price }} MAD</span>
        </div>
    </div>
    <div class="w-[43px] h-[100%] overflow-hidden inline-block">
        <div
            class="target-2 h-[100%] w-[43px] bg-transparent group-hover:bg-bg1 transition border-2 border-gray-100 -rotate-45 transform origin-bottom-left">
        </div>
    </div>
</div>
