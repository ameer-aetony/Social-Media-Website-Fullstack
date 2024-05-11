<script setup>
defineProps({
    title: String,
    image: String,
    decription: String
})
</script>

<template>
    <div class="mb-3 cursor-pointer hover:bg-gray-100">
        <div class="flex items-start gap-2 py-2 px-3">
            <img :src="image" class="w-[40px] h-[40px] rounded-full" alt="">
            <div>
                <h3 class="font-bold text-lg">{{ title }}</h3>
                <p class="text-xm text-gray-400">{{ decription }}
                </p>
            </div>
        </div>
    </div>
</template>
