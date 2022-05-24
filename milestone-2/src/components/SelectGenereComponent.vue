<template>
  <div class="select_genere ms-auto">
    <label class="me-2 text-white" for="genere">Seleziona un genere:</label>
    <select
      name="genere"
      id="genere"
      :value="typeGenere"
      @input="$emit('input', $event.target.value)"
      @change="$emit('selectGenere')"
    >
      <option value="" selected>All</option>
      <option v-for="(genere, index) in albums" :key="index">
        {{ genere }}
      </option>
    </select>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "SelectGenereComponent",
  props: {
    typeGenere: String,
  },
  data() {
    return {
      API_URL: "http://localhost/PHP/php-ajax-dischi/milestone-1/db.php",
      albums: [],
      error: null,
    };
  },
  methods: {
    APICall() {
      axios
        .get(this.API_URL)
        .then((response) => {
          response.data.response.forEach((album) => {
            if (!this.albums.includes(album.genre)) {
              this.albums.push(album.genre);
            }
          });
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

<style lang="scss" scoped>
select {
  width: 200px;
}
</style>