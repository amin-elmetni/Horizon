{{-- <button class="flex items-center gap-4 p-4 w-64 h-20 bg-primary rounded-xl hover:bg-secondary transition group">
    <div class="text-primary flex items-center justify-center bg-white w-11 aspect-square rounded-lg text-xl">
        {{ $icon }}
    </div>
    <div class="flex flex-col items-start">
        <span class="text-lg text-white">{{ $value }}</span>
        <span class="text-xs font-normal text-white">{{ $label }}</span>
    </div>
</button> --}}
<a href="/overview" class="hover:scale-105 transition">
    <x-cardItem :icon="$icon" :value="$value" :label="$label" bgColor="bg-primary" iconColor="text-primary"
        valueColor="text-white" labelColor="text-white" other="hover:bg-secondary transition" />
</a>
