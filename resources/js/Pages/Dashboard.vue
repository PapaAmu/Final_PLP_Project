<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import InvoiceTable from '../Components/Invoices/InvoiceTable.vue';
import NewInvoice from '@/Components/Invoices/NewInvoice.vue';



</script>

<template>
    <Head title="Invoicing" />

    <AuthenticatedLayout class="py-1">
        <template #header>
            <h2 class="font-bold text-xl text-gray-800 leading-tight">Invoices</h2>
        </template>

        <div class="py-1">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm ">
                    <div class="p-6 text-gray-900 text-xl">Hello {{ $page.props.auth.user.name }} !. Please scroll to the bottom to to capture invoices </div>
                </div>
            </div>
            
        </div>
        
       
                  
        <InvoiceTable />
        <NewInvoice />
                

    </AuthenticatedLayout>
    
</template>
