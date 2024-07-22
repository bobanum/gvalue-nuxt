<template>
    <div id="app">
        <h1>Schools</h1>
        <SchoolList :schools="schools"/>

        
    </div>
</template>
  
<script setup>
import SchoolModel from "~/models/School.js";

const schools = ref([]);
const route = useRoute();
onMounted(async () => {
    const inSchools = await SchoolModel.all();
    schools.value = inSchools;
});

// SchoolModel.all().then(inSchools => {
// 	console.log(inSchools);
//     schools.value = inSchools;
// });
// </script>
<style scoped>
h1 {
    color: #42b983;
}
</style>