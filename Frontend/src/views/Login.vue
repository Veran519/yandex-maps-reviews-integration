<template>
  <div class="login">
    <h2>Login</h2>
    <input v-model="email" type="email" placeholder="Email" />
    <input v-model="password" type="password" placeholder="Password" />
    <button @click="login">Login</button>
    <p v-if="error" style="color:red">{{ error }}</p>
  </div>
</template>

<script setup>
import { ref } from "vue";
import { useRouter } from "vue-router";
import { user } from "../data/Reviews";

const email = ref("");
const password = ref("");
const error = ref("");

const router = useRouter();

const login = () => {
  if (email.value === user.email && password.value === user.password) {
    localStorage.setItem("user", JSON.stringify(user));
    router.push("/reviews");
  } else {
    error.value = "Неверный email или пароль";
  }
};
</script>

<style scoped>
.login {
  max-width: 300px;
  margin: 50px auto;
  display: flex;
  flex-direction: column;
  gap: 10px;
}
button {
  cursor: pointer;
}
</style>
