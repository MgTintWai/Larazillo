<template>
  <div class="container mx-auto">
    <Link href="/listing/create">New Listing</Link>
    <header class="border-b border-gray-200 dark:border-gray-700  dark:bg-gray-900 bg-white w-full">
      <div class="container mx-auto">
        <nav class="p-4 flex items-center justify-between">
          <div class="text-lg font-medium">
            <Link :href="route('listing.index')">Listings</Link>
          </div>
          <div class="text-xl text-indigo-600 dark:text-indigo-600 font-bold text-center">
            <Link :href="route('listing.index')">Larazillow</Link>
          </div>
          <div>
            <Link :href="route('listing.create')" class="btn-primary">+ New Listing</Link>
          </div>
        </nav>
      </div>
    </header>
    <main class="container mx-auto p-4">
      <div v-if="flashMessage" class="mb-4 border rounded-md shadow-sm border-green-200 dark:border-green-800 bg-green-50 dark:bg-green-900 p-2">
        {{ flashMessage }}
      </div>
    </main>
    <slot>Default</slot>
  </div>
</template>

<script setup>

import { Link,usePage } from '@inertiajs/vue3'
import { computed } from 'vue'
const page = usePage()
const flashMessage = computed(
  () => page.props.flash.success,
)

</script>