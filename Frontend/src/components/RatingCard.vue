<template>
  <div class="ratecont">
      <div class="rating-card">
      <div class="rating-value">
        {{ rating }}
        <div >
          <img class="stars" src="/src///assets/Star 6.svg" alt="Star">
          <img  class="stars" src="/src///assets/Star 6.svg" alt="Star">
          <img  class="stars" src="/src///assets/Star 6.svg" alt="Star">
          <img class="stars" src="/src///assets/Star 6.svg" alt="Star">
          <img class="stars" src="/src///assets/Star 5.svg" alt="Star">
        </div>
      </div>
      <div class="line"></div>
      <div class="total">
        Всего отзывов: {{ total }}
      </div>
    </div>
  </div>
</template>

<script setup>
defineProps(['rating', 'total'])
</script>

<style scoped>
.ratecont {
  margin-top: 58px;
  margin-right: 200px;
}

.rating-card {
  width: 263px;
  height: 155px;
  background: #ffffff;
  border-radius: 12px;
  border-width: 1px;
  border: 1px solid #E0E7EC;
}

.rating-value {
  font-family: 'Mulish', sans-serif;
  font-weight: 500;
  font-size: 40px;
  line-height: 100%;
  color: #363740;
  letter-spacing: 0px;
  padding-left: 16px;
  padding-top: 18px;
  display: flex;
  gap: 10px;
}

.stars {
  padding-right: 9.17px;
}

.total {
  font-family: 'Mulish', sans-serif;
  font-weight: 700;
  font-style: Bold;
  font-size: 12px;
  line-height: 100%;
  letter-spacing: 0px;
  color: #363740;
  margin-left: 16px;
}

.line {
  width: 240px;
  height: 0px;
  opacity: 1;
  border-width: 2px;
  border: 2px solid #F1F4F7;
  margin-left: 16px;
  margin-top: 9px;
  margin-bottom: 16px;
}
</style>
