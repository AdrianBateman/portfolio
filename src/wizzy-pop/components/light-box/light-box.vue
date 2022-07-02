<template>
  <section
    v-if="isOpen"
    class="light-box"
    @click.prevent="handleCloseButtonClick"
  >
    <div class="light-box-content">
      <button
        class="ligth-box-content__close-button"
        @click.prevent="handleCloseButtonClick"
      >Close</button>
      <slot />
    </div>
  </section>
</template>

<script>
export default {
  name: "LightBox",
  emits: ['closelightbox'],
  props: {
    isOpen: {
      type: Boolean,
      default: false,
    },
  },
  setup(props, { emit } ) {
    const handleCloseButtonClick = () => {
      emit('closelightbox');
    };

    return {props, handleCloseButtonClick};
  }
};
</script>

<style scoped lang="scss">
.light-box {
  position: fixed;
  top: 0;
  left: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100vw;
  height: 100vh;
  background-color: rgba(0, 0, 0, 0.3);
}

.light-box-content {
  background-color: #fff;
  padding: 30px;
}
</style>