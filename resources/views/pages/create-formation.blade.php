<x-layouts.layout title="create-identity">
    <div class="text-center text-4xl text-red-800 font-black my-10">
            <h1 >Gérer ma formation</h1>
    </div>
    <div class="mx-56 shadow-md p-6">
        <form action="{{ route('formations.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- formation_title --}}
            <div class="mt-5">
                <label for="" class="block pb-2 font-bold">Titre de la formation</label>
                <input type="text" name="formation_title" id="" class="w-72" value="{{ old('formation_title') }}">
                <x-error-msg name="formation_title" />
            </div>
            {{-- school --}}
            <div class="mt-5">
                <label for="" class="block pb-2 font-bold">Lieu de formation</label>
                <input type="text" name="school" id="" class="w-72" value="{{ old('school') }}">
                <x-error-msg name="school" />
            </div>
            {{-- year --}}
            <div class="mt-5">
                <label for="" class="block pb-2 font-bold">Année</label>
                <input type="text" name="year" id="" class="w-72" value="{{ old('year') }}">
                <x-error-msg name="year" />
            </div>
            <button class="btn btn-primary mt-5" type="submit">Envoyer</button>
        </form>
    </div>
    <div class="my-10">
        <h2 class="text-center text-4xl text-red-800 font-bold underline">Infos Formation</h2>
        {{-- show datas --}}
        {{-- <div class="">
            @forelse ($identities as $identity)
                <div class="flex space-x-10 mx-28 my-10">
                    <img src="{{ asset('storage/'.$identity->url_img) }}" alt="" class="max-w-md">
                    <div class="text-lg">
                        <p><span class="font-bold">Prénom :</span> {{ $identity->first_name }}</p>
                        <p class="mt-2"><span class="font-bold">Nom : </span>{{ $identity->last_name }}</p>
                        <p class="mt-2"><span class="font-bold">Job :</span> {{ $identity->job }}</p>
                        <p class="mt-2"><span class="font-bold">Description :</span> {{ $identity->description }}
                        </p>
                        <p class="mt-2"><span class="font-bold">Téléphone :</span> {{ $identity->tel }}</p>
                        <p class="mt-2"><span class="font-bold">E-mail :</span> {{ $identity->e_mail }}</p>
                        <p class="mt-2"><span class="font-bold">Rue :</span> {{ $identity->street }}</p>
                        <p class="mt-2"><span class="font-bold">CP | Ville :</span> {{ $identity->cp_city }}</p>
                    </div>
                </div>
            @empty
                <p>Pas d'infos disponibles</p>
            @endforelse
        </div> --}}
        {{-- btn modify --}}
        {{-- <div class="mx-28 my-10">
            <a href="{{ $identity->id }}/edit" class="btn btn-primary">Modifier</a>
        </div> --}}
    </div>
</x-layouts.layout>