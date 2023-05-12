<script setup>
 import AppLayout from '@/Layouts/AppLayout.vue';
 import Welcome from '@/Components/Welcome.vue';
 import NavbarCadastros from './NavbarCadastros.vue';
 import NavLink from '../Components/NavLink.vue';
//  import Clientes from './appAdmin/clientes/Clientes.vue';
//  import EditCliente from './appAdmin/clientes/EditCliente.vue'; 
 const props = defineProps(['propriedades']);
 const title=props.propriedades.title;
    
</script>

<template>
    <AppLayout :title=title>
        <NavbarCadastros :title=title ></NavbarCadastros>
    </AppLayout>
</template>
