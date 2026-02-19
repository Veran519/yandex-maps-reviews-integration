<template>
    <div class="settings">
    <h2>Подключить Яндекс</h2>

    <div class="hint">
      Укажите ссылку на Яндекс, пример
      <a class="link" href="https://yandex.ru/maps/org/samoye_populyarnoye_kafe/1010501395/reviews/">https://yandex.ru/maps/org/samoye_populyarnoye_kafe/1010501395/reviews/</a>
    </div>

    <div class="form">
      <input v-model="url" placeholder="https://yandex.ru/maps/org/..." />
      <button @click="save">Сохранить</button>
    </div>

    <div v-if="message" class="success">
      {{ message }}
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import axios from '../axios'

const url = ref('');
const message = ref('');

onMounted(async () => {
  try {
    const res = await axios.get('/api/settings');

    if (res.data && res.data.yandex_url) {
      url.value = res.data.yandex_url;
    }
  } catch (e) {
    console.log('Нет настроек');
  }
})

async function save() {
  try {
    const res = await axios.post('/api/settings', {
      yandex_url: url.value
    });

    console.log(res.data);
    message.value = 'Сохранено';
  } catch (e) {
    console.log(e.response);
    message.value = 'Ошибка сохранения';
  }
}
</script>

<style scoped>
.settings {
  background: #ffffff;
  display: flex;
  flex-direction: column;
}

.settings h2 {
  font-family: 'Mulish', sans-serif;
  font-weight: 600;
  font-size: 16px;
  line-height: 20px;
  letter-spacing: 0.2px;
  color: #252733;
  margin-top: 18px;
  margin-left: 315px;
}

.hint {
  font-family: 'Mulish', sans-serif;
  font-weight: 600;
  font-size: 12px;
  line-height: 20px;
  letter-spacing: 0.2px;
  color: #6C757D;
  margin-left: 315px;
  margin-bottom: 11px;
}

.link {
  font-family: 'Mulish', sans-serif;
  font-weight: 400;
  font-style: 'Regular';
  font-size: 12px;
  line-height: 100%;
  letter-spacing: 0px;
  color: #788397;
}

.form {
  display: flex;
  flex-direction: column;
  gap: 18px;
  margin-left: 315px;
}

input {
  width: 480px;
  height: 24px;
  opacity: 1;
  border-radius: 6px;
  padding-top: 4.5px;
  padding-bottom: 4.5px;
  padding-left: 14px;
  border: 1px solid #DCE4EA
}

input:focus {
  border-color: #339AF0;
}

button {
  width: 128px;
  height: 25px;
  opacity: 1;
  border-radius: 6px;
  background: #339AF0;
  color: #ffffff;
  border: none;
  padding-top: 3px;
  padding-left: 26px;
  padding-right: 26px;
  border-radius: 8px;
  cursor: pointer;
  font-family: 'Inter', sans-serif;
  font-weight: 600;
  font-style: 'Semi Bold';
  font-size: 14px;
  line-height: 100%;
  letter-spacing: 0px;
  transition: background 0.2s ease;
}

button:hover {
  background: #339AF0;
}

.success {
  font-size: 14px;
  color: #16a34a;
  margin-top: 8px;
}

</style>
