@props(['bgColor' => 'bg-primary', 'hover' => 'hover:bg-secondary', 'width' => 'w-fit', 'other' => ''])

<button
    class="{{ $bgColor }} {{ $hover }} {{ $width }} py-[10px] px-5 text-white uppercase text-sm tracking-wide flex items-center justify-center gap-3 rounded hover:scale-105 transition group {{ $other }}">
    {{ $slot }}
</button>
