<template>
  <div class="title">
    <h1 class="title__text">{{ store.title }}</h1>
  </div>

  <how-to />

  <main v-if="store.game.isActive"  title="Play game">
    <aside class="game-info">
      <score-board
        v-if="store.poppers.length"
        :number-poppers="store.game.numberPoppers"
        :remaining-poppers="store.game.remainingPoppers"
        :current-player="store.getCurrentPlayer"
        :turns-left="store.getTurnsLeft"
      />

      <game-settings @changeboardsize="handleChangeBoardSize" />
    </aside>

    <nav class="navigation">
      <button class="button button--small navigation__new-game" @click.prevent="handleNewGameClick">New Game</button>

      <button
        v-if="store.poppers.length"
        class="button button--small navigation__new-game"
        @click.prevent="handleEndTurnButton"
      >
        End turn
      </button>
    </nav>

    <game-board />
  </main>

  <main v-else title="Play game">
    <h2 v-if="store.game.winner">{{ store.game.winner }} Wins!</h2>

    <button class="button" @click.prevent="handleNewGameClick">New Game</button>
  </main>
</template>

<script>
import { useStore } from "./state/store";
import { settingsStore } from "./state/settings-store";

import HowTo from "./components/how-to/how-to.vue";
import ScoreBoard from "./components/score-board/score-board.vue";
import GameSettings from "./components/game-settings/game-settings.vue";
import GameBoard from "./components/game-board/game-board.vue";

export default {
  name: "App",
  components: {
    HowTo,
    ScoreBoard,
    GameBoard,
    GameSettings,
  },
  setup() {
    const store = useStore();
    const settings = settingsStore();

    const handleEndTurnButton = () => {
      store.startChangePlayer();
    };

    const addPlayers = () => {
      store.addPlayer({ name: "Player One", remainingTurns: 5 });
      store.addPlayer({ name: "Player Two", remainingTurns: 5 });
    };

    const handleNewGameClick = () => {
      store.$reset();
      addPlayers();
      store.setGameBoardSize(settings.getBoardSize);
      store.setPoppers();
      store.setGameIsActive(true);
    };

    const handleChangeBoardSize = () => {
      store.$reset();
      store.setGameBoardSize(settings.getBoardSize);
      store.setPoppers();
      addPlayers();
      store.setGameIsActive(true);
    };

    addPlayers();
    store.setPoppers();

    return {
      store,
      handleEndTurnButton,
      handleNewGameClick,
      handleChangeBoardSize,
    };
  },
};
</script>

<style lang="scss">
@import './scss/variables/colors';
@import './scss/base/button.scss';

* {
  margin: 0;
  padding: 0;
}
* + * {
  margin-top: 1.5rem;
}

body {
  font-size: 16px;
  background-color: $backgroundPink;
  color: $textColorDark;
}

#app {
  width: calc(100vw - 2rem);
  margin: 0 auto;
  overflow-x: hidden;
}

.title {
  &__text {
    text-align: center;
  }
}

.navigation {
  display: flex;
  justify-content: space-between;
}

.game-info {
  display: flex;
}

.score-board,
.game-settings {
  width: 50%;
}

.game-settings {
  margin-top: 0;
}
</style>
