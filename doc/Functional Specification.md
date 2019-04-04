# Functional Specification

------

## Describing the current situation

We already decided what kind of problem to solve. We almost finished our requirment specification.
the developers have already divided the tasks for the requirement specifications, so each of us has their own job to do.

Tasks which are almost done: for the Document Requirement Speccifications
Xolani nhlapo  Requirement specification: Introduction.     
Maksat Baigazy Requirement specification: Dream Chapter.        
Amer Mamoun    Requirement specification: Current situation.
Rayne Blair    Requirement specification: Technical Requirements.
Miklós Kovács  Requirement specification: Concerning the structured storage.
Aziz Gasimov   Requirement specification: Requirements List.

Tasks which are almost done: for the Document Functional Speccifications
Xolani nhlapo  Functional specification:  Use cases.     
Maksat Baigazy Functional specification: What it should be, and what it should not .        
Amer Mamoun    Functional specification: Describing the Current situation.
Rayne Blair, Aziz Gasimov Functional specification: How it applies to the user cases, Setting up folder structure in the repo
Miklós Kovács  Functional specification: Functional Specification: Constraints on the system (eg.: laws, standards), Setting up folder structure in the repo





-UI Plan:
We are going to develope a web game so we are going to use Javascript,HTML and CSS with Game Engain Phaser 2.
It's going to be like Mario style with Educational Porposes for kids
There will be a multible levels in the game.
once the player will solve a simple problem with mathimaatics he will jump to another level to solve another quastion!
The player will be able to move the person on the screen to the right answer for the math qaustion and he should face some struggels like jumping or running up to the developers.
There will be two counter on the screen wihle playing, one of them are going to be score counter and the other one is going to be the lives of the player in the game.
if he hit the wrong aswer up to three times he will lose the game.
Also, we could add a function which gives the player some extra gifts for each level he is passing.

------

## Use cases

Play the Game:
    Description: 
        What the player of the game must do in order to begin the game
    Actors: 
        The player
    Assumptions: 
        The user is on the game's webpage
    Steps: 
        The user must choose the PLAY button on the MAIN MENU, which navigates them to the LEVEL SELECT. After selecting a level, the game begins.

Pick a Level:
    Description:
        How the user may choose a level
    Actors:
        The player
    Assumptions:
        The user has selected the PLAY button on the MAIN MENU
    Steps:
        On the LEVEL SELECT page, the user may choose which level of math to play. Selecting an option begins the game.

Mute the Sound:
    Description:
        How the user can mute the sound of the game
    Actors:
        The player
    Assumptions:
        n/a
    Steps:
        On the MAIN MENU, choose OPTIONS. This opens up the OPTIONS menu, where you can choose to MUTE the game MUSIC or game SOUND EFFECTS.
    Variations:
        This may be done while the game is playing as well, via choosing the PAUSE MENU option.

Pick an Answer:
    Description:
        How the player picks an answer
    Actors:
        The player
    Assumptions:
        The game is being played
    Steps:
        Using the arrow keys, navigate the player character to the platform with the answer that is believed to be correct. Colliding with the answer object will select that answer. This advances the game to the next level.

View your Score:
    Description:
        How to see the accumulated score of the game
    Actors:
        The player
    Assumptions:
        The game is being played
    Steps:
        The player score is located in the top right of the screen

View your Lives:
    Description:
        How to view the remaining lives of the player
    Actors: 
        The player
    Assumptions:
        The game is being played
    Steps:
        The player's remaining lives are visible in the top left of the screen

Win:
    Description:
        How to win the game
    Actors:
        The player
    Assumptions:
        The game is being played
    Steps:
        Choose all correct answers for the math difficulty level (5 answers) without running out of lives.


Lose:
    Description:
        How to lose the game
    Actors:
        The player
    Assumptions:
        The game is being played
    Steps:
        Choose the incorrect answer 3 times. This results in the loss of all lives, ending the game.

Replay the Game:
    Description:
        How to replay the game
    Actors:
        The player
    Assumptions:
        The game has either been lost or won
    Steps:  
        On the WIN or LOSE page, select the REPLAY option to replay the previous level, or SELECT A LEVEL option to choose a different level.

Quit:
    Description:
        How to quit the game
    Actors:
        The player
    Assumptions:    
        The game is being played
    Steps:
        Select the QUIT LEVEL option in the PAUSE menu to quit the level currently being played
    Variations:
        CLOSE the BROWSER TAB to quit the game entirely

------

## How it applies to the user cases

------

## What it should be, and what it should not be

We are developing new platformer game in educational purposes. It should be simple, optimized for every browser and device. It should have user friendly interface, simple and effective database. It should be able to handle a lot of users. The most important thing is to be educational and entertaining in the same time. One of our main goals is to make users to be interested in our project and gain some knowledge while having fun! It should not be complicated, so new users can easily get into it and start enjoying. We should provide support on a mobile phones as well. It should have scoreboard for users, so they can see their success level and they can compete with each other. There should be difficulty levels. It should have simple login form. It should not be paid game, it should be free to play buut with some additional contents.

------

## Constraints on the system (eg.: laws, standards)

Since both the system will run on servers located in Hungary, the Hungarian laws must be applied for the whole of the software.

Any material, that is currently under copyright protection can be used - in whole or in parts - in the software, since the software satisfies the criteria stated in the LXXVI. law of the year 1999 ('law'). The "fair use" stands as long as the copyright material's usage stays inside the boundaries of the law's 33-41. §. (Including any and every modification that has been made since by modifier laws).

------
