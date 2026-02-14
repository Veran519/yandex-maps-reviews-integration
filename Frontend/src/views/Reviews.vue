<template>
    <div class="page-wrapper">
        <Sidebar/>
        <div class="main-content">
             <div class="container">
                <h2>Отзывы</h2>

                <div v-if="loading">Загрузка...</div>

                <div v-else>
                <h3>⭐ {{ rating }} ({{ total }} отзывов)</h3>

                <div v-for="review in reviews" :key="review.id">
                    <p><b>{{ review.author }}</b></p>
                    <p>Оценка: {{ review.rating }}</p>
                    <p>{{ review.text }}</p>
                    <hr>
                </div>
                </div>
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
      reviews: [],
      rating: 0,
      total: 0,
      loading: true
    }
  },

  async mounted() {
    try {
      const response = await api.get('/reviews')

      this.reviews = response.data.reviews
      this.rating = response.data.rating
      this.total = response.data.total
    } catch (e) {
      alert('Ошибка загрузки отзывов')
    } finally {
      this.loading = false
    }
  }
}
</script>
