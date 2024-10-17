<form
    class="flex flex-col gap-3 h-full border px-6 py-4 update-teacherClass-form update-teacherClass-form-{{ $teacherClass->id }} hidden"
    action="/updateTeacherClass/{{ $teacherClass->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="flex justify-between">
        <h2 class="font-medium capitalize text-lg mb-2">{{ $teacherClass->class->className }}</h2>
        <div
            class="cursor-pointer hover:scale-110 hover:text-danger transition text-lg px-2 close-teacherClass-btn close-teacherClass-btn-{{ $teacherClass->id }}">
            <i class="fa-solid fa-xmark"></i>
        </div>
    </div>

    <div class="flex-grow">
        <x-UIcomponents.input name="amount" :oldValue="$teacherClass->amount" placeholder="Teacher's portion" other="required min=0"
            borderColor="danger" icon="fa-solid fa-user-tie" type="number" />
    </div>

    <x-UIcomponents.button width="w-full">Update</x-UIcomponents.button>
</form>
