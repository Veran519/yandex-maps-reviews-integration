<template>
  <div class="login">
    <h2>Вход</h2>
    <form class="userdata" @submit.prevent="makelogin">
      <input v-model="email" placeholder="Email" />
      <input v-model="password" type="password" placeholder="Пароль" />
      <button>Войти</button>
    </form>
    <p v-if="error">{{ error }}</p>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import { useRouter } from 'vue-router'
import axios from '../axios'
import { login } from '../auth'

const email = ref('');
const password = ref('');
const error = ref('');
const router = useRouter();

async function makelogin() {
  try {

    const res = await axios.post('/api/login', {
      email: email.value,
      password: password.value
    })

    login(res.data.token, res.data.user);

    router.push('/')
  } catch {
    error.value = 'Неверные данные'
  }
}
</script>

<style scoped>
.login {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.userdata {
  display: flex;
  flex-direction: column;
  gap: 10px;
}
</style>