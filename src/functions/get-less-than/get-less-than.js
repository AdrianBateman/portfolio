export function getLessThan(choice) {
    switch(choice) {
      case 'rock':
        return ['scissors', 'lizzard'];
      case 'paper':
        return ['rock', 'spock'];
      case 'scissors':
        return ['paper', 'lizzard'];
      case 'lizzard':
        return ['paper', 'spock'];
      default:
        return ['rock', 'scissors'];
    }
  }
