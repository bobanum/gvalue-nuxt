<template>
	{{ evaluation }}
	<form action="" method="post">
		<div>
			<label for="title">Titre</label>
			<input type="text" id="title" name="title" v-model="evaluation.title" />
		</div>
		<div>
			<label for="description">Description</label>
			<textarea id="description" name="description" v-model="evaluation.description"></textarea>
		</div>
		<div>
			<label for="teacher_id">Professeur</label>
			<TeacherSelect :teachers="teachers" v-model="evaluation.teacher_id" />
		</div>
		<div>
			<button type="submit">Créer</button>
		</div>
	</form>
</template>
<script setup>
const props = defineProps({
	evaluation: {
		type: Object,
		required: true
	}
});

</script>