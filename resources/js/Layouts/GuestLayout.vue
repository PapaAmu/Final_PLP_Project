<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div>
            <Link href="/">
                <ApplicationLogo />
            </Link>
        </div>

        <div
            class="w-full bg-gray-400 sm:max-w-md mt-6 px-6 py-4 shadow-md overflow-hidden"
        >
            <slot />
        </div>
    </div>
</template>
