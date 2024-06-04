<script setup>
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'
import {Link} from '@inertiajs/vue3'

const form = reactive({
    title: '',
    content: '',

})
function submit() {
    router.post('/posts', form)
}

</script>
<script>

import MainLayout from "@/Layouts/MainLayout.vue";
export default {
    layout: MainLayout,
    props: [
        'errors'
    ],
}
</script>
<template>
    <div class="w-96 mx-auto pt-8">
        <h1 class="text-lg mb-8">Create</h1>
        <Link :href="route('posts.index')" class="text-red-500 text-lg mb-8">Back</Link>
        <form @submit.prevent="submit">
            <div  class="mb-4">
                <input id="title" v-model="form.title"  class="w-full rounded-full border-gray-300" type="text" placeholder="title">
                <div v-if="errors.title">{{errors.title}}</div>
            </div>
            <div>
                <textarea id="content" v-model="form.content" class="w-full rounded-full border-gray-300" placeholder="content"></textarea>
                <div v-if="errors.content">{{errors.content}}</div>
            </div>
            <div class="mb-4">
                <button  class="ml-auto hover:bg-white hover:text-red-500 border border-red-500 block p-2 w-32 bg-red-600 rounded-md text-center text-white" type="submit">Store</button>
            </div>
        </form>
    </div>
</template>

<style scoped>

</style>
