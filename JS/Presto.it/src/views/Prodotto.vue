<template>
  <div id="Prodotto">
 <MainProduct :product="product"/>
  </div>
</template>

<script>

import annunci from "@/annunci.json";
import MainProduct from "@/components/Annunci/Prodotto/Main.vue"
export default {
  name: "Prodotto",
  components: {
    MainProduct,
  },
  data() {
    return {
      product:annunci[this.$route.params.id],
    };
  },
  props:{

  },
  methods: {
   
  },
};
</script>

<style lang="scss">
</style>