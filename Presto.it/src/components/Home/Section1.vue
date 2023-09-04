<template>
  <div class="Section1 container">
    <div class="row">
      <div
        class="col-6 d-flex flex-column align-items-start justify-content-evenly"
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
      <div class="col-6 d-flex flex-column justify-content-center" id="img">
        <span @click="left()"><i class="fas fa-chevron-left"></i></span>
        <span @click="right()"><i class="fas fa-chevron-right"></i></span>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Section1",
  components: {},
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
h1 {
  font-size: 80px;
  span {
    color: rgb(0, 185, 142);
  }
}
#img {
  background-image: url(https://picsum.photos/id/237/400/600);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 600px;
  transition: all 0.5s;
}
i {
  padding: 23px;
  background-color: rgb(0, 185, 142);
  border-radius: 50%;
  display: inline-block;
  margin: 10px;
  margin-left:-40px;
  color: white;
  font-weight: bold;
}
</style>
