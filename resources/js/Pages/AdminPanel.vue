<template>
    <main-layout>
        <template #title>Admin panel</template>
        <template #content>
            <ul class="flex">
                <li class="mr-5 text-blue-600 transition cursor-pointer font-bold" :class="{'text-blue-700': currentContent === 'products'}" @click="currentContent = 'products'">Продукты</li>
                <li class="text-blue-600 transition cursor-pointer font-bold" :class="{'text-blue-700': currentContent === 'users'}" @click="currentContent = 'users'">Пользователи</li>
            </ul>
            <div class="mt-5">
                <div v-if="currentContent === 'products'">Products</div>
                <div v-else-if="currentContent === 'users'">
                    <vue-good-table :columns="columns" :rows="$page.props.users" :pagination-options="paginationOptions"/>
                </div>
            </div>

        </template>
    </main-layout>
</template>

<script>
    import MainLayout from "@/Layouts/MainLayout";
    export default {
        name: "AdminPanel",
        data:()=>({
            currentContent:'products',
            contentTabs:['products','users'],
            columns: [
                {
                    label: 'Id',
                    field: 'id',
                },
                {
                    label: 'Имя',
                    field: 'name',
                },
                {
                    label: 'Емейл',
                    field: 'email',
                },
                {
                    label: 'Дата регистрации',
                    field: 'created_at',
                },
            ],
            paginationOptions:{
                enabled: true,
                mode: 'records',
                perPage: 8,
                dropdownAllowAll: true,
                nextLabel: 'вперед',
                prevLabel: 'назад',
                rowsPerPageLabel: 'Показано пользователей',
                ofLabel: 'из',
                pageLabel: 'page', // for 'pages' mode
                allLabel: 'All',
            }
        }),
        components:{
            MainLayout,
        }
    }
</script>

<style scoped>

</style>
