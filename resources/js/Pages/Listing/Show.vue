<template>
  <div>
    <LinkAddress :listing="listing" />
  </div>
</template>
  
<script setup>

import LinkAddress from '@/Components/ListingAddress.vue'

defineProps({
  listing:Object,
})
</script>