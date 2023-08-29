<template>
  <div id="app">
    <div class="container-fluid">
      <Header class="row" />
      <Main :elementList="elementList" class="row" />
      <Footer class="row" />
    </div>
  </div>
</template>

<script>
import Header from "./components/header.vue";
import Main from "./components/Main.vue";
import Footer from "./components/footer.vue";
import annunci from "./annunci.json";
export default {
  name: "App",
  components: {
    Header,
    Main,
    Footer,
  },
  data() {
    return {
      elementList:annunci,
    };
  },
  created() {
  this.query() 
   },

  methods: {
    query() {
      
        console.log(annunci);

    },
  },
};
</script>

<style lang="scss">
ul {
  margin: 0;
}
li {
  list-style: none;
}
a {
  color: black;
  text-decoration: none;
}
</style>
