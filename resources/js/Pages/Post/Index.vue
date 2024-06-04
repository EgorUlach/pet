
<script setup>
import {Link} from '@inertiajs/vue3'

defineProps({posts: Object})

</script>
<script>

import MainLayout from "@/Layouts/MainLayout.vue";
export default {
    layout: MainLayout,
    methods: {
        deletePost(id){
            this.$inertia.delete(`/posts/${id}`)
        }
    }
}
</script>
<template>
    <div class="w-96 mx-auto pt-8">
        <h1 class="text-lg mb-8">Posts</h1>
        <div class="mb-5">
            <Link :href="route('posts.create')" class="hover:bg-white hover:text-red-500 border border-red-500 block p-2 w-32 bg-red-600 rounded-md text-center text-white">Add Post</Link>
        </div>
        <div v-if="posts">
            <div class="mt-8 pt-8 border-t border-gray-300" v-for="post in posts">
                <div>Number: {{post.id}}</div>
                <div>title: {{post.title}}</div>
                <div>content: {{post.content}}</div>
                <div class="text-sm text-right">{{post.date}}</div>
                <div class="text-sm text-right">
                    <Link class="text-red-500" :href="route('posts.show', post.id)">Show</Link>
                </div>
                <div class="text-sm text-right">
                    <Link class="text-red-500" :href="route('posts.edit', post.id)">Edit</Link>
                </div>
                <div class="text-sm text-right">
                   <a @click="deletePost(post.id)" class="text-red-900">Delete</a>
                </div>

            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
