<template>
	<div>
		<h1>Liste des evaluations</h1>
		<EvaluationList :elements="evaluations" />
		{{ evaluations }}
	</div>
</template>
<script setup>
import EvaluationModel from "~/composables/model/Evaluation.js";
const evaluations = ref([]);

EvaluationModel.all().then((data) => {
	evaluations.value = data;
});
// onMounted(async () => {
// 	evaluations.value = await EvaluationModel.all();
// });
</script>