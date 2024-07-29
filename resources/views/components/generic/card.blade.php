<div {{ $attributes->merge(['class' => 'relative shadow-lg p-4 bg-white rounded-lg']) }}>
    <div class="absolute top-0 left-0 w-full h-1 bg-blue-500 rounded-t-lg"></div>
    {{ $slot }}
</div>
