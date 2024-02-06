<template>
    <table class="list">
        <thead>
            <tr>
                <th>Name</th>
            </tr>
        </thead>
        <tbody v-if="departments.length">
            <tr v-for="department in departments" :key="department.id">
                <td style="grid-column:1">coche</td>
                <td style="grid-column:2"><NuxtLink :to="`/admin/departments/${department.id}`">
                    {{ department.name }}</NuxtLink>
                </td>
                
            </tr>
        </tbody>
        <tbody v-else>
            <tr>
                <td colspan="4">No departments found.</td>
            </tr>
        </tbody>
    </table>
</template>
  
<script setup>
const props = defineProps({
    departments: {
        type: Array,
        required: true
    }
});
</script>