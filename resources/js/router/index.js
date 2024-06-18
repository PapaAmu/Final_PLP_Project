import { createRouter, createWebHistory } from 'vue-router';
import invoiceIndex from '../Components/Invoices/Index.vue';
import NotFound from '@/Components/NotFound.vue';


const routes = [
    {
        path:'/',
        component: NotFound
    },
    {
        path:'/:pathMatch(.*)*',
        component:invoiceIndex
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes
});


export default router;