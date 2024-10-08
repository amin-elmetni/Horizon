<div class="flex items-center gap-4 p-4 w-64 h-20 bg-bg2 rounded-xl">
    <div class="text-third flex items-center justify-center bg-white w-11 aspect-square rounded-lg text-xl">
        {{ $icon }}
    </div>
    <div class="flex flex-col items-start">
        <span class="text-lg">{{ $value }}</span>
        <span class="text-xs font-normal text-gray2">{{ $label }}</span>
    </div>
</div>
