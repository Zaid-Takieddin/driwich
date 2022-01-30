<template>
    <admin-layout title="Dashboard">
        <template #header>
            <div class="flex justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Create a Pizza
                </h2>
                <div>
                    <Link :href="route('admin.pizzas.index')" class="px-4 py-2 bg-green-600 hover:bg-green-800 text-white rounded-lg">Back</Link>
                </div>
            </div>
        </template>

        <div class="pt-10 pl-10">
            <section class="flex">
                <form @submit.prevent="storePizza">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="w-full space-y-3">
                                <div>
                                    <label for="first-name" class="block text-sm font-medium text-gray-700">Pizza Name</label>
                                    <input v-model="form.pizzaName" type="text" autocomplete="given-name"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div>
                                    <label for="first-name" class="block text-sm font-medium text-gray-700">Pizza Ingredients</label>
                                    <input v-model="form.pizzaIngredients" type="text" autocomplete="given-name"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="first-name" class="block text-sm font-medium text-gray-700">Pizza Price</label>
                                    <input v-model="form.pizzaPrice" type="text" autocomplete="given-name"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div>
                                    <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded">Create</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </admin-layout>
</template>

<script setup>
import AdminLayout from '../../Layouts/AdminLayout.vue';
import { Link, useForm } from '@inertiajs/inertia-vue3';

const form = useForm({
    pizzaName: '',
    pizzaIngredients: '',
    pizzaPrice: ''
})

function storePizza() {
    form.post('/admin/pizzas');
}
</script>

<style>

</style>