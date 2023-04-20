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
            <th class="w-3/12" align="left">Idade</th>
            <th class="w-3/12" align="left">Genero</th>
            <th class="w-3/12" align="left">Abrir Cadastro</th>
            
        </tr>
        </thead>
        <tbody>
            <tr class="cursor-pointer">
                <td class="w-3/12">{{ dados.id }} </td>
                <td class="w-3/12">{{ dados.nome }} </td>
                <td class="w-3/12">{{ dados.idade }} anos</td>
                <td class="w-3/12">{{ dados.sexo }}</td>
                
                <td class="w-3/12"><a :href="'clientes/'+dados.id+'/edit'">Cadastro</a></td>
                <!-- DESCOBRIR COMO USAR O ROUTE -->
            </tr>
        </tbody>
        </table>
    </div>

</template>
