@props(['job_title', 'society', 'job_year'])
<div class="my-3 space-y-2 py-2 text-xl">
		<p class="text-xl font-bold">{{ $job_title }}</p>
		<p class="text-gray-600">{{ $society }} | {{ $job_year }}</p>
</div>
