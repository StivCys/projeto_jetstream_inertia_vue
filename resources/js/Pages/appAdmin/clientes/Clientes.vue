<script setup>
import AppLayout from '../../../Layouts/AppLayout.vue';
import Clientes from './Clientes.vue';
import NavbarCadastros from '../../NavbarCadastros.vue';
const client_list = defineProps(['propriedades']);
const clientes = client_list.propriedades.clientes;
const title=client_list.propriedades.title;
// console.log(JSON.stringify(clientes));
const ok = true;
</script>
<template>
    <AppLayout :title=title>
        <NavbarCadastros :title=title></NavbarCadastros>
        <div class='space-x-0.5 float-right xl:w-11/12 sm:w-12/12 t-0 p-2.5 mt-0'>
            <div class=" min-h-screen bg-white overflow-hidden shadow-xl sm:rounded-lg  border-2 border-blue-500">
                <div v-if="ok">
                    <!-- <Clientes :cliente_lista=clientes :cliOk="ok">
                    </Clientes> -->
                    <div class="px-2">
                        <table width='100%' class="w-12/12 border-2">
                            <thead>
                                <tr>
                                    <th class="w-1/12 text-center " align="left">id</th>
                                    <th class="w-2/12 text-center " align="left">Nome</th>
                                    <th class="w-2/12 text-center " align="left">cpf/cnpj</th>
                                    <th class="w-2/12 text-center " align="left">Pre cadastro</th>
                                    <th class="w-2/12 text-center " align="left">Abrir Ficha</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(clie, index ) in clientes" class="cursor-pointer border-2">
                                    <td class="1-2/12 text-center">{{ clie.id }} </td>
                                    <td class="w-2/12 text-center">{{ clie.cliente_nome_fantasia }} </td>
                                    <td class="w-2/12 text-center">{{ clie.cliente_cpf }} </td>
                                    <td class="w-2/12 text-center">{{ clie.cliente_flag_pre_cadastro }}</td>
                                    <td class="w-2/12 text-center"><a :href="route('clientes.edit',clie.id)">Ficha</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div v-else>
                    sss
                </div>
            </div>
        </div>
    </AppLayout>
</template>


<style>
.titulo_frame {
    text-align: center;
    font-size: 2.0em;
}
</style>