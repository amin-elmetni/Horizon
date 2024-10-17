<div class="flex flex-col w-[26%] py-6 border border-gray-200 rounded-md">
    <img src="/storage/{{ $avatar }}" alt="no image found" class="w-14 h-14 rounded-full self-center">
    <span class="font-medium mt-3 mb-3 self-center">{{ $teacherName }}</span>

    <x-teachers.teacherSectionItem :teacherName="$teacherName" section="personalInfos">
        Personal informations
    </x-teachers.teacherSectionItem>

    <x-teachers.teacherSectionItem :teacherName="$teacherName" section="activeClasses">
        Active classes
    </x-teachers.teacherSectionItem>

    <x-teachers.teacherSectionItem :teacherName="$teacherName" section="classesBills">
        Classes bills
    </x-teachers.teacherSectionItem>

    <x-teachers.teacherSectionItem :teacherName="$teacherName" section="payedBills">
        Payed Bills
    </x-teachers.teacherSectionItem>
</div>
