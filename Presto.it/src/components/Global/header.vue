  <template>
  <div id="header" class="contrainer-fluid">
    <nav class="row justify-content-center">
      <div class="col-12">
        <div class="row d-flex align-items-center justify-content-between">
          <div class="col-2">
            <div class="d-flex">
              <img src="../../assets/logo.png" alt="" />
              <h1>Presto.it</h1>
            </div>
          </div>
          <div class="col-7">
            <ul class="row  justify-content-between align-items-center">
              <li class="col-2">
                <router-link to="/">
                  <span v-if="focus() != ''">Home</span>
                  <span v-else class="focus">Home</span>
                </router-link>
              </li>
              <li class="col-2">
                <router-link to="/Annunci">
                  <span v-if="focus() != 'Annunci'">Annunci</span>
                  <span v-else class="focus">Annunci</span>
                </router-link>
              </li>
              <li class="col-2">
                <router-link to="/Articoli">
                  <span v-if="focus() != 'Categorie'">Categorie</span>
                  <span v-else class="focus">Categorie</span>
                </router-link>
              </li>
              <li class="col-2">
                <router-link to="/Articoli">
                  <span v-if="focus() != 'Profilo'">Profilo</span>
                  <span v-else class="focus">Profilo</span>
                </router-link>
              </li>
              <li class="col-3">
                <router-link to="/Articoli">Crea Annunci</router-link>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </div>
</template>
  
  <script>
export default {
  name: "header",
  methods: {
    focus() {
      const currentPage = window.location.hash.split("/");
      return currentPage[currentPage.length - 1];
    },

  },
};
</script>
  
  <style lang="scss">
#header {
  @media screen and (min-width: 992px) {
   nav{
    margin: 40px 100px 0;
   } 
  }
  nav {
    margin: 20px 0;
    padding: 0 20px;
    margin: 50px 0;
    .col-8{
      padding: 15px 20px;
      box-shadow:0 5px 5px 5px rgb(232, 232, 232) ;
    }
    .focus {
      color: rgb(0, 185, 142);
      font-weight: 700;
    }
  }
  .col-4 {
    height: 100%;
  }
  h1 {
    margin: 0;
    margin-left: 5px;
  }
  li:nth-last-of-type(1) {
    background-color: rgb(0, 185, 142);
    padding: 8px 0;
    border-radius: 10px;
    text-align: center;
    a {
      color: white;
    }
  }
}
</style>
  