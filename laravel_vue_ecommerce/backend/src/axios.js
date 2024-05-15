import axios from 'axios';
import store from './store';
import router from './router/index.js';

const axiosClient = axios.create({
  baseURL: `${import.meta.env.VITE_API_BASE_URL}/api`
});

axiosClient.interceptors.request.use(config => {
  const token = store.state.token;
  if (token) {
    config.headers.Authorization = `Bearer ${token}`;
  }
  return config;
});

axiosClient.interceptors.response.use(response => {
  return response;
}, error => {
  if (error.response && error.response.status === 401) {
    store.commit('clearAuthData');
    router.push({ name: 'login' });
  }
  return Promise.reject(error);
});

export default axiosClient;
