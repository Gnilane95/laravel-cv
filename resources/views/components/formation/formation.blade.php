@php
$formations = [
    [
        'formation_title' => 'Développeur full-stack Web',
        'formation_year' => '2020-2022',
        'society' => 'Google Inc',
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
@endphp

<div class="">
		<x-title title="Formation" />
		<div class="pt-8">
				@foreach ($formations as $formation)
						<x-formation.formation-item
								:formation_title="$formation['formation_title']"
								:formation_year="$formation['formation_year']"
								:society="$formation['society']"
						/>
				@endforeach

		</div>
</div>
