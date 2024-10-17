<a href="/teacherProfile/{{ $teacherName }}/{{ $section }}"
    class="py-4 px-6 hover:bg-bg3 hover:border-r-[3px] hover:text-black hover:border-r-primary cursor-pointer transition capitalize {{ Request::segment(3) == $section ? 'bg-bg3 border-r-[3px] text-black border-r-primary' : 'text-gray2' }}">
    {{ $slot }}
</a>
