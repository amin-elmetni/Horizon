@php
    $incomes = $student->studentClasses->sum('amount');
    $totalDiscount = $student->studentClasses->sum('discount');
@endphp

<div
    class="flex flex-col flex-grow  gap-4 border-l pl-8 student-details student-{{ $student->studentID }}-details hidden">
    <img src="/storage/{{ $student->avatar }}" alt="no image found" class="w-14 h-14 rounded-full self-center">
    <div class="flex flex-col gap-1">
        <span class="self-center font-medium">{{ $student->name }}</span>
        <span class="self-center text-sm">{{ $student->email }}</span>
        <span class="self-center text-sm mb-2">{{ preg_replace('/(\d{2})/', '$1 ', $student->phoneNumber) }}</span>
    </div>

    <div class="flex gap-5">
        <div class="text-xl text-gray2">
            <i class="fa-solid fa-chalkboard"></i>
        </div>
        <div class="flex flex-col">
            <span>{{ $student->studentClasses->count() }} classes</span>
            <span class="text-sm text-gray2 capitalize">Total classes</span>
        </div>
    </div>

    <div class="flex gap-5 text-third">
        <div class="text-xl flex">
            <i class="fa-solid fa-coins"></i>
        </div>
        <div class="flex flex-col">
            <span class="font-medium ">{{ $incomes }} MAD</span>
            <span class="text-sm text-gray2 capitalize">Total classes incomes</span>
        </div>
    </div>

    <div class="flex gap-6 mb-3 text-danger">
        <div class="text-xl">
            <i class="fa-solid fa-tag"></i>
        </div>
        <div class="flex flex-col ">
            <span class="font-medium ">{{ $totalDiscount }} MAD</span>
            <span class="text-sm text-gray2 capitalize">Total discounts</span>
        </div>
    </div>

    <div class="flex gap-3 items-center">
        <a href="/studentProfile/{{ $student->name }}/personalInfos" class="w-full">
            <x-UIcomponents.button other="w-full">Full profile</x-UIcomponents.button>
        </a>

        <form action="/deleteStudent/{{ $student->studentID }}" method="POST">
            @csrf
            @method('DELETE')
            <x-UIcomponents.button bgColor='bg-danger' hover='hover:bg-dangerSecondary' width='w-10 aspect-square'>
                <i class="fa-solid fa-trash-can group-hover:animate-wiggle"></i>
            </x-UIcomponents.button>
        </form>
    </div>
</div>
