<template>
    <div class="details">
        {{ school }}
    </div>
</template>
  
<script setup>
const props = defineProps({
    school: {
        type: Object,
        required: true
    }
});
</script>
