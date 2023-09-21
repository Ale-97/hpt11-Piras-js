import { createRouter, createWebHashHistory } from "vue-router";
import Home from "@/views/Home.vue";
import Prodotto from "@/views/Prodotto.vue";

const routes = [
  {
    path: "/",
    name: "Home",
    component: Home,
  },
  {
    path: "/Annunci",
    name: "Annunci",
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () =>import(/* webpackChunkName: "about" */ "../views/Annunci.vue"),
  },
  {
    path: "/Annunci/:id",
    name: "Prodotto",
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () =>
      import(/* webpackChunkName: "about" */ "../views/Prodotto.vue"),
      children: [
        // UserHome will be rendered inside User's <router-view>
        // when /users/:username is matched
        { path: '', component: Prodotto },
      ],


  },
];

const router = createRouter({
  history: createWebHashHistory(),
  routes,
});

export default router;
