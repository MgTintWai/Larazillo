<template>
  <div v-if="form" class="input-error">
    {{ form }}
  </div>
</template>

<script setup>

defineProps({
  form:String,
})

</script>