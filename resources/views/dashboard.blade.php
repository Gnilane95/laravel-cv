@php
    $styleLink="font-bold hover:text-red-700 hover:underline underline-offset-4 block pb-5 text-blue-700"
@endphp
<x-layouts.layout title="Dashbord">
    <nav class="flex justify-between bg-black p-7">
        <p class="font-black text-3xl text-red-800 ">Dashboard</p>
        <div class="flex space-x-5 text-white font-bold text-xl">
            <p >{{ Auth::user()->name }}</p>
            <a href="/" class="hover:text-red-800 hover:underline">Déconnexion</a>
        </div>
    </nav>

    <div class="container">
        <h1 class="uppercase text-xl text-red-700 font-black mt-6">
            Bienvenue <span class="text-primary-focus underline">{{ Auth::user()->name }}</span> sur ton Dashbord
        </h1>
        <div class="py-12">
            <a href="{{ route ('identities.create') }}" class="{{ $styleLink }}">Gérer mon identité</a>
            <a href="{{ route('formations.create') }}" class="{{ $styleLink }}">Gérer ma formation</a>
            <a href="{{ route('experiences.create') }}" class="{{ $styleLink }}">Gérer mon expérience</a>
            <a href="{{ route('skills.create') }}" class="{{ $styleLink }}">Gérer mes skills</a>
        </div>
    </div>
</x-layouts.layout>

