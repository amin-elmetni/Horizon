<form class="flex flex-col flex-grow gap-4 border-l pl-8 add-teacher-form hidden" action="/createTeacher" method="POST">
    @csrf
    <h2 class="font-medium capitalize text-lg">Add new teacher</h2>
    <x-UIcomponents.input name="name" icon="fa-solid fa-id-card" placeholder="Teacher's name" other="required" />

    <x-UIcomponents.input name="email" icon="fa-solid fa-envelope" placeholder="Teacher's email" type="email" />

    <x-UIcomponents.input name="phoneNumber" icon="fa-solid fa-phone" placeholder="Teacher's phone"
        other="required pattern=[+]?[0-9]+" />

    <div class="flex justify-between">
        <x-UIcomponents.ratioInput name="gender" id="Male" placeholder="Male" icon="fa-solid fa-mars"
            other="required" />
            
        <x-UIcomponents.ratioInput name="gender" id="Female" placeholder="Female" icon="fa-solid fa-venus"
            other="required" />
    </div>

    <x-UIcomponents.button other="mt-2 w-full">
        <span class="font-meduim">Add teacher</span>
    </x-UIcomponents.button>
</form>
