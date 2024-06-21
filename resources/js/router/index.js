import { createRouter, createWebHistory } from 'vue-router';
import InvoiceTable from '../Components/Invoices/InvoiceTable.vue';
import NotFound from '@/Components/NotFound.vue';
import NewInvoices from '@/Pages/NewInvoices.vue';

const routes = [
    {
        path: '/',
        name: 'Invoices',
        component: InvoiceTable,
    },
    {
        path: '/NewInvoices',
        name: 'NewInvoices',
        component: NewInvoices,
    },
    {
        path: '/:pathMatch(.*)*',
        name: 'NotFound',
        component: NotFound,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
