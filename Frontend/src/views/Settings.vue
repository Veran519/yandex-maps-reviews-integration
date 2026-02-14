<template>
    <div class="page-wrapper">
        <Sidebar/>
        <div class="main-content">
            <div class="container">
                <h2>Подключить Яндекс</h2>

                <input v-model="url" placeholder="Вставьте ссылку на компанию" />
                <br><br>

                <button @click="save">Сохранить</button>

                <p v-if="message" style="color:green">{{ message }}</p>
            </div>
        </div>
    </div>
</template>

<script>
import api from '../axios'
import Sidebar from '../components/Sidebar.vue'

export default {
    components: { Sidebar },
  data() {
    return {
      url: '',
      message: ''
    }
  },
  methods: {
    async save() {
      try {
        await api.post('/settings', {
          yandex_url: this.url
        })

        this.message = 'Сохранено'
      } catch (e) {
        alert('Ошибка сохранения')
      }
    },

    goToReviews() {
      this.$router.push('/reviews')
    }
  }
}
</script>
