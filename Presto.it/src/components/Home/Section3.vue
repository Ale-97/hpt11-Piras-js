<template>
  <div class="Section3 container-fluid">
    <div class="row justify-content-center align-items-center">
      <div class="col-4 d-flex justify-content-center">
        <div></div>
      </div>
      <div class="col-4">
        <h2>Lavora <span>con noi</span></h2>
        <div>Invia la tua candidatura per far parte del team di Presto</div>
        <div class="d-flex flex-column">
          <input type="text" placeholder="Nome" />
          <input type="email" placeholder="Email" />
          <textarea
            rows="4"
            cols="50"
            maxlength="200"
            placeholder="Inserisci una tua breve presentazione"
          ></textarea>
          <div class="d-flex justify-content-center">
            <button>INVIA LA CANDIDATURA</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Section3",
  components: {},
  data() {
    return {};
  },
  methods: {},
};
</script>

<style lang="scss" scoped>
.Section3 {
  background-color:rgb(250, 250, 250);
  padding: 80px 0;
  .col-4:first-of-type {
    div {
      height: 350px;
      width: 100%;
      background-image: url("../../assets/section3.jpg");
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
  }
  .col-4:last-of-type {
    .d-flex {
      margin-top: 50px;
      input,
      textarea {
        margin-bottom: 25px;
        border: 1px solid lightgray;
        border-radius: 8px;
        padding: 10px 10px;
      }
    }
  }
}
</style>
