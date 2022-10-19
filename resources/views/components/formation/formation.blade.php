@props(['formation_title','school','year'])
{{-- @php
$formations = [
    [
        'formation_title' => {{ $formation_title }},
        'formation_year' => {{ $year }},
        'society' => {{ $shool }},
    ],
    [
        'formation_title' => 'Développeur front Web',
        'formation_year' => '2020-2022',
        'society' => 'Apple Inc',
    ],
    [
        'formation_title' => 'Développeur back Web',
        'formation_year' => '2020-2022',
        'society' => 'Id Formation',
    ],
];
@endphp --}}

<div class="">
		<x-title title="Formation" />
		<div class="pt-8">
				{{-- @foreach ($formations as $formation)
						<x-formation.formation-item
								:formation_title="$formation['formation_title']"
								:formation_year="$formation['formation_year']"
								:society="$formation['society']"
						/>
				@endforeach --}}
                <div class="my-3 space-y-2 py-2 text-xl">
                    <p class="text-xl font-bold">{{ $formation_title }}</p>
                    <p class="text-gray-600">{{ $school }} | {{ $year }}</p>
                </div>

		</div>
</div>
