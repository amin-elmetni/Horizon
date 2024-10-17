<x-layout>
    @error('name')
        <x-UIcomponents.errorItem :message="$message" />
    @enderror

    <h2 class="text-gray1">Back to <a href="/students" class="text-black underline hover:text-primary">Students</a></h2>

    <div class="flex gap-8 mt-10">
        <x-students.studentSections :studentName="$student->name" :avatar="$student->avatar" />

        <form class="flex flex-col flex-grow  border border-gray-200 px-12 py-6 gap-6"
            action="/updateStudent/{{ $student->studentID }}" method="POST">
            @csrf
            @method('PUT')
            <h2 class="text-primary font-medium">Personal Informations</h2>

            <x-UIcomponents.input name="name" :oldValue="$student->name" icon="fa-solid fa-id-card" placeholder="Student's name"
                other="required" otherClass="w-full"></x-UIcomponents.input>

            <div class="flex gap-6 justify-between">
                <x-UIcomponents.input name="email" :oldValue="$student->email" icon="fa-solid fa-envelope"
                    placeholder="Student's email" type="email" otherClass="flex-1" />

                <x-UIcomponents.input name="phoneNumber" :oldValue="$student->phoneNumber" icon="fa-solid fa-phone"
                    placeholder="Student's phone" other="required pattern=[+]?[0-9]+" otherClass="flex-1" />
            </div>

            <div class="flex gap-6">
                <x-UIcomponents.ratioInput name="gender" id="Male" :oldValue="$student->gender" placeholder="Male"
                    icon="fa-solid fa-mars" other="required" />

                <x-UIcomponents.ratioInput name="gender" id="Female" :oldValue="$student->gender" placeholder="Female"
                    icon="fa-solid fa-venus" other="required" />
            </div>

            <x-UIcomponents.button other="self-end px-10 py-[12px]">Update</x-UIcomponents.button>
        </form>
    </div>
</x-layout>
