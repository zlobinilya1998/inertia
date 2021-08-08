<template>
    <div class="bg-gray-200 h-16 flex p-5">
        <Link href="http://inertia.test/admin">Admin panel</Link>
    </div>
</template>

<script>
    import {Link} from "@inertiajs/inertia-vue";
    export default {
        name: "Header",
        components:{
            Link,
        },
    }
</script>

<style scoped>

</style>
