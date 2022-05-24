<template>
  <div id="app">
    <header class="d-flex py-3 px-4">
      <Logo />
      <div class="menu_right text-end">
        <Select v-model="typeGenere" @selectGenere="filter()" />
        <Select-author v-model="typeAuthor" @selectAuthor="filter()" />
      </div>
    </header>
    <main class="py_5">
      <Albums :albums="albums" :loading="loading" />
    </main>
  </div>
</template>

<script>
import Logo from "./components/LogoComponent.vue";
import Select from "./components/SelectGenereComponent.vue";
import SelectAuthor from "./components/SelectAuthor.vue";
import Albums from "./components/AlbumsComponent.vue";
import axios from "axios";

export default {
  name: "App",
  components: {
    Logo,
    Select,
    SelectAuthor,
    Albums,
  },
  data() {
    return {
      API_URL: "http://localhost/PHP/php-ajax-dischi/milestone-1/db.php",
      albums: null,
      error: null,
      loading: true,
      typeGenere: "",
      typeAuthor: "",
    };
  },
  methods: {
    APICall() {
      axios
        .get(this.API_URL)
        .then((response) => {
          this.albums = response.data.response;
          this.loading = false;
          return response.data.response;
        })
        .catch((error) => {
          this.error = `Sorry,We've a problem ${error} `;
        });
    },
    filter() {
      this.loading = true;
      axios
        .get(this.API_URL)
        .then((response) => {
          if (this.typeGenere != "" && this.typeAuthor != "") {
            this.albums = response.data.response.filter(
              (album) =>
                album.genre === this.typeGenere &&
                album.author === this.typeAuthor
            );
          } else if (this.typeGenere != "") {
            this.albums = response.data.response.filter(
              (album) => album.genre === this.typeGenere
            );
          } else if (this.typeAuthor != "") {
            this.albums = response.data.response.filter(
              (album) => album.author === this.typeAuthor
            );
          } else {
            this.albums = response.data.response;
          }
          this.loading = false;
        })
        .catch((error) => {
          this.error = `Sorry,We've a problem ${error} `;
        });
    },
  },
  mounted() {
    this.APICall();
  },
};
</script>

<style lang="scss">
@import "@/assets/scss/style";
header {
  background-color: $bgHeader;
  justify-content: space-between;
  align-items: center;
}
main {
  height: calc(100vh - 90px);
  background-color: $bgMain;
  overflow: auto;
}
</style>
