<script setup>

import { computed, ref } from 'vue'
import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue'
import { Link, useForm, usePage } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import TapItem from '@/Pages/Profile/Partials/TapItem.vue';
import Edit from '@/Pages/Profile/Edit.vue'
import PrimaryButton from '@/Components/PrimaryButton.vue';
const authUser = usePage().props.auth.user;
const props = defineProps({
    mustVerifyEmail: {
        type: Boolean,
    },
    status: {
        type: String,
    },
    user: {
        type: Object,
    },
});

const isMyProfile = computed(() => authUser && authUser.id === props.user.id);

</script>

<template>
    <AuthenticatedLayout>
        <div class="w-[70%] mx-auto   h-screen overflow-auto">
            <div class="relative bg-white">
                <img src="https://timelinecovers.pro/facebook-cover/download/ultra-hd-space-facebook-cover.jpg"
                    class="w-full h-[290px] object-cover" alt="">
                <div class="flex">
                    <img class=" rounded-full  ml-[48px] w-[128px] h-[128px] -mt-[64px] "
                        src="https://static.independent.co.uk/2022/08/22/15/newFile-2.jpg?width=1200&height=1200&fit=crop"
                        alt="">
                    <div class=" flex justify-between items-center flex-1 p-4">
                        <h2 class="font-bold text-lg"> {{ user.name }}</h2>
                        <PrimaryButton v-if="isMyProfile">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                            </svg>


                            Edit Profile

                        </PrimaryButton>
                    </div>
                </div>
            </div>
            <div class=" border-t-2">
                <TabGroup>
                    <TabList class="flex  bg-white ">
                        <Tab v-if="isMyProfile" v-slot="{ selected }" as="template">
                            <TapItem :selected="selected" :text="'About'" />
                        </Tab>
                        <Tab v-slot="{ selected }" as="template">
                            <TapItem :selected="selected" :text="'Posts'" />
                        </Tab>
                        <Tab v-slot="{ selected }" as="template">
                            <TapItem :selected="selected" :text="'Following'" />
                        </Tab>
                        <Tab v-slot="{ selected }" as="template">
                            <TapItem :selected="selected" :text="'Followers'" />
                        </Tab>
                        <Tab v-slot="{ selected }" as="template">
                            <TapItem :selected="selected" :text="'Photos'" />
                        </Tab>
                    </TabList>

                    <TabPanels class="mt-3">
                        <TabPanel v-if="isMyProfile" key="posts" class="bg-white p-3 shadow">
                            <Edit :mustVerifyEmail="mustVerifyEmail" :status="status" />
                        </TabPanel>
                        <TabPanel key="followers" class="bg-white p-3 shadow">
                            followers
                        </TabPanel>
                          <TabPanel key="followers" class="bg-white p-3 shadow">
                            posts
                        </TabPanel>
                        <TabPanel key="followers" class="bg-white p-3 shadow">
                            following
                        </TabPanel>
                        <TabPanel key="followers" class="bg-white p-3 shadow">
                            photos
                        </TabPanel>
                    </TabPanels>

                </TabGroup>
            </div>
        </div>
    </AuthenticatedLayout>




</template>
