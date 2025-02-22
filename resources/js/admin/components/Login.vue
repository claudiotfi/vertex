<template>
  <div class="login-container">
    <form @submit.prevent="submitLogin" class="login-form">
      <h2>Login Administrativo</h2>
      <div class="form-group">
        <input 
          type="email" 
          v-model="email" 
          placeholder="Email" 
          required 
          class="form-control"
        />
      </div>
      <div class="form-group">
        <input 
          type="password" 
          v-model="password" 
          placeholder="Senha" 
          required 
          class="form-control"
        />
      </div>
      <div v-if="error" class="error-message">
        {{ error }}
      </div>
      <button type="submit" :disabled="loading">
        {{ loading ? 'Entrando...' : 'Entrar' }}
      </button>
    </form>
  </div>
</template>

<script>
import api from '../api'; // Importe a instância api.js

export default {
  name: 'Login',
  data() {
    return {
      email: '',
      password: '',
      error: null,
      loading: false
    };
  },
  created() {
    // Limpa o token existente ao entrar na página de login
    localStorage.removeItem('token');
  },
  methods: {
    async submitLogin() {
      this.loading = true;
      this.error = null;
      
      try {
        await api.get('/sanctum/csrf-cookie'); // Use api.get()
        console.log(api);
        const response = await api.post('/admin/login', { // Use api.post()
          email: this.email,
          password: this.password
        });

        const { token } = response.data;
        localStorage.setItem('token', token);
        
        this.$router.push({ name: 'dashboard' });
      } catch (error) {
        this.error = error.response?.data?.message || 'Erro ao fazer login';
      } finally {
        this.loading = false;
      }
    }
  }
}
</script>

<style scoped>
.login-container {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
}

.login-form {
  width: 100%;
  max-width: 400px;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.form-group {
  margin-bottom: 15px;
}

.form-control {
  width: 100%;
  padding: 8px;
  border: 1px solid #ddd;
  border-radius: 4px;
}

.error-message {
  color: red;
  margin-bottom: 15px;
}

button {
  width: 100%;
  padding: 10px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:disabled {
  background-color: #cccccc;
}
</style>