<script>
export default {
  name: 'ScoreBoard',
  props: {
    numberPoppers: {
      type: Number,
      default: undefined,
    },
    remainingPoppers: {
      type: Number,
      default: undefined,
    },
    currentPlayer: {
      type: String,
      default: undefined,
    },
    turnsLeft: {
      type: Number,
      default: undefined,
    },
  },
  setup(props) {
    return { props };
  },
};
</script>

<template>
  <div class="score-board">
    <details class="score-board__details">
      <summary class="score-board__summary">Info</summary>

      <table class="score-board__table">
        <tr>
          <th scope="row" class="score-board__table-header score-board__table-cell">Current Player</th>
          <td class="score-board__table-cell">{{ props.currentPlayer }}</td>
        </tr>

        <tr>
          <th scope="row" class="score-board__table-header score-board__table-cell">Turns left</th>
          <td class="score-board__table-cell">{{ props.turnsLeft }}</td>
        </tr>
      </table>
    </details>
  </div>
</template>

<style scoped lang="scss">
@import '../../scss/mixins/fonts';
.score-board {
  &__summary {
    @include titleLabel;
  }

  &__table {
    margin-top: .5rem;
  }

  &__table-header {
    text-align: left;
  }

  &__table-cell {
    padding: 0 .5rem .5rem 0;
  }
}
</style>
