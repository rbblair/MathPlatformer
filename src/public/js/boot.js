//declare bootState
var bootState = 
    {
        //load assets
        create: function () 
        {
            //start physics system
            game.physics.startSystem(Phaser.Physics.ARCADE);
            //go to next state, load
            game.state.start('load');
        }
    };

