@props(['name', 'icon' => '', 'options', 'oldValue' => '', 'ID' => '', 'placeholder' => "Choose a $name"])

<div
    class="p-2 border flex gap-3 items-center rounded transition linear has-[select:hover]:border-primary has-[select:hover]:text-primary {{ old("$name", "$oldValue") == null ? 'text-gray-400' : 'border-primary' }} select-up">
    <i
        class="{{ $icon }} {{ $name }}-icon {{ $name }}-icon-{{ $ID }} {{ old("$name", "$oldValue") == null ? '' : 'text-primary' }}"></i>
    <select
        class="hover:text-black w-full focus:outline-0 cursor-pointer {{ $name }}s-list {{ $name }}s-list-{{ $ID }} peer"
        name="{{ $name }}" id="{{ $name }}">
        <option class="option-input" value="{{ old("$name", "$oldValue") }}" selected hidden>
            {{ old("$name", "$oldValue") ? old("$name", "$oldValue") : "$placeholder" }}</option>
        {{ $options }}
    </select>
</div>
