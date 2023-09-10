<template>
  <main id="Main" class="container">
    <div class="row">
      <div class="col-12 col-lg-6 "><SliderImg :ListImg="listimg" /></div>
      <div class="col-12 col-lg-6" id="rightElemnt">
        <div class="d-flex justify-content-between align-items-center">
          <span>{{ product.category }}</span>
          <i class="far fa-heart" @click="favorites"></i>
        </div>

        <h1 class="mt-3">{{ product.name }}</h1>
        <div class="d-flex align-items-center my-3">
          <span>{{ product.price }}$</span>
          <span><i class="fas fa-truck"></i> Spedizione gratuita</span>
        </div>
        <div class="d-flex flex-column mb-3">
          <button class="mb-3">
            <i class="fas fa-shopping-bag"></i> Aquista
          </button>
          <button><i class="fas fa-comment"></i> Contatto</button>
        </div>

        <div id="payments">
          <div>PAGAMENTO SICURO</div>
          <span id="visa"></span>
          <span id="mastercard"></span>
          <span id="paypal"></span>
          <span id="googlepay"></span>
          <span id="ApplePay"></span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <h3>Descrizione</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat,
          nostrum ullam molestiae praesentium odio eveniet ab cumque error quia
          veritatis, esse explicabo velit harum sint sunt dolorem voluptatibus
          facilis laudantium. Tempora sint earum enim voluptates impedit libero
          odit ipsa inventore tempore repellendus quasi adipisci animi
          laudantium dicta quis esse voluptate voluptas, soluta vero eaque.
          Minima harum ipsam est exercitationem molestiae? Sunt, doloremque!
          Quis dolorem voluptates consequuntur dolor veritatis corporis. Quod
          magnam vitae dolores esse omnis iusto quo quaerat? At eveniet
          excepturi consectetur beatae consequatur illum incidunt quaerat nemo
          sapiente aut. Adipisci odio est nemo fuga ut nisi repellat dolorum
          labore soluta quae amet veniam perferendis unde cum, eligendi autem
          mollitia alias cumque magni quaerat voluptatem error? Exercitationem
          velit aperiam iusto! At, earum? Quis, quibusdam consequuntur eveniet
          voluptates, animi accusantium fuga corrupti soluta rem ea repellat
          veritatis quisquam at neque sapiente aut similique ipsum consectetur,
          modi accusamus iure sunt fugit blanditiis. Explicabo minima ut eos eum
          corporis eaque, accusamus, neque distinctio doloremque sit autem.
          Reiciendis natus iure eius at nam ad maxime modi nostrum perferendis
          possimus. Placeat qui pariatur modi odio!
        </p>
        <h3>Inserzionista</h3>
        <div class="d-flex align-items-center">
          <div>M</div>
          <div>
            <h4>Mario Rossi</h4>
            <i class="far fa-star"></i> Nessuna recensione
          </div>
        </div>
      </div>
    </div>
  </main>
</template>

<script>
import SliderImg from "../../Global/SliderImg.vue";
export default {
  name: "Main",
  components: {
    SliderImg,
  },
  data() {
    return {
      listimg: [
        "https://picsum.photos/id/237/400/600",
        "https://picsum.photos/id/238/400/600",
        "https://picsum.photos/id/239/400/600",
      ],
    };
  },
  props: {
    product: Object,
  },
  mounted() {
this.startTop();
  },
  
  methods: {
    startTop(){
      window.scrollTo(0, 0);
    },
    favorites() {
      let heart = document.getElementsByClassName("fa-heart")[0];
      if (heart.classList[0] == "far") {
        heart.className = "fas fa-heart";
      } else {
        heart.className = "far fa-heart";
      }
    },
  },
};
</script>

<style lang="scss" scoped>
#Main {
padding-top: 200px;
  #rightElemnt {
    > div:first-child {
      border-bottom: 1px solid black;
      padding: 20px 0;
      span {
        padding: 5px 10px;
        background-color: rgb(109, 109, 109);
        color: white;
        border-radius: 8px;
      }
      .fas {
        color: red;
      }
    }
    h1 + div {
      span {
        margin-right: 20px;
      }
      :first-child {
        font-size: 20px;
      }
      :last-child {
        background-color: rgb(21, 212, 255);
        color: white;
        padding: 3px 5px;
        border-radius: 8px;
        font-size: 13px;
      }
      margin-bottom: 20px;
    }
    button {
      width: 100%;
      padding: 10px;
    }
    button:last-of-type {
      background-color: white;
      color: black;
      border: 1px solid black;
    }
    #payments {
      padding: 15px;
      border: 2px solid rgb(224, 224, 224);
      border-radius: 5px;
      text-align: center;
      div {
        margin-bottom: 20px;
      }
      span {
        background-position: center;
        background-repeat: no-repeat;
        background-size: 30px;
        padding: 2px 20px;
        margin: 5px;
        border: 1px solid black;
      }
      #visa {
        background-image: url(../../../assets/payments/visa.png);
      }
      #mastercard {
        background-image: url(../../../assets/payments/mastercard.png);
      }
      #paypal {
        background-image: url(../../../assets/payments/paypal.png);
        background-size: 45px;
      }
      #googlepay {
        background-image: url(../../../assets/payments/Gpay.png);
        border-radius: 20px;
        background-size: 40px;
        padding: 2px 30px;
      }
      #ApplePay {
        background-image: url(../../../assets/payments/Apay.png);
        background-size: 45px;
      }
    }
  }
  .row:last-of-type {
    h3 {
      margin: 20px 0;
    }
    p {
      padding-bottom: 20px;
      border-bottom: 1px solid black;
    }
    h3 + div {
      border: 2px solid rgb(226, 226, 226);
      padding: 15px;
      margin-bottom: 20px;
      div:first-child {
        border-radius: 100%;
        background-color: gray;
        padding: 10px 15px;
        font-size: 20px;
        font-weight: 500;
        color: white;
        margin-right: 20px;
      }
    }
  }
}
</style>
