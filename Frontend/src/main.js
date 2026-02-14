import { createApp } from "vue";
import App from "./App.vue";
import { createRouter, createWebHistory } from "vue-router";
import Login from "./components/Login.vue";
import Reviews from "./components/Reviews.vue";

const routes = [
  { path: "/", component: Login },
  { path: "/reviews", component: Reviews }
];

const router = createRouter({
  history: createWebHistory(),
  routes
});

createApp(App).use(router).mount("#app");
