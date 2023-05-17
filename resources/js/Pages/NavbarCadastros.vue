<script setup>
// import { router, Link } from '@inertiajs/vue3'
import NavLinkMenu from '../Components/NavLinkMenu.vue';

const prop = defineProps(['title'])
const title = prop.title
</script>


<template >
    <div class="px-2 float-left max-w-2">
        <div class="float-left  mt-2">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg border-2 border-red-500 ">
                <div class="border-b-2 pb-2">
                    <NavLinkMenu :href="route('clientes.index')" :active="route().current('clientes.index')">
                        <i class="fa-solid fa-user text-orange-700"> &nbsp; </i> Clientes
                    </NavLinkMenu>
                </div>
                <br>
                <div class="border-b-2 pb-2">
                    <NavLinkMenu>
                        <i class="fa-solid fa-truck-field-un text-blue-700"> &nbsp; </i> Forncedores
                    </NavLinkMenu>
                </div>
                <br>
                <div class="border-b-2 pb-2">
                    <NavLinkMenu>
                        <i class="fa-solid fa-truck-fast text-green-700"> &nbsp; </i>Transportadoras
                    </NavLinkMenu>
                </div>
                <br>
                <div class="border-b-2 pb-2">
                    <NavLinkMenu>
                        <i class="fa-solid fa-list text-yellow-700"> &nbsp; </i> Produtos
                    </NavLinkMenu>
                </div>
                <br>
                <div class="border-b-2 pb-2">
                    <NavLinkMenu>
                        <i class="fa-solid fa-user text-red-700"> &nbsp; </i>Usuarios
                    </NavLinkMenu>
                </div>
                <br>
                <div class="border-b-2 pb-2">
                    <NavLinkMenu>
                        <i class="fa-solid fa-address-card text-violet-700"> &nbsp; </i>Perfis de Usuario
                    </NavLinkMenu>
                </div>
                <br>
                <div class="border-b-2 pb-2">
                    <NavLinkMenu>
                        <i class="fa-solid fa-link text-orange-500">&nbsp;</i> Vincular Perfis
                    </NavLinkMenu>
                </div>
            </div>
        </div>
    </div>
</template>