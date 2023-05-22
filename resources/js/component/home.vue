<template>
    <router-link to="/create">Create</router-link>
  <table>
    <tr>
      <th>No</th>
      <th>nama category</th>
      <th>aksi</th>
    </tr>
    <tbody v-for="(category, index) in categorys" :key="category.id">
      <tr>
        <td>{{ index + 1 }}</td>
        <td>{{ category.nama_category }}</td>
        <td>
            <router-link :to="{ name: 'edit', params:{ id:category.id} }">edit</router-link>
            <button @click="deletedata(category.id)">Hapus</button>
        </td>
      </tr>
    </tbody>
  </table>
</template>
<script>
import axios from "axios";

export default {
  data() {
    return {
      categorys: [],
    };
  },
  methods: {
    getdata() {
      axios
        .get("./api/category")
        .then((response) => {
          this.categorys = response.data;
        })
        .catch((error) => {
          console.log(error);
        });
    },
    deletedata(id){
        axios.delete('/api/category/' + id)
        .then(response => {
            window.location.reload();
        }).catch(error => {
            console.log(error)
        })
    }
  },
  created() {
    this.getdata();
  },
};
</script>
