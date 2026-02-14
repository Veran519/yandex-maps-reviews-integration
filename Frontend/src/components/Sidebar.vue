<template>
  <div class="sidebar">
    <p v-if="user">Привет, {{ user.name }}</p>
    <nav>
      <router-link to="/reviews">Отзывы</router-link>
      <router-link to="/settings">Настройки</router-link>
    </nav>
  </div>
</template>

<script>
export default {
  data() {
    return {
      user: JSON.parse(localStorage.getItem("user"))
    };
  }
};
</script>

<style scoped>
.sidebar {
  padding: 20px;
  background: #f2f2f2;
  min-height: 100vh;
}
nav a {
  display: block;
  margin: 10px 0;
  text-decoration: none;
}
</style>
