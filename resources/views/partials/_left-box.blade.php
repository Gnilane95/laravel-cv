<div class="p-12 md:mt-24 md:p-20">
	@forelse ($identities as $identity)
		<x-identity :url_img="$identity->url_img" :first_name="$identity->first_name" :last_name="$identity->last_name" :job="$identity->job" :description="$identity->description" :tel="$identity->tel" :e_mail="$identity->e_mail" :street="$identity->street" :cp_city="$identity->cp_city" />
	@empty
		<p>Pas d'informations disponibles</p>
	@endforelse
</div>
