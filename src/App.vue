<template>
<div>
  <Navbar />
  <router-view></router-view>
</div>
</template>

<script>

import Navbar from "./components/navbar.vue";
export default {
  name: 'App',
  components: {
    Navbar,
  }
}
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap');
body{
  margin:0;
  padding:0;
  font-family: 'Fira Sans', sans-serif;
  background-color:#1C1B29;
  color:white;
}
</style>
