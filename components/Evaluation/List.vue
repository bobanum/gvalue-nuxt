<template>
    <table class="list" style="--columns:1">
        <thead>
            <tr>
                <th>Coches</th>
                <th>Titre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody v-if="elements.length">
            <tr v-for="element in elements" :key="element.id">
                <td>coche</td>
                <td><NuxtLink :to="`/evaluations/${element.id}`">
                    {{ element.title }}</NuxtLink>
                </td>   
                <td>
                    <NuxtLink :to="`/evaluations/${element.id}/edit`">Edit</NuxtLink>
                    <!-- <button @click="deleteElement(element.id)">Delete</button> -->
                </td>             
            </tr>
        </tbody>
        <tbody v-else>
            <tr>
                <td colspan="4">No evaluations found.</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td class="full-width">
                    <NuxtLink to="/evaluations/create">Create a new evaluation</NuxtLink>
                </td>
            </tr>
        </tfoot>
    </table>
</template>
  
<script setup>
const props = defineProps({
    elements: {
        type: Array,
        required: true
    }
});
</script>