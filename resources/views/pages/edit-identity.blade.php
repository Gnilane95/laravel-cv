<x-layouts.layout title="create-identity">
    <div class="text-center text-4xl text-red-800 font-black my-10">
            <h1 >Modifier l'identité</h1>
    </div>
    <div class="mx-56 shadow-md p-6">
        <form action="{{ route('identities.update', $identity->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            {{-- url_img --}}
            <input type="file" name="url_img" id="" class="block">
            <x-error-msg name="url_img" />
            {{-- first name --}}
            <div class="mt-5">
                <label for="" class="block pb-2 font-bold">Prénom</label>
                <input type="text" name="first_name" id="" class="w-72" value="{{ old('first_name', $identity->first_name) }}">
                <x-error-msg name="first_name" />
            </div>
            {{-- last name --}}
            <div class="mt-5">
                <label for="" class="block pb-2 font-bold">Nom</label>
                <input type="text" name="last_name" id="" class="w-72" value="{{ old('last_name', $identity->last_name) }}">
                <x-error-msg name="last_name" />
            </div>
            {{-- job --}}
            <div class="mt-5">
                <label for="" class="block pb-2 font-bold">Job</label>
                <input type="text" name="job" id="" class="w-72" value="{{ old('job', $identity->job) }}">
                <x-error-msg name="job" />
            </div>
            {{-- description --}}
            <div class="mt-5">
                <label for="" class="block pb-2 font-bold">Description</label>
                <textarea type="text" name="description" id="" class="w-72 h-72">
                    {{ old('description', $identity->description) }}
                </textarea>
                <x-error-msg name="description" />
            </div>
            {{-- tel --}}
            <div class="mt-5">
                <label for="" class="block pb-2 font-bold">Téléphone</label>
                <input type="tel" name="tel" id="" class="w-72" value="{{ old('tel', $identity->tel) }}">
                <x-error-msg name="tel" />
            </div>
            {{-- e_mail --}}
            <div class=" mt-5">
                <label for="e_mail" class="block pb-2 font-bold">E-mail</label>
                <input type="email" name="e_mail" id="" class="w-72" value="{{ old('e_mail', $identity->e_mail) }}">
                <x-error-msg name="e_mail" />
            </div>
            {{-- street --}}
            <div class=" mt-5">
                <label for="" class="block pb-2 font-bold">N° et nom de la rue</label>
                <input type="text" name="street" id="" class="w-72" value="{{ old('street', $identity->street) }}">
                <x-error-msg name="street" />
            </div>
            {{-- cp_city --}}
            <div class=" my-5">
                <label for="" class="block pb-2 font-bold">Code postal | ville</label>
                <input type="text" name="cp_city" id="" class="w-72" value="{{ old('cp_city', $identity->cp_city) }}">
                <x-error-msg name="cp_city" />
            </div>
            <button class="btn btn-primary" type="submit">Modifier</button>
        </form>
    </div>
</x-layouts.layout>