<?

/*
 * Links to Demo downloads
 *
 */

// set this for position of this file relative
$file_root = ".";

// load libraries
require($file_root."/include/"."incl.php");

// start of html
html_page_header('ScummVM :: Game Demos');

html_content_begin('Game Demos');

?>
<div class="par-item">
  <div class="par-intro">
  <br>
       <table border=0>
	  <tr><td width="35%">

    <div class="navigation">
       Navigation

       <div class="nav-dots">
	  &nbsp;
       </div>

<table border=0>

<?php
  html_nav_item("#lec", "LucasArts Demos");
  html_nav_item("#he", "Humongous Entertainment Demos");
  html_nav_item("#agos", "Adventuresoft/Horrorsoft Demos");
  html_nav_item("#gob", "Coktel Vision Demos");
  html_nav_item("#other", "Miscellaneous Demos");
?>

</table>
    </div>
</td>
<td>
  This page lists links to demos of various games, please contact us if you have a copy of any demo not listed here,<br><br>
  Beneath A Steel Sky demos aren't going to be supported for technical reasons.<br><br>
</td></tr>
</table>

  <br>

</div>

  <br>
  <br>

  <div class="par-content">

<?

$LEC_demos = array(
	'Day of the Tentacle (DOS demo - Non interactive)'
		=> array('ftp://ftp.lucasarts.com/demos/pc/Dottdemo.zip', 'tentacle'),
	'Day of the Tentacle (DOS French demo - Non interactive)'
		=> array('http://quick.mixnmojo.com/demos/dottdemo-fr.zip', 'tentacle'),
	'Day of the Tentacle (DOS German demo - Non interactive)'
		=> array('http://quick.mixnmojo.com/demos/dottdemo-de.zip', 'tentacle'),
	'Day of the Tentacle (Macintosh demo - Non interactive)'
		=> array('http://quick.mixnmojo.com/demos/dott_demo_mac.zip', 'tentacle'),
	'Full Throttle (DOS demo)'
		=> array('http://quick.mixnmojo.com/demos/ftdemo.zip', 'ft'),
	'Full Throttle (Macintosh demo)'
		=> array('http://quick.mixnmojo.com/demos/ftdemo_mac.zip', 'ft'),
	'Indiana Jones and the Fate of Atlantis (DOS demo - Interactive)'
		=> array('ftp://ftp.lucasarts.com/demos/pc/Playfate.zip', 'atlantis'),
	'Indiana Jones and the Fate of Atlantis (DOS demo - Non interactive)'
		=> array('http://quick.mixnmojo.com/demos/fate.zip', 'atlantis'),
	'Indiana Jones and the Fate of Atlantis (FM Towns demo - Non interactive)'
		=> array('http://quick.mixnmojo.com/demos/indy4demo.zip', 'atlantis'),
	'Indiana Jones and the Last Crusade (DOS EGA - Non interactive)'	
		=> array('http://quick.mixnmojo.com/demos/indy3ega-demo.zip', 'indy3'),
	'Indiana Jones and the Last Crusade & Loom (FM Towns demo - Non interactive)'
		=> array('http://quick.mixnmojo.com/demos/indyloom.zip', 'zak'),
	'Indiana Jones and the Last Crusade & Zak McKracken (FM Towns demo - Non interactive)'
		=>array('http://quick.mixnmojo.com/demos/indyzak.zip', 'zak'),
	'Loom (DOS EGA - Short Non interactive)'
		=> array('http://quick.mixnmojo.com/demos/loom_alt_demo.zip', 'loom'),
	'Loom (DOS EGA - Long Non interactive)'
		=> array('ftp://ftp.lucasarts.com/demos/pc/Loomdemo.zip', 'loom'),
	'Maniac Mansion (v1 DOS demo - Non interactive)'
		=> array('http://quick.mixnmojo.com/demos/maniac.rar', 'maniac'),
	'Maniac Mansion (v2 DOS demo - Non interactive)'
		=> array('http://quick.mixnmojo.com/demos/mmdemo2.zip', 'maniac'),
	'Monkey Island 2 (DOS demo - not supported by ScummVM)'
		=> array('http://quick.mixnmojo.com/demos/mi2demo.zip', 'monkey2'),
	'Passport to Adventure (DOS EGA demos of mi, loom, indy3)'
		=> array('ftp://ftp.lucasarts.com/demos/pc/Sampler.zip', 'pass'),
	'Sam &amp; Max Hit the Road (DOS demo - Non interactive)'
		=> array('http://quick.mixnmojo.com/demos/samdemo.zip', 'samnmax'),
	'Sam &amp; Max Hit the Road (DOS demo - Interactive)'
		=> array('ftp://ftp.lucasarts.com/demos/pc/Snmdemo.zip', 'samnmax'),
	'Sam &amp; Max Hit the Road (DOS German demo - Interactive)'
		=> array('http://quick.mixnmojo.com/demos/SDEMO_DE.zip', 'samnmax'),
	'Sam &amp; Max Hit the Road (DOS WIP demo - Interactive)'
		=> array('http://quick.mixnmojo.com/demos/snmidemo.zip', 'samnmax'),
	'Sam &amp; Max Hit the Road (Macintosh demo - Interactive)'
		=> array('http://quick.mixnmojo.com/demos/samdemo_mac.zip', 'samnmax'),
	'The Curse of Monkey Island (Windows demo)'
		=> array('ftp://ftp.lucasarts.com/demos/pc/cursedemo.exe', 'comi'),
	'The Curse of Monkey Island (Windows demo with movies)'
		=> array('http://quick.mixnmojo.com/demos/CMICompleteDemo.rar', 'comi'),
	'The Dig (Macintosh demo)'
		=> array('http://quick.mixnmojo.com/demos/dig_demo_mac.zip', 'dig'),
	'The Dig (DOS demo)'
		=> array('http://quick.mixnmojo.com/demos/digdemo.zip', 'dig'),
	'The Secret of Monkey Island (DOS EGA demo)'	
		=> array('http://quick.mixnmojo.com/demos/mi_demo2.zip', 'monkey'),
	'The Secret of Monkey Island (DOS EGA German demo)'	
		=> array('http://quick.mixnmojo.com/demos/midemo-de.zip', 'monkey'),
	'The Secret of Monkey Island (Amiga demo)'	
		=> array('http://quick.mixnmojo.com/demos/mi1amigademo.zip', 'monkey'),
	'Zak McKracken and the Alien Mindbenders (Atari ST demo - Non interactive)'
		=> array('http://quick.mixnmojo.com/demos/zakstdemo.zip', 'zak'),
	'Zak McKracken & Loom (FM Towns demo - Non interactive)'
		=>array('http://quick.mixnmojo.com/demos/zakloom.zip', 'zak')
	);

/* Broken HE demos links

	'Big Thinkers Kindergarten (Windows Demo)'
		=> array('ftp://ftp.humongous.com/humongous/BTK95d.EXE', 'thinkerk'),
	'Big Thinkers First Grade (Windows Demo)'
		=> array('ftp://ftp.humongous.com/humongous/BTFG95d.EXE', 'thinker1'),
	'Pajama Sam 2: Thunder and Lightning Aren\'t so Frightening (Windows Demo)'
		=> array('ftp://ftp.humongous.com/humongous/PJ2Demo.exe', 'pajama2'),
	'Pajama Sam\'s Lost & Found (Windows Demo)'
		=> array('ftp://ftp.humongous.com/humongous/losttest.zip', 'lost'),
	'Putt-Putt Saves the Zoo (Windows Demo)'
		=> array('ftp://ftp.humongous.com/humongous/puttzoo.zip', 'puttzoo'),
*/

$HE_demos = array(
	'Backyard Baseball (Windows Demo - Non interactive)'
		=> array('http://quick.mixnmojo.com/demos/baseball_cup_demo.zip', 'baseball'),
	'Backyard Football (Windows Demo)'
		=> array('http://quick.mixnmojo.com/demos/footdemo.zip', 'football'),
	'Blue\'s ABC Time (Windows Demo - Non interactive)'
		=> array('http://quick.mixnmojo.com/demos/BluesABCTime_cup_demo.zip', 'BluesABCTime'),
	'Blue\'s Birthday Adventure (Windows Demo - Non interactive)'
		=> array('http://quick.mixnmojo.com/demos/BluesBirthday_cup_demo.zip', 'BluesBirthday'),
	'Fatty Bear\'s Birthday Surprise (DOS demo)'
		=> array('http://quick.mixnmojo.com/demos/fatdemo.zip', 'fbear'),
	'Freddi Fish 1: The Case of the Missing Kelp Seeds (Macintosh Demo)'
		=> array('http://quick.mixnmojo.com/demos/freddi_demo_mac.zip', 'freddi'),
	'Freddi Fish 1: The Case of the Missing Kelp Seeds (Windows Demo)'
		=> array('http://quick.mixnmojo.com/demos/Freddi%20Fish%201%20Pc%20Demo.zip', 'freddi'),
	'Freddi Fish 1: The Case of the Missing Kelp Seeds (Windows French Demo)'
		=> array('http://quick.mixnmojo.com/demos/mm-demo_fr.zip', 'freddi'),
	'Freddi Fish 1: The Case of the Missing Kelp Seeds (Windows German demo)'
		=> array('http://quick.mixnmojo.com/demos/freddemo_de.zip', 'freddi'),
	'Freddi Fish 2: The Case of the Haunted Schoolhouse (Windows Demo)'
		=> array('ftp://ftp.atari.com/demos/ff_haunted_schoolhouse/FFHaunted-Demo.zip', 'freddi2'),
	'Freddi Fish 3: The Case of the Stolen Conch Shell (Windows Demo)'
		=> array('http://quick.mixnmojo.com/demos/Freddi%20Fish%203%20%20Pc%20Demo.zip', 'freddi3'),
	'Freddi Fish 3: The Case of the Stolen Conch Shell (Windows French Demo)'
		=> array('http://quick.mixnmojo.com/demos/mm3-demo-fr.zip', 'freddi3'),
	'Freddi Fish 4: The Case of the Hogfish Rustlers of Briny Gulch (Windows Demo)'
		=> array('http://quick.mixnmojo.com/demos/Freddi%20Fish%204%20%20Pc%20Demo.zip', 'freddi4'),
	'Freddi Fish 4: The Case of the Hogfish Rustlers of Briny Gulch (Windows German Demo)'
		=> array('http://quick.mixnmojo.com/demos/ff4demo-de.zip', 'freddi4'),
	'Freddi Fish 4: The Case of the Hogfish Rustlers of Briny Gulch (Windows UK Demo)'
		=> array('http://quick.mixnmojo.com/demos/ff4demo-uk.zip', 'freddi4'),
	'Humongous Catalog demo (Windows Demo - Non interactive)'
		=> array('http://quick.mixnmojo.com/demos/catalog_cup_demo_de.zip', 'catalog'),
	'Let\'s Explore the Airport with Buzzy (Macintosh Demo)'
		=> array('http://quick.mixnmojo.com/demos/airport_demo_mac.zip', 'airport'),
	'Let\'s Explore the Airport with Buzzy (Windows Demo)'
		=> array('http://quick.mixnmojo.com/demos/airdemo.rar', 'airport'),
	'Let\'s Explore the Farm with Buzzy (Windows Demo)'
		=> array('http://quick.mixnmojo.com/demos/farmdemo.rar', 'farm'),
	'Pajama Sam 1: No Need to Hide When It\'s Dark Outside (Windows Demo)'
		=> array('ftp://ftp.atari.com/demos/psam_no_where_to_hide/PJSamHide-Demo.zip', 'pajama'),
	'Pajama Sam 1: No Need to Hide When It\'s Dark Outside (Windows French Demo)'
		=> array('http://quick.mixnmojo.com/demos/samdemo-fr.zip', 'pajama'),
	'Pajama Sam 2: Thunder and Lightning Aren\'t so Frightening (Windows Dutch Demo)'
		=> array('http://quick.mixnmojo.com/demos/pjs2demo-nl.zip', 'pajama2'),
	'Pajama Sam 3: You Are What You Eat From Your Head to Your Feet (Windows Demo)'
		=> array('http://quick.mixnmojo.com/demos/pj3-demo.rar', 'pajama3'),
	'Pajama Sam 3: You Are What You Eat From Your Head to Your Feet (Windows German Demo)'
		=> array('http://quick.mixnmojo.com/demos/gpj3demo_de.zip', 'pajama3'),
	'Pajama Sam 3: You Are What You Eat From Your Head to Your Feet (Windows UK Demo)'
		=> array('http://quick.mixnmojo.com/demos/pj3demo-uk.zip', 'pajama3'),
	'Putt-Putt Enters the Race (Windows Demo)'
		=> array('http://quick.mixnmojo.com/demos/Putt%20Putt%20Enters%20The%20Race%20Pc%20Demo.zip', 'puttrace'),
	'Putt-Putt Enters the Race (Windows Demo - Non interactive)'
		=> array('http://quick.mixnmojo.com/demos/puttrace_cup_demo.zip', 'puttrace'),
	'Putt-Putt Enters the Race (Windows Dutch Demo)'
		=> array('http://quick.mixnmojo.com/demos/500demo-nl.zip', 'puttrace'),
	'Putt-Putt Enters the Race (Windows German Demo)'
		=> array('http://quick.mixnmojo.com/demos/rennen-de.zip', 'puttrace'),
	'Putt-Putt Enters the Race (Windows UK Demo)'
		=> array('http://quick.mixnmojo.com/demos/racedemo-uk.zip', 'puttrace'),
	'Putt-Putt Goes to the Moon (DOS demo)'
		=> array('http://quick.mixnmojo.com/demos/moondemo.zip', 'puttmoon'),
	'Putt-Putt Joins the Circus (Windows Demo)'
		=> array('http://quick.mixnmojo.com/demos/circdemo.rar', 'puttcircus'),
	'Putt-Putt Joins the Parade (DOS demo)'
		=> array('http://quick.mixnmojo.com/demos/puttpara.zip', 'puttdemo'),
	'Putt-Putt Saves the Zoo (Macintosh Demo)'
		=> array('http://quick.mixnmojo.com/demos/puttzoo_demo_mac.zip', 'puttzoo'),
	'Putt-Putt Saves the Zoo (Windows German Demo)'
		=> array('http://quick.mixnmojo.com/demos/zoodemo_de.zip', 'puttzoo'),
	'Putt-Putt Travels Through Time (Windows Demo)'
		=> array('ftp://ftp.atari.com/demos/putt_travel_thru_time/PuttTime-Demo.zip', 'putttime'),
	'Putt-Putt Travels Through Time (Windows French Demo)'
		=> array('http://quick.mixnmojo.com/demos/tempdemo-fr.zip', 'putttime'),
	'SPY Fox 1: Dry Cereal (Windows Demo)'
		=> array('ftp://ftp.atari.com/demos/spyfox_dry_cereal/SPYCereal-Demo.zip', 'spyfox'),
	'SPY Fox 1: Dry Cereal (Windows Dutch Demo)'
		=> array('http://quick.mixnmojo.com/demos/spydemo-nl.zip', 'spyfox'),
	'SPY Fox 1: Dry Cereal (Windows French Demo)'
		=> array('http://quick.mixnmojo.com/demos/jamesdem-fr.zip', 'spyfox'),
	'SPY Fox 2: Some Assembly Required (Windows Demo)'
		=> array('http://quick.mixnmojo.com/demos/sf2-demo.rar', 'spyfox2'),
	'SPY Fox 2: Some Assembly Required (Windows Demo - Non interactive)'
		=> array('http://quick.mixnmojo.com/demos/spyfox2_cup_demo.zip', 'spyfox2'),
	'SPY Fox 2: Some Assembly Required (Windows German Demo)'
		=> array('http://quick.mixnmojo.com/demos/sf2demo-de.zip', 'spyfox2'),
	'SPY Fox 2: Some Assembly Required (Windows UK Demo)'
		=> array('http://quick.mixnmojo.com/demos/sf2demo-uk.zip', 'spyfox2'),
	'SPY Fox 3: Operation Ozone (Windows Demo)'
		=> array('http://quick.mixnmojo.com/demos/sf3-demo.rar', 'spyozon'),
	'SPY Fox 3: Operation Ozone (Windows Demo - Non interactive)'
		=> array('http://quick.mixnmojo.com/demos/spyozon_cup_demo.zip', 'spyozon')
	);

$AGOS_demos = array(
	'Elvira - Mistress of Darkness (Amiga demo - Non interactive)'
		=> array('http://quick.mixnmojo.com/demos/elvira1_demo_ami.zip', 'elvira1'),
	'Elvira - Mistress of Darkness (Atari ST demo - Non interactive)'
		=> array('http://quick.mixnmojo.com/demos/elvira1_demo_st.zip', 'elvira1'),
	'Simon the Sorcerer 1 (Amiga demo)'
		=> array('http://quick.mixnmojo.com/demos/simon1amigademo.zip', 'simon1'),
	'Simon the Sorcerer 1 (DOS demo)'
		=> array('http://quick.mixnmojo.com/demos/simon1demo.zip', 'simon1'),
	'Simon the Sorcerer 1 (Acorn CD demo)'
		=> array('http://quick.mixnmojo.com/demos/simon1demo_acorn.rar', 'simon1'),
	'Simon the Sorcerer 2 (DOS CD demo)'
		=> array('http://quick.mixnmojo.com/demos/simon2demo.zip', 'simon2'),
	'Waxworks (DOS demo - Non interactive)'
		=> array('http://quick.mixnmojo.com/demos/waxworks_demo.zip', 'waxworks')
	);

$GOB_demos = array(
	'Gobliiins (Amiga demo)'
		=> array('http://quick.mixnmojo.com/demos/gob1_demo_ami.zip', 'gob'),
	'Gobliiins (DOS demo)'
		=> array('http://minifiles.ag.ru/demos/448/gobliiins_demo.exe', 'gob'),
	'Gobliins 2 (Amiga demo)'
		=> array('http://quick.mixnmojo.com/demos/gob2_demo_ami.zip', 'gob'),
	'Gobliins 2 (DOS demo)'
		=> array('http://quick.mixnmojo.com/demos/gob2_demo.zip', 'gob'),
	'Gobliins 2 (DOS demo - Non interactive)'
		=> array('http://minifiles.ag.ru/demos/449/gobliins2_demo.exe', 'gob'),
	'Gobliins 3 (DOS demo)'
		=> array('http://quick.mixnmojo.com/demos/gob3_demo.zip', 'gob'),
	'Gobliins 3 (DOS demo - Non interactive)'
		=> array('http://quick.mixnmojo.com/demos/gob3_ni_demo.zip', 'gob'),
	'Gobliins 3 (DOS French demo)'
		=> array('http://quick.mixnmojo.com/demos/gob3_demo_fr.zip', 'gob'),
	'Gobliins 3 (DOS French Alternative demo)'
		=> array('http://quick.mixnmojo.com/demos/gob3_demo2_fr.zip', 'gob'),
	'Ween: The Prophecy (DOS demo)'
		=> array('http://minifiles.ag.ru/demos/781/ween_demo.exe', 'gob')
	);

$MISC_demos = array(
	'Broken Sword 1: The Shadow of the Templars (Windows Demo)'
		=> array('http://www.gamershell.com/download_4731.shtml', 'sword1demo'),
	'Broken Sword 2: The Smoking Mirror (Windows Demo)'
		=> array('http://files.5star-network.com/Games/bs2-demo.zip', 'sword2demo'),
	'Flight of the Amazon Queen (Amiga demo)'
		=> array('http://quick.mixnmojo.com/demos/queen_demo_ami.zip', 'queen'),
	'Flight of the Amazon Queen (Amiga interview demo)'
		=> array('http://quick.mixnmojo.com/demos/queen_interview_ami.zip', 'queen'),
	'Flight of the Amazon Queen (DOS demo - Datafile only)'
		=> array('http://0x.7fc1.org/fotaq/fotaq_demo.zip', 'queen'),
	'Flight of the Amazon Queen (DOS PCGAMES demo)'
		=> array('http://quick.mixnmojo.com/demos/queen_demo_pcgames.zip', 'queen'),
	'Flight of the Amazon Queen (DOS interview demo)'
		=> array('http://quick.mixnmojo.com/demos/queen_interview.zip', 'queen'),
	'Future Wars (Amiga demo - Non interactive)'
		=> array('http://quick.mixnmojo.com/demos/fw_demo_ami.zip', 'fw'),
	'Igor: Objective Uikokahonia (DOS demo)'
		=> array('http://quick.mixnmojo.com/demos/igor_demo.zip', 'igor'),
	'Igor: Objective Uikokahonia 1.10 (DOS demo)'
		=> array('http://quick.mixnmojo.com/demos/igor110_demo.zip', 'igor'),
	'I Have No Mouth And I Must Scream (DOS demo)'
		=> array('http://quick.mixnmojo.com/demos/ihnmdemo.zip', 'ihnm'),
	'Inherit the Earth: Quest for the Orb demos'
		=> array('http://www.wyrmkeep.com/ite/download.html', 'ite'),
	'Nippon Safes (Amiga demo)'
		=> array('http://quick.mixnmojo.com/demos/nippon_demo_ami.zip', 'nippon'),
	'Operation Stealth (Amiga demo - Non interactive)'
		=> array('http://quick.mixnmojo.com/demos/op_demo_ami.zip', 'os'),
	'The Legend of Kyrandia (DOS demo - Non-interactive)'
		=> array('http://quick.mixnmojo.com/demos/kyra1demo.zip', 'kyra1'),
	'Touche: The Adventures of the Fifth Musketeer (DOS Demo)'
		=> array('http://quick.mixnmojo.com/demos/touche_demo.zip', 'touche')
	);

function render_demos($title, $demos) {
// render the demo list
echo html_frame_start($title,"90%",2,1,"color4");
echo html_frame_tr(
		   html_frame_td("Demo Name / Download Link").
		   html_frame_td("Game Target"),
		   "color4"

		  );
	$c = 0;
	while (list($name,$array) = each($demos))
	{	
		if ($c % 2 == 0) { $color = "color2"; } else { $color = "color0"; }
		echo html_frame_tr(
			html_frame_td("<a href=\"$array[0]\">$name</a>").
		    	html_frame_td($array[1]),
	  	        $color
	 	);
		$c++;
	}

echo html_frame_end("&nbsp;");
echo "<p>&nbsp;</p>";
}

echo "<a name='lec'></a>\n";
render_demos("LucasArts Demos", $LEC_demos);
echo "<a name='he'></a>\n";
render_demos("Humongous Entertainment Demos", $HE_demos);
echo "<a name='agos'></a>\n";
render_demos("Adventuresoft/Horrorsoft Demos", $AGOS_demos);
echo "<a name='gob'></a>\n";
render_demos("Coktel Vision Demos", $GOB_demos);
echo "<a name='other'></a>\n";
render_demos("Miscellaneous Demos", $MISC_demos);

echo "  </div>\n";
echo "</div>\n";

html_content_end();
html_page_footer();

?>
