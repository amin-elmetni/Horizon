<form
    class="flex flex-col gap-3 h-full border  px-6 py-4 add-session-form add-session-form-{{ $teacherClass->id }} hidden"
    action="/addSession" method="POST">
    @csrf
    <div class="flex justify-between">
        <h2 class="font-medium capitalize text-lg">{{ $teacherClass->class->className }}</h2>
        <div
            class="cursor-pointer hover:scale-110 hover:text-danger transition text-lg px-2 close-session-btn close-session-btn-{{ $teacherClass->id }}">
            <i class="fa-solid fa-xmark"></i>
        </div>
    </div>

    <input type="hidden" name="classID" value="{{ $teacherClass->class->classID }}">

    <input type="hidden" name="teacherID" value="{{ $teacher->teacherID }}">

    <x-UIcomponents.input name="classroom" placeholder="Classroom" icon="fa-solid fa-arrow-up-9-1"
        other="required"></x-UIcomponents.input>

    <x-UIcomponents.dropList name="day" icon="fa-solid fa-calendar-days" ID="addSessionForm{{ $teacherClass->id }}">
        <x-slot name="options">
            <option value="Monday">Monday</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thursday">Thursday</option>
            <option value="Friday">Friday</option>
            <option value="Saturday">Saturday</option>
            <option value="Sunday">Sunday</option>
        </x-slot>
    </x-UIcomponents.dropList>

    <div class="flex items-center justify-between mt-2">
        <h2 class="text-gray1">From</h2>
        <x-UIcomponents.input name="startTime" type="time" other="required" otherClass="w-[75%] border-gray1"
            borderColor="" />
    </div>

    <div class="flex items-center justify-between">
        <h2 class="text-gray1">To</h2>
        <x-UIcomponents.input name="endTime" type="time" other="required" otherClass="w-[75%] border-gray1"
            borderColor="" />
    </div>

    <x-UIcomponents.button other="w-full mt-4">add
        session</x-UIcomponents.button>
</form>
