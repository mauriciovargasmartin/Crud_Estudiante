<template>

<div class="container">

    <div class="row">
        <div class="col-12 mb-2">
            
            <router-link :to='{name:"crearEstudiante"}' class="btn btn-success"><i class="fas fa-plus-circle"></i></router-link>
        </div>
        <div class="col-12">             
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="bg-primary ">
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Cantidad de creditos</th>
                                    <th>Nombre docente</th>
                                    <th>Asignatura prerrequisito</th>
                                    <th>Cantidad de horas de trabajo autónomo</th>
                                    <th>Cantidad de horas de trabajo dirigido</th>
                                    <th>Acciones</th>



                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="estudiante in estudiantes" :key="estudiante.id">
                                    <td>{{ estudiante.id }}</td>
                                    <td>{{ estudiante.nombre }}</td>
                                    <td>{{ estudiante.cantidad_de_creditos }}</td>
                                    <td>{{ estudiante.nombre_docente }}</td>
                                    <td>{{ estudiante.asignatura_prerrequisito }}</td>
                                    <td>{{ estudiante.cantidad_de_horas_de_trabajo_autónomo }}</td>
                                    <td>{{ estudiante.cantidad_de_horas_de_trabajo_dirigido }}</td>    



                                    <td>
                                       
                                        <router-link :to='{name:"editarEstudiante",params:{id:estudiante.id}}' class="btn btn-info"><i class="fas fa-edit"></i></router-link>
                                        <a type="button" @click="borrarEstudiante(estudiante.id)" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            
                        </table>
                    </div>                          
        </div>
    </div>

 </div>  
</template>

<script>
export default {
    name:"estudiantes",
    data(){
        return {
            estudiantes:[]
        }
    },
    mounted(){
        this.mostrarEstudiantes()
    },
    methods:{
        async mostrarEstudiantes(){
            await this.axios.get('/api/estudiante').then(response=>{
                this.estudiantes = response.data
            }).catch(error=>{
                console.log(error)
                this.estudiante = []
            })
        },
        borrarEstudiante(id){
            if(confirm("¿Confirma eliminar el estudiante?")){
                this.axios.delete(`/api/estudiante/${id}`).then(response=>{
                    this.mostrarEstudiantes()
                }).catch(error=>{
                    console.log(error)
                })
            }
        }
    }
}
</script>