<div class="flex flex-col w-[26%] py-6 border border-gray-200 rounded-md">
    <img src="/storage/{{ $avatar }}" alt="no image found" class="w-14 h-14 rounded-full self-center">
    <span class="font-medium mt-3 mb-3 self-center">{{ $studentName }}</span>

    <x-students.studentSectionItem :studentName="$studentName" section="personalInfos">
        Personal informations
    </x-students.studentSectionItem>

    <x-students.studentSectionItem :studentName="$studentName" section="activeClasses">
        Active classes
    </x-students.studentSectionItem>

    <x-students.studentSectionItem :studentName="$studentName" section="classesBills">
        Classes bills
    </x-students.studentSectionItem>

    <x-students.studentSectionItem :studentName="$studentName" section="payedBills">
        Payed Bills
    </x-students.studentSectionItem>
</div>
