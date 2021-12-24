<?php include 'header.php'; ?>
	<style>
	.advancedbutton {
	  background-color: white;
	  color: #ADADAD;
	  border: 2px solid #E7E7E7;
	}
	@font-face {
		font-family: harryfont;
		src: url(HARRYP.TTF);
	}
	#title {
		font-family: harryfont;
	}
	</style>
</head>
<body>
<?php
$chapterinfo = array (
array("Harry Potter and the Sorcerer's Stone",1,1,1,"The Boy Who Lived"),
array("Harry Potter and the Sorcerer's Stone",1,2,2,"The Vanishing Glass"),
array("Harry Potter and the Sorcerer's Stone",1,3,3,"The Letters from No One"),
array("Harry Potter and the Sorcerer's Stone",1,4,4,"The Keeper of Keys"),
array("Harry Potter and the Sorcerer's Stone",1,5,5,"Diagon Alley"),
array("Harry Potter and the Sorcerer's Stone",1,6,6,"The Journey from Platform Nine and Three-Quarters"),
array("Harry Potter and the Sorcerer's Stone",1,7,7,"The Sorting Hat"),
array("Harry Potter and the Sorcerer's Stone",1,8,8,"The Potions Master"),
array("Harry Potter and the Sorcerer's Stone",1,9,9,"The Midnight Duel"),
array("Harry Potter and the Sorcerer's Stone",1,10,10,"Hallowe'en"),
array("Harry Potter and the Sorcerer's Stone",1,11,11,"Quidditch"),
array("Harry Potter and the Sorcerer's Stone",1,12,12,"The Mirror of Erised"),
array("Harry Potter and the Sorcerer's Stone",1,13,13,"Nicholas Flamel"),
array("Harry Potter and the Sorcerer's Stone",1,14,14,"Norbert the Norwegian Ridgeback"),
array("Harry Potter and the Sorcerer's Stone",1,15,15,"The Forbidden Forest"),
array("Harry Potter and the Sorcerer's Stone",1,16,16,"Through the Trapdoor"),
array("Harry Potter and the Sorcerer's Stone",1,17,17,"The Man with Two Faces"),
array("Harry Potter and the Chamber of Secrets",2,18,1,"The Worst Birthday"),
array("Harry Potter and the Chamber of Secrets",2,19,2,"Dobby's Warning"),
array("Harry Potter and the Chamber of Secrets",2,20,3,"The Burrow"),
array("Harry Potter and the Chamber of Secrets",2,21,4,"At Flourish and Blotts"),
array("Harry Potter and the Chamber of Secrets",2,22,5,"The Whomping Willow"),
array("Harry Potter and the Chamber of Secrets",2,23,6,"Gilderoy Lockhart"),
array("Harry Potter and the Chamber of Secrets",2,24,7,"Mudbloods and Murmurs"),
array("Harry Potter and the Chamber of Secrets",2,25,8,"The Deathday Party"),
array("Harry Potter and the Chamber of Secrets",2,26,9,"The Writing on the Wall"),
array("Harry Potter and the Chamber of Secrets",2,27,10,"The Rogue Bludger"),
array("Harry Potter and the Chamber of Secrets",2,28,11,"The Duelling Club"),
array("Harry Potter and the Chamber of Secrets",2,29,12,"The Polyjuice Potion"),
array("Harry Potter and the Chamber of Secrets",2,30,13,"The Very Secret Diary"),
array("Harry Potter and the Chamber of Secrets",2,31,14,"Cornelius Fudge"),
array("Harry Potter and the Chamber of Secrets",2,32,15,"Aragog"),
array("Harry Potter and the Chamber of Secrets",2,33,16,"The Chamber of Secrets"),
array("Harry Potter and the Chamber of Secrets",2,34,17,"The Heir of Slytherin"),
array("Harry Potter and the Chamber of Secrets",2,35,18,"Dobby's Reward"),
array("Harry Potter and the Prisoner of Azkaban",3,36,1,"Owl Post"),
array("Harry Potter and the Prisoner of Azkaban",3,37,2,"Aunt Marge's Big Mistake"),
array("Harry Potter and the Prisoner of Azkaban",3,38,3,"The Knight Bus"),
array("Harry Potter and the Prisoner of Azkaban",3,39,4,"The Leaky Cauldron"),
array("Harry Potter and the Prisoner of Azkaban",3,40,5,"The Dementor"),
array("Harry Potter and the Prisoner of Azkaban",3,41,6,"Talons and Tea Leaves"),
array("Harry Potter and the Prisoner of Azkaban",3,42,7,"The Boggart in the Wardrobe"),
array("Harry Potter and the Prisoner of Azkaban",3,43,8,"Flight of the Fat Lady"),
array("Harry Potter and the Prisoner of Azkaban",3,44,9,"Grim Defeat"),
array("Harry Potter and the Prisoner of Azkaban",3,45,10,"The Marauder's Map"),
array("Harry Potter and the Prisoner of Azkaban",3,46,11,"The Firebolt"),
array("Harry Potter and the Prisoner of Azkaban",3,47,12,"The Patronus"),
array("Harry Potter and the Prisoner of Azkaban",3,48,13,"Gryffindor versus Ravenclaw"),
array("Harry Potter and the Prisoner of Azkaban",3,49,14,"Snape's Grudge"),
array("Harry Potter and the Prisoner of Azkaban",3,50,15,"The Quidditch Final"),
array("Harry Potter and the Prisoner of Azkaban",3,51,16,"Professor Trelawney's Prediction"),
array("Harry Potter and the Prisoner of Azkaban",3,52,17,"Cat, Rat, and Dog"),
array("Harry Potter and the Prisoner of Azkaban",3,53,18,"Moony, Wormtail, Padfoot and Prongs"),
array("Harry Potter and the Prisoner of Azkaban",3,54,19,"The Servant of Lord Voldemort"),
array("Harry Potter and the Prisoner of Azkaban",3,55,20,"The Dementor's Kiss"),
array("Harry Potter and the Prisoner of Azkaban",3,56,21,"Hermione's Secret"),
array("Harry Potter and the Prisoner of Azkaban",3,57,22,"Owl Post Again"),
array("Harry Potter and the Goblet of Fire",4,58,1,"The Riddle House"),
array("Harry Potter and the Goblet of Fire",4,59,2,"The Scar"),
array("Harry Potter and the Goblet of Fire",4,60,3,"The Invitation"),
array("Harry Potter and the Goblet of Fire",4,61,4,"Back to the Burrow"),
array("Harry Potter and the Goblet of Fire",4,62,5,"Weasley's Wizard Wheezes"),
array("Harry Potter and the Goblet of Fire",4,63,6,"The Portkey"),
array("Harry Potter and the Goblet of Fire",4,64,7,"Bagman and Crouch"),
array("Harry Potter and the Goblet of Fire",4,65,8,"The Quidditch World Cup"),
array("Harry Potter and the Goblet of Fire",4,66,9,"The Dark Mark"),
array("Harry Potter and the Goblet of Fire",4,67,10,"Mayhem at the Ministry"),
array("Harry Potter and the Goblet of Fire",4,68,11,"Aboard the Hogwarts Express"),
array("Harry Potter and the Goblet of Fire",4,69,12,"The Triwizard Tournament"),
array("Harry Potter and the Goblet of Fire",4,70,13,"Mad-Eye Moody"),
array("Harry Potter and the Goblet of Fire",4,71,14,"The Unforgivable Curses"),
array("Harry Potter and the Goblet of Fire",4,72,15,"Beauxbatons and Durmstrang"),
array("Harry Potter and the Goblet of Fire",4,73,16,"The Goblet of Fire"),
array("Harry Potter and the Goblet of Fire",4,74,17,"The Four Champions"),
array("Harry Potter and the Goblet of Fire",4,75,18,"The Weighing of the Wands"),
array("Harry Potter and the Goblet of Fire",4,76,19,"The Hungarian Horntail"),
array("Harry Potter and the Goblet of Fire",4,77,20,"The First Task"),
array("Harry Potter and the Goblet of Fire",4,78,21,"The House-Elf Liberation Front"),
array("Harry Potter and the Goblet of Fire",4,79,22,"The Unexpected Task"),
array("Harry Potter and the Goblet of Fire",4,80,23,"The Yule Ball"),
array("Harry Potter and the Goblet of Fire",4,81,24,"Rita Skeeter's Scoop"),
array("Harry Potter and the Goblet of Fire",4,82,25,"The Egg and the Eye"),
array("Harry Potter and the Goblet of Fire",4,83,26,"The Second Task"),
array("Harry Potter and the Goblet of Fire",4,84,27,"Padfoot Returns"),
array("Harry Potter and the Goblet of Fire",4,85,28,"The Madness of Mr Crouch"),
array("Harry Potter and the Goblet of Fire",4,86,29,"The Dream"),
array("Harry Potter and the Goblet of Fire",4,87,30,"The Pensieve"),
array("Harry Potter and the Goblet of Fire",4,88,31,"The Third Task"),
array("Harry Potter and the Goblet of Fire",4,89,32,"Flesh, Blood, and Bone"),
array("Harry Potter and the Goblet of Fire",4,90,33,"The Death Eaters"),
array("Harry Potter and the Goblet of Fire",4,91,34,"Priori Incantatem"),
array("Harry Potter and the Goblet of Fire",4,92,35,"Veritaserum"),
array("Harry Potter and the Goblet of Fire",4,93,36,"The Parting of the Ways"),
array("Harry Potter and the Goblet of Fire",4,94,37,"The Beginning"),
array("Harry Potter and the Order of the Phoenix",5,95,1,"Dudley Demented"),
array("Harry Potter and the Order of the Phoenix",5,96,2,"A Peck of Owls"),
array("Harry Potter and the Order of the Phoenix",5,97,3,"The Advance Guard"),
array("Harry Potter and the Order of the Phoenix",5,98,4,"Number Twelve, Grimmauld Place"),
array("Harry Potter and the Order of the Phoenix",5,99,5,"The Order of the Phoenix"),
array("Harry Potter and the Order of the Phoenix",5,100,6,"The Noble and Most Ancient House of Black"),
array("Harry Potter and the Order of the Phoenix",5,101,7,"The Ministry of Magic"),
array("Harry Potter and the Order of the Phoenix",5,102,8,"The Hearing"),
array("Harry Potter and the Order of the Phoenix",5,103,9,"The Woes of Mrs Weasley"),
array("Harry Potter and the Order of the Phoenix",5,104,10,"Luna Lovegood"),
array("Harry Potter and the Order of the Phoenix",5,105,11,"The Sorting Hat's New Song"),
array("Harry Potter and the Order of the Phoenix",5,106,12,"Professor Umbridge"),
array("Harry Potter and the Order of the Phoenix",5,107,13,"Detention with Dolores"),
array("Harry Potter and the Order of the Phoenix",5,108,14,"Percy and Padfoot"),
array("Harry Potter and the Order of the Phoenix",5,109,15,"The Hogwarts High Inquisitor"),
array("Harry Potter and the Order of the Phoenix",5,110,16,"In the Hog's Head"),
array("Harry Potter and the Order of the Phoenix",5,111,17,"Educational Decree Number Twenty-four"),
array("Harry Potter and the Order of the Phoenix",5,112,18,"Dumbledore's Army"),
array("Harry Potter and the Order of the Phoenix",5,113,19,"The Lion and the Serpent"),
array("Harry Potter and the Order of the Phoenix",5,114,20,"Hagrid's Tale"),
array("Harry Potter and the Order of the Phoenix",5,115,21,"The Eye of the Snake"),
array("Harry Potter and the Order of the Phoenix",5,116,22,"St Mungo's Hospital for Magical Maladies and Injuries"),
array("Harry Potter and the Order of the Phoenix",5,117,23,"Christmas on the Closed Ward"),
array("Harry Potter and the Order of the Phoenix",5,118,24,"Occlumency"),
array("Harry Potter and the Order of the Phoenix",5,119,25,"The Beetle at Bay"),
array("Harry Potter and the Order of the Phoenix",5,120,26,"Seen and Unforeseen"),
array("Harry Potter and the Order of the Phoenix",5,121,27,"The Centaur and the Sneak"),
array("Harry Potter and the Order of the Phoenix",5,122,28,"Snape's Worst Memory"),
array("Harry Potter and the Order of the Phoenix",5,123,29,"Career Advice"),
array("Harry Potter and the Order of the Phoenix",5,124,30,"Grawp"),
array("Harry Potter and the Order of the Phoenix",5,125,31,"O.W.L.S"),
array("Harry Potter and the Order of the Phoenix",5,126,32,"Out of the Fire"),
array("Harry Potter and the Order of the Phoenix",5,127,33,"Fight and Flight"),
array("Harry Potter and the Order of the Phoenix",5,128,34,"The Department of Mysteries"),
array("Harry Potter and the Order of the Phoenix",5,129,35,"Beyond the Veil"),
array("Harry Potter and the Order of the Phoenix",5,130,36,"The Only One He Ever Feared"),
array("Harry Potter and the Order of the Phoenix",5,131,37,"The Lost Prophecy"),
array("Harry Potter and the Order of the Phoenix",5,132,38,"The Second War Begins"),
array("Harry Potter and the Half-Blood Prince",6,133,1,"The Other Minister"),
array("Harry Potter and the Half-Blood Prince",6,134,2,"Spinner's End"),
array("Harry Potter and the Half-Blood Prince",6,135,3,"Will and Won't"),
array("Harry Potter and the Half-Blood Prince",6,136,4,"Horace Slughorn"),
array("Harry Potter and the Half-Blood Prince",6,137,5,"An Excess of Phlegm"),
array("Harry Potter and the Half-Blood Prince",6,138,6,"Draco's Detour"),
array("Harry Potter and the Half-Blood Prince",6,139,7,"The Slug Club"),
array("Harry Potter and the Half-Blood Prince",6,140,8,"Snape Victorious"),
array("Harry Potter and the Half-Blood Prince",6,141,9,"The Half-Blood Prince"),
array("Harry Potter and the Half-Blood Prince",6,142,10,"The House of Gaunt"),
array("Harry Potter and the Half-Blood Prince",6,143,11,"Hermione's Helping Hand"),
array("Harry Potter and the Half-Blood Prince",6,144,12,"Silver and Opals"),
array("Harry Potter and the Half-Blood Prince",6,145,13,"The Secret Riddle"),
array("Harry Potter and the Half-Blood Prince",6,146,14,"Felix Felicis"),
array("Harry Potter and the Half-Blood Prince",6,147,15,"The Unbreakable Vow"),
array("Harry Potter and the Half-Blood Prince",6,148,16,"A Very Frosty Christmas"),
array("Harry Potter and the Half-Blood Prince",6,149,17,"A Sluggish Memory"),
array("Harry Potter and the Half-Blood Prince",6,150,18,"Birthday Surprises"),
array("Harry Potter and the Half-Blood Prince",6,151,19,"Elf Tails"),
array("Harry Potter and the Half-Blood Prince",6,152,20,"Lord Voldemort's Request"),
array("Harry Potter and the Half-Blood Prince",6,153,21,"The Unknowable Room"),
array("Harry Potter and the Half-Blood Prince",6,154,22,"After the Burial"),
array("Harry Potter and the Half-Blood Prince",6,155,23,"Horcruxes"),
array("Harry Potter and the Half-Blood Prince",6,156,24,"Sectumsempra"),
array("Harry Potter and the Half-Blood Prince",6,157,25,"The Seer Overheard"),
array("Harry Potter and the Half-Blood Prince",6,158,26,"The Cave"),
array("Harry Potter and the Half-Blood Prince",6,159,27,"The Lightning Struck Tower"),
array("Harry Potter and the Half-Blood Prince",6,160,28,"Flight of the Prince"),
array("Harry Potter and the Half-Blood Prince",6,161,29,"The Phoenix Lament"),
array("Harry Potter and the Half-Blood Prince",6,162,30,"The White Tomb"),
array("Harry Potter and the Deathly Hallows",7,163,1,"The Dark Lord Ascending"),
array("Harry Potter and the Deathly Hallows",7,164,2,"In Memoriam"),
array("Harry Potter and the Deathly Hallows",7,165,3,"The Dursleys Departing"),
array("Harry Potter and the Deathly Hallows",7,166,4,"The Seven Potters"),
array("Harry Potter and the Deathly Hallows",7,167,5,"Fallen Warrior"),
array("Harry Potter and the Deathly Hallows",7,168,6,"The Ghoul in Pyjamas"),
array("Harry Potter and the Deathly Hallows",7,169,7,"The Will of Albus Dumbledore"),
array("Harry Potter and the Deathly Hallows",7,170,8,"The Wedding"),
array("Harry Potter and the Deathly Hallows",7,171,9,"A Place to Hide"),
array("Harry Potter and the Deathly Hallows",7,172,10,"Kreacher's Tale"),
array("Harry Potter and the Deathly Hallows",7,173,11,"The Bribe"),
array("Harry Potter and the Deathly Hallows",7,174,12,"Magic is Might"),
array("Harry Potter and the Deathly Hallows",7,175,13,"The Muggle-Born Registration Commission"),
array("Harry Potter and the Deathly Hallows",7,176,14,"The Thief"),
array("Harry Potter and the Deathly Hallows",7,177,15,"The Goblin's Revenge"),
array("Harry Potter and the Deathly Hallows",7,178,16,"Godric's Hollow"),
array("Harry Potter and the Deathly Hallows",7,179,17,"Bathilda's Secret"),
array("Harry Potter and the Deathly Hallows",7,180,18,"The Life and Lies of Albus Dumbledore"),
array("Harry Potter and the Deathly Hallows",7,181,19,"The Silver Doe"),
array("Harry Potter and the Deathly Hallows",7,182,20,"Xenophilius Lovegood"),
array("Harry Potter and the Deathly Hallows",7,183,21,"The Tale of the Three Brothers"),
array("Harry Potter and the Deathly Hallows",7,184,22,"The Deathly Hallows"),
array("Harry Potter and the Deathly Hallows",7,185,23,"Malfoy Manor"),
array("Harry Potter and the Deathly Hallows",7,186,24,"The Wandmaker"),
array("Harry Potter and the Deathly Hallows",7,187,25,"Shell Cottage"),
array("Harry Potter and the Deathly Hallows",7,188,26,"Gringotts"),
array("Harry Potter and the Deathly Hallows",7,189,27,"The Final Hiding Place"),
array("Harry Potter and the Deathly Hallows",7,190,28,"The Missing Mirror"),
array("Harry Potter and the Deathly Hallows",7,191,29,"The Lost Diadem"),
array("Harry Potter and the Deathly Hallows",7,192,30,"The Sacking of Severus Snape"),
array("Harry Potter and the Deathly Hallows",7,193,31,"The Battle of Hogwarts"),
array("Harry Potter and the Deathly Hallows",7,194,32,"The Elder Wand"),
array("Harry Potter and the Deathly Hallows",7,195,33,"The Prince's Tale"),
array("Harry Potter and the Deathly Hallows",7,196,34,"The Forest Again"),
array("Harry Potter and the Deathly Hallows",7,197,35,"King's Cross"),
array("Harry Potter and the Deathly Hallows",7,198,36,"The Flaw in the Plan"),
array("Harry Potter and the Deathly Hallows",7,199,37,"Epilogue")
);
?>
 <?php include 'nav.php'; ?>
  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="mt-5">Random Harry Potter Chapter Generator</h1>
		<button class="advancedbutton" onclick="toggleAdvanced()"><i>Advanced Filter</i></button>
		<form action="random.php" method="post">
		<div id="advanced" class="text-left" style="display:none">
		<h5>Get chapters from:</h5>
		<input type="checkbox" id="all" name="all" value="all" <?php if(isset($_POST['all'])) echo "checked='checked'"; ?> />
		<label for="all"> All Books</label><br>
		<input type="checkbox" id="sorcerer"  class="checkBoxClass" name="sorcerer" value="sorcerer" <?php if(isset($_POST['sorcerer'])) echo "checked='checked'"; ?> />
		<label for="sorcerer"> Harry Potter and the Sorcerer's Stone</label><br>
		<input type="checkbox" id="chamber" class="checkBoxClass" name="chamber" value="chamber" <?php if(isset($_POST['chamber'])) echo "checked='checked'"; ?> />
		<label for="chamber"> Harry Potter and the Chamber of Secrets</label><br>
		<input type="checkbox" id="prisoner" class="checkBoxClass" name="prisoner" value="prisoner" <?php if(isset($_POST['prisoner'])) echo "checked='checked'"; ?> />
		<label for="prisoner"> Harry Potter and the Prisoner of Azkaban</label><br>
		<input type="checkbox" id="goblet" class="checkBoxClass" name="goblet" value="goblet" <?php if(isset($_POST['goblet'])) echo "checked='checked'"; ?> />
		<label for="goblet"> Harry Potter and the Goblet of Fire</label><br>
		<input type="checkbox" id="order" class="checkBoxClass" name="order" value="order" <?php if(isset($_POST['order'])) echo "checked='checked'"; ?> />
		<label for="order"> Harry Potter and the Order of the Phoenix</label><br>
		<input type="checkbox" id="half" class="checkBoxClass" name="half" value="half" <?php if(isset($_POST['half'])) echo "checked='checked'"; ?> />
		<label for="half"> Harry Potter and the Half-Blood Prince</label><br>
		<input type="checkbox" id="deathly" class="checkBoxClass" name="deathly" value="deathly" <?php if(isset($_POST['deathly'])) echo "checked='checked'"; ?> />
		<label for="deathly"> Harry Potter and the Deathly Hallows</label><br>
		</div><br><br>
		<input type="submit" value="Random Chapter"/>
		</form>
	</div>
	</div>
	<div class="row">
    <div class="col-lg-12 text-center">
		<?php
		$selectedbooks = array();
		$filter = "";
		if (!empty($_POST)){
		$filter = "You are filtering books.";
		if (isset($_POST['sorcerer'])){
		array_push($selectedbooks,1);
		}
		if (isset($_POST['chamber'])){
		array_push($selectedbooks,2);
		}
		if (isset($_POST['prisoner'])){
		array_push($selectedbooks,3);
		}
		if (isset($_POST['goblet'])){
		array_push($selectedbooks,4);
		}
		if (isset($_POST['order'])){
		array_push($selectedbooks,5);
		}
		if (isset($_POST['half'])){
		array_push($selectedbooks,6);
		}
		if (isset($_POST['deathly'])){
		array_push($selectedbooks,7);
		}
		}
		if (!empty($selectedbooks)){
		while (!in_array($chapterinfo[$tempchapternumber][1], $selectedbooks)){
		$tempchapternumber = mt_rand(0,199);
		}
		}
		else {
		$tempchapternumber = mt_rand(0,199);
		}
		$chapternumber = $tempchapternumber;
		if ($tempchapternumber){
		echo "<br>";
		if (!empty($_POST)){
		$string = implode(", ", $selectedbooks);
		echo "<i>" . $filter . " Books " . $string . " are selected.</i>";
		echo "<br><br>";
		}
		echo "<div id='title'><h3>Book " . $chapterinfo[$chapternumber][1] . ": " . $chapterinfo[$chapternumber][0] . "</h3></div>";
		echo "<h1>Chapter " . $chapterinfo[$chapternumber][3] . ": " . $chapterinfo[$chapternumber][4] . "</h1>";
		echo "<img width='200' height='200' src=\"chapterart/" . $chapterinfo[$chapternumber][2] . ".jpg\"></img>";
		}
		?>
      </div>
    </div>
  </div>
<script>
function toggleAdvanced() {
  var x = document.getElementById("advanced");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
$(document).ready(function () {
    $("#all").click(function () {
        $(".checkBoxClass").prop('checked', $(this).prop('checked'));
    });
});
</script>
<?php include 'footer.php'; ?>