  <template>
  <div id="header">
    <div class="col-12">

      <div class="row d-flex align-items-center justify-content-between">
        <div class="col-2">
          <div class="d-flex justify-content-between">
            <img src="../assets/logo.png" alt="" />
            <h1>Presto.it</h1>
          </div>
        </div>
        <div class="col-4">
          <ul class="d-flex justify-content-between align-items-center">
            <li><a href="">Home</a></li>
            <li><a href="">Annunci</a></li>
            <li><a href="">Categorie</a></li>
            <li><a href="">Profilo</a></li>
            <li><a href="">Crea Annuncio</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>
  
  <script>
export default {
  name: "header",
};
</script>
  
  <style lang="scss">
  #header{
    .col-4{
   height: 100%; 
  }
  
  li:nth-last-of-type(1){
   background-color: greenyellow;
  }
  }

</style>
  