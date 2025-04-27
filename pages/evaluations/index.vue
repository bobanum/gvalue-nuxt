<template>
	<div>
		<h1>Liste des evaluations</h1>
		<EvaluationList :elements="evaluations" />
		{{ evaluations }}
	</div>
</template>
<script setup>
const evaluations = ref([]);

Evaluation.all().then((data) => {
	console.log(data);
	if (!data) {
		return;
	}
	evaluations.value = data;
});
// onMounted(async () => {
// 	evaluations.value = await EvaluationModel.all();
// });
</script>