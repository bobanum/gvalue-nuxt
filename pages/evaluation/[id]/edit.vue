<template>
	<h1>Edit</h1>
	<EvaluationForm :evaluation="evaluation"/>
</template>
<script setup>
// import EvaluationModel from "~/models/Evaluation.js";

const props = defineProps({
	evaluation: {
		type: Object,
		required: true
	}
});
</script>