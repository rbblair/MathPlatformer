var mainMenuState =
    {
        //goes to levelSelect when you push the "PLAY" button
        start: function () 
        {
            game.state.start('levelSelect');
        },

        //goes to options menu when you push the "OPTIONS" button
        options: function()
        {
            game.state.start('options');
        },

        //function that calls things
        create: function ()
        {
            //title of game
            var nameLabel = game.add.text(game.world.centerX, 80, "Math Sucks",
                                            {font: '50px Comic Sans', fill: '#ffffff'});
            nameLabel.anchor.setTo(0.5, 0.5);
            //buttons will go here
            var playSelect = game.add.button(game.world.centerX, 200, "playButton", this.start, this, 2, 1, 0);
            playSelect.anchor.setTo(0.5, 0.5);
            var optionsSelect = game.add.button(game.world.centerX, 350, "optionsButton", this.options, this, 2, 1, 0);
            optionsSelect.anchor.setTo(0.5, 0.5);
        }
        
    };   