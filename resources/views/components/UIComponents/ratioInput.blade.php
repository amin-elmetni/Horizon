@props(['name', 'id', 'placeholder', 'icon', 'other' => ''])

<div class="relative">
    <input type="radio" name="{{ $name }}" id="{{ $id }}" value="{{ $id }}"
        {{ $other }} @if (old("$name") == "$id") checked @endif class="hidden peer">
    <label for="{{ $id }}"
        class="flex flex-col gap-2 w-28 h-28 items-center justify-center p-4 rounded-md bg-transparent border border-gray-200 text-gray2 bg-opacity-15 hover:bg-opacity-65 hover:text-gray1 peer-checked:bg-opacity-100 peer-checked:text-primary peer-checked:border-primary  cursor-pointer transition-all ease-in-out">
        <i class="{{ $icon }} text-3xl"></i>
        <h2 class="font-medium">{{ $placeholder }}</h2>
    </label>
</div>
