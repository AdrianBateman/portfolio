<template>
  <div class="game-settings">
    <details
      class="game-settings__details"
    >
      <summary
        class="game-settings__summary"
      >
        Settings
      </summary>

      <h2>Popper Board size</h2>

      <div
        class="game-settings__fieldset"
      >
        <label
          v-for="size in boardSizes"
          class="game-settings__radio-label"
        >
          {{size.label}}

          <input
            class="game-settings__radio"
            type="radio"
            name="board-size"
            :value="size.value"
            :checked="size.selected"
            @change="handleBoardSizeChange"
          />
        </label>
      </div>

      <h2>Popper colour</h2>

      <div
        class="game-settings__fieldset"
      >
        <label
          v-for="color in popperColors"
          class="game-settings__radio-label"
          :key="color"
        >
          {{color.value}}
          <input
            class="game-settings__radio"
            type="radio"
            name="popper-color"
            :value="color.value"
            :checked="color.selected"
            @change="handlePopperColorChange"
          />
        </label>
      </div>
    </details>
  </div>
</template>

<script>
import { settingsStore } from '../../state/settings-store';

export default {
  name: "GameSettings",
  emits: ['changeboardsize'],
  setup(props, context) {
    const store = settingsStore();

    const boardSizes = [
      {
        label: 'tiny',
        value: 9,
      },
      {
        label: 'small',
        value: 16,
      },
      {
        label: 'normal',
        value: 25,
        selected: true,
      },
      {
        label: 'large',
        value: 36,
      },
    ];

    const popperColors = [
      {
        value: 'pink',
        selected: true,
      },
      {
        value: 'blue',
      },
      {
        value: 'green',
      },
      {
        value: 'red',
      },
      {
        value: 'orange',
      },
    ];

    const handleBoardSizeChange = ({target}) => {
      store.setBoardSize(parseInt(target.value));
      context.emit('changeboardsize')
    }

    const handlePopperColorChange = ({target}) => {
      store.setButtonColor(target.value);
    }

    return {
      boardSizes,
      popperColors,
      handleBoardSizeChange,
      handlePopperColorChange,
    };
  },
};
</script>

<style scoped lang="scss">
@import '../../scss/mixins/fonts';
@import '../../scss/variables/colors';

.game-settings {
  &__summary {
    @include titleLabel;
  }

  &__legend {
    font-size: 1.2rem;
    padding: .5rem;
  }

  &__fieldset {
    padding: .5rem;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(80px, 1fr));
    gap: 1rem;
  }

  &__radio-label {
    margin: 0;
    padding: .25rem;
    text-transform: capitalize;
    letter-spacing: 1px;
    text-align: center;
    background-color: $borderSubtlePink;
    border-radius: .25rem;
  }
}
</style>
