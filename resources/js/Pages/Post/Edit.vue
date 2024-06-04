<script setup>
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'
import {Link} from '@inertiajs/vue3'

</script>
<script>

import MainLayout from "@/Layouts/MainLayout.vue";
export default {
    layout: MainLayout,

    props:[
      'post'
    ],
    data(){
        return {
            id: this.post.id,
            title: this.post.title,
            content: this.post.title,
        }
    },
    methods: {
        update() {
            this.$inertia.patch(`/posts/${this.id}`, {title: this.title, content: this.content})
        }
    }
}


</script>
<template>
    <div class="w-96 mx-auto pt-8">
        <h1 class="text-lg mb-8">Edit</h1>
        <Link :href="route('posts.index')" class="text-red-500 text-lg mb-8">Back</Link>
        <form @submit.prevent="update">
            <div  class="mb-4">
                <input id="title" v-model="title"  class="w-full rounded-full border-gray-300" type="text" placeholder="title">
            </div>
            <div>
                <textarea id="content" v-model="content" class="w-full rounded-full border-gray-300" placeholder="content"></textarea>
            </div>
            <div class="mb-4">
                <button  class="ml-auto hover:bg-white hover:text-red-500 border border-red-500 block p-2 w-32 bg-red-600 rounded-md text-center text-white" type="submit">Update</button>
            </div>
        </form>
    </div>
</template>

<style scoped>

</style>
