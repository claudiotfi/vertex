import axios from 'axios';

window.axios = axios;
// Configuração base do axios
axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
axios.defaults.withCredentials = true;
axios.defaults.baseURL = '/api';

// resources/js/admin/bootstrap.js
function getCsrfCookie() {
    return axios.get('/api/sanctum/csrf-cookie');
}

// Interceptor para tratar erros
axios.interceptors.response.use(
    response => response,
    error => {
        console.error('Axios error:', error);
        return Promise.reject(error);
    }
);

// Chama a busca do CSRF cookie durante o bootstrap
getCsrfCookie().then(() => {
    console.log('CSRF cookie set');
}).catch(error => {
    console.error('Failed to set CSRF cookie:', error);
});