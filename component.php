<?php

function header($page_name) {
    echo '<nav>
        <div class="menu-icon">
            <i class="fa fa-bars fa-2x"></i>
        </div>

        <div class="logo">
            Gaming Website
        </div>

        <div class="menu">
            <ul>
                    <li><a href="new.html">Home</a></li>
                    <li><a href="Game.html">Game</a></li>
                    <li><a href="Ranking.html">Ranking</a></li>
                    <li><a class="active" href="LogIn.html">Log In</a></li>
                    <li><a class="active2" href="SignUp.html">Sign Up</a></li>
            </ul>
        </div>
    </nav>';
}