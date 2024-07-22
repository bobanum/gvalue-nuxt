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

onMounted(async () => {
	evaluations.value = await EvaluationModel.all();
});
</script>