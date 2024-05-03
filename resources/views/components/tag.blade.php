@props(['size' => 'base'])

@php
   $classes = "bg-white/10 rounded-xl font-bold transition-colors hover:bg-white/25";

   if ($size == 'small') {
      $classes .= " text-xxs px-3 py-1";
   }

   if ($size == 'base') {
      $classes .= " text-sm px-5 py-1";
   }
@endphp

<a href="" class="{{ $classes }}">{{ $slot }}</a>