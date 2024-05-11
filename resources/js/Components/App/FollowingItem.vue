<script setup>
defineProps({
    title: String,
    image: String,
    decription: String
})
</script>

<template>
    <div class="mb-3 cursor-pointer hover:bg-gray-100">
        <div class="flex items-center gap-2 py-2 px-3">
            <img :src="image" class="w-[40px] h-[40px] rounded-full" alt="">
            <div>
                <h3 class="font-bold">{{ title }}</h3>
            </div>
        </div>
    </div>
</template>
