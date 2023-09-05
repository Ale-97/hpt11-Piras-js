<template>
  <div class="Section2 container">
    <div class="row justify-content-center">
      <div class="col-8">
        <h2>Le nostre <span>Categorie</span></h2>
        <div>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus,
          eveniet itaque? Neque atque temporibus architecto animi? Incidunt
          optio amet quaerat.
        </div>
      </div>
    </div>
    <div class="row g-4 justify-content-lg-center">
      <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
        <div>
          <div>
            <span><i class="fas fa-car-alt"></i></span>
            <h3>Auto</h3>
            <div>123 Annunci</div>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
        <div>
          <div>
            <span><i class="fas fa-laptop"></i></span>
            <h3>Elettronica</h3>
            <div>564 Annunci</div>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
        <div>
          <div>
            <span><i class="fas fa-motorcycle"></i></span>
            <h3>Moto</h3>
            <div>230 Annunci</div>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
        <div>
          <div>
            <span><i class="fas fa-tshirt"></i></span>
            <h3>Abbigliamento</h3>
            <div>321 Annunci</div>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
        <div>
          <div>
            <span><i class="fas fa-running"></i></span>
            <h3>Sport</h3>
            <div>90 Annunci</div>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
        <div>
          <div>
            <span><i class="fas fa-leaf"></i></span>
            <h3>Giardinaggio</h3>
            <div>50 Annunci</div>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
        <div>
          <div>
            <span><i class="fas fa-home"></i></span>
            <h3>Casa</h3>
            <div>134 Annunci</div>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
        <div>
          <div>
            <span><i class="fas fa-bacon"></i></span>
            <h3>Cucina</h3>
            <div>176 Annunci</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Section2",
  components: {},
  data() {
    return {};
  },
  methods: {},
};
</script>

<style lang="scss" scoped>
.col-8 {
  text-align: center;
  margin-bottom: 50px;
}
.col-12,.col-sm-6,.col-lg-4,.col-xl-3 {
  div:first-child {
    background-color: rgb(250, 250, 250);
    padding: 20px;
    border-radius: 10px;
    div:first-child {
      border: 1px Dashed rgb(0, 185, 142);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 250px;
      background-color: white;
      h3 {
        color: rgb(14, 46, 80);
      }
      div {
        color: rgb(0, 185, 142);
      }
      i {
        padding: 10px;
        color: rgb(0, 185, 142);
        border-radius: 50%;
        border: 1px Dashed rgb(0, 185, 142);
        padding: 20px;
        font-size: 20px;
        margin-bottom: 20px;
        background-color: white;
      }
    }
    div:first-child:hover {
      background-color: rgb(0, 185, 142);
      h3,
      div {
        color: white;
      }
    }
  }
}
</style>
