<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
});
</script>

<template>
    <Head title="Invoice System" />
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        <div
            class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white"
        >
            <div class="relative w-full lg:max-w-7xl">
                <header class="grid grid-cols-2 items-center gap-2 py-2 lg:grid-cols-3 bg-gray-900">
                    <div class="flex lg:justify-center lg:col-start">
                        <span>THEMBA REAL</span>
                        <span> LUKHELE</span>
                    </div>
                    <nav v-if="canLogin" class="-mx-3 flex justify-end">
                        <Link
                            v-if="$page.props.auth.user"
                            :href="route('dashboard')"
                            class="px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Dashboard
                        </Link>

                        <template v-else>
                            <Link
                                :href="route('login')"
                                class="px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Log in
                            </Link>

                            <Link
                                v-if="canRegister"
                                :href="route('register')"
                                class="px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Register
                            </Link>
                        </template>
                    </nav>
                </header>

                <main class="mt-6">
                    <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                        <div
                            id="about-card"
                            class="flex flex-col items-start gap-6 overflow-hidden bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 lg:p-10 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                        >
                            <h2 class="text-xl font-bold">About Invoice System</h2>
                            <p class="text-base">
                                The Invoice System is a web application built using Laravel and Vue.js. It allows users to register and log in to a dashboard where they can view, create, and manage invoices. This system uses MariaDB & MySQL for database management and is styled with CSS and Tailwind CSS.
                            </p>
                            <p class="text-base">
                                Key features include user authentication, an invoice table displaying all invoices, and the ability to create new invoices. The project leverages the Faker library to generate sample data.
                            </p>
                        </div>

                        <div
                            id="features-card"
                            class="flex flex-col items-start gap-4 bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                        >
                            <h2 class="text-xl font-bold">Features</h2>
                            <ul class="list-disc pl-5">
                                <li>User registration and authentication</li>
                                <li>Dashboard with invoice table</li>
                                <li>Create and save new invoices</li>
                                <li>Sample data generation using Faker</li>
                            </ul>
                        </div>

                        <div
                            id="tech-card"
                            class="flex flex-col items-start gap-4 bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                        >
                            <h2 class="text-xl font-bold">Technologies Used</h2>
                            <ul class="list-disc pl-5">
                                <li>Laravel</li>
                                <li>Vue.js</li>
                                <li>MariaDB & MySQL</li>
                                <li>Git & GitHub</li>
                                <li>CSS & Tailwind CSS</li>
                                <li>JavaScript & Blade</li>
                            </ul>
                        </div>

                        <div
                            id="contact-card"
                            class="flex flex-col items-start gap-4 bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800"
                        >
                            <h2 class="text-xl font-bold">Contact</h2>
                            <p class="text-base">
                                For questions or support, please contact Themba Real Lukhele at <a href="mailto:realtee.lukhele@gmail.com" class="text-blue-500">realtee.lukhele@gmail.com</a>.
                            </p>
                        </div>
                    </div>
                </main>

                <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                    Themba Real Lukhele : <a href="mailto:realtee.lukhele@gmail.com" class="text-blue-500">realtee.lukhele@gmail.com</a>
                </footer>
            </div>
        </div>
    </div>
</template>
