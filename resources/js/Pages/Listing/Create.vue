<template>
  <form>
    <div>
      <div>
        <label>Beds</label>
        <input v-model="form.beds" type="text" />
      </div>
  
      <div>
        <label>Baths</label>
        <input type="text" />
      </div>
  
      <div>
        <label>Area</label>
        <input type="text" />
      </div>
  
      <div>
        <label>City</label>
        <input type="text" />
      </div>
  
      <div>
        <label>Post Code</label>
        <input type="text" />
      </div>
  
      <div>
        <label>Street</label>
        <input type="text" />
      </div>
  
      <div>
        <label>Street Nr</label>
        <input type="text" />
      </div>
  
      <div>
        <label>Price</label>
        <input type="text" />
      </div>
  
      <div>
        <button type="submit">Create</button>
      </div>
    </div>
  </form>
</template>
  
<script setup>
import {reactive} from 'vue'

const form = reactive({
  beds: 0,
})
</script>
  <style scoped>
  label {
    margin-right: 2em;
  }
  
  div {
    padding: 2px
  }
  </style>