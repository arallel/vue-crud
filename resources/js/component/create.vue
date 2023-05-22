<template>
<form @submit.prevent="store">
    <input type="text" v-model="nama_category">
    <button type="submit">create</button>
</form>
</template>
<script>
import axios from 'axios';
export default {
 data(){
    return{
        nama_category:''
    }
 },
 methods: {
    store(){
        const data = {
            nama_category:this.nama_category
        }
        axios.post('./api/category', data).then(response => {
            this.$router.push('/')
        }).catch(error => {
            console.log(error)
        })
    }
 },
}
</script>