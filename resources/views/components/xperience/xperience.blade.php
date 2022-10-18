@php
$xperiences = [
    [
        'job_title' => 'Développeur full-stack Web',
        'job_year' => '2020-2022',
        'society' => 'Google Inc',
    ],
    [
        'job_title' => 'Développeur front Web',
        'job_year' => '2020-2022',
        'society' => 'Apple Inc',
    ],
    [
        'job_title' => 'Développeur back Web',
        'job_year' => '2020-2022',
        'society' => 'Id Formation',
    ],
];
@endphp

<div class="">
		<x-title title="Experience" />
		<div class="pt-8">
				@foreach ($xperiences as $xperience)
						<x-xperience.xperience-item
								:job_title="$xperience['job_title']"
								:job_year="$xperience['job_year']"
								:society="$xperience['society']"
						/>
				@endforeach

		</div>
</div>
