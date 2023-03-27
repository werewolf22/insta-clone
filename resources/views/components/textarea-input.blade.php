@props(['disabled' => false, 'error'=> false])
@php
    if(isset($error) && $error) $errorClass = 'is-invalid';
    else $errorClass = '';
@endphp
<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-control'.$errorClass]) !!}>{{$slot}}</textarea>
