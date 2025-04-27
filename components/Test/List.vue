<template>
    <table class="list">
        <thead>
            <tr>
                <th>Name</th>
            </tr>
        </thead>
        <tbody v-if="schools.length">
            <tr v-for="school in schools" :key="school.id">
                <td><NuxtLink :to="`/admin/schools/${school.id}`">
                    {{ school.name }}</NuxtLink>
                </td>
                
            </tr>
        </tbody>
        <tbody v-else>
            <tr>
                <td colspan="4">No schools found.</td>
            </tr>
        </tbody>
    </table>
</template>
  
<script setup>
import SchoolModel from "~/composables/models/School.js";
const props = defineProps({
    schools: {
        type: Array,
        required: true
    }
});
</script>