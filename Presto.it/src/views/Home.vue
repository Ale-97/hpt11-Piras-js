<template>
  <div id="home">
    <Section1 />
    <Section2 />
    <Section3 />
    <Section4 />
  </div>
</template>

<script>
// @ is an alias to /src

import Section1 from "../components/Home/Section1.vue";
import Section2 from "../components/Home/Section2.vue";
import Section3 from "../components/Home/Section3.vue";
import Section4 from "../components/Home/Section4.vue";
export default {
  name: "Home",
  components: {
    Section1,
    Section2,
    Section3,
    Section4,
  },
};
</script>
<style lang="scss">
h2 {
  font-size: 50px;
  font-weight: 300;
  span {
    color: rgb(0, 185, 142);
    font-weight: bold;
  }
}
button {
  background-color: rgb(0, 185, 142);
  width: 250px;
  padding: 20px 0;
  border-radius: 10px;
  border: none;
  color: white;
}
#home > * {
  margin-bottom: 150px;
}
</style>
