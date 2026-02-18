<template>
    <header class="header">
        <div>
            <button class="btn-icon" @click="makelogout" aria-label="Logout">  
                <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="44" height="44" fill="white"/>
                <path d="M15.2 29.7778H24V32H15.2C13.99 32 13 31 13 29.7778V14.2222C13 13 13.99 12 15.2 12H24V14.2222H15.2V29.7778Z" fill="#909AB4"/>
                <path d="M26.1 17L25.113 18.0071L28.319 21.2857H21V22.7143H28.319L25.106 25.9929L26.1 27L31 22L26.1 17Z" fill="#909AB4" stroke="#909AB4"/>
                </svg>
            </button>
        </div>
    </header>
</template>

<script setup>
import { logout } from '../auth'
import router from '../router'

const makelogout = () => {
  logout();
  router.push('/login');
}
</script>

<style scoped>
.header {
  height: 75px;  
  background: #ffffff;
  border-bottom: 1px solid #DCE4EA;
  display: flex;
  justify-content: flex-end;
}


.btn-icon {
  background: transparent;
  border: none;
  cursor: pointer;
  margin-top: 14px;
  margin-right: 46px;
}

</style>