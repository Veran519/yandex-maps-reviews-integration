import { createRouter, createWebHistory } from 'vue-router'
import Login from '../views/Login.vue'
import Reviews from '../views/Reviews.vue'
import Settings from '../views/Settings.vue'
import { isAuth } from '../auth'

const routes = [
    { path: '/login', component: Login },
    { 
        path: '/', 
        component: Reviews,
        meta: { requiresAuth: true }
    },
    { 
        path: '/settings', 
        component: Settings,
        meta: { requiresAuth: true }
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

router.beforeEach((to, from, next) => {
    const token = localStorage.getItem('token')

    if (to.meta.requiresAuth && !isAuth.value) {
        next('/login')
    } else {
        next()
    }
})

export default router
