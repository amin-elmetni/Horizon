<form
    class="flex flex-col gap-3 h-full w-[300px] border-l  px-6 py-4 add-teacher-form add-teacher-form-{{ $class->classID }} hidden"
    action="/addTeacherToClass" method="POST">
    @csrf
    <h2 class="font-medium capitalize text-lg">{{ $class->className }}</h2>

    <input type="hidden" name="classID" value="{{ $class->classID }}">


    <x-UIcomponents.dropList name="teacherID" placeholder="Choose a teacher" icon="fa-solid fa-chalkboard-user"
        ID="addTeacherForm{{ $class->classID }}">
        <x-slot name="options">
            @foreach ($teachers as $teacher)
                <option value="{{ $teacher->teacherID }}">{{ $teacher->name }}</option>
            @endforeach
        </x-slot>
    </x-UIcomponents.dropList>

    <x-UIcomponents.input name="amount" placeholder="Teacher's portion" other="required min=0" borderColor="danger"
        icon="fa-solid fa-user-tie" type="number" />

    <x-UIcomponents.button other="w-full mt-4">Add
        teacher</x-UIcomponents.button>
</form>
