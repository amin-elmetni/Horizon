<div
    class="flex items-center px-8 py-4 border-b-2 border-bg1 hover:bg-bg3 cursor-pointer transition teacher-item teacher-item-{{ $teacher->teacherID }}">
    <div class="flex items-center gap-3 flex-1">
        <img src="/storage/{{ $teacher->avatar }}" alt="no image found" class="w-8 h-8 rounded-full">
        <span>{{ $teacher->name }}</span>
    </div>
    <span class="flex-1 text-center">{{ $teacher->teacherClasses->count() }} Classes</span>
    <span class="flex-1 text-center">{{ preg_replace('/(\d{2})/', '$1 ', $teacher->phoneNumber) }}</span>
    <span class="font-medium text-third text-base flex-1 text-center">{{ $teacher->teacherClasses->sum('amount') }}
        MAD</span>
</div>
