<template>
  <div id="Annunci" >
    <div>
      <Main :elementList="elementList" @search="filterList" @order="orderList"/>
    </div>
  </div>
</template>

<script>
import Main from "@/components/Annunci/Main.vue";
import annunci from "@/annunci.json";
export default {
  name: "Annunci",
  components: {
    Main,
  },
  data() {
    return {
      elementList: annunci,
    };
  },
  methods: {
    orderList(order) {
      if (order == "priceDown") {
        this.elementList = this.elementList.sort((p1, p2) =>{
          const number1 = Number(p1.price);
          const number2 = Number(p2.price); 
          if (number1 < number2) {
            return -1;
          }
          if (number1 > number2) {
            return 1;
          }}
        );
      } else if (order == "priceUp") {
        this.elementList = this.elementList.sort((p1, p2) =>{
          const number1 = Number(p1.price);
          const number2 = Number(p2.price);
          if (number1 > number2) {
            return -1;
          }
          if (number1 < number2) {
            return 1;
          }}
          )
          ;
      } else if (order == "AZ") {
        this.elementList.sort((a, b) => {
          const nameA = a.name.toUpperCase();
          const nameB = b.name.toUpperCase();
          if (nameA < nameB) {
            return -1;
          }
          if (nameA > nameB) {
            return 1;
          }
        });
      } else{this.elementList.sort((a, b) => {
          const nameA = a.name.toUpperCase();
          const nameB = b.name.toUpperCase();
          if (nameA > nameB) {
            return -1;
          }
          if (nameA < nameB) {
            return 1;
          }
        })}
    },

    filterList(nameProduct, categories, minimalCost, maximumCost, order) {
      this.elementList = annunci.filter((x) => {
        if (
          (x.name.toUpperCase() == nameProduct.toUpperCase() || nameProduct == "") &&
          (x.category == categories || categories == "All") &&
          (Number(x.price) >= Number(minimalCost) || minimalCost == "") &&
          (Number(x.price) <= Number(maximumCost) || maximumCost == "")
        ) {
          return true;
        } else {
          false;
        }
      });
      this.orderList(order);
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