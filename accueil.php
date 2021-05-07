<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
			integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk="
			crossorigin="anonymous"
		/>
		<link rel="stylesheet" href="stylechat.css" />
		<title>ChatIdiomas</title>
	</head>
	<body>
		<div class="join-container">
			<header class="join-header">
				<h1> ChatIdiomas</h1>
			</header>
			<main class="join-main">
				<form action="chat.php">
					<div class="form-control">
						<label for="username"> Nom d'utilisateur</label>
						<input
							type="text"
							name="username"
							id="username"
							placeholder="Entrer votre nom d'utilisateur"
							required
						/>
					</div>
					<div class="form-control">
						<label for="room"> Quelle session souhaitez-vous rejoindre ?</label>
						<select name="room" id="room">
							<option value="Anglais">Anglais</option>
							<option value="Espagol">Espagnol</option>
							<option value="Français">Français</option>
							<option value="Chinois">Chinois</option>
							<option value="Italien">Italien</option>
							<option value="Allemand">Allemand</option>
						</select>
					</div>
					<button type="submit" class="btn"> Rejoindre </button>
				</form>
			</main>
		</div>
	</body>
</html>
