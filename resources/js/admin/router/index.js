import { createRouter, createWebHistory } from 'vue-router';
import Login from '../components/Login.vue';
import Dashboard from '../components/Dashboard.vue';
import api from '../api'; // Importe a instância do Axios configurada

const routes = [
  {
    path: '/admin',
    redirect: '/admin/login'
  },
  {
    path: '/admin/login',
    name: 'login',
    component: Login,
    meta: { requiresAuth: false }
  },
  {
    path: '/admin/dashboard',
    name: 'dashboard',
    component: Dashboard,
    meta: { requiresAuth: true }
  }
];

const router = createRouter({
  history: createWebHistory(),
  routes
});

router.beforeEach(async (to, from, next) => {
  const token = localStorage.getItem('token');

  console.log('Rota:', to.name);
  console.log('Token:', localStorage.getItem('token'));
  
  if (to.meta.requiresAuth) {
    if (!token) {
      next({ name: 'login' });
      return;
    }

    try {
      await api.get('/admin/check-auth', {
        headers: {
          Authorization: `Bearer ${token}`
        }
      });
      next(); // Token válido, continue
    } catch (error) {
      localStorage.removeItem('token');
      next({ name: 'login' }); // Token inválido, redirecione
    }
  } else {
    if (token && to.name === 'login') {
      next({ name: 'dashboard' });
      return;
    }
    next(); // Rota pública ou redirecionamento de login
  }
});

export default router;