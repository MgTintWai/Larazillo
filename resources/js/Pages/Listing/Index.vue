<template>
  <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
    <Box v-for="listing in listings" :key="listing.id">
      <div>
        <Link :href="route('listing.show',{listing:listing.id})">
          <div class="flex items-center gap-1">
            <Price
              :price="listing.price"
              class="text-2xl font-bold"
            />
            <div class="text-xs text-gray-500">
              <Price :price="monthlyPayment" /> pm
            </div>
          </div>>
          <ListingSpace :listing="listing" class="text-lg" />
          <LinkAddress :listing="listing" class="text-gray-500" />
        </Link>
      </div>
      <div>
        <Link :href="route('listing.edit',{listing:listing.id})">Edit</Link>
      </div>
      <div>
        <Link :href="route('listing.destroy',{listing:listing.id})" method="DELETE" as="button">Delete</Link>
      </div>
    </Box>
  </div>
</template>

<script setup>
import {Link} from '@inertiajs/vue3'
import LinkAddress from '@/Components/ListingAddress.vue'
import ListingSpace from '@/Components/ListingSpace.vue'
import Box from '@/Components/UI/Box.vue'
import Price from '@/Components/Price.vue'

defineProps({
  listings:Array,//accept data from controller
})
</script>