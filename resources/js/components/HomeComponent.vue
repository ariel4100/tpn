<template>
    <div class=" ">
        <div class="row">
            <div class="col-md-4 d-flex align-items-center">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" @change="imageChanged" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="md-form">
                    <input type="text" id="title" placeholder="Nombre" v-model="home.title" class="form-control"  >
                </div>
            </div>
            <div class="col-md-4">
                <div class="md-form input-group mb-3">
                    <input type="text" class="form-control" v-model="home.order" placeholder="Orden" aria-describedby="order">
                    <div class="input-group-append">
                        <button class="btn btn-md btn-secondary m-0 px-3" @click.prevent="addHome(home)" type="button" id="order">Agregar</button>
                    </div>
                </div>
            </div>
        </div>
        <img :src="home.image" width="100px" height="100px">
        <div class="row" v-for="item in lista">
            <div class="col-md-4">
                <img :src="item.image" width="100px" height="100px" >
            </div>
            <div class="col-md-4">
                <div class="md-form">
                    <input type="text" placeholder="Nombre" v-model="item.title" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="md-form input-group mb-3">
                    <input type="text" class="form-control" v-model="item.order" placeholder="Orden">
                    <div class="input-group-append">
                        <button class="btn btn-md btn-danger m-0 px-3" @click.prevent="deleteHome(item)" type="button">X</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:['seccion','tipo'],
        data(){
          return{
              home:{
                  type: this.tipo,
                  section: this.seccion,
                  title: '',
                  order: '',
                  image: '',
              },

              lista:[],
              url : document.__API_URL
          }
        },
        created(){
            this.getHome();
        },
        /*mounted() {
            console.log('Component mounted.')
        }*/
        methods:{
            imageChanged(e){
                console.log(e.target.files[0]);
              let fileReader = new FileReader();
              fileReader.readAsDataURL(e.target.files[0]);
              fileReader.onload = (e) => {
                  this.home.image = e.target.result;
              }
              console.log(this.home)
            },

            addHome(item){

                console.log(item)
                axios.post(this.url+`/api/adm/home`,this.home)
                    .then(response => {
                        console.log(response);
                        this.getHome();
                    })
                    .catch(e => {
                        this.errors.push(e)
                    })
            },
            getHome(){
                axios.get(this.url+`/api/adm/home`)
                    .then(response => {
                        //console.log(response);
                        this.lista = response.data
                    })
                    .catch(e => {
                        this.errors.push(e)
                    })
            },
            deleteHome(item){
                //console.log(item)
                axios.post(this.url+`/api/adm/home/destroy`,item)
                    .then(response => {
                        //console.log(response);
                        this.getHome();
                    })
                    .catch(e => {
                        this.errors.push(e)
                    })
            },
        }
    }
</script>
