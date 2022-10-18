@props(['title'])
<!DOCTYPE html>
<html lang="fr">

<head>
		<meta charset="UTF-8">
		<meta
				content="IE=edge"
				http-equiv="X-UA-Compatible"
		>
		<meta
				content="width=device-width, initial-scale=1.0"
				name="viewport"
		>
		<title>CV | {{ $title }}</title>
		@vite('resources/css/app.css')
</head>

<body>

		{{ $slot }}

		@vite('resources/js/app.js')

</body>

</html>
