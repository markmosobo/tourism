import { createRouter, createWebHistory } from 'vue-router'
import axios from 'axios'

import Login from '../views/Login.vue'
import Register from '../views/Register.vue'
import Home from '../views/Home.vue'
import Profile from '../views/Profile.vue'

const routes = [
  { path: '/login', component: Login, meta: { guest: true } },
  { path: '/register', component: Register, meta: { guest: true } },
  { path: '/home', component: Home, meta: { requiresAuth: true } },
  { path: '/profile', component: Profile, meta: { requiresAuth: true } },
]

const router = createRouter({
  history: createWebHistory('/spa'),
  routes
})

/*
|--------------------------------------------------------------------------
| SAFE AUTH GUARD (NO GLOBAL VARIABLES)
|--------------------------------------------------------------------------
*/
let authChecked = false
let isAuthenticated = false

router.beforeEach(async (to, from, next) => {

  try {
    // only check once per session
    if (!authChecked) {
      await axios.get('/api/user')
      isAuthenticated = true
      authChecked = true
    }

  } catch (e) {
    isAuthenticated = false
    authChecked = true
  }

  // if user is logged in but trying to access login/register
  if (to.meta.guest && isAuthenticated) {
    return next('/home')
  }

  // if route requires auth but user is not logged in
  if (to.meta.requiresAuth && !isAuthenticated) {
    return next('/login')
  }

  next()
})

export default router