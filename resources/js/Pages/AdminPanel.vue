<template>
    <main-layout>
        <template #title>Admin panel</template>
        <template #content>
            content from panel
        </template>
    </main-layout>
</template>

<script>
    import MainLayout from "@/Layouts/MainLayout";
    export default {
        name: "AdminPanel",
        components:{
            MainLayout,
        }
    }
</script>

<style scoped>

</style>
