<template>
  <div class="select_author ms-auto mt-2">
    <label class="me-2 text-white" for="author">Seleziona un artista:</label>
    <select
      name="author"
      id="author"
      :value="typeAuthor"
      @input="$emit('input', $event.target.value)"
      @change="$emit('selectAuthor')">
      <option value="" selected>All</option>
      <option v-for="(album, index) in albums" :key="index">
        {{ album.author }}
      </option>
    </select>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "SelectAuthor",
  props: {
    typeAuthor: String,
  },
  data() {
    return {
      API_URL: "https://flynn.boolean.careers/exercises/api/array/music",
      albums: null,
      error: null,
    };
  },
  methods: {
    APICall() {
      axios
        .get(this.API_URL)
        .then((response) => {
          this.albums = response.data.response;
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

