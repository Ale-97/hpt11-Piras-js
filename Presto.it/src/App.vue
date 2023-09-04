<template>
  <div id="App">
      <Header />
      <router-view />
      <Footer />
  </div>
</template>
<script>
import Header from "./components/Global/header.vue";
import Footer from "./components/Global/footer.vue";
export default {
  name: "App",
  components: {
    Header,
    Footer,
  },
};
</script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap');
*{
  font-family: 'Heebo', sans-serif;
}
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
.row{
  margin: 0;
  padding: 0;
}
</style>
