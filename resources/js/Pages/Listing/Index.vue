<template>
  <div v-for="listing in listings" :key="listing.id">
    <Link :href="`/listing/${listing.id}`">
      <LinkAddress :listing="listing" />
    </Link>
  </div>
</template>

<script setup>
import {Link} from '@inertiajs/vue3'
import LinkAddress from '@/Components/ListingAddress.vue'
defineProps({
  listings:Array,
})
</script>