# Requirement Specification

------

## Introduction

1. Definition
2. Purpose
3. Intended Audience
4. Project Outline
5. Goal

Definition
Gamification is an emerging phenomenon for using in educational software in order to engage, motivate and improve the performance of students inside the learning context.
We will be making a series of educational games that kids can interact with and learn from. It is important to realise the technological advancements that have occured and also eralise the impact that gamification has on learning and education as a whole.
However, despite its importance, the identification of significant gamification requirements for educational software is not trivial and a consensus of such requirements has not been reached.

Purpose
The purpose of this document is to build a educationanl based game that will interact  with the user and stimulate the user's learning abilities.
The objective is to create a game that will make learning fun and productive for the students. It will illustrate the purpose and complete declaration for the
development of system. It will also explain system constraints, interface and interactions with other
external applications

Intended Audience
It is intended for children of ages between 6 and 15 but it is not restricted to that. 

Project Outline
The "Educational Game" is web based game that interactes with the people with the intention of finding the right answer. The series of questions are given to the user and they inturn have to respond by picking the right answer. It will be both visual(pictures) and with words(sentences). The difficulty of the questions will be subjected to the user's choice. 
The user will be allowed to pick difficulty level from the beginning of the game and will be required to complete a set of question in that Definition. The game will be free of charge.

Goal
The goal for the user is to find the correct answer from the options presented to him/her and overal enjoy the learning experience.

------

## Current situation

I strongly believe that gamification projects should create meaningful experiences. There are different purposes for gamification projects, it can be used to encourage people to power through necessary tasks, it can be used to motivate people to learn more than they normally would, it can inspire them to innovate and open their mind for changes, etc.

The definition of gamification is very simple: a process for integrating game mechanics into something that already exists to motivate participation, engagement, and loyalty. It uses competition, points, achievement, rules of play, status and self-expression to encourage actions through positive feedback.


We are developing an Educational game which basically for kindergarten students.

It help them to learn how to interact with the computer as basics and start to have fun together, this project will help the teacher to understand what is interesting for there students. also, make them familiar with new technologies to get them ready for the new generation of programming because they will love the games and they will be interested in how to make such a game.

This project is going to help the teacher to make groups of students to encourage them to play as a team and to teach them new skills.

This project is about mathematics game so the kids can learn math and enjoy in the same time

------

## Dream chapter

We are still not sure what we are going to do as a project, but most probabaly it is going to be web-app, educational gamificated app.
Here is some of our dreams we want to implement: Support of multiple languages, support of different devices(phones, tablets etc), Multiplayer, Most Important: Monetization!! Social features like chat, friend list, guildes and stuff.
The most interesting for me is ranking system: makes people compete with each other, thus more you play more you know(educational app). To develop we are dreaming to use Node.js, but it depends on many things. Our main dream is to make one of the best educational game. It should be optimized and usefull, not boring and in the same time it should give some knowledge to users. We would like to users from every part of our planet to use it, and we will try to make our dreams come true.

------

## Technical Requirements

Overall Description:
A simple platforming game involving solving math problems. Player collects tokens with the answer to a visible math problem, a new problem appearing when the correct answer is chosen. You can pick 3 wrong answers before a game over. Tokens with the answers appear in specific locations on the screen, player navigates around the screen to collect the correct one.
System Interfaces:

Game Menu

- Play
- Pause
- Exit
- Volume/Mute

User Interfaces:

- HUD with score and lives

Design Constraints:

- Simple graphics using free open source tilesheets
- Open source sound effects (jump, wrong answer, correct answer, lose)
- Limited number/design of levels to due team size and time constraints
- Product Functions:
- Teaches math - gamification requirement
- Time waster - make it fun and engaging

User Characteristics:

- A student wishing to improve their math skills. Depending on the level of math questions the student could be between primary and college level.

Constraints, Assumptions and Dependencies:

- Time constraint— Must be done by the end of the semester
- Software constraints— Written in Phaser and is limited by the engine’s functionality as well as the team’s utilization of the engine’s abilities. As a browser game cannot be too complicated or graphic heavy to mitigate long loading times.

Dependencies
Specific Requirements:

- Functional Requirements:
	- Will be split into separate game states: boot, load, menu, level 1, level 2*, … , level n*, win, lose
	        *Multiple levels optional depending on schedule
	- Randomized math answers appear in specific locations, including the correct answer
		    Cannot display the same answer twice during a question
	- Player must be able to move around the screen + jump onto platforms
	- Platforms must have collision with the player so they do not fall through (player could be able to jump through a platform to land on top, depends on preference of devs)
	- Random math question must appear above the player, top of the screen
	- Accumulated score and player’s lives must appear on the screen in the HUD
	- As the player progresses the math problems get more difficult
	- Pause screen optional but recommended
- Performance Requirements:
	- Must be lightweight and utilize as few graphical resources as possible to prevent long loading times
- Software System Attributes:
	- Maintainability:
		- Will be highly maintainable due to separate game states, simple functions, and organized information classes (math questions, answers)
	- Portability:
		- Will remain only as a browser game, will not be ported to any other systems
		- Will be lightweight, easily sent and played via zip file
	- Environment Characteristics:
	    - Tools:
	        - Trello, Visual Studio, Phaser Engine Library, web browser of dev's choice
		- People:
			- Project Team:
                Xolani, Amer, Maksat, Miklos, Aziz, Rayne
			- Stakeholder:
			    Tajti Tibor

------

## Laws and standards

### Concerning the structured storage

Since the purpose of the software is education, copyrighted material can be used freely in it. It is also of vital importance to state, that audio, graphical or any other material which is banned can be used freely, because the purpose of the software is education.

- Collected licensed materials
- System licence constraints

------