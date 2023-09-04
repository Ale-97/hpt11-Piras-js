<template>
  <div class="Main">
    <div id="bgP"></div>
      <div class="row justify-content-center">
        <div class="col-10">
          <div class="row justify-content-center">
            <div class="col-9">
              <div class="row">
                <div class="col-12" id="searchMenu">
                  <div class="d-flex justify-content-center align-items-center">
                    <input
                      type="text"
                      v-model="nameProduct"
                      placeholder="Cerca"
                    />
                    <select
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
                      type="text"
                      v-model="minimalCost"
                      placeholder="Min"
                    />
                    <input
                      type="text"
                      v-model="maximumCost"
                      placeholder="Max"
                    />
                    <button
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
                </div>
              </div>
              <div class="row">
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
        </div>
        <Card
          class="col-3 m-5"
          v-for="annuncio in elementList"
          :key="annuncio.id"
          :name="annuncio.name"
          :category="annuncio.category"
          :price="annuncio.price"
          :type="annuncio.type"
        />
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
    };
  },
  props: {
    elementList: Array,
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
    margin-bottom:-80px ;
  }

  #searchMenu {
    background-color: rgb(0, 185, 142);
    padding: 25px 0;
    border-radius: 10px;
    div {
      * {
        margin: 0 10px;
        border: 0;
        border-radius: 5px;
        height: 50px;
        padding: 10px;
        width: 300px;
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
  }
  .col-12:last-child {
    margin: 20px 0;
  }
  #order {
    margin: 0 10px;
    border-radius: 5px;
    height: 30px;
    padding: 5px;
  }
}
</style>
