@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-grey focus:border-black-500 focus:ring-black-500 rounded-md shadow-sm']) !!}>
