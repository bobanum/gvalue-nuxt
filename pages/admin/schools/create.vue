<template>
	<h1>Nouvelle évaluation</h1>
	<form action="" method="post">
		<div>
			<label for="name">Name</label>
			<input type="text" id="name" name="name" />
		</div>
		<div>
			<label for="address">Address</label>
			<input type="text" id="address" name="address" />
		</div>
		<div>
			<label for="phone">Phone</label>
			<input type="text" id="phone" name="phone" />
		</div>
		<div>
			<label for="email">Email</label>
			<input type="text" id="email" name="email" />
		</div>
		<div>
			<label for="website">Website</label>
			<input type="text" id="website" name="website" />
		</div>
		<div>
			<label for="logo">Logo</label>
			<input type="file" id="logo" name="logo" />
		</div>
		<div>
			<button type="submit">Create</button>
		</div>
	</form>
</template>