<script setup>
import { router, Link, useForm } from '@inertiajs/vue3'
import { ref } from 'vue';
import PrimaryButton from '../../../Components/PrimaryButton.vue';
import TextInput from '../../../Components/TextInput.vue';
import InputLabel from '../../../Components/InputLabel.vue';
import AppLayout from '../../../Layouts/AppLayout.vue';
import NavbarCadastros from '../../NavbarCadastros.vue';


const props = defineProps(['propriedades']);
const cliente = props.propriedades.cliente;
const title = props.propriedades.title;
const form = useForm({
    _token: props.propriedades.csrf,
    id: props.propriedades.cliente.id,
    cliente_nome_fantasia: props.propriedades.cliente.cliente_nome_fantasia,
    cliente_cpf: props.propriedades.cliente.cliente_cpf
});


let editing = props.propriedades.editClienteOk;
</script>

<template>
    <AppLayout :title=title>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ title }}
            </h2>
        </template>
        <div class="py-1">
            <div class="max-w-12xl mx-auto sm:px-6 lg:px-1">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg float-left">
                    <NavbarCadastros :title=title></NavbarCadastros>
                </div>
                <div class='float-right xl:w-11/12 sm:w-12/12 mt-2'>
                    <div class=" min-h-screen bg-white overflow-hidden shadow-xl sm:rounded-lg  border-2 border-blue-500">
                        <div v-if="editing">
                            <div class="mt-1 px-2">Cliente id : {{ cliente.id }}</div>
                            <form
                                @submit.prevent="form.put(route('clientes.update', cliente.id), { onSuccess: () => editing = false })">
                                <input type="hidden" v-model=form._token>
                                <hr>
                                <div class="float-left w-full">
                                    <div class="px-2 mt-2">
                                        <div class=" mt-5 float-left px-2">
                                            <InputLabel value="Nome"></InputLabel>
                                        </div>
                                        <div class=" mt-4 float-left px-2">
                                            <TextInput v-model=form.cliente_nome_fantasia />
                                        </div>
                                    </div>
                                    <div class="px-2 mt-2">
                                        <div class=" mt-5 float-left px-2">
                                            <InputLabel value="CPF"></InputLabel>
                                        </div>
                                        <div class=" mt-4 float-left px-2 content-center">
                                            <TextInput v-model=form.cliente_cpf />
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-12 float-left px-4">
                                    <!-- <div class=" mt-4 float-left px-2"> -->
                                    <PrimaryButton class="mt-4">Save</PrimaryButton>
                                    <!-- </div> -->
                                    <!-- <div class=" mt-4 float-left px-2"> -->
                                    <button class="mt-12 px-5"
                                        @click="editing = false; form.reset(); form.clearErrors()">Cancel</button>
                                    <!-- </div> -->
                                </div>

                            </form>
                        </div>
                        <div v-else>
                            <h1>Oh não 😢</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template> 

<style>
input {
    border: 3px solid rgb(18, 163, 105);
    width: 350px;
}
</style>
