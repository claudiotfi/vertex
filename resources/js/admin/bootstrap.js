/**
import axios from 'axios';

// Configuração global do Axios
window.axios = axios;
window.axios.defaults.baseURL = '/api';
window.axios.defaults.withCredentials = true;
window.axios.defaults.headers.common['Accept'] = 'application/json';
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Adiciona o token em todas as requisições se existir
const token = localStorage.getItem('token');
if (token) {
    axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;
}

// Interceptor para tratamento de erros
axios.interceptors.response.use(
    response => response,
    error => {
        if (error.response.status === 401) {
            localStorage.removeItem('token');
            window.location.href = '/admin/login';
        }
        return Promise.reject(error);
    }
);
*/

import axios from 'axios';

window.axios = axios;

// Configuração base do axios
axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
axios.defaults.withCredentials = true;
axios.defaults.baseURL = '/api';

// Interceptor para tratar erros
axios.interceptors.response.use(
    response => response,
    error => {
        console.error('Axios error:', error);
        return Promise.reject(error);
    }
);