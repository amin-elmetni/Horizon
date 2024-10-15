<div
    class="flex flex-col flex-grow  gap-4 border-l pl-8 teacher-details teacher-{{ $teacher->teacherID }}-details hidden">
    <img src="/storage/default_avatar.jpg" alt="no image found" class="w-14 h-14 rounded-full self-center">
    <div class="flex flex-col gap-1">
        <span class="self-center font-medium">{{ $teacher->name }}</span>
        <span class="self-center text-sm">{{ $teacher->email }}</span>
        <span class="self-center text-sm mb-2">{{ preg_replace('/(\d{2})/', '$1 ', $teacher->phoneNumber) }}</span>
    </div>

    <div class="flex gap-6">
        <div class="text-xl text-gray2">
            <i class="fa-solid fa-chalkboard"></i>
        </div>
        <div class="flex flex-col">
            <span>{{ $teacher->teacherClasses->count() }} classes</span>
            <span class="text-sm text-gray2 capitalize">Total classes</span>
        </div>
    </div>

    <div class="flex gap-5">
        <div class="text-xl text-gray2">
            <i class="fa-solid fa-graduation-cap"></i>
        </div>
        <div class="flex flex-col">
            <span>{{ $teacher->students->count() }} students</span>
            <span class="text-sm text-gray2 capitalize">Total students</span>
        </div>
    </div>

    <div class="flex gap-6 mb-3">
        <div class="text-xl text-third flex">
            <i class="fa-solid fa-coins"></i>
        </div>
        <div class="flex flex-col">
            <span class="font-medium text-third">{{ $teacher->teacherClasses->sum('amount') }} MAD</span>
            <span class="text-sm text-gray2 capitalize">Total classes profits</span>
        </div>
    </div>

    <div class="flex gap-3 items-center">
        <a href="/teacherProfile/{{ $teacher->name }}/personalInfos" class="w-full">
            <x-UIcomponents.button other="w-full">Full profile</x-UIcomponents.button>
        </a>

        <form action="/deleteTeacher/{{ $teacher->teacherID }}" method="POST">
            @csrf
            @method('DELETE')
            <x-UIcomponents.button bgColor='bg-danger' hover='hover:bg-dangerSecondary' width='w-10 aspect-square'>
                <i class="fa-solid fa-trash-can group-hover:animate-wiggle"></i>
            </x-UIcomponents.button>
        </form>
    </div>
</div>
