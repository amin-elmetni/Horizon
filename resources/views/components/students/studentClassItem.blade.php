<div
    class="flex flex-col h-full w-[300px] border rounded-md px-6 py-4 studentClass-details studentClass-details-{{ $studentClass->id }} flex-grow">
    <span class="font-medium capitalize mb-1">{{ $studentClass->teacherClass->class->className }}</span>

    <span class="text-sm text-gray1 mb-5">{{ $studentClass->teacherClass->class->description }}</span>

    <div class="flex items-center font-medium gap-3 mb-5">
        <a href="/teacherProfile/{{ $studentClass->teacherClass->teacher->name }}/personalInfos"
            title="{{ $studentClass->teacherClass->teacher->name }}" class="group">
            <img src="/storage/{{ $studentClass->teacherClass->teacher->avatar }}" alt="no image found"
                class="w-10 h-10 rounded-full border-2 border-gray2 group-hover:border-primary group-hover:scale-105  transition">
        </a>
        <h2>{{ $studentClass->teacherClass->teacher->name }}</h2>
    </div>

    <div class="grid grid-cols-2 gap-y-2 gap-x-6 mb-5">
        <div class="flex items-center gap-2">
            <i class="fa-solid fa-graduation-cap"></i>
            <span class="capitalize mr-4 text-gray1">{{ $studentClass->teacherClass->class->grade }}</span>
        </div>

        <div class="flex gap-2 items-center text-third font-medium">
            <i class="fa-solid fa-coins"></i>
            <span>{{ $studentClass->teacherClass->class->price }} MAD</span>
        </div>

        <div class="flex gap-2 items-center text-danger font-medium">
            <i class="fa-solid fa-tag"></i>
            <span>{{ $studentClass->discount }} MAD</span>
        </div>

        <div class="flex gap-2 items-center text-primary font-medium">
            <i class="fa-solid fa-money-bill-wave"></i>
            <span>{{ $studentClass->amount }} MAD</span>
        </div>


    </div>

    <span class="text-sm mb-2">Sessions</span>

    @if ($studentClass->teacherClass->sessions->isEmpty())
        <span class="text-sm text-danger mb-3">No sessions created for this class !</span>
    @else
        <div class="flex flex-col gap-1 mb-5">
            @foreach ($studentClass->teacherClass->sessions as $session)
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
            @endforeach
        </div>
    @endif


    <div class="flex gap-2 mt-auto justify-end">
        <x-UIcomponents.button bgColor='bg-repair'
            other="update-studentClass-btn update-studentClass-btn-{{ $studentClass->id }}"
            hover='hover:bg-repairSecondary' width='w-11 aspect-square'>
            <i class="fa-solid fa-wrench group-hover:animate-wiggle"></i>
        </x-UIcomponents.button>

        <form action="/deleteStudentFromClass/{{ $studentClass->id }}" method="POST">
            @csrf
            @method('DELETE')
            <x-UIcomponents.button bgColor='bg-danger' hover='hover:bg-dangerSecondary' width='w-11 aspect-square'>
                <i class="fa-solid fa-trash-can group-hover:animate-wiggle"></i>
            </x-UIcomponents.button>
        </form>
    </div>
</div>
