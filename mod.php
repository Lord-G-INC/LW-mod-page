<?php
	/*$modName = "Super Mario Galaxy 63";
	$modShortName = $_GET["mod"];
	$author = "Sussy Alex";
	$description = "A very <i>sussy</i> mod by the <b>sussy</b> modder <s>Super Hackio</s><u>Alex SMG</u>!";
	$imgUrl = "https://media.discordapp.net/attachments/1023118146590220298/1274467706841731163/970f27adec486b3384f000d8f04f3ba6ae8dc275v2_hq.jpg?ex=66c304cb&is=66c1b34b&hm=4bfef706417832c68386e0fef001ff68aa8f55a9bbae895ab939a61e392ab732&=&format=webp&width=501&height=669";*/
	$guideInfo = array("categories" => array());
	$modLinksHTML = "";
	$connection = new mysqli("localhost", "root", "", "lw-mods");

	$stmt = $connection->prepare("SELECT * FROM modCategories");
	$stmt->execute();
	$stmtResult = $stmt->get_result();
	$rows = array();
	while ($r = mysqli_fetch_assoc($stmtResult)) 
		$guideInfo["categories"][] = array("key" => $r["ModCategoryId"], "title" => $r["ModCategoryName"], "entries" => array());

	$stmt = $connection->prepare("SELECT * FROM mods");
	$stmt->execute();
	$stmtResult = $stmt->get_result();
	$rows = array();
	while ($r = mysqli_fetch_assoc($stmtResult)) {
		if ($r["ModId"] == $_GET["mod"]) {
			$modName = $r["ModName"];
			$modShortName = $r["ModId"];
			$author = $r["Author"];
			$description = $r["Description"];
			$imgUrl = json_decode($r["ModImages"], true)[0];
			foreach (json_decode($r["ModLinks"], true) as $modLink) 
				$modLinksHTML .= "<a href=\"" . $modLink["Url"] . "\"><i class=\"fas fa-download\"></i> " . $modLink["Name"] . "</a><br>";
		}

		foreach ($guideInfo["categories"] as &$category) 
			if ($category["key"] == $r["ModCategory"]) 
				$category["entries"][] = array("title" => $r["ModName"], "url" => "?mod=" . $r["ModId"]);
	}
	$guideInfoJson = json_encode($guideInfo);
	
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
		<script>
			const GUIDE_INFOS = <?= $guideInfoJson ?>
		</script>
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
						<tr><td>Mods &amp; Creations</td></tr>
					</thead>
				</table>
			</div>
			<div class="contentbox guide-contents" id="md-container">
				<h1><?= $modName ?></h1>
				<h4>By: <?= $author ?></h4>
				<p><?= $description ?></p>
				<img src="<?= $imgUrl ?>">
				<h2>Links</h2>
				<div><?= $modLinksHTML ?></div>
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
