<template>
    <div class="container mx-auto p-6">
      <div class="bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-semibold text-gray-800">Dashboard</h1>
        </div>
      </div>
  </template>
  
  <script>
  export default {
    name: "Dashboard",
    methods: {
      goToBlogs() {
        this.$router.push({ name: 'blogs.index' });
      }
    }
  }
  </script>
  
  <style scoped>
  /* Você pode adicionar estilos personalizados aqui, caso necessário */
  </style>
  