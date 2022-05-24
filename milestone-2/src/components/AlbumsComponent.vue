<template>
  <section v-if="!loading" class="albums py-3">
    <div class="container">
      <div class="row gy-4 gx-5 row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xxl-5">
        <Album :album="album" v-for="(album, index) in albums" :key="index" />
      </div>
    </div>
  </section>
  <Loading v-else />
</template>

<script>
import Album from "./AlbumItem.vue";
import Loading from "./LoadingComponent.vue";

export default {
  name: "AlbumsComponent",
  props:{
    albums:Array,
    loading:Boolean
  },
  components: {
    Album,
    Loading,
  },
};
</script>

<style>
</style>