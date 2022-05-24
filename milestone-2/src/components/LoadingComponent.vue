<template>
  <section class="loading d-flex align-items-center justify-content-center flex-column">
    <div class="icon">
      <font-awesome-icon icon="fa-solid fa-circle-notch" size="2xl" />
    </div>
    <h3>Loading...</h3>
  </section>
</template>

<script>
export default {
  name: "LoadingComponent",
};
</script>

<style lang="scss" scoped>
.loading {
  color: $white;
  height: 100%;
  .icon {
    animation: spin 500ms linear infinite;
  }
}
@keyframes spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
</style>