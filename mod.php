<?php
	$modName = "Super Mario Galaxy 63";
	$modShortName = "SMG63";
	$author = "Sussy Alex";
	$description = "A very <i>sussy</i> mod by the <b>sussy</b> modder <s>Super Hackio</s><u>Alex SMG</u>!";
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?= $modShortName ?> | Luma's Workshop</title>
		<meta name="description" content="The Super Mario Galaxy modding community!">
		<meta name="keywords" content="Modding, Hacking, Nintendo, Wii, Super Mario Galaxy">
        <meta charset="UTF-8">

        <link rel="shortcut icon" type="image/x-icon" href="../res/favicon.png">
        <link rel="stylesheet" href="../res/normalize.css">
        <link rel="stylesheet" href="../res/style.css">
		
		<script src="guide-info.js"></script>
		<script src="toc-renderer.js"></script>
		<script src="md-replacer.js"></script>
		<script type="module" src="md-block.js"></script>
		<style>
			#md-container { display: none; }
			md-block:not([rendered]) { display: none; }
		</style>
    </head>
    <body>
        <header>
            <div class="logo">
                <div class="logowrapper">
                    <a href="../.."><img src="../res/logo.png" alt="Luma's Workshop"/></a>
                </div>
            </div>
            <div class="navigation">
                <div class="navigationwrapper">
                    <a href="../..">Luma's Workshop</a> ≫ <a href="..">Mods</a> ≫ <a href="."><?= $modName ?></a>
                </div>
            </div>
        </header>

        <!-- Start writing here -->
		<div class="guide-wrapper">
			<div class="guides-toc">
				<table class="pagelist" id="table-of-contents">
					<thead>
						<tr><td>Table of contents</td></tr>
					</thead>
				</table>
			</div>
			<div class="contentbox guide-contents" id="md-container">
				<h1><?= $modName ?></h1>
				<h3>By: <?= $author ?></h3>
				<p><?= $description ?></p>

				<!-- If you're new to modding the <em>Galaxy</em> series of games, check out the Getting Started page. Whitehole Basics may also be a worthwhile read.-->

				<h2>What's possible when modding Super Mario Galaxy (2)?</h2>
				<p>
					Thanks to advances in modding tools both from within the scene and outside, almost anything is possible with regards to modifying the game, including:
				</p>
				<ul>
					<li>Modifying and creating levels with Whitehole - a collaborative effort between community members.</li>
					<li>Modifying and creating new text with <em>Aurum</em>'s galaxymsbt.</li>
					<li>Creating and replacing models with <em>Gamma</em> and <em>Yoshi2</em>'s SuperBMD.</li>
					<li>Creating animations with <em>tarsa129</em>'s j3d-animation-editor.</li>
					<li>Replacing sound effects with <em>Xayrga</em>'s SoundModdingToolkit.</li>
					<li>Injecting new code with <em>shibboleet</em> and <em>Aurum</em>'s Syati.</li>
				</ul>
				<p>
					Many games on both the Wii and GameCube utilize the same libraries for models, layouts, collision and audio - hence developments in other communities further our capabilities as well.
				</p>

				<h2>Discord Server</h2>
				<p>
					<em>Super Mario Galaxy</em> modding is difficult and cumbersome at times. Thankfully we have the <a href="https://discord.gg/ZxEqyYeZbf">Luma's Workshop Discord server</a>, dedicated to helping modders and sharing content.
					The Discord server is a great place to share ideas and have conversations about modding, as well as general talk.
				</p>

				<!--<h2>Wiki</h2>
				The Luma's Workshop Wiki contains a large amount of information about both of the *Super Mario Galaxy* games. A link to wiki can be found [here](https://www.lumasworkshop.com/wiki/Main_Page) and on the home page.-->
			</div>
		</div>
        <!-- End writing here -->

        <footer>
            <div class="copyright">
                <div class="copyrightwrapper">
                    <p>
                        <b>Copyright &copy; 2024 Luma's Workshop</b><br />
                        <br />
                        Mario, Luigi, and all related characters and images belong to Nintendo and are not under the copyright of this website.<br />
                        All other copyrights are the property of their respective owners. This website is in no way affiliated with or endorsed by Nintendo.
                    </p>
                </div>
            </div>
        </footer>
    </body>
</html>
