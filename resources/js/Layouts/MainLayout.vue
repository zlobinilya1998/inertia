<template>
    <div class="min-h-screen flex">
        <Sidebar/>
        <div class="flex flex-1 flex-col">
            <Header/>
            <div class="p-5 bg-gray-400 flex-1">
                <h2 v-if="$slots.title" class="font-bold mb-5">
                    <slot name="title"/>
                </h2>
                <slot name="content"/>
            </div>
        </div>
    </div>
</template>

<script>
    import Sidebar from "@/components/Sidebar";
    import Header from "@/components/Header";
    export default {
        components:{
            Sidebar,Header
        }
    }
</script>

<style scoped>

</style>
