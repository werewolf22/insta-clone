@props(['disabled' => false, 'error'=> false])
@php
    if(isset($error) && $error) $errorClass = 'is-invalid';
    else $errorClass = '';
@endphp
<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-control '.$errorClass]) !!}>
