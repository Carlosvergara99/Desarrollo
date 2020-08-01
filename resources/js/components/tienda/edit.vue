<template>
<div>
        <h3 class="text-center">Actualizar Tienda</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateTienda">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" v-model="tienda.nombre">
                         <span v-if="errors.nombre" class="text-danger">{{errors.nombre[0]}}</span>
                    </div>
                    <div class="form-group">
                        <label>Fecha de apertura</label>
                        <input type="date" class="form-control" v-model="tienda.fecha_de_apertura">
                        <span v-if="errors.fecha_de_apertura" class="text-danger">{{errors.fecha_de_apertura[0]}}</span>

                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <router-link to="/" tag="button" class="btn btn-default">Cancelar</router-link>

                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
           return{
               tienda:{},
               errors:[]
           }
       },
       mounted(){
            axios.get(`api/tienda/${this.$route.params.id}/edit`).then(response =>{
                this.tienda =response.data
            })

       },
        methods:{
            updateTienda(){
                this.errors =[]
                 const prams ={
                    nombre :this.tienda.nombre,
                    fecha_de_apertura :this.tienda.fecha_de_apertura
                }
                axios.put(`api/tienda/${this.$route.params.id}`,prams)
                    .then(response =>{
                    this.$router.push({name: 'home'} )
                  toastr.success('la tienda ha sido actualizada con exito!');
                }).catch(error => {
                    if (error.response.sataus = 422) {
                      this.errors =error.response.data.errors
                    }
                    toastr.error('Error');
                })
                 
            }  
        }
    }
</script>