<script setup>
import { Head, Link } from '@inertiajs/vue3';
import GroupList from '@/Components/App/GroupList.vue';
import CreatePost from '@/Components/App/CreatePost.vue';
import PostList from '@/Components/App/PostList.vue';
import FollowingList from '@/Components/App/FollowingList.vue';

defineProps({

});

</script>

<template>

    <Head title="Social Media Website" />
    <div class="grid lg:grid-cols-12 gap-3 py-3">
        <div class="lg:col-span-3  lg:order-1">
         <GroupList/>
        </div>

        <div class="lg:col-span-3  lg:order-3">
            <FollowingList/>
        </div>
        <div class="lg:col-span-6 lg:order-2">
         <CreatePost/>
         <PostList/>
        </div>
    </div>
</template>
