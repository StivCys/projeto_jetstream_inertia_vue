<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import NavbarCadastros from './NavbarCadastros.vue';
import NavLink from '../Components/NavLink.vue';
//  import Clientes from './appAdmin/clientes/Clientes.vue';
//  import EditCliente from './appAdmin/clientes/EditCliente.vue'; 
const props = defineProps(['propriedades']);
const title = props.propriedades.title;

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
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <NavbarCadastros :title=title></NavbarCadastros>
                </div>
            </div>
        </div>

    </AppLayout>
</template>
