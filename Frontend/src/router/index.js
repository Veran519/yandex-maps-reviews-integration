import { createRouter, createWebHistory } from 'vue-router'

import Login from '../views/Login.vue'
import Settings from '../views/Settings.vue'
import Reviews from '../views/Reviews.vue'

const routes = [
  { path: '/', component: Login },
  { path: '/settings', component: Settings },
  { path: '/reviews', component: Reviews }
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

// защита маршрутов
router.beforeEach((to, from, next) => {
  const token = localStorage.getItem('token')

  if ((to.path === '/settings' || to.path === '/reviews') && !token) {
    next('/')
  } else {
    next()
  }
})

export default router
