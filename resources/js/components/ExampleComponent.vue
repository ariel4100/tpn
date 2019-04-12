<template>
    <div class="container">
        <a href="" class="btn btn-primary">Añadir</a>
        <section class="mb-4">
                <!-- Material input -->
                <div class="md-form">
                    <input type="text" id="form1" class="form-control">
                    <label for="form1">Titulo</label>
                </div>
                <!-- Material input -->
                <div class="md-form">
                    <input type="text" id="form1" class="form-control">
                    <label for="form1">orden</label>
                </div>
                <!-- Material input -->
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
            <a @click.prevent="addSlider(slider)" class="btn btn-outline-info">Enviar</a>
        </section>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Imagen</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Orden</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!--<tr  v-for="item in slider">
                        <td><img src="{{  item.image }}" style="width: 150px"></td>
                        <td>{{ item.title }}</td>
                        <td>{{ item.order }}</td>
                        <td>
                            <a class="btn btn-rounded" href=""><i class="material-icons left">edit</i></a>
                            <a class="btn btn-rounded" href=""><i class="material-icons left">delete</i></a>
                        </td>
                    </tr>

                    <tr v-if="!slider.length">
                        <td>No hay registros</td>
                    </tr>-->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
          return{
              slider:[],

              url : document.__API_URL
          }
        },
        created(){
            this.getSlider()
            //this.saveData();
            /*this.getItemsOrderBy();*/
        },
        /*mounted() {
            console.log('Component mounted.')
        }*/
        methods:{
            getSlider(){
                axios.get(this.url+`/api/slider`)
                    .then(response => {
                        console.log(response);
                        //this.posts = response.data
                    })
                    .catch(e => {
                        this.errors.push(e)
                    })
            },
            addSlider(item){
                axios.post(this.url+`/api/slider/crear`,this.slider)
                    .then(response => {
                        console.log(response);
                        //this.posts = response.data
                    })
                    .catch(e => {
                        this.errors.push(e)
                    })
            },

        }
    }
</script>
