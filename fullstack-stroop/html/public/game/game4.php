<?php
$game = [
    'title' => 'Train Game',
    'genre' => 'Puzzle',
    'description' => 'A train-themed puzzle game where players must guide trains safely to their destinations by switching tracks, managing signals, and solving increasingly complex rail challenges. Each level introduces new obstacles, multiple trains, and limited time or move-based objectives that require careful planning and logical thinking. As the puzzles grow more difficult, players unlock new mechanics such as tunnels, bridges, speed controls, and special train types. The game focuses on strategy and precision, rewarding smart decisions and efficient solutions while creating a satisfying and engaging puzzle experience.',
    'image' => '../assets/img/gameplay.png',
    'roles' => [
        'Yevhen Tiutiunnyk – Full Stack Developer',
        'Julia Heeremans – Game Artist',
        'Sydney Nieuweveen – Game Artist',
        'Tim Khysing – Game Artist',
        'Evelyn Oreland – Game Artist',
        'Bo Bolweg – Game Developer',
        'Kalle Ehrsson – Game Developer',
        'Charlie Buhre Hägglund – Game Developer'
    ],
    'downloadFunction' => 'startGame4'
];

include "../../source/views/game.php";
