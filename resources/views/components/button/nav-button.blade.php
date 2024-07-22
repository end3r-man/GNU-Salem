@props([
    'class' => null,
    'url' => null,
    'tag' => 'button',
])

@php($tag = $url ? 'a': $tag)

@if ($url)
    @php($attributes = $attributes->merge(['href' => $url]))
@endif

<{{ $tag }} wire:navigate {{ $attributes->merge(['class' => "text-lg hover:text-[#F8F1F1] {$class}"]) }}>
    {{$slot}}
</{{ $tag }}>