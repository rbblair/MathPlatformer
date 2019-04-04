//create game window object at size 800x600
var game = new Phaser.Game(800, 600);

game.global = {
    LEVEL_OF_MATH : ""
   }

//add game states
game.state.add('boot', bootState);
game.state.add('load', loadState);
game.state.add('mainmenu', mainMenuState);
game.state.add('options', optionsState);
game.state.add('levelSelect', levelSelectState);
game.state.add('play', playState);
game.state.add('win', winState);
game.state.add('lose', loseState);

//start first state, boot
game.state.start('boot');