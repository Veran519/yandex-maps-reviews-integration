<template>
  <div class="reviews">
    <h2>Отзывы о компании</h2>
    <p>Рейтинг: {{ rating }} ({{ total }} отзывов)</p>
    <p>Ссылка на Яндекс: <a :href="yandex_url" target="_blank">{{ yandex_url }}</a></p>
    <ul>
      <li v-for="review in reviews" :key="review.id">
        <strong>{{ review.author }}:</strong> {{ review.text }}
      </li>
    </ul>
  </div>
</template>

<script>
import { reviews, companyInfo } from "../data/mockReviews";

export default {
  data() {
    return {
      reviews,
      rating: companyInfo.rating,
      total: companyInfo.total_reviews,
      yandex_url: companyInfo.yandex_url
    };
  }
};
</script>

<style scoped>
.reviews {
  max-width: 600px;
  margin: 20px auto;
}
ul {
  list-style: none;
  padding: 0;
}
li {
  margin: 5px 0;
}
</style>
