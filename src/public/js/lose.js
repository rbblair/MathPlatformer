var loseState =
    {
        
        create : function(){

            var loseLabel = game.add.text(80,80,'You lost :(',{font:'50px Arial', fill:'#FFF'});
            playagain = game.add.button(game.world.centerX - 94, 400, 'playButton', restart, this, 2, 1, 0);
        },
    
        restart : function(){

            game.state.start('levelSelect');
    
        }   
    };   