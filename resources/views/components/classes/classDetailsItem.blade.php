<div
    class="flex flex-col h-full w-[300px] border-l border-primary px-6 py-4 class-details class-{{ $class->classID }}-details hidden">
    <span class="font-medium capitalize mb-1">{{ $class->className }}</span>
    <span class="text-sm text-gray1 mb-3">{{ $class->description }}</span>
    <span class="text-sm mb-2">Teachers</span>
    @if ($class->teachers->isEmpty())
        <span class="text-sm text-gray1 mb-3">No teachers submitted to this class</span>
    @else
        <div class="grid grid-cols-5 gap-[5px] w-fit mb-4">
            @foreach ($class->teachers as $teacher)
                <a href="#" class="group">
                    <img src="/storage/{{ $teacher->avatar }}" alt="no image found"
                        class="w-10 h-10 rounded-full border-2 border-gray2 group-hover:border-primary group-hover:scale-105  transition">
                </a>
            @endforeach
        </div>
    @endif
    <div class="flex flex-col w-[70%] mb-3 ">
        @foreach ($class->sessions as $session)
            <div class="flex items-center justify-between">
                <div class="flex gap-2 items-center">
                    <i class="fa-regular fa-clock"></i>
                    <span class="capitalize font-medium">{{ substr($session->day, 0, 3) }} : </span>
                </div>
                <span class="text-gray1">
                    {{ \Carbon\Carbon::createFromFormat('H:i:s', $session->startTime)->format('H:i') }} -
                    {{ \Carbon\Carbon::createFromFormat('H:i:s', $session->endTime)->format('H:i') }}</span>
            </div>
        @endforeach
    </div>
    <div class="flex gap-2 items-center mb-3">
        <i class="fa-solid fa-graduation-cap"></i>
        <span class="capitalize mr-4 text-gray1">{{ $class->grade }}</span>
        <i class="fa-solid fa-user-graduate"></i>
        <span class="text-gray1">{{ $class->students->count() }} Students</span>
    </div>
    <div class="flex gap-2 items-center text-xl text-third font-medium mb-6">
        <i class="fa-solid fa-coins"></i>
        <span>{{ $class->price }} MAD</span>
    </div>
    <div class="flex gap-3">
        <x-button width='w-[100%]' other="modify-class-btn modify-class-btn-{{ $class->classID }}">
            <span class="font-medium">Modify Class</span>
        </x-button>
        <form action="/deleteClass/{{ $class->classID }}" method="POST">
            @csrf
            @method('DELETE')
            <x-button bgColor='bg-fourth' hover='hover:bg-fourthSecondary' width='w-11 aspect-square'>
                <i class="fa-solid fa-trash-can group-hover:animate-wiggle"></i>
            </x-button>
        </form>
    </div>
</div>
