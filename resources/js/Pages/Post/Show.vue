
<script setup>
import {Link} from '@inertiajs/vue3'

defineProps({post: Object})

</script>
<script>

    import MainLayout from "@/Layouts/MainLayout.vue";
    export default {
        layout: MainLayout,
    }
</script>
<template>
        <h1 class="text-lg mb-8">Show</h1>
        <Link :href="route('posts.index')" class="text-red-500 text-lg mb-8">Back</Link>
        <div class="mt-1 pt-8 pb-8 border-t border-b border-gray-300" v-if="post">
                <div>id: {{post.id}}</div>
                <div>title: {{post.title}}</div>
                <div>content: {{post.content}}</div>
                <div class="text-sm text-right">{{post.date}}</div>
        </div>
</template>

<style scoped>

</style>
