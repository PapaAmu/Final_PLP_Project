<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import NewInvoice from '@/Components/Invoices/NewInvoice.vue';




</script>

<template>
    <Head title="New Invoice" />

    <AuthenticatedLayout class="py-1">
        
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Back</h2>
        </template>

        <div class="py-1">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm ">
                    <div class="p-6 text-gray-900 text-xl">Welcome {{ $page.props.auth.user.name }} ! You are logged in to Billing Invoice system</div>
                </div>
            </div>
            
        </div>
        
       
                  
        <NewInvoice />
                

    </AuthenticatedLayout>
    
</template>
