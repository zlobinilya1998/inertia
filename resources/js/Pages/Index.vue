<template>
    <main-layout>
        <template #content>Content from index
            <Link href="http://inertia.test/user">Create user</Link>
            <div v-if="$page.props.users">
                <div v-for="user in $page.props.users">{{user}}</div>
            </div>
        </template>
    </main-layout>
</template>

<script>
    import { Link} from "@inertiajs/inertia-vue"
    import MainLayout from "../Layouts/MainLayout";
    export default {
        name: "Index",
        components:{
            MainLayout,Link
        }
    }
</script>

<style scoped>

</style>
