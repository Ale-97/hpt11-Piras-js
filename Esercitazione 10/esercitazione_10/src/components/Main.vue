<template>
  <div class="Main justify-content-center">
    <div class="col-10">
      <div class="row">
        <div class="col-12 d-flex justify-content-evenly">
          <input type="text" v-model="nameProduct" placeholder="Cerca" />
          <select name="categories" id="categories" v-model="categories">
            <option value="All">Tutti gli annunci</option>
            <option value="Elettronica">Elettronica</option>
            <option value="Motori">Motori</option>
            <option value="Sport">Sport</option>
            <option value="Immobili">Immobili</option>
            <option value="Abbigliamento">Abbigliamento</option>
            <option value="Giardinaggio">Giardinaggio</option>
            <option value="Musica">Musica</option>
          </select>
          <input type="text" v-model="minimalCost" placeholder="Min"/>
          <input type="text" v-model="maximumCost" placeholder="Max"/>
          <button @click="$emit('search', nameProduct,categories,minimalCost,maximumCost,order)">
            cerca
          </button>
        </div>
      </div>

      <div class="row justify-content-end">
        <div class="col-2">
          <select name="order" id="order"  v-model="order" @change="$emit('order', order)">
            <option value="AZ">A-Z</option>
            <option value="ZA">Z-A</option>
            <option value="priceUp">prezzo più alto</option>
            <option value="priceDown">prezzo più basso</option>
          </select>
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
      nameProduct:"",
      categories: "All",
      minimalCost:"",
      maximumCost:"",
      order:"AZ"
    };
  },
  props: {
    elementList: Array,
  },
};
</script>

<style lang="scss" scoped>
</style>
