<template>
    <div class="school">
        <h1><NuxtLink to="schools" class="material-symbols-outlined">arrow_back</NuxtLink><span>{{ school.name }}</span></h1>
        <SchoolDetails :school="school" />
        <div class="departments" v-if="school.departments && school.departments.length">
            <h2>Departments</h2>
            <DepartmentList :departments="school.departments" />
        </div>
    </div>
</template>
  
<script setup>
import SchoolModel from "~/models/School.js";

const school = ref([]);
const route = useRoute();

onMounted(async () => {
    const inSchool = await SchoolModel.find(route.params.id);
    console.log(inSchool);
    school.value = inSchool;
});

// SchoolModel.all().then(inSchools => {
// 	console.log(inSchools);
//     schools.value = inSchools;
// });
// </script>
