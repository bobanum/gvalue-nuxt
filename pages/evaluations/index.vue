<template>
	<div>
		<h1>Liste des evaluations</h1>
		<EvaluationList :elements="evaluations" />
		{{ evaluations }}
	</div>
</template>
<script setup>
import EvaluationModel from "~/models/Evaluation.js";

const evaluations = ref([]);
const m = new ModelComp();
console.log(m);

EvaluationModel.all().then((data) => {
	evaluations.value = data;
});
// onMounted(async () => {
// 	evaluations.value = await EvaluationModel.all();
// });
</script>