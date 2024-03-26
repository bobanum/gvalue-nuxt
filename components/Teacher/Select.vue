<template>
	<select name="teacher_id" id="teacher_id" v-model="selected">
		<option v-for="teacher in teachers" :value="teacher.id">{{ teacher.name }}</option>
	</select>
</template>
<script setup>
const props = defineProps({
	teachers: {
		type: Array,
		default: []
	}
});
</script>