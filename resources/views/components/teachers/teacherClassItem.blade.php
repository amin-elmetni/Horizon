<div
    class="flex flex-col h-full w-[300px] border rounded-md px-6 py-4 teacherClass-details teacherClass-details-{{ $teacherClass->id }} flex-grow">
    <span class="font-medium capitalize mb-1">{{ $teacherClass->class->className }}</span>

    <span class="text-sm text-gray1 mb-5">{{ $teacherClass->class->description }}</span>

    <div class="grid grid-cols-2 gap-y-2 gap-x-6 mb-5">
        <div class="flex items-center gap-2">
            <i class="fa-solid fa-graduation-cap"></i>
            <span class="capitalize mr-4 text-gray1">{{ $teacherClass->class->grade }}</span>
        </div>

        <div class="flex items-center gap-2">
            <i class="fa-solid fa-user-graduate"></i>
            <span class="text-gray1">{{ $teacherClass->studentsClass->count() }} Students</span>
        </div>

        <div class="flex gap-2 items-center text-third font-medium">
            <i class="fa-solid fa-coins"></i>
            <span>{{ $teacherClass->class->price }} MAD</span>
        </div>

        <div class="flex gap-2 items-center text-danger font-medium">
            <i class="fa-solid fa-user-tie"></i>
            <span>{{ $teacherClass->amount }} MAD</span>
        </div>
    </div>

    <span class="text-sm mb-2">Sessions</span>

    @if ($teacherClass->sessions->isEmpty())
        <span class="text-sm text-danger mb-3">No sessions created for this class !</span>
    @else
        <div class="flex flex-col gap-1 mb-5">
            @foreach ($teacherClass->sessions as $session)
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
                    <div class="flex items-center w-[72%] justify-between">
                        <div class="flex gap-2 items-center">
                            <i class="fa-regular fa-clock"></i>
                            <span class="capitalize font-medium">{{ substr($session->day, 0, 3) }} :
                            </span>
                        </div>
                        <span class="text-gray1">
                            {{ \Carbon\Carbon::createFromFormat('H:i:s', $session->startTime)->format('H:i') }} -
                            {{ \Carbon\Carbon::createFromFormat('H:i:s', $session->endTime)->format('H:i') }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    @endif


    <div class="flex gap-2 mt-auto">
        <x-UIcomponents.button width='w-full'
            other="add-session-btn add-session-btn-{{ $teacherClass->id }} {{ $teacherClass->sessions->isEmpty() ? 'hidden' : '' }}">
            <span class="font-medium">Add session</span>
        </x-UIcomponents.button>

        <x-UIcomponents.button bgColor='bg-repair'
            other="update-teacherClass-btn update-teacherClass-btn-{{ $teacherClass->id }}"
            hover='hover:bg-repairSecondary' width='w-11 aspect-square'>
            <i class="fa-solid fa-wrench group-hover:animate-wiggle"></i>
        </x-UIcomponents.button>

        <form action="/deleteTeacherFromClass/{{ $teacherClass->id }}" method="POST">
            @csrf
            @method('DELETE')
            <x-UIcomponents.button bgColor='bg-danger' hover='hover:bg-dangerSecondary' width='w-11 aspect-square'>
                <i class="fa-solid fa-trash-can group-hover:animate-wiggle"></i>
            </x-UIcomponents.button>
        </form>
    </div>
</div>
