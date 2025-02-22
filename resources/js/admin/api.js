import axios from 'axios';

const api = axios.create({
    baseURL: import.meta.env.VUE_APP_API_URL, // Atualizado aqui
    withCredentials: true,
    headers: {
        'Accept': 'application/json',
    },
});

export default api;