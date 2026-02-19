<template>
  <div class="reviews-layout">
    <div class="reviews-list">
      <p class="yaIcon">
        <div class="circle"></div>
        <img src="/src//assets/yam.svg" alt="Иконка Яндекс карт">
        <span class="yatxt">Яндекс Карты</span>
      </p>
      <ReviewCard 
        v-for="review in reviews"
        :key="review.id"
        :review="review"
      />
    </div>

    <RatingCard
      :rating="rating"
      :total="total"
    />
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import axios from '../axios'
import ReviewCard from '../components/ReviewCard.vue'
import RatingCard from '../components/RatingCard.vue'

const reviews = ref([])
const rating = ref(0)
const total = ref(0)

onMounted(async () => {
  const res = await axios.get('/api/reviews')
  reviews.value = res.data.reviews
  rating.value = res.data.rating
  total.value = res.data.total
})
</script>

<style scoped>
.reviews-layout {
  display: flex;
  gap: 40px;
  align-items: flex-start;
  margin-left: 315px;
  margin-top: 17px;
}

.reviews-list {
  flex: 1;
}

.yaIcon {
  width: 112px;
  height: 25px;
  opacity: 1;
  border-radius: 8px;
  border-width: 1px;
  border: 1px solid #DCE4EA;
  display: flex;
  align-items: center;
}

.circle {
  width: 4.21px;
  height: 4.21px;
  background: #FFFFFF;
  position: relative;
  left: 8px;
  top: -2px;
  border-radius: 2.105px;
}

.yatxt {
  padding-left: 5.96px;
  font-family: 'Mulish', sans-serif;
  font-weight: 500;
  font-style: Medium;
  font-size: 12px;
  line-height: 100%;
  letter-spacing: 0px;
  color: #363740;
}

</style>
