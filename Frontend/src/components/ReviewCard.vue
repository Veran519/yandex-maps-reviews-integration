<template>
  <div class="card">
    <div class="cardinside">
        <div class="card-header">
        <div class="contents">
          <div class="date">12.09.2022 14:22</div>
          <div class="branch">Филиал 1</div>
          <div class="yamap">
              <div class="circle_card"></div>
              <img src="/src//assets/yam.svg" alt="Иконка яндекса">
          </div>
        </div>

        <div class="stars">
          <span v-for="n in review.rating" :key="n">★</span>
        </div>
      </div>
      <div class="usrinfos">
        <div class="author">
        {{ review.author }} 
        </div>
        <div class="phone">
          {{ review.phone }}
        </div>
      </div>
      <div class="text">
        {{ review.text }}
      </div>
    </div>
  </div>
</template>

<script setup>
defineProps(['review'])
</script>

<style scoped>
.card {
  width: 759px;
  height: 155px;
  opacity: 1;
  border-radius: 12px;
  border-width: 1px;
  border: 1px solid #E0E7EC;
  background: #FFFFFF;
  box-shadow: 0px 3px 6px 0px #5C656F4D;
  margin-bottom: 20px;
}

.card-header {
  display: flex;
  justify-content: space-between;
  margin-bottom: 12px;
}

.date {
  font-family: 'Mulish', sans-serif;
  font-weight: 700;
  font-size: 12px;
  line-height: 100%;
  letter-spacing: 0px;
  color: #363740;
  padding-left: 2px;
  padding-top: 6px;
}

.branch {
  font-family: 'Mulish', sans-serif;
  font-weight: 700;
  font-size: 12px;
  line-height: 100%;
  letter-spacing: 0px;
  color: #363740;
  padding-top: 6px;
  padding-left: 8px;
}

.stars span {
  color: #fbbf24;
  font-size: 14px;
  padding-right: 3px;
}

.stars {
  padding-right: 26px;
}

.author {
  font-family: 'Mulish', sans-serif;
  font-weight: 700;
  font-size: 12px;
  line-height: 100%;
  letter-spacing: 0px;
  color: #363740;
  margin-bottom: 8px;
  padding-left: 3px;
}

.text {
  font-family: 'Mulish', sans-serif;
  font-weight: 400;
  font-size: 12px;
  line-height: 100%;
  letter-spacing: 0px;
  color: #000000;
  width: 718px;
  padding-left: 3px;
}

.cardinside {
  width: 744px;
  height: 129px;
  opacity: 1;
  border-radius: 12px;
  border-bottom-width: 1px;
  box-shadow: 0px 2px 1px 0px #00000005;
  background: #F6F8FA;
  margin-top: 13px;
  margin-left: 15px;
}

.contents {
  display: flex;
}

.yamap {
  padding-left: 10px;
  padding-top: 2px;
}

.circle_card {
  width: 4.21px;
  height: 4.21px;
  background: #FFFFFF;
  position: relative;
  left: 4px;
  top: 8px;
  border-radius: 2.105px;
}

.usrinfos {
  display: flex;
}

.phone {
  font-family: 'Mulish', sans-serif;
  font-weight: 700;
  font-size: 10px;
  line-height: 100%;
  letter-spacing: 0px;
  color: #363740;
  padding-left: 12px;
  padding-top: 1px;
}
</style>
