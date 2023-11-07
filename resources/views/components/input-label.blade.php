@props(['value'])

<label {{ $attributes->merge(['class' => 'text-xl ml-7']) }}>
    {{ $value ?? $slot }}
</label>
