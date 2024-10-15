<form class="flex flex-col gap-3 h-full w-[300px] border-l  px-6 py-4 create-class-form hidden"
    action="/createClass" method="POST">
    @csrf
    <h2 class="font-medium capitalize text-lg">Create new class</h2>

    <x-UIcomponents.input name="className" placeholder="Class name" other="required" icon="fa-solid fa-chalkboard" />
    <x-UIcomponents.textarea name="description" placeholder="Description" other="required" />

    <x-UIcomponents.dropList name="grade" icon="fa-solid fa-graduation-cap" ID="createClassForm">
        <x-slot name="options">
            <option value="grade 1">grade 1</option>
            <option value="grade 2">grade 2</option>
            <option value="grade 3">grade 3</option>
            <option value="grade 4">grade 4</option>
            <option value="grade 5">grade 5</option>
        </x-slot>
    </x-UIcomponents.dropList>

    <x-UIcomponents.input name="price" placeholder="Price" other="required min=0" borderColor="third"
        icon="fa-solid fa-coins" type="number" />

    <x-UIcomponents.button width="w-full">
        <span class="font-meduim">Create class</span>
    </x-UIcomponents.button>
</form>
