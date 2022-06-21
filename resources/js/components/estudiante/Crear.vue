<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h4>Crear Estudiante</h4></div>
                <div class="card-body">
                    <form @submit.prevent="crear">

                        
                        
                        <div class="row">
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>nombre</label>
                                    <input type="text" class="form-control" v-model="estudiante.nombre">
                                </div>
                            </div>
                            
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>cantidad de creditos</label>
                                    <input type="text" class="form-control" v-model="estudiante.cantidad_de_creditos">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>nombre docente</label>
                                    <input type="text" class="form-control" v-model="estudiante.nombre_docente">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>asignatura prerrequisito</label>
                                    <input type="text" class="form-control" v-model="estudiante.asignatura_prerrequisito">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>cantidad de horas de trabajo autónomo</label>
                                    <input type="text" class="form-control" v-model="estudiante.cantidad_de_horas_de_trabajo_autónomo">
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>cantidad de horas de trabajo dirigido</label>
                                    <input type="text" class="form-control" v-model="estudiante.cantidad_de_horas_de_trabajo_dirigido">
                                </div>
                            </div>



                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>  
                        
                        


                         
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:"crear-estudiante",
    data(){
        return {
            estudiante:{
                nombre:"",
                cantidad_de_creditos:"",
                nombre_docente:"",
                asignatura_prerrequisito:"",
                cantidad_de_horas_de_trabajo_autónomo:"",
                cantidad_de_horas_de_trabajo_dirigido:""
           
            }
        }
    },
    methods:{
        async crear(){
            await this.axios.post('/api/estudiante',this.estudiante).then(response=>{
                this.$router.push({name:"mostrarEstudiantes"})
            }).catch(error=>{
                console.log(error)
            })
        }
    }
}
</script>