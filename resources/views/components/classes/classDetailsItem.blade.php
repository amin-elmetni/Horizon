<div
    class="flex flex-col h-full w-[300px] border-l  px-6 py-4 class-details class-{{ $class->classID }}-details hidden">
    <span class="font-medium capitalize mb-1">{{ $class->className }}</span>

    <span class="text-sm text-gray1 mb-3">{{ $class->description }}</span>

    <span class="text-sm mb-2">Teachers</span>

    @if ($class->teachersClass->isEmpty())
        <span class="text-sm text-danger mb-3">No teachers hired for this class !</span>
    @else
        <div class="grid grid-cols-5 gap-[10px] w-fit mb-5">
            @foreach ($class->teachersClass as $teacherClass)
                <div class="relative">
                    <a href="#" title="{{ $teacherClass->teacher->name }}" class="group">
                        <img src="/storage/{{ $teacherClass->teacher->avatar }}" alt="no image found"
                            class="w-10 h-10 rounded-full border-2 border-gray2 group-hover:border-primary group-hover:scale-105  transition">
                    </a>
                    <form action="/deleteTeacherFromClass/{{ $teacherClass->id }}" method="POST"
                        class="absolute top-[-3px] right-[-6px] text-danger cursor-pointer hover:scale-110 hover:animate-pulse transition"
                        title="delete teacher">
                        @csrf
                        @method('DELETE')
                        <button>
                            <i class="fa-solid fa-circle-minus"></i>
                        </button>
                    </form>
                </div>
            @endforeach
        </div>
    @endif

    @if ($class->teachersClass->isEmpty() && $class->teachersClass->isNotEmpty())
        <span class="text-sm text-danger mb-3">No sessions created for this class !</span>
    @else
        <div class="flex flex-col gap-1 mb-3 ">
            @foreach ($class->sessions as $session)
                <div class="flex items-center gap-2">
                    <form action="/deleteSession/{{ $session->sessionID }}" method="POST"
                        class="text-danger cursor-pointer hover:scale-110 hover:animate-pulse transition flex items-center text-xs"
                        title="delete session">
                        @csrf
                        @method('DELETE')
                        <button>
                            <i class="fa-solid fa-circle-minus"></i>
                        </button>
                    </form>
                    <div class="flex items-center w-[65%] justify-between">
                        <div class="flex gap-2 items-center">
                            <i class="fa-regular fa-clock"></i>
                            <span class="capitalize font-medium">{{ substr($session->day, 0, 3) }} : </span>
                        </div>
                        <span class="text-gray1 text-sm">
                            {{ \Carbon\Carbon::createFromFormat('H:i:s', $session->startTime)->format('H:i') }} -
                            {{ \Carbon\Carbon::createFromFormat('H:i:s', $session->endTime)->format('H:i') }}</span>
                    </div>
                    <span
                        class="text-xs">({{ explode(' ', $session->teacherClass->teacher->name)[count(explode(' ', $session->teacherClass->teacher->name)) - 1] }})</span>
                </div>
            @endforeach
        </div>
    @endif

    <div class="flex gap-2 items-center mb-2">
        <i class="fa-solid fa-graduation-cap"></i>
        <span class="capitalize mr-4 text-gray1">{{ $class->grade }}</span>
        <i class="fa-solid fa-user-graduate"></i>

        <span class="text-gray1">{{ $class->studentsClass->count() }} Students</span>

    </div>

    <div class="flex gap-2 items-center text-xl text-third font-medium mb-5">
        <i class="fa-solid fa-coins"></i>
        <span>{{ $class->price }} MAD</span>
    </div>

    <x-UIcomponents.button width='w-[100%]'
        other="add-session-btn add-session-btn-{{ $class->classID }} {{ $class->teachersClass->isEmpty() ? 'hidden' : '' }} mb-2">
        <span class="font-medium">Add session</span>
    </x-UIcomponents.button>

    <div class="flex gap-2">
        <x-UIcomponents.button width='w-[100%]' other="add-teacher-btn add-teacher-btn-{{ $class->classID }}">
            <span class="font-medium">Add teacher</span>
        </x-UIcomponents.button>

        <x-UIcomponents.button bgColor='bg-repair' hover='hover:bg-repairSecondary' width='w-11 aspect-square'
            other="modify-class-btn modify-class-btn-{{ $class->classID }}">
            <i class="fa-solid fa-wrench group-hover:animate-wiggle"></i>
        </x-UIcomponents.button>

        <form action="/deleteClass/{{ $class->classID }}" method="POST">
            @csrf
            @method('DELETE')
            <x-UIcomponents.button bgColor='bg-danger' hover='hover:bg-dangerSecondary' width='w-11 aspect-square'>
                <i class="fa-solid fa-trash-can group-hover:animate-wiggle"></i>
            </x-UIcomponents.button>
        </form>
    </div>
</div>
