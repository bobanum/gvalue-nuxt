<template>
    <div id="app">
        <!-- <h1>Schools</h1> -->
        <NuxtPage/>
    </div>
</template>
  
<script setup>
const schools = ref([]);
const route = useRoute();
onMounted(async () => {
});
onUpdated(async () => {
});

</script>
<style scoped>
h1 {
    color: #42b983;
}
</style>