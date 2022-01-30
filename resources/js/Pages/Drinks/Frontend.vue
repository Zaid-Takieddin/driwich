<template>
  <Head title="Drinks" />

    <FrontLayout>
        <main class="max-w-6xl mx-auto mt-6 min-h-screen">
        <section class="bg-gray-200 dark:bg-gray-900 dark:text-white mt-4 p-2 rounded">
            <div class="m-2 p-6 text-2xl font-bold text-indigo-600 dark:text-indigo-300">
                <h1>Drinks</h1>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10 rounded">
               
                    <MovieCard v-for="drink in drinks" :key="drink.id">
                        <template #image>
                            <a href="">
                                <div class="aspect-w-2 aspect-h-3">
                                    <img class="w-250 h-250 m-2" src="../../../../public/images/drink.svg" />
                                </div>
                                <!-- <div
                                    class="absolute x-10 left-2 top-2 h-6 w-12 bg-gray-800 group-hover:bg-gray-700 text-blue-400 text-center rounded">
                                    New
                                </div> -->
                                <!-- <div class="absolute inset-0 z-10 bg-gradient-to-t from-black to-transparent"></div>
                                <div
                                    class="absolute inset-y-0 left-5 z-10 invisible group-hover:visible flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-12 w-12 text-blue-700 bg-red-700 rounded-full" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <div
                                        class="absolute transition opacity-0 duration-500 ease-in-out transform group-hover:opacity-100 group-hover:translate-x-16 group-hover:pr-2 text-white font-bold">
                                        Play</div>
                                </div> -->
                                <!-- <div
                                    class="absolute z-10 bottom-2 left-2 text-indigo-300 text-sm font-bold group-hover:text-blue-700">
                                   
                                </div> -->
                            </a>
                        </template>
                        <a href="">
                            <div class="dark:text-white font-bold hover:text-blue-400">
                                {{ drink.name }}
                            </div>
                            <div class="dark:text-gray-500 text-sm pt-2">
                                {{ drink.ingredients }}
                            </div>
                            <div class="dark:text-gray-500 text-sm pt-2">
                                ${{ drink.price / 100 }}
                            </div>
                        </a>
                    </MovieCard>
               
            </div>
        </section>
        </main>
    </FrontLayout>
</template>

<script setup>

    import { Head, Link } from '@inertiajs/inertia-vue3';
    import FrontLayout from '@/Layouts/FrontLayout';
    import MovieCard from '@/Components/MovieCard';

    defineProps({
        drinks: Array
    })
</script>
<style>

</style>