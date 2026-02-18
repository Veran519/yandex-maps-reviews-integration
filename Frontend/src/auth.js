import { ref } from 'vue'

export const isAuth = ref(!!localStorage.getItem('token'));

export function login(token, user) {
  localStorage.setItem('token', token);
  localStorage.setItem('user', JSON.stringify(user));
  isAuth.value = true;
}

export function logout() {
  localStorage.removeItem('token');
  localStorage.removeItem('user');
  isAuth.value = false;
}
