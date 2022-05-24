<template>
  <div class="col">
    <div class="card_album text-center p-4">
      <div class="img">
        <img :src="album.poster" :alt="album.title" />
      </div>
      <div class="text">
        <h4>{{ album.title }}</h4>
        <h5>{{ album.author }}</h5>
        <h6>{{ album.year }}</h6>
      </div>
    </div>
  </div>
</template>

<script>


export default {
    name:'AlbumItem',
    props:{
        album: Object
    }
};
</script>

<style lang="scss" scoped>
.card_album{
    background-color: $bgHeader;
    height: 100%;
    img{
        aspect-ratio: 1 / 1;
    }
    h4{
        color: $white;
        text-transform: uppercase;
        margin: 1.5rem 0;
    }
    h5,
    h6{
        color: $textMain;
        font-weight: 400;
        margin: 0;
    }
}
</style>