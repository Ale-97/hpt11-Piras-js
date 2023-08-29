<template>
  <div class="Card">
    <div class="container-card">
      <!--Immagine di sfondo della card  -->
      <div id="backGroundImg">
        <span>{{ this.type }}</span>
      </div>
      <div>
        <h1>{{ this.price }} €</h1>
        <h2>{{ this.name }}</h2>
        <h5>testo descrittivo</h5>
      </div>
      <div class="d-flex">
        <div>{{ this.category }}</div>
        <div>14/07/2022</div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Card",
  data() {
    return {};
  },

  props: {
    name: String,
    category: String,
    price: String,
    type: String,
  },
  methods: {},
};
</script>

<style lang="scss" scoped>
.container-card {
  border: 1px solid black;
  width: 100%;
  #backGroundImg {
    height: 200px;
    background-image: url(../assets/sfondo.jpg);
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
  }
}
</style>
