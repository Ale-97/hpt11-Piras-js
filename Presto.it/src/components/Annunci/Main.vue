<template>
  <div class="Main">
    <div id="bgP" class="row">
      <div class="col d-flex align-items-center justify-content-center">
              <h1>Cerca tra i nostri <span>Annunci</span></h1>
      </div>

    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-sm-11 col-md-10 col-lg-8">
        <div
          class="row justify-content-center align-items-center p-3"
          id="searchMenu"
        >
          <input
            class="col-12 col-lg mx-lg-3 my-3"
            type="text"
            v-model="nameProduct"
            placeholder="Cerca"
          />
          <select
            class="col-12 col-lg mx-lg-3 my-3"
            name="categories"
            id="categories"
            v-model="categories"
          >
            <option value="All">Tutti gli annunci</option>
            <option value="Elettronica">Elettronica</option>
            <option value="Motori">Motori</option>
            <option value="Sport">Sport</option>
            <option value="Immobili">Immobili</option>
            <option value="Abbigliamento">Abbigliamento</option>
            <option value="Giardinaggio">Giardinaggio</option>
            <option value="Musica">Musica</option>
            <option value="Arredamento">Arredamento</option>
          </select>
          <input
            class="col-6 col-lg  mx-lg-3 my-3"
            type="text"
            v-model="minimalCost"
            placeholder="Min"
          />
          <input
            class="col-6 col-lg mx-lg-3 my-3"
            type="text"
            v-model="maximumCost"
            placeholder="Max"
          />
          <button
            class="col-12 col-lg mx-lg-3 my-3"
            @click="
              $emit(
                'search',
                nameProduct,
                categories,
                minimalCost,
                maximumCost,
                order
              )
            "
          >
            cerca
          </button>
        </div>
        <div class="row" id="orderList">
          <div class="col-12 d-flex justify-content-end">
            <select
              name="order"
              id="order"
              v-model="order"
              @change="$emit('order', order)"
            >
              <option value="AZ">A-Z</option>
              <option value="ZA">Z-A</option>
              <option value="priceUp">prezzo più alto</option>
              <option value="priceDown">prezzo più basso</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center" id="containerCard">
      <Card
        class="col-12 col-sm-6 col-md-4 col-xl-3 g-5 d-flex justify-content-center"
        v-for="annuncio in ElementInPage(page)"
        :key="annuncio.id"
        :id="annuncio.id"
        :name="annuncio.name"
        :category="annuncio.category"
        :price="annuncio.price"
        :type="annuncio.type"
      />
    </div>
    <div class="row justify-content-center">
      <div class="col-6 d-flex justify-content-center">
        <ul class="d-flex" id="indice" >
          <li
            v-for="pagina in index(elementList)"
            :key="pagina.id"
            @click="page = pagina;scrollMeTo()"
          >
            <span v-if="pagina!=page">{{ pagina }}</span>
            <span v-else id="focusIndex">{{ pagina }}</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
import Card from "./Card.vue";
export default {
  name: "Main",
  components: {
    Card,
  },
  data() {
    return {
      nameProduct: "",
      categories: "All",
      minimalCost: "",
      maximumCost: "",
      order: "AZ",
      indexPage: [],
      page: 0,
      listElementInPage: [],
    };
  },
  props: {
    elementList: Array,
  },
  created() {
    this.index(this.elementList);
  },
  methods: {
    scrollMeTo() {
    window.scrollTo(0, 500);
  },
    index(listElement) {
      this.indexPage=[];
      const numberPage = Math.ceil(listElement.length / 12);
      for (let i = 0; i < numberPage; i++) {
        this.indexPage.push(i);
      }
      return this.indexPage
    },
    ElementInPage(page) {
      this.listElementInPage = [];
      let lastElement;
      if ((page + 1) * 12 > this.elementList.length - 1) {
        lastElement = this.elementList.length - 1;
      } else {
        lastElement = (page + 1) * 12;
      }
      for (let v = page * 12; v < lastElement; v++) {
        this.listElementInPage.push(this.elementList[v]);
      }
      return this.listElementInPage;
    },
  },
};
</script>

<style lang="scss" scoped>
.Main {
  #bgP {
    height: 300px;
    background-image: url(../../assets/bg-Header.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    margin-bottom: -50px;
    h1{
      color: white;
      span{
        color: rgb(0, 185, 142);
      }
    }

  }

  #searchMenu {
    background-color: rgb(0, 185, 142);
    padding: 25px 0;
    border-radius: 10px;
    * {
      border: 0;
      border-radius: 5px;
      height: 50px;
      padding: 10px;
    }
    button {
      background-color: rgb(28, 38, 85);
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-weight: 500;
    }
  }
  #containerCard {
    margin: 20px 0;
  }
  #orderList {
    margin: 20px 0;
    #order {
      margin: 0 10px;
      border-radius: 5px;
      height: 30px;
      padding: 5px;
    }
  }
  #indice {
    margin: 50px 0;
    border-radius: 30px;
    background-color: rgb(0, 185, 142);
    padding: 10px 20px;
    span {
      border-radius: 50%;
      width: 30px;
      height: 30px;
      margin: 0 30px;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: white;
      font-weight: 400;
    }
    #focusIndex{
      background-color: black;
      color: white;
      }
    span:hover {
      background-color: black;
      color: white;
    }
  }
}
</style>
