<x-layouts.layout title="CV home">
		<div class="justify-between md:flex">
				<div class="left h-full md:w-1/2">
						@include('partials._left-box')
				</div>
				<div class="right bg-gray-200 md:w-2/3">
						@include('partials._right-box')
				</div>
		</div>
</x-layouts.layout>
