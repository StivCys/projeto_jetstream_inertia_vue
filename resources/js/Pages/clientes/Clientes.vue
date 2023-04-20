<script >
const nome='';
// clienteOk='false';
export default{
    props:['dados'],
}
</script>
<template>
    <div>
        Lista de Clientes  
        <table width='100%' class="w-12/12 border-2" >
        <thead>
        <tr>
            <th class="w-3/12" align="left">id</th>
            <th class="w-3/12" align="left">Nome</th>
            <th class="w-3/12" align="left">cpf/cnpj</th>
            <th class="w-3/12" align="left">Pre cadastro</th>
            <th class="w-3/12" align="left">Abrir Cadastro</th>
            
        </tr>
        </thead>
        <tbody>

            <tr v-for="(dado,index ) in dados" class="cursor-pointer border-2">
                <td class="w-3/12">{{ dado.id }} </td>
                <td class="w-3/12">{{ dado.cliente_nome_fantasia }} </td>
                <td class="w-3/12">{{ dado.cliente_cpf }} </td>
                <td class="w-3/12">{{ dado.cliente_flag_pre_cadastro }}</td>
                
                <td class="w-3/12"><a :href="'clientes/'+dados.id+'/edit'">Cadastro</a></td>
                <!-- DESCOBRIR COMO USAR O ROUTE -->
            </tr>
        </tbody>
        </table>
    </div>

</template>
