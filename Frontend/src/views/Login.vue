<template>
  <div class="container">
    <h2>Вход</h2>

    <input v-model="email" placeholder="Email" />
    <br><br>

    <input v-model="password" type="password" placeholder="Пароль" />
    <br><br>

    <button @click="login">Войти</button>

    <p v-if="error" style="color:red">{{ error }}</p>
  </div>
</template>

<script>
import api from '../axios'

export default {
  data() {
    return {
      email: '',
      password: '',
      error: ''
    }
  },
  methods: {
    async login() {
      try {
        const response = await api.post('/login', {
          email: this.email,
          password: this.password
        })

        localStorage.setItem('token', response.data.token);
        localStorage.setItem('profileName', response.data.user.name);

        this.$router.push('/settings')
      } catch (e) {
        this.error = 'Неверный логин или пароль'
      }
    }
  }
}
</script>
