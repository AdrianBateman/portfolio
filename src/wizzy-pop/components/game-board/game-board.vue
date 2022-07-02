<template>
  <section
    v-if="store.poppers.length"
    class="game-board"
    :style="gameBoardStyle"
  >
    <popper-button
      v-for="(index, key) in store.poppers"
      :key="key"
      :id="key"
      :isPopped="index.isPopped"
      @popperclick="handelPopperClick"
    />
  </section>
</template>

<script>
import { useStore } from "../../state/store";
import PopperButton from '../popper-button/popper-button.vue';

export default {
  name: 'GameBoard',
  components: {
    PopperButton,
  },
  setup() {
    const store = useStore();

    const handelPopperClick = (id) => {
      store.decreaseRemainingPoppers();
      store.decrecePlayerTurn();
      store.setPopperIsPopped(id);
    };

    return {
      store,
      handelPopperClick,
    };
  },
  computed: {
    gameBoardStyle() {
      return {
        width: `${this.store.getGridColumns * (66)}px`,
      };
    }
  }
};
</script>

<style scoped lang="scss">
.game-board {
  display: flex;
  flex-wrap: wrap;
  max-width: calc(100vw - 2rem);
  margin: 2rem auto 0;
}
</style>