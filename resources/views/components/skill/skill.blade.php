@php
$skills = ['PHP', 'Laravel', 'React', 'Tailwind'];
@endphp

<div class="">
		<x-title title="Skill" />
		<div class="pt-8">
				@foreach ($skills as $skill)
						<x-skill.skill-item :name="$skill" />
				@endforeach

		</div>
</div>
