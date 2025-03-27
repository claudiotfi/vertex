import axios from 'axios';

const api = axios.create({
    baseURL: import.meta.env.VUE_APP_API_URL,
    withCredentials: true,
    headers: {
        'Accept': 'application/json',
    },
});

// Adiciona um interceptor para garantir que o CSRF cookie seja obtido antes de cada requisição
api.interceptors.request.use(async (config) => {
    try {
        await axios.get('/sanctum/csrf-cookie');
        return config;
    } catch (error) {
        console.error('Failed to set CSRF cookie:', error);
        return Promise.reject(error);
    }
});

export default api;