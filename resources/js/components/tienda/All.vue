<template>

    <div >
    
          <div class="col-md-12">
            <div class="card">
             
              <div class="card-header">
                 <h3 class="card-title">Registros de  Tienda </h3>
                 
                 <router-link to="/tiendaAdd" tag="button" class="btn btn-success">Crear Tienda</router-link>

                 </div>
              </div>

            <table class="table table-striped p-0  table-bordered">
                <thead>
                  <tr>
                     <th scope="col">id</th>
                     <th scope="col">Nombre</th>
                     <th scope="col">Fecha de apertura </th>
                     <th scope="col-2">Accion</th>
                  </tr>
                 </thead>
                <tbody>
                    <tr v-for="(item , index) in tiendas" :key="index">
                         <td>{{item.id}}</td>
                         <td>{{item.nombre}}</td>
                         <td>{{formato(item.fecha_de_apertura)}}</td>
                         <td>
                           <router-link :to="{name: 'tienda', params: { id: item.id }}" class="btn btn-primary">Edit
                           </router-link>
                            <button class="btn btn-danger" @click="deleteTienda(item.id)">Delete</button>

                          </td>
                          
                   </tr>
                 </tbody>
               </table>
            </div>
        </div>



         
     
 </template>
<script>
  import moment  from 'moment'
    export default {
        mounted() {
            this.getDatos();
        },
        data(){
            return{
                tiendas: [],
                editMode: false,
            }
        },
         methods:{
             formato(date){
               return moment(date,'YYYY-MM-DD').format('DD-MM-YYYY');
             },
            getDatos(){
            var urlTienda ='api/tienda';
            axios.get(urlTienda).then(response =>{
                this.tiendas =response.data
            })
            },
            deleteTienda(id){
                 if(confirm("Esta seguro de Eliminar la  tienda")){
                   axios.delete(`api/tienda/${id}`)
                    .then(resp =>{
                        let i = this.tiendas.map(item => item.id).indexOf(id);
                         this.tiendas.splice(i, 1)
                        toastr.success('la tienda ha sido eliminada con exito!');
                     })
                 }
            }
        }
       
    }

</script>
