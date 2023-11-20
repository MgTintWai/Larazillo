<template>
  <!-- <MainLayout> -->
  <!-- Pascal Case -->
  <div>Index</div>
  <div>
    This is {{ message }}
  </div>
  <!-- </MainLayout> -->
</template>

<script setup>

defineProps({
  message : String,
})

</script>
<!-- 
<script>

import MainLayout from '../../Layouts/MainLayout.vue'
export default {
    layout: MainLayout
}
</script> -->