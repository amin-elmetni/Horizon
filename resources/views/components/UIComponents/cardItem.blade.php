<div class="flex items-center gap-4 p-4 w-64 h-20 {{ $bgColor }} {{ $other ?? '' }} rounded-xl">
    <div class=" {{ $iconColor }} flex items-center justify-center bg-white w-11 aspect-square rounded-lg text-xl">
        {{ $icon }}
    </div>
    <div class="flex flex-col items-start">
        <span class="text-lg font-[450] capitalize {{ $valueColor }}">{{ $value }}</span>
        <span class="text-xs {{ $labelColor }}">{{ $label }}</span>
    </div>
</div>
