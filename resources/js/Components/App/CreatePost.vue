<script setup>
import { ref } from 'vue';
const createPost= ref(false)
</script>

<template>
    <div class="bg-white p-4 rounded-lg border mb-3">
      <div @click="createPost=true" class="py-3 px-2 text-gray-500 border border-gray-400 rounded-xl mb-3">
        Click here to create new post
      </div>
      <div v-if="createPost" class="flex justify-between">
        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 relative">
            Attach File
         <input type="file" name="" id="" class="absolute left-0 top-0 right-0 bottom-0 opacity-0">
        </button>
        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>

      </div>
    </div>
</template>
