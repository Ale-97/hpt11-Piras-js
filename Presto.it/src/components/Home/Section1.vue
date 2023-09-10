<template>
  <div id="Section1" class="container">
    <div class="row">
      <div class="col-12 col-lg-6 order-1">
        <Slider
      :ListImg="listimg"/>
      </div>
      <div
        class="col-12 col-lg-6 order-0 d-flex flex-column mb-5 mb-lg-0
         align-items-lg-start align-items-center justify-content-evenly text-center text-lg-start "
      >
        <h1>Trova i <span>migliori affari</span> nella tua citta</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat
          corporis reiciendis, alias animi unde explicabo doloribus. Provident
          tempora inventore saepe nesciunt? Ratione facilis beatae iure quae
          illo ullam unde porro!
        </p>
        <button>INIZIA ORA</button>
      </div>

    </div>
  </div>
</template>

<script>
import Slider from "../Global/SliderImg.vue"
export default {
  name: "Section1",
  components: {
    Slider,
  },
  data() {
    return {
      listimg: [
        "https://picsum.photos/id/237/400/600",
        "https://picsum.photos/id/238/400/600",
        "https://picsum.photos/id/239/400/600",
      ],
      index: 0,
    };
  },
  methods: {
    left() {
      if (this.index == 0) {
        this.index = this.listimg.length - 1;
      } else {
        this.index--;
      }
      console.log(this.listimg[this.index]);
      document.getElementById("img").style.backgroundImage = `url(${
        this.listimg[this.index]
      })`;
    },
    right() {
      if (this.index == this.listimg.length - 1) {
        this.index = 0;
      } else {
        this.index++;
      }
      console.log(this.listimg[this.index]);
      document.getElementById("img").style.backgroundImage = `url(${
        this.listimg[this.index]
      })`;
    },
  },
};
</script>

<style lang="scss" scoped>
#Section1{
  padding-top: 200px;
h1 {
  font-size: 80px;
  span {
    color: rgb(0, 185, 142);
  }
}
}
</style>
