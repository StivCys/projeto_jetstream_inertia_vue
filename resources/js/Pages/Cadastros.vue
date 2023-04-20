<script setup>
 import AppLayout from '@/Layouts/AppLayout.vue';
 import Welcome from '@/Components/Welcome.vue';
 import NavLink from '../Components/NavLink.vue';
 import Clientes from './clientes/Clientes.vue';
 
 const props = defineProps(['propriedades']);

</script>

<template>
    <AppLayout title="Cadastros">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Cadastros
            </h2>
        </template>

        <div class="px-1 w-full ">
            <!-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> -->
            <div class="float-left  mt-2 sm:w-full md:w-12/12 xl:w-1/12 ">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg border-2 border-red-500 ">
                    <!-- <h5>Escolha um menu abaixo</h5> -->
                    <NavLink :href="route('clientes.index')">
                        <i class="fa-solid fa-user text-orange-700"> &nbsp; </i>  Clientes
                        
                     </NavLink>
                    <br>
                    <!--
                    <NavLink>
                        <i class="fa-solid fa-truck-field-un text-blue-700"> &nbsp; </i> Forncedores
                    </NavLink>
                    <br>
                    <NavLink>
                        <i class="fa-solid fa-truck-fast text-green-700"> &nbsp; </i>Transportadoras
                    </NavLink>
                    <br>
                    <NavLink>
                        <i class="fa-solid fa-list text-yellow-700">  &nbsp;  </i> Produtos
                    </NavLink>
                    <br>
                    <NavLink>
                        <i class="fa-solid fa-user text-red-700">  &nbsp; </i>Usuarios
                    </NavLink>
                    <br>
                    <NavLink>
                        <i class="fa-solid fa-address-card text-violet-700"> &nbsp; </i>Perfis de Usuario
                    </NavLink>
                    <br>
                    <NavLink>
                        <i class="fa-solid fa-link text-orange-500">&nbsp;</i> Vincular Perfis
                    </NavLink> -->
                </div>
            </div>
            <div class='float-right xl:w-11/12 sm:w-12/12 t-0 p-2.5 mt-0'>
                <div  class=" min-h-screen bg-white overflow-hidden shadow-xl sm:rounded-lg  border-2 border-blue-500">
                    <div v-if="props.propriedades.clienteOk">
                        <Clientes :dados="props.propriedades.cliente">
                        </Clientes>
                    </div>
                     
                    
                </div>
            </div>
        </div>
    </AppLayout>
</template>
