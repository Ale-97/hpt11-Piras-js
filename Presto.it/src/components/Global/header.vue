  <template>
  <div id="header" class="contrainer-fluid">
    <nav class="row justify-content-center fixed-top" id="navbarA">
      <div class="col-12">
        <div class="row d-flex align-items-center justify-content-between">
          <div class="col-2">
            <div class="d-flex">
              <img src="../../assets/logo.png" alt="" />
              <h1>Presto.it</h1>
            </div>
          </div>
          <div class="col-7">
            <ul class="row justify-content-end align-items-center">
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
              <li class="col-2">
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
  mounted() {
    this.navbar();
  },
  methods: {
    focus() {
      const currentPage = window.location.hash.split("/");
      return currentPage[currentPage.length - 1];
    },
    navbar() {
      window.addEventListener("scroll", () => {
        if (window.scrollY == 0) {
          document.getElementById("navbarB").id = "navbarA";
        } else {
          document.getElementById("navbarA").id = "navbarB";
        }
      });
    },
  },
};
</script>
  
  <style lang="scss">
@media screen and (min-width: 992px) {
  #navbarA {
    margin: 40px 300px 0;
    box-shadow: 0 5px 5px 5px rgb(232, 232, 232);
  }
}
#navbarB {
  margin: 0;
}
#header {
  padding-top: 150px;
  nav {
    overflow: hidden;
    background-color: white;
    margin-bottom: 20px;
    transition: all 1s;
    .col-12 {
      padding: 15px 20px;
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
  