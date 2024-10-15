@props(['name', 'oldValue' => '', 'other' => '', 'placeholder'])

<textarea name="{{ $name }}" cols="30" rows="3" placeholder="{{ $placeholder }}"
    class="border focus:border-primary rounded focus:outline-0 px-3 py-2 w-full resize-none [&:not(:placeholder-shown)]:border-primary scrollbar"
    {{ $other }}>{{ old("$name", "$oldValue") }}</textarea>
