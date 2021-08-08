<template>
    <main-layout>
        <template #content>Content from index</template>
    </main-layout>
</template>

<script>
    import MainLayout from "../Layouts/MainLayout";
    export default {
        name: "Index",
        components:{
            MainLayout,
        }
    }
</script>

<style scoped>

</style>
