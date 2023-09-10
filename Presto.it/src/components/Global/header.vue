  <template>
  <span id="header">
    <nav class="navbar navbar-expand-lg bg-light fixed-top" id="navbarA">
      <div class="container-fluid">
        <div class="d-flex">
          <img src="../../assets/logo.png" alt="" />
          <h1>Presto.it</h1>
        </div>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarText"
          aria-controls="navbarText"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-lg-end"
          id="navbarText"
        >
          <ul
            class="navbar-nav mb-2 mb-lg-0 align-items-lg-center"
            style="--bs-scroll-height: 100px"
          >
            <li class="nav-item">
              <router-link to="/" class="nav-link">
                <span v-if="focus() != ''">Home</span>
                <span v-else class="focus">Home</span>
              </router-link>
            </li>
            <li class="nav-item">
              <router-link to="/Annunci" class="nav-link">
                <span v-if="focus() != 'Annunci'">Annunci</span>
                <span v-else class="focus">Annunci</span>
              </router-link>
            </li>
            <li class="nav-item dropdown">
              <router-link
                to="/Articoli"
                class="nav-link dropdown-toggle"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <span v-if="focus() != 'Categorie'">Categorie</span>
                <span v-else class="focus">Categorie</span>
              </router-link>
              <ul class="dropdown-menu">
                <li>
                  <router-link class="dropdown-item" to="/Annunci"
                    >Elettronica
                  </router-link>
                </li>
                <li>
                  <router-link class="dropdown-item" to="/Annunci"
                    >Motori
                  </router-link>
                </li>
                <li>
                  <router-link class="dropdown-item" to="/Annunci"
                    >Sport
                  </router-link>
                </li>
                <li>
                  <router-link class="dropdown-item" to="/Annunci"
                    >Immobili
                  </router-link>
                </li>
                <li>
                  <router-link class="dropdown-item" to="/Annunci"
                    >Abbigliamento
                  </router-link>
                </li>
                <li>
                  <router-link class="dropdown-item" to="/Annunci"
                    >Giardinaggio
                  </router-link>
                </li>
                <li>
                  <router-link class="dropdown-item" to="/Annunci"
                    >Musica
                  </router-link>
                </li>
                <li>
                  <router-link class="dropdown-item" to="/Annunci"
                    >Arredamento
                  </router-link>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <router-link to="/Profile" class="nav-link">
                <span v-if="focus() != 'Profile'">Profile</span>
                <span v-else class="focus">Profilo</span>
              </router-link>
            </li>
            <li class="nav-item" id="rightButton">
              <router-link to="/Articoli" class="nav-link">
                Crea Annunci
              </router-link>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </span>
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
@media screen and (min-width: 1300px) {
  #navbarA {
    margin: 40px 300px 0;
  }
}
#navbarB {
  margin: 0;
}
#header {
  padding-top: 150px;
  margin-bottom: 30px;
  nav {
    background-color: white;
    margin-bottom: 20px;
    transition: all 0.5s;
    padding: 20px 0;
    h1 {
      margin: 0;
      margin-left: 5px;
    }
    .focus {
      color: rgb(0, 185, 142);
      font-weight: 700;
    }
    .navbar-toggler {
      width: 70px;
    }
    ul {
      li {
        margin: 0 10px;
      }
      #rightButton {
        background-color: rgb(0, 185, 142);
        padding: 4px 0;
        border-radius: 10px;
        text-align: center;
        max-width: 150px;
        a {
          color: white;
        }
      }
    }
  }
}
</style>
  