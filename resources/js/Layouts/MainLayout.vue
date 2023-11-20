<template>
  <div>
    <Link href="/hello">Main Page</Link>
    <Link href="/">Show Page</Link>
    <div>The page with time {{ timer }}</div>
    <slot>Default</slot>
  </div>
</template>

<script setup>

import { Link } from '@inertiajs/vue3'
// import { Link } from '@inertiajs/inertia-vue3'
import { ref } from 'vue'

const timer = ref(0)

setInterval(() => timer.value++, 1000)

</script>