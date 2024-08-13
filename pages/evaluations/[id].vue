<template>
	<div>
		<h1>Évaluation : {{evaluation.title}}</h1>
		<NuxtPage :evaluation="evaluation"/>
	</div>
</template>
<script setup>
import EvaluationModel from "~/composables/model/Evaluation.js";

const evaluation = ref({});

const route = useRoute();

onMounted(async () => {
    const inEvaluation = await EvaluationModel.find(route.params.id);
    evaluation.value = inEvaluation;
});

</script>