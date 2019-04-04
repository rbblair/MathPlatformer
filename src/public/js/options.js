var optionsState =
    {

        create: function () 
        {
            //levels of the game 
            var primarySchool = game.add.button(game.world.centerX - 94, 350, 'primaryButton', this.primaryLevelFunc, this, 2, 1, 0);
            var calculusLevel = game.add.button(game.world.centerX -94, 300, 'calculusButton', this.calculusLevelFunc, this, 2, 1, 0);
            var highSchoolLevel = game.add.button(game.world.centerX - 94, 250, 'highSchoolButton',this.highSchoolLevelFunc, this, 2, 1, 0);
            var deathLevel = game.add.button(game.world.centerX -94, 100, 'deathButton', this.deathLevelFunc, this, 2, 1, 0);
            
            //switch game sound 
            musicMute = game.add.button(game.world.centerX - 94, 400, 'muteButton', toggleMute, this, 2, 1, 0);

            if (!game.sound.mute)
            {
                musicMute.tint = 16777215;
            }
            else 
            {
                musicMute.tint = 16711680;
            }
            musicMute.onInputOver.add(over, this);
            musicMute.onInputOut.add(out, this);

        },

        primaryLevelFunc: function ()
        {
            LEVEL_OF_MATH = " Primary School Level";
            game.state.start("play");
        },

        calculusLevelFunc: function ()
        {
            LEVEL_OF_MATH = "Calculus Level";
            game.state.start("play");
        },

        highSchoolLevelFunc: function ()
        {
            LEVEL_OF_MATH = "High School Level";
            game.state.start("play");
        },

        deathLevelFunc: function ()
        {
            LEVEL_OF_MATH ="Death Level";
            game.state.start("play");
        },

        toggleMute: function ()
            {
                if (!game.sound.mute)
                {
                    game.sound.mute = true;
                    musicMute.tint = 16711680;
                   
                }
                else
                {
                    game.sound.mute = false;
                    musicMute.tint = 16777215;
                }
            }

    };   