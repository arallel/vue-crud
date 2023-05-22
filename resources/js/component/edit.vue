<template>
    <form @submit.prevent="update">
        <input type="text" v-model="category.nama_category">
        <button type="submit">create</button>
    </form>
    </template>
    <script>
    import axios from 'axios';
    export default {
     data(){
        return{
            category:{
                id:'',
                nama_category:''
            }
        }
     },
     methods: {
        getdata() {
            axios
                .get('/api/category/' + this.$route.params.id)
                .then(response => {
                    this.category = response.data;
                })
                .catch(error => {
                    console.log(error);
                });
        },
        update(){
            axios.put('/api/category/' + this.category.id,this.category)
            .then(response => {
                this.$router.push('/')
            }).catch(error => {
                console.log(error)
            })
        }
     },
     created(){
       this.getdata(); 
     }
    }
    </script>