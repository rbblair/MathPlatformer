var playState =
    {
        
        //prepare keyboard for input, create sprites
        create: function ()
        {
            // The player and its settings
            var player = game.add.sprite(32,game.world.height - 150,'dude');

            //  We need to enable physics on the player
            game.physics.arcade.enable(player);

            //  Player physics properties. Give the little guy a slight bounce.
            player.body.bounce.y= 0.4;
            //To simulate the effects of gravity on a sprite
            player.body.gravity.y = 300;
            player.body.collideWorldBounds = true;

            //  Our two animations, walking left and right.

            player.animations.add('left', [0,1,2,3],10,true);
            player.animations.add('right', [5,6,7,8],10,true);

            //  Our controls.
            var cursors = game.input.keyboard.createCursorKeys();

            //  We're going to be using physics, so enable the Arcade Physics system
            game.physics.startSystem(Phaser.Physics.ARCADE);

            //  A simple background for our game
            game.add.sprite(0,0,'sky');

            //  The platforms group contains the ground and the 2 ledges we can jump on
            var platforms = game.add.group();

            //  We will enable physics for any object that is created in this group
            platforms.enableBody = true;

            // Here we create the ground.
            var ground = platforms.create(0, game.world.height - 64, 'ground');
        
        },

        //player movement goes in here as well as collision checks
        update: function () 
        {
            var hitPlatform = game.physics.arcade.collide(player, platforms);

            //  Reset the players velocity (movement)
            player.body.velocity.x = 0;

            if(cursors.left.isDown){
                //move to the left
                player.body.velocity.x = -200;

                player.animations.play('left');
            }
            else if(cursors.right.isDown){
                //move to the right
                player.body.velocity.x = 200;

                player.animations.play('right');
            }
            else{
                //stand still
                player.animations.stop();
                player.frame = 4;
            }

            //allow the player to jump if they touch the ground
            if(cursors.up.isDown && player.body.touching.down && hitPlatform){
                player.body.velocity.y = -350;
            }
        },

        //win function
        win: function ()
        {

        },

        //lose function
        lose: function ()
        {

        }

        //add more functions as needed
    };  