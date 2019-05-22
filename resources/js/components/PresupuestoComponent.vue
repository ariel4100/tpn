<template>
    <div class="col-md-6">
        <div class="row" v-for="(item,index) in bultos" :key="index">
            <div class="md-form col-md-6">
                <input type="text" id="bulto" v-model="item.dimension" class="form-control" :placeholder="'Dimensiones del bulto '+(index+1)">
            </div>
            <div class="md-form col-md-6">
                <input type="text" v-model="item.peso" class="form-control" :placeholder="'Peso del bulto '+(index+1)">
            </div>
        </div>
        <a href="" @click.prevent="addBultos" class="btn btn-outline-danger">añadir bulto</a>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                bultos:[
                    {
                        dimension: '',
                        peso: '',
                    }
                ],
                form: new FormData
            }
        },

        methods:{
            addBultos(){
                console.log('dsd');
                this.bultos.push({
                    dimension: '',
                    peso: '',
                });
            },

        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
