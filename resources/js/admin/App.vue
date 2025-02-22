<template>
    <div id="app">
      <router-view></router-view>
    </div>
  </template>
  
  <script>
  export default {
    name: 'App',
    created() {
      // Verificar autenticação ao iniciar o app
      const token = localStorage.getItem('token');
      if (!token && this.$route.name !== 'login') {
        this.$router.push({ name: 'login' });
      }
    }
  }
  </script>