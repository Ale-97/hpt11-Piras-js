<template>
  <div class="Section4 container-fluid">
    <div class="row justify-content-center">
      <div class="col-6">
        <h2>Gli ultimi <span>Annunci</span></h2>
        <div>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi,
          inventore. Harum nemo aperiam dolor consequatur adipisci inventore
          nulla cum reiciendis corporis assumenda, optio non nostrum nisi nobis.
        </div>
      </div>
    </div>

    <div class="row justify-content-center g-5">
      <Card
        class="col-12 col-md-6 col-lg-5 col-xl-4  d-flex  justify-content-center"
        v-for="annuncio in arrayElement(6)"
        :id="annuncio.id"
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
import Card from "../Annunci/Card.vue";
import Annunci from "../../annunci.json";
export default {
  name: "Section4",
  components: {
    Card,
  },
  data() {
    return {
      elementList: Annunci,
      listElementview: [],
    };
  },
  methods: {
    arrayElement(numberElementview) {
      for (let i = 0; i < numberElementview; i++) {
        this.listElementview.push(this.elementList[i]);
      }
      return this.listElementview;
    },
  },
};
</script>

<style lang="scss" scoped>
.col-6 {
  text-align: center;
}
</style>
