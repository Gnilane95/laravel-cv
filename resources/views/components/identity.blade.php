@props([
	'url_img',
	'first_name',
	'last_name',
	'job',
	'description',
	'tel',
	'e_mail',
	'street',
	'cp_city'

])
<div class="">
		<img
				alt="{{ $first_name }}"
				class="mx-auto h-52 w-52 rounded-full md:h-72 md:w-72"
				src="{{ asset('storage/'.$url_img) }}"
		>
		<div class="pt-16 pb-6 text-2xl font-black md:text-5xl">
				<p class="leading-snug">{{ $first_name }}</p>
				<p class="uppercase">{{ $last_name }}</p>
		</div>
		<p class="text-4xl">{{ $job }}</p>
		<!-- About -->
		<div class="pb-4 pt-7">
				<p class="pt-4 text-lg">
					{{$description}}
				</p>
		</div>
		<!-- info -->
		<div class="mb-8 mt-12 border-l-4 py-2 pl-6 text-lg leading-loose text-gray-600">
				<p>{{ $tel }}</p>
				<p>{{ $e_mail }}</p>
				<div class="font-bold italic">
						<p>{{ $street }}</p>
						<p>{{ $cp_city }}</p>
				</div>
		</div>
		
</div>
