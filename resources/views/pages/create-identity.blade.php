<x-layouts.layout title="create-identity">
    <div class="text-center text-4xl text-red-800 font-black my-10">
            <h1 >Gestion de l'identité</h1>
    </div>
    <div class="mx-56 shadow-md p-6">
        <form action="{{ route('identities.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- url_img --}}
            <input type="file" name="url_img" id="" class="block" value="{{ old('url_img') }}">
            <x-error-msg name="url_img" />
            {{-- first name --}}
            <div class="mt-5">
                <label for="" class="block pb-2 font-bold">Prénom</label>
                <input type="text" name="first_name" id="" class="w-72" value="{{ old('first_name') }}">
                <x-error-msg name="first_name" />
            </div>
            {{-- last name --}}
            <div class="mt-5">
                <label for="" class="block pb-2 font-bold">Nom</label>
                <input type="text" name="last_name" id="" class="w-72" value="{{ old('last_name') }}">
                <x-error-msg name="last_name" />
            </div>
            {{-- job --}}
            <div class="mt-5">
                <label for="" class="block pb-2 font-bold">Job</label>
                <input type="text" name="job" id="" class="w-72" value="{{ old('job') }}">
                <x-error-msg name="job" />
            </div>
            {{-- description --}}
            <div class="mt-5">
                <label for="" class="block pb-2 font-bold">Description</label>
                <textarea type="text" name="description" id="" class="w-72 h-72">
                    {{ old('description') }}
                </textarea>
                <x-error-msg name="description" />
            </div>
            {{-- tel --}}
            <div class="mt-5">
                <label for="" class="block pb-2 font-bold">Téléphone</label>
                <input type="tel" name="tel" id="" class="w-72" value="{{ old('tel') }}">
                <x-error-msg name="tel" />
            </div>
            {{-- e_mail --}}
            <div class=" mt-5">
                <label for="e_mail" class="block pb-2 font-bold">E-mail</label>
                <input type="email" name="e_mail" id="" class="w-72" value="{{ old('e_mail') }}">
                <x-error-msg name="e_mail" />
            </div>
            {{-- street --}}
            <div class=" mt-5">
                <label for="" class="block pb-2 font-bold">N° et nom de la rue</label>
                <input type="text" name="street" id="" class="w-72" value="{{ old('street') }}">
                <x-error-msg name="street" />
            </div>
            {{-- cp_city --}}
            <div class=" my-5">
                <label for="" class="block pb-2 font-bold">Code postal | ville</label>
                <input type="text" name="cp_city" id="" class="w-72" value="{{ old('cp_city') }}">
                <x-error-msg name="cp_city" />
            </div>
            <button class="btn btn-primary" type="submit">Envoyer</button>
        </form>
    </div>
    <div class="my-10">
        <h2 class="text-center text-4xl text-red-800 font-bold underline">Infos de mon identité</h2>
        {{-- show datas --}}
        <div class="">
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
        </div>
        {{-- btn modify --}}
        <div class="mx-28 my-10">
            <a href="{{ route('identities.edit',$identity->id) }}" class="btn btn-primary">Modifier</a>
        </div>
    </div>
</x-layouts.layout>