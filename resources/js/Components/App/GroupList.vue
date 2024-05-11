<script setup>

import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue'
import GroupListItem from '@/Components/App/GroupListItem.vue';
defineProps({
    title: String,
    image: String,
    decription: String
})



</script>

<template>
    <div class="px-2 bg-white rounded border py-3">

        <div class="block lg:hidden">
            <Disclosure v-slot="{ open }">
                <DisclosureButton class="w-full">
                    <div class="flex justify-between items-center">
                        <h2 class="text-2xl font-bold px-3 mb-2">My Groups</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6" :class="open?'rotate-90 transition-all':''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                    </div>

                </DisclosureButton>
                <DisclosurePanel>
                    <GroupListItem/>
                </DisclosurePanel>
            </Disclosure>
        </div>
        <div class="hidden lg:block">
            <h2 class="text-2xl font-bold px-3">My Groups</h2>
            <GroupListItem/>
        </div>
    </div>
</template>
