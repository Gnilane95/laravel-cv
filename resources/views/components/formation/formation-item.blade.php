@props(['formation_title', 'society', 'formation_year'])
<div class="my-3 space-y-2 py-2 text-xl">
		<p class="text-xl font-bold">{{ $formation_title }}</p>
		<p class="text-gray-600">{{ $society }} | {{ $formation_year }}</p>
</div>
