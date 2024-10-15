@props([
    'name',
    'oldValue' => '',
    'other' => '',
    'placeholder' => '',
    'borderColor' => 'primary',
    'color' => 'black',
    'icon' => '',
    'type' => 'text',
    'otherClass' => '',
])

<div
    class="p-2 border flex gap-3 items-center rounded-md
                        text-gray-400
                        has-[input:focus]:text-{{ $borderColor }}
                        has-[input:not(:placeholder-shown)]:text-{{ $borderColor }}
                        has-[input:focus]:border-{{ $borderColor }}
                        has-[input:not(:placeholder-shown)]:border-{{ $borderColor }}
                        transition linear {{ $otherClass }}">
    <i class="{{ $icon }}"></i>
    <input value="{{ old("$name", "$oldValue") }}" name="{{ $name }}" id="{{ $name }}"
        class="w-full focus:outline-0 text-{{ $color }}" type="{{ $type }}" autocomplete="off"
        placeholder="{{ $placeholder }}" {{ $other }} />
</div>
