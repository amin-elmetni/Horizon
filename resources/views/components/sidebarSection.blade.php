<a href="/{{ $section }}"
    class="flex items-center gap-4 py-2 px-6 group transition hover:scale-125 {{ Request::segment(1) == $section ? 'scale-125' : '' }}">
    <i
        class="{{ $icon }} text-2xl w-9 text-center group-hover:text-primary transition {{ Request::segment(1) == $section ? 'text-primary' : 'text-gray2' }}"></i>
    <h2
        class="group-hover:text-black transition capitalize font-medium {{ Request::segment(1) == $section ? 'text-black' : 'text-gray3' }}">
        {{ $section }}</h2>
</a>
