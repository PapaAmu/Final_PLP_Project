<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import Invoice from '@/Components/Invoice.vue';

import { onMounted, ref } from 'vue';
import axios from 'axios';

let invoices = ref([])

onMounted(async () => {
    getInvoices()
})


const getInvoices = async () => {
    let response = await axios.get("/api/get_all_invoices")
    console.log('response', response)
}

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout class="py-1">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        <div class="py-1">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 text-xl">Welcome {{ $page.props.auth.user.name }} ! You are logged in to Billing Invoice system</div>
                </div>
            </div>
            
        </div>
        
                  
        
                

    </AuthenticatedLayout>
    <Invoice />
</template>
