@props(['tag', 'size' => 'base'])

@php
    $classes = "bg-white/10 hover:bg-white/25 px-3 py-1 rounded-xl text-2xs font-bold transition-colors duration-300";

    if ($size === 'base') {
        $classes .= " px-5 py-1 text-sm";
    }

    if ($size === 'small') {
        $classes .= " px-3 py-1 text-2xs";
    }

    
@endphp
<a href="/tags/{{ strtolower($tag->name) }}">{{ $tag->name }}</a>
