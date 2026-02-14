<template>
  <div class="sidebar">
    <div class="sidebar-header">
      <h2>Daily Grow</h2>
      <p class="profile-name">{{ profileName }}</p>
    </div>

    <div class="sidebar-menu">
      <button @click="$router.push('/settings')">
        <span class="material-icons">settings</span>
        Настройки
      </button>

      <button @click="$router.push('/reviews')">
        <span class="material-icons">reviews</span>
        Отзывы
      </button>

      <button @click="logout">
        <span class="material-icons">logout</span>
        Выйти
      </button>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      profileName: ''
    }
  },
  mounted() {
    this.profileName = localStorage.getItem('profileName') || 'Профиль'
  },
  methods: {
    logout() {
      localStorage.removeItem('token')
      localStorage.removeItem('profileName')
      this.$router.push('/')
    }
  }
}
</script>
