@props([
    'bgColor' => 'bg-primary',
    'hover' => 'hover:bg-secondary',
    'width' => 'w-fit',
    'other' => '',
    'color' => 'text-white',
])

<button
    class="{{ $bgColor }} {{ $hover }} {{ $width }} py-[10px] px-5 {{ $color }} uppercase text-sm tracking-wide flex items-center justify-center gap-3 rounded hover:scale-105 transition group {{ $other }}">
    {{ $slot }}
</button>
