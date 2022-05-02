<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <Head title="Welcome" />

    <div class="relative flex items-top justify-center min-h-screen bg-green-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div v-if="canLogin" class="cursor-cell transition duration-300 ease-in-out hover:bg-violet-600 active:bg-violet-700 hover:text-green-100 hover:shadow-indigo-500 hover:shadow-2xl hidden fixed w-4/12 px-6 py-14 sm:block bg-violet-200 rounded-full  ">
            <Link v-if="$page.props.user" :href="route('dashboard')" class="cursor-cell text-gray-500  text-2xl font-thin">
                <p class="text-center cursor-cell "> Come in...</p>
            </Link>

            <template v-else>
                <div class="flex justify-around">
                <Link :href="route('login')" class="text-lg  cursor-cell ">
                    <p >Log in</p> 
                </Link>

                <Link v-if="canRegister" :href="route('register')" class="ml-4 text-lg  cursor-cell ">
                    Register
                </Link>

                </div>
            </template>
        </div>
    </div>
</template>

<style scoped>
    .bg-gray-100 {
        background-color: #f7fafc;
        background-color: rgba(247, 250, 252, var(--tw-bg-opacity));
    }

    .border-gray-200 {
        border-color: #edf2f7;
        border-color: rgba(237, 242, 247, var(--tw-border-opacity));
    }

    .text-gray-400 {
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--tw-text-opacity));
    }

    .text-gray-500 {
        color: #a0aec0;
        color: rgba(160, 174, 192, var(--tw-text-opacity));
    }

    .text-gray-600 {
        color: #718096;
        color: rgba(113, 128, 150, var(--tw-text-opacity));
    }

    .text-gray-700 {
        color: #4a5568;
        color: rgba(74, 85, 104, var(--tw-text-opacity));
    }

    .text-gray-900 {
        color: #1a202c;
        color: rgba(26, 32, 44, var(--tw-text-opacity));
    }

    @media (prefers-color-scheme: dark) {
        .dark\:bg-gray-800 {
            background-color: #2d3748;
            background-color: rgba(45, 55, 72, var(--tw-bg-opacity));
        }

        .dark\:bg-gray-900 {
            background-color: #1a202c;
            background-color: rgba(26, 32, 44, var(--tw-bg-opacity));
        }

        .dark\:border-gray-700 {
            border-color: #4a5568;
            border-color: rgba(74, 85, 104, var(--tw-border-opacity));
        }

        .dark\:text-white {
            color: #fff;
            color: rgba(255, 255, 255, var(--tw-text-opacity));
        }

        .dark\:text-gray-400 {
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--tw-text-opacity));
        }
    }
</style>
