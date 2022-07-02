import { defineStore } from 'pinia'

export const useStore = defineStore('main', {
  state: () => {
    return {
      title: 'Wizzy Popper Game',
      game: {
        numberPoppers: 25,
        remainingPoppers: 25,
        winner: undefined,
        currentPlayer: 0,
        isActive: false,
      },
      poppers: [],
      players: [],
    }
  },
  // TODO: export this to seperate file
  getters: {
    getCurrentPlayer(state) {
      return state.players[state.game.currentPlayer].name;
    },

    getTurnsLeft(state) {
      return state.players[state.game.currentPlayer].remainingTurns;
    },

    getGridColumns(state) {
      return Math.sqrt(state.game.numberPoppers);
    },
  },
  // TODO: export this to seperate file
  actions: {
    setPoppers() {
      for(let i = 0; i < this.game.numberPoppers; i += 1) {
        this.poppers.push({});
      }
    },

    decreaseRemainingPoppers() {
      if (this.game.remainingPoppers > 1) {
        this.game.remainingPoppers--;
      } else {
        this.game.winner = this.getCurrentPlayer;
        this.game.remainingPoppers--;
      }
    },

    resetCurrentPlayerTurns() {
      this.players[this.game.currentPlayer].remainingTurns = 5;
    },

    startChangePlayer() {
      this.resetCurrentPlayerTurns();

      this.game.currentPlayer = (
        this.game.currentPlayer === (this.players.length - 1)
      )
        ? 0
        : this.game.currentPlayer + 1;
    },

    decrecePlayerTurn() {
      if (this.getTurnsLeft > 1) {
        this.players[this.game.currentPlayer].remainingTurns--;
      } else {
        this.startChangePlayer();
      }
    },

    setPopperIsPopped(id) {
      this.poppers[id].isPopped = true;
    },

    addPlayer(data) {
      this.players.push(data);
    },

    setGameBoardSize(size) {
      this.game.numberPoppers = size;
      this.game.remainingPoppers = size;
    },

    setGameIsActive(newValue) {
      this.game.isActive = newValue;
    },
  },
});
