<template>
  <button
    role="button"
    :id="props.id"
    :disabled="props.isPopped"
    class="popper-button"
    :class="`popper-button--${store.getButtonColor}`"
    @click="$emit('popperclick', props.id)"
  >
    BUTTON
  </button>
</template>

<script>
import { settingsStore } from '../../state/settings-store';

export default {
  name: 'PopperButton',
  props: {
    id: {
      type: Number,
      default: undefined,
    },
    isPopped: {
      type: Boolean,
      default: false,
    }
  },
  setup(props) {
    const store = settingsStore();

    return {
      props,
      store,
    };
  }
};
</script>

<style scoped lang="scss">
@import '../../scss/variables/colors';

@mixin popperColor($hue) {
  outline-color: hsl($hue, 100%, 55%);;
  background: radial-gradient(
      circle,
      hsl($hue, 100%, 85%) 50%,
      hsl($hue, 100%, 55%) 80%
    );

  &:disabled {
    background: radial-gradient(
        circle,
        hsl($hue, 100%, 55%) 50%,
        hsl($hue, 100%, 85%) 80%
    );
  }
}

.popper-button {
  display: inline-block;
  width: 50px;
  height: 50px;
  margin: .5rem;
  border-radius: 25px;
  font-size: 0px;
  border-width: 0;
  cursor: pointer;
  outline-style: solid;
  outline-width: 0;

  &:disabled {
    cursor: default;
    animation-name: button-pop;
    animation-duration: 50ms;
  }

  &--pink {
    @include popperColor(310);
  }

  &--blue {
    @include popperColor(250);
  }

  &--green {
    @include popperColor(120);
  }

  &--red {
    @include popperColor(0);
  }

  &--orange {
    @include popperColor(30);
  }
}

@keyframes button-pop {
  from {
    outline-width: 0;
  }

  50% {
    outline-width: 2px;
  }

  to {
    outline-width: 0;
  }
}
</style>
