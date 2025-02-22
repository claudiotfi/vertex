import '../bootstrap';

import axios from 'axios';
import { createApp } from 'vue';
import router from './router';
import App from './app.vue';

// Configura a URL base para as requisições
axios.defaults.baseURL = '/api';

// Garante que o Axios envie os cookies nas requisições
axios.defaults.withCredentials = true;

// Adiciona o token no cabeçalho Authorization para as requisições autenticadas
axios.defaults.headers.common['Accept'] = 'application/json';

// Iniciar o Vue e montar a aplicação
createApp(App)
    .use(router)
    .mount('#app');

