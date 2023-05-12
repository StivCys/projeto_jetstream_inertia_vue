<script setup>
// import { router, Link } from '@inertiajs/vue3'
import NavLink from '../Components/NavLink.vue';

const prop = defineProps(['title'])
const title = prop.title
</script>


<template >
    <div class='text-center w-full float-left'>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ title}}
        </h2>
    </div>
    <div class="px-2 float-left max-w-2">
        <div class="float-left  mt-2">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg border-2 border-red-500 ">
                <NavLink :href="route('clientes.index')">
                    <i class="fa-solid fa-user text-orange-700"> &nbsp; </i> Clientes
                </NavLink>
                <br>
                <NavLink>
                    <i class="fa-solid fa-truck-field-un text-blue-700"> &nbsp; </i> Forncedores
                </NavLink>
                <br>
                <NavLink>
                    <i class="fa-solid fa-truck-fast text-green-700"> &nbsp; </i>Transportadoras
                </NavLink>
                <br>
                <NavLink>
                    <i class="fa-solid fa-list text-yellow-700"> &nbsp; </i> Produtos
                </NavLink>
                <br>
                <NavLink>
                    <i class="fa-solid fa-user text-red-700"> &nbsp; </i>Usuarios
                </NavLink>
                <br>
                <NavLink>
                    <i class="fa-solid fa-address-card text-violet-700"> &nbsp; </i>Perfis de Usuario
                </NavLink>
                <br>
                <NavLink>
                    <i class="fa-solid fa-link text-orange-500">&nbsp;</i> Vincular Perfis
                </NavLink>
            </div>
        </div>
    </div>
</template>