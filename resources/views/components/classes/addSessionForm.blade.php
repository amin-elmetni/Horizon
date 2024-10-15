<form
    class="flex flex-col gap-3 h-full w-[300px] border-l  px-6 py-4 add-session-form add-session-form-{{ $class->classID }} hidden"
    action="/addSession" method="POST">
    @csrf
    <h2 class="font-medium capitalize text-lg">{{ $class->className }}</h2>

    <input type="hidden" name="classID" value="{{ $class->classID }}">

    <x-UIcomponents.dropList name="teacherID" placeholder="Choose a teacher" icon="fa-solid fa-chalkboard-user"
        ID="addSessionForm{{ $class->classID }}">
        <x-slot name="options">
            @foreach ($class->teachersClass as $teacherClass)
                <option value="{{ $teacherClass->teacher->teacherID }}">{{ $teacherClass->teacher->name }}</option>
            @endforeach
        </x-slot>
    </x-UIcomponents.dropList>

    <x-UIcomponents.input name="classroom" placeholder="Classroom" icon="fa-solid fa-arrow-up-9-1"
        other="required"></x-UIcomponents.input>

    <x-UIcomponents.dropList name="day" icon="fa-solid fa-calendar-days" ID="addSessionForm{{ $class->classID }}">
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
