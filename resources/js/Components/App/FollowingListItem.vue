<script setup>
import FollowingItem from '@/Components/App/FollowingItem.vue';
import TextInput from '@/Components/TextInput.vue';
import { ref } from 'vue';

const searchKeyword = ref('');
</script>

<template>
    <TextInput :model-value="searchKeyword" placeholder="type to search" class="mt-2 w-full" />
    <div class="py-8">
        <div v-if="false" class="text-gray-400 text-center">
            You dont have any followers yat
        </div>
        <div v-else class="h-screen	overflow-auto">
            <FollowingItem title="Laravel Developer" image="https://picsum.photos/id/237/200" />
            <FollowingItem title="Vue.js Developer" image="https://picsum.photos/id/237/200" />
            <FollowingItem title="Vue.js Developer" image="https://picsum.photos/id/237/200" />
            <FollowingItem title="Vue.js Developer" image="https://picsum.photos/id/237/200" />
            <FollowingItem title="Vue.js Developer" image="https://picsum.photos/id/237/200" />
            <FollowingItem title="Vue.js Developer" image="https://picsum.photos/id/237/200" />
            <FollowingItem title="Vue.js Developer" image="https://picsum.photos/id/237/200" />
            <FollowingItem title="Vue.js Developer" image="https://picsum.photos/id/237/200" />
            <FollowingItem title="Vue.js Developer" image="https://picsum.photos/id/237/200" />
            <FollowingItem title="Vue.js Developer" image="https://picsum.photos/id/237/200" />
            <FollowingItem title="Vue.js Developer" image="https://picsum.photos/id/237/200" />
            <FollowingItem title="Vue.js Developer" image="https://picsum.photos/id/237/200" />
            <FollowingItem title="Vue.js Developer" image="https://picsum.photos/id/237/200" />
            <FollowingItem title="Vue.js Developer" image="https://picsum.photos/id/237/200" />
            <FollowingItem title="Vue.js Developer" image="https://picsum.photos/id/237/200" />
            <FollowingItem title="Vue.js Developer" image="https://picsum.photos/id/237/200" />
            <FollowingItem title="Vue.js Developer" image="https://picsum.photos/id/237/200" />
            <FollowingItem title="Vue.js Developer" image="https://picsum.photos/id/237/200" />
            <FollowingItem title="Vue.js Developer" image="https://picsum.photos/id/237/200" />

        </div>
    </div>
</template>
