<template>
  <div class="Card">
    <div class="container-card">
      <!--Immagine di sfondo della card  -->
      <div id="containerTopCard">
        <span id="type">{{ this.type }}</span>
        <div :id="this.category" class="containerBg">     
        </div>
      </div>

      <div class="container">
        <div>
          <h2>{{ this.price }} €</h2>
          <h5>{{ this.name }}</h5>
          <h6>testo descrittivo</h6>
        </div>
        <div class="row">
          <div class="col-6">{{ this.category }}</div>
          <div class="col-6">14/07/2022</div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Card",
  data() {
    return {
    };
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
  box-shadow: 10px 10px 10px 10px #dedede;
  width: 350px;
  border-radius: 20px;
  #containerTopCard{
    position: relative;
    overflow: hidden;
    border-radius: 20px 20px 0 0;
        #type {
      background-color:rgb(0, 185, 142);
      color: white;
      padding: 3px 15px;
      border-radius: 10px;
      display: inline-block;
      position: absolute;
      z-index: 10;
      margin: 10px;
    }
    .containerBg{
    height: 200px;
    width: 100%;
    border-radius: 20px 20px 0 0;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    transition: all 1s;
    z-index: 9;
  }
  #Abbigliamento{background-image: url(../../assets/Abbigliamento.jpg)}
  #Elettronica{background-image: url(../../assets/Elettronica.jpg)}
  #Motori{background-image: url(../../assets/Motori.jpg)}
  #Giardinaggio{background-image: url(../../assets/Giardinaggio.jpg)}
  #Immobili{background-image: url(../../assets/Immobili.jpg)}
  #Arredamento{background-image: url(../../assets/Arredamento.jpg)}
  #Musica{background-image: url(../../assets/Musica.jpg)}
  #Sport{background-image: url(../../assets/Sport.jpg)}

  }
  
  .container {
    padding: 10px 14px 0 14px;
    h2 {
      color: rgb(0, 185, 142);
    }
    h5 {
      color: rgb(28, 38, 85);
    }
    .row {
      border-top: 1px Dashed rgb(0, 185, 142);
      .col-6:first-of-type {
        border-right: 1px Dashed rgb(0, 185, 142);
      }
      .col-6 {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 5px;
        color: rgb(0, 185, 142);
        font-weight:bold;
      }
    }
  }
}
.container-card:hover{
  .containerBg{
    scale: (1.2);
    z-index: 9;
  }
}
</style>
