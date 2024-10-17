<form
    class="flex flex-col gap-3 h-full border px-6 py-4 update-studentClass-form update-studentClass-form-{{ $studentClass->id }} hidden"
    action="/updateStudentClass/{{ $studentClass->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="flex justify-between">
        <h2 class="font-medium capitalize text-lg mb-2">{{ $studentClass->teacherClass->class->className }}</h2>
        <div
            class="cursor-pointer hover:scale-110 hover:text-danger transition text-lg px-2 close-studentClass-btn close-studentClass-btn-{{ $studentClass->id }}">
            <i class="fa-solid fa-xmark"></i>
        </div>
    </div>

    <div class="flex-grow">
        <x-UIcomponents.input name="discount" :oldValue="$studentClass->discount" placeholder="Student's discount"
            other="required min=0 max={{ $studentClass->teacherClass->class->price }}" borderColor="danger"
            icon="fa-solid fa-tag" type="number" />
    </div>

    <x-UIcomponents.button width="w-full">Update</x-UIcomponents.button>
</form>
