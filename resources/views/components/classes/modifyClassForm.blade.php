<form
    class="flex flex-col gap-3 h-full w-[300px] border-l border-primary px-6 py-4 modify-class-form modify-class-form-{{ $class->classID }} hidden"
    action="/modifyClass/{{ $class->classID }}" method="POST">
    @csrf
    @method('PUT')
    <h2 class="font-medium capitalize text-lg">Modify class form</h2>
    <div
        class="p-2 border flex gap-3 items-center rounded-md
                        text-gray-400
                        has-[input:focus]:text-primary
                        has-[input:not(:placeholder-shown)]:text-primary
                        has-[input:focus]:border-primary
                        has-[input:not(:placeholder-shown)]:border-primary
                        transition linear">
        <i class="fa-solid fa-chalkboard"></i>
        <input value="{{ old('className', $class->className) }}" name="className" id="class-name"
            class="w-full focus:outline-0 text-black capitalize"autocomplete="off" type="text" autocomplete="off"
            placeholder="Class name" required />
    </div>

    <textarea name="description" cols="30" rows="3" placeholder="Description"
        class="border focus:border-primary rounded focus:outline-0 px-3 py-2 w-full resize-none [&:not(:placeholder-shown)]:border-primary scrollbar"
        required>{{ old('description', $class->description) }}</textarea>

    <div
        class="p-2 border flex gap-3 items-center rounded transition linear has-[select:hover]:border-primary has-[select:hover]:text-primary {{ old('grade', $class->grade) == null ? 'text-gray-400' : 'border-primary' }}">
        <i class="fa-solid fa-graduation-cap {{ old('grade', $class->grade) == null ? '' : 'text-primary' }}"></i>
        <select class="hover:text-black w-full focus:outline-0 cursor-pointer peer capitalize" name="grade"
            id="grade">
            <option class="option-input" value="{{ old('grade', $class->grade) }}" selected hidden>
                {{ old('grade', $class->grade) ? old('grade', $class->grade) : 'choose a grade' }}</option>
            <option value="grade 1">grade 1</option>
            <option value="grade 2">grade 2</option>
            <option value="grade 3">grade 3</option>
            <option value="grade 4">grade 4</option>
            <option value="grade 5">grade 5</option>
        </select>
    </div>

    <div
        class="p-2 border flex gap-3 items-center rounded-md
                text-gray-400
                has-[input:focus]:text-third
                has-[input:not(:placeholder-shown)]:text-third
                has-[input:focus]:border-third
                has-[input:not(:placeholder-shown)]:border-third
                transition linear mb-1">
        <i class="fa-solid fa-coins"></i>
        <input value="{{ old('price', $class->price) }}" name="price" id="price"
            class="w-full focus:outline-0 text-black capitalize"autocomplete="off" type="number" min="0"
            autocomplete="off" placeholder="Price" required />
    </div>
    <x-button width="w-full">
        <span class="font-meduim">Modify class</span>
    </x-button>
</form>
