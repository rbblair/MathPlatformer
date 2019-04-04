//declare load state
var loadState =
    {
        //function that loads all assets
        preload: function () 
        {
            //loading label
            var loadingLabel = game.add.text(80, 150, 'loading . . .',
                                            {font: '30px Comic Sans', fill: '#ffffff'});
            //load all assets
            //first parameter is the variable that will point to the asset
            //second parameter is the asset file
            //game.load.image('name', 'assets/image.png');
            game.load.image('deathButton', 'assets/deathButton.png');
            game.load.image('highSchoolButton', 'assets/highSchoolButton.png');
            game.load.image('muteButton', 'assets/muteButton.png');
            game.load.image('optionsButton', 'assets/optionsButton.png');
            game.load.image('playButton', 'assets/playButton.png');
            game.load.image('primaryButton', 'assets/primaryButton.png');
            game.load.image('sky','assets/sky.png');
            game.load.image('ground', 'assets/platform.png');
            game.load.spritesheet('dude','assets/dude.png', 32, 48);
            game.load.spritesheet('characterSheet', 'assets/tilesheet/character_sheet.png', 128, 128, 83);
            game.load.spritesheet('assetSheet', 'assets/tilesheet/asset_sheet.png', 132, 132, 8);
        },

        //function that calls things
        create: function () 
        {
            //go to next state, mainmenu
            game.state.start('mainmenu');
            
        }
    };   