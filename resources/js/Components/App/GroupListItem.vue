<script setup>
import GroupItem from '@/Components/App/GroupItem.vue';
import TextInput from '@/Components/TextInput.vue';
import { ref } from 'vue';

const searchKeyword = ref('');
</script>

<template>
    <TextInput :model-value="searchKeyword" placeholder="type to search" class="mt-2 w-full" />
    <div class="py-8">
        <div v-if="false" class="text-gray-400 text-center">
            You are not joined to any group
        </div>
        <div v-else class="h-screen	 overflow-auto">

            <GroupItem title="Laravel Developer" image="https://picsum.photos/id/237/200"
                decription="Lorem ipsum dolor sit amet consectetur, adipisicing elit." />

            <GroupItem title="Vue.js Developer" image="https://picsum.photos/id/237/200"
                decription="Lorem ipsum dolor sit amet consectetur, adipisicing elit." />
            <GroupItem title="Vue.js Developer" image="https://picsum.photos/id/237/200"
                decription="Lorem ipsum dolor sit amet consectetur, adipisicing elit." />
            <GroupItem title="Vue.js Developer" image="https://picsum.photos/id/237/200"
                decription="Lorem ipsum dolor sit amet consectetur, adipisicing elit." />
            <GroupItem title="Vue.js Developer" image="https://picsum.photos/id/237/200"
                decription="Lorem ipsum dolor sit amet consectetur, adipisicing elit." />
            <GroupItem title="Vue.js Developer" image="https://picsum.photos/id/237/200"
                decription="Lorem ipsum dolor sit amet consectetur, adipisicing elit." />
            <GroupItem title="Vue.js Developer" image="https://picsum.photos/id/237/200"
                decription="Lorem ipsum dolor sit amet consectetur, adipisicing elit." />
            <GroupItem title="Vue.js Developer" image="https://picsum.photos/id/237/200"
                decription="Lorem ipsum dolor sit amet consectetur, adipisicing elit." />
            <GroupItem title="Vue.js Developer" image="https://picsum.photos/id/237/200"
                decription="Lorem ipsum dolor sit amet consectetur, adipisicing elit." />

        </div>
    </div>
</template>
