<template>
  <div class="grid grid-cols-12 gap-4">
    <Box class="col-span-7 flex items-center w-full">
      <div class="w-full text-center font-medium text-gray-500">No Images</div>
    </Box>
    <Box class="col-span-5">
      <Price :price="listing.price" class="text-2xl font-bold" />
      <ListingSpace :listing="listing" class="text-lg" />
      <LinkAddress :listing="listing" class="text-gray-500" />
    </Box>
  </div>
</template>
  
<script setup>

import LinkAddress from '@/Components/ListingAddress.vue'
import ListingSpace from '@/Components/ListingSpace.vue'
import Price from '@/Components/Price.vue'
import Box from '@/Components/UI/Box.vue'

defineProps({
  listing:Object,
})
</script>