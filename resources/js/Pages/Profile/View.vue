<script setup>

import { computed, ref } from 'vue'
import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue'
import { Link, useForm, usePage } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import TapItem from '@/Pages/Profile/Partials/TapItem.vue';
import Edit from '@/Pages/Profile/Edit.vue'
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { XMarkIcon, CheckCircleIcon, CameraIcon } from '@heroicons/vue/24/solid';

const authUser = usePage().props.auth.user;
const coverImageFile = ref();
const avatarImageFile = ref();
const coverImageUpdated = ref(true);

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

const imageForm = useForm({
    avatar: null,
    cover: null,
})
const isMyProfile = computed(() => authUser && authUser.id === props.user.id);

function onCoverChange(event) {
    imageForm.cover = event.target.files[0];
    if (imageForm.cover) {
        const reader = new FileReader();
        reader.onload = () => {
            coverImageFile.value = reader.result;
        }
        reader.readAsDataURL(imageForm.cover)

    }
}

function onAvatarChange(event) {
    imageForm.avatar = event.target.files[0];
    if (imageForm.avatar) {
        const reader = new FileReader();
        reader.onload = () => {
            avatarImageFile.value = reader.result;
        }
        reader.readAsDataURL(imageForm.avatar);

    }
}

function cancelCoverImage() {
    coverImageFile.value = null;
}

function cancelAvatarImage() {
    avatarImageFile.value = null;
}

function submitCoverImage() {
    imageForm.post(route('profile.updateImages'), {
        onSuccess: (user) => {
            cancelCoverImage()
            setTimeout(() => {
                coverImageUpdated.value = false
            }, 2000);
        },
    });
}

function submitAvatarImage() {

    imageForm.post(route('profile.updateImages'), {
        onSuccess: (user) => {
            cancelAvatarImage()
            setTimeout(() => {
                coverImageUpdated.value = false
            }, 2000);
        },
    });
}

</script>

<template>
    <AuthenticatedLayout>

        <div class="w-[70%] mx-auto   h-screen overflow-auto">

            <div v-show="coverImageUpdated && status === 'cover-image-update'"
                class="mt-2 font-medium text-sm text-white bg-green-600">
                Your image has been updated
            </div>
            <div class=" group relative bg-white">
                <img :src="coverImageFile || user.cover_url || '/image/cover.jpg'" class="w-full h-[290px] object-cover"
                    alt="">
                <div class=" absolute top-2 right-2" v-if="isMyProfile">
                    <button v-if="!coverImageFile"
                        class=" opacity-0 group-hover:opacity-100  bg-gray-50 hover:bg-gray-300 py-1 px-2 text-xs flex justify-center items-center ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z" />
                        </svg>
                        Update Cover Image
                        <input type="file" class=" absolute left-0 top-0 right-0 opacity-0 " @change="onCoverChange">
                    </button>
                    <div v-else class=" flex gap-2 opacity-0 bg-white -ml-[64px]  group-hover:opacity-100 ">
                        <button class="  bg-gray-50 hover:bg-gray-200 py-1 px-2 text-xs flex items-center "
                            @click="cancelCoverImage">
                            <XMarkIcon class="h-4 w-4 mr-2" />
                            Cancel
                        </button>
                        <button class="   hover:bg-gray-600 py-1 px-2 text-xs flex items-center "
                            @click="submitCoverImage">
                            <CheckCircleIcon class="h-4 w-4 mr-2" />
                            Submit

                        </button>


                    </div>
                </div>

                <div class="flex">
                    <div class=" relative group/avatar ">
                        <img class=" rounded-full  ml-[48px] w-[128px] h-[128px] -mt-[64px]   "
                            :src="avatarImageFile || user.avatar_path || '/image/avatar.png'" alt="">
                        <div class="absolute top-1 right-3  mr-[40px] " v-if="isMyProfile">
                            <button v-if="!avatarImageFile"
                                class=" opacity-0 group-hover/avatar:opacity-100   text-black bottom-0 top-0 right-0 left-0  flex justify-center items-center ">
                                <CameraIcon class="w-8 h-8" />

                                <input type="file" class=" absolute left-0 top-0 right-0 opacity-0 "
                                    @change="onAvatarChange">
                            </button>
                            <div v-else class=" flex gap-2 ml-[70px] bg-white  ">
                                <button class="  bg-gray-50 hover:bg-gray-200 py-1 px-2 text-xs flex items-center "
                                    @click="cancelAvatarImage">
                                    <XMarkIcon class="h-4 w-4 mr-2" />

                                </button>
                                <button class=" hover:bg-gray-600 py-1 px-2 text-xs flex items-center "
                                    @click="submitAvatarImage">
                                    <CheckCircleIcon class="h-4 w-4 mr-2" />

                                </button>
                            </div>
                        </div>
                    </div>
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
                        <Tab v-if="isMyProfile" v-slot="{ selected }" as="template">
                            <TapItem :selected="selected" :text="'MyProfile'" />
                        </Tab>
                    </TabList>

                    <TabPanels class="mt-3">

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
                        <TabPanel v-if="isMyProfile" key="posts" class="bg-white p-3 shadow">
                            <Edit :mustVerifyEmail="mustVerifyEmail" :status="status" />
                        </TabPanel>
                    </TabPanels>

                </TabGroup>
            </div>
        </div>
    </AuthenticatedLayout>




</template>
