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
			<TeacherSelect :teachers="department.teachers" v-model="evaluation.teacher_id" />
		</div>
		<div>
			<button type="submit">Créer</button>
		</div>
	</form>
</template>
<script setup>
import TeacherModel from "~/composables/model/Teacher.js";
import DepartmentModel from "~/composables/model/Department.js";
const props = defineProps({
	evaluation: {
		type: Object,
		required: true
	}
});
const department = ref({});
DepartmentModel.with('teachers').find(1).then((inDepartment) => {
	department.value = inDepartment;
});

</script>