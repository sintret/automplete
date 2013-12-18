<h1>
    <a href="#websocketd" class="anchor" name="autocomplete"><span class="octicon octicon-link"></span></a>Autocomplete
</h1>

<p><code>Autocomplete</code> is a autocomplete extensions to Yii Framework using Tokeninput jQuery plugin.</p>

<p>Tokeninput is a jQuery plugin which allows your users to select multiple items from a predefined list, using autocompletion as they type to find each item. You may have seen a similar type of text entry when filling in the recipients field sending messages on facebook.</p>

<h2>
    <a href="#quickstart" class="anchor" name="quickstart"><span class="octicon octicon-link"></span></a>Quickstart
</h2>

<p>To get started, we'll create a table city  that will accept connections, then send back messages, json_encode result.</p>

<p>To show how simple it is, let's do it in site/index!</p>

<p><strong>index.php</strong>:</p>

<div class="highlight highlight-sh">
    <pre><span class="c">
$array[] = array('id' => 1, 'name' => 'Bali');
$array[] = array('id' => 2, 'name' => 'Singapore');

$this->widget('application.extensions.autocomplete.AutoComplete', array(
    'theme' => 'facebook',
    'name' => 'searchCity',
    //'prePopulate' => CJavaScript::encode($array),
    'sourceUrl' => Yii::app()->createUrl('ajax/city'),
    'hintText' => 'Try Typing places',
        //'htmlOptions' => array('class' => 'form-control', 'placeholder' => 'Try Typing Places'),
        //'widthInput' => '50px',
        //'widthToken' => '250px',
));
</span>
    </pre></div>

<p><strong>AjaxController</strong>:</p>

<div class="highlight highlight-sh">
    <pre><span class="c">public function actionCity()
    {
        // search keyword from ajax
        $q = $_GET['q'];

        $rows = array();

        $sql = 'SELECT id, `name` FROM city WHERE `name` LIKE "%' . $q . '%"';
        $rows = Yii::app()->db->createCommand($sql)->queryAll();
        if ($rows)
            echo CJSON::encode($rows);
    }</span>
    </pre></div>


<p>Finally, let's create a table city  to test it.</p>

<div class="highlight highlight-sh">
    <pre>
        <span class="nv">
DROP TABLE IF EXISTS `city`;

CREATE TABLE `city` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_name_countryCode` (`name`),
  KEY `idx_name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=utf8;

/*Data for the table `city` */

insert  into `city`(`id`,`name`) values (76,'Airport Soekarno Hatta');
insert  into `city`(`id`,`name`) values (22,'Amed');
insert  into `city`(`id`,`name`) values (77,'Ancol');
insert  into `city`(`id`,`name`) values (75,'Badung');
insert  into `city`(`id`,`name`) values (1,'Bali');
insert  into `city`(`id`,`name`) values (61,'Bandung');
insert  into `city`(`id`,`name`) values (73,'Bangkok');
insert  into `city`(`id`,`name`) values (106,'Bangli');
insert  into `city`(`id`,`name`) values (60,'Banten');
insert  into `city`(`id`,`name`) values (107,'Bedugul');
insert  into `city`(`id`,`name`) values (78,'Blok M');
insert  into `city`(`id`,`name`) values (68,'Bogor');
insert  into `city`(`id`,`name`) values (36,'Bugis');
insert  into `city`(`id`,`name`) values (72,'Cairnes');
insert  into `city`(`id`,`name`) values (8,'Candidasa');
insert  into `city`(`id`,`name`) values (23,'Canggu');
insert  into `city`(`id`,`name`) values (79,'Cengkareng');
insert  into `city`(`id`,`name`) values (30,'Central Jakarta');
insert  into `city`(`id`,`name`) values (34,'Changi');
insert  into `city`(`id`,`name`) values (33,'Chinatown');
insert  into `city`(`id`,`name`) values (80,'Cibubur');
insert  into `city`(`id`,`name`) values (81,'Ciputat');
insert  into `city`(`id`,`name`) values (35,'Clarke Quay');
insert  into `city`(`id`,`name`) values (62,'Dago');
insert  into `city`(`id`,`name`) values (20,'Denpasar');
insert  into `city`(`id`,`name`) values (53,'DKI Jakarta');
insert  into `city`(`id`,`name`) values (40,'East Coast');
insert  into `city`(`id`,`name`) values (57,'East Jakarta');
insert  into `city`(`id`,`name`) values (49,'Flores');
insert  into `city`(`id`,`name`) values (82,'Gajah Mada');
insert  into `city`(`id`,`name`) values (39,'Geylang');
insert  into `city`(`id`,`name`) values (15,'Gianyar');
insert  into `city`(`id`,`name`) values (83,'Glodok');
insert  into `city`(`id`,`name`) values (84,'Grogol');
insert  into `city`(`id`,`name`) values (45,'Holland');
insert  into `city`(`id`,`name`) values (9,'Jimbaran');
insert  into `city`(`id`,`name`) values (44,'Jurong');
insert  into `city`(`id`,`name`) values (43,'Kallang');
insert  into `city`(`id`,`name`) values (85,'Kelapa Gading');
insert  into `city`(`id`,`name`) values (86,'Kemang');
insert  into `city`(`id`,`name`) values (87,'Kemayoran');
insert  into `city`(`id`,`name`) values (88,'Kepulauan Seribu');
insert  into `city`(`id`,`name`) values (108,'Keramas');
insert  into `city`(`id`,`name`) values (19,'Kerobokan');
insert  into `city`(`id`,`name`) values (25,'Kintamani');
insert  into `city`(`id`,`name`) values (109,'Klungkung');
insert  into `city`(`id`,`name`) values (89,'Kuningan');
insert  into `city`(`id`,`name`) values (6,'Kuta');
insert  into `city`(`id`,`name`) values (66,'Labuan Bajo');
insert  into `city`(`id`,`name`) values (90,'Lebak Bulus');
insert  into `city`(`id`,`name`) values (7,'Legian');
insert  into `city`(`id`,`name`) values (26,'Lembongan Island');
insert  into `city`(`id`,`name`) values (32,'Little India');
insert  into `city`(`id`,`name`) values (51,'Lombok');
insert  into `city`(`id`,`name`) values (11,'Lovina Beach');
insert  into `city`(`id`,`name`) values (63,'Makassar');
insert  into `city`(`id`,`name`) values (91,'Mampang');
insert  into `city`(`id`,`name`) values (92,'Mangga Besar');
insert  into `city`(`id`,`name`) values (93,'Mangga Dua');
insert  into `city`(`id`,`name`) values (37,'Marina Bay');
insert  into `city`(`id`,`name`) values (52,'Mataram');
insert  into `city`(`id`,`name`) values (67,'Maumere');
insert  into `city`(`id`,`name`) values (64,'Medan');
insert  into `city`(`id`,`name`) values (110,'Menjangan Island');
insert  into `city`(`id`,`name`) values (94,'Menteng');
insert  into `city`(`id`,`name`) values (95,'Monas');
insert  into `city`(`id`,`name`) values (24,'Munduk');
insert  into `city`(`id`,`name`) values (28,'Negara');
insert  into `city`(`id`,`name`) values (54,'North Jakarta');
insert  into `city`(`id`,`name`) values (41,'Novena');
insert  into `city`(`id`,`name`) values (5,'Nusa Dua');
insert  into `city`(`id`,`name`) values (111,'Nusa Penida');
insert  into `city`(`id`,`name`) values (38,'Orchard');
insert  into `city`(`id`,`name`) values (69,'Padang');
insert  into `city`(`id`,`name`) values (112,'Padang Bai');
insert  into `city`(`id`,`name`) values (71,'Palembang');
insert  into `city`(`id`,`name`) values (46,'Papua');
insert  into `city`(`id`,`name`) values (96,'Pasar Baru');
insert  into `city`(`id`,`name`) values (97,'Pasar Minggu');
insert  into `city`(`id`,`name`) values (17,'Pekutatan');
insert  into `city`(`id`,`name`) values (14,'Pemuteran');
insert  into `city`(`id`,`name`) values (98,'Pluit');
insert  into `city`(`id`,`name`) values (50,'Pulau Padar');
insert  into `city`(`id`,`name`) values (48,'Pulau Sangeang');
insert  into `city`(`id`,`name`) values (99,'Rawamangun');
insert  into `city`(`id`,`name`) values (100,'Roxy');
insert  into `city`(`id`,`name`) values (3,'Sanur');
insert  into `city`(`id`,`name`) values (65,'Semarang');
insert  into `city`(`id`,`name`) values (4,'Seminyak');
insert  into `city`(`id`,`name`) values (101,'Senayan');
insert  into `city`(`id`,`name`) values (102,'Senen');
insert  into `city`(`id`,`name`) values (42,'Sentosa');
insert  into `city`(`id`,`name`) values (113,'Sidemen');
insert  into `city`(`id`,`name`) values (31,'Singapore');
insert  into `city`(`id`,`name`) values (27,'Singaraja');
insert  into `city`(`id`,`name`) values (55,'South Jakarta');
insert  into `city`(`id`,`name`) values (103,'Sudirman');
insert  into `city`(`id`,`name`) values (59,'Sukabumi');
insert  into `city`(`id`,`name`) values (47,'Sumbawa');
insert  into `city`(`id`,`name`) values (70,'Surabaya');
insert  into `city`(`id`,`name`) values (12,'Tabanan');
insert  into `city`(`id`,`name`) values (21,'Tanah Lot');
insert  into `city`(`id`,`name`) values (104,'Tebet');
insert  into `city`(`id`,`name`) values (105,'Thamrin');
insert  into `city`(`id`,`name`) values (13,'Tuban');
insert  into `city`(`id`,`name`) values (29,'Tulamben');
insert  into `city`(`id`,`name`) values (10,'Ubud');
insert  into `city`(`id`,`name`) values (16,'Uluwatu');
insert  into `city`(`id`,`name`) values (18,'Umalas');
insert  into `city`(`id`,`name`) values (56,'West Jakarta');
insert  into `city`(`id`,`name`) values (58,'Yogyakarta'); </span>
    </pre>
</div>


<p>Open this page in your web-browser. It will even work if you open it directly
    from disk using a <code>localhost/yourrootname</code>
</p>

<h2>
    <a href="#more-features" class="anchor" name="more-features"><span class="octicon octicon-link"></span></a>More Features</h2>


<ul>
    <li>  Very simple install. Just <a href="https://github.com/sintret/autocomplete">download</a> add your folder extensions.</li>
    <li>Intuitive UI for selecting multiple items from a large list</li>
    <li>Easy to skin/style purely in css, no images required</li>
    <li>Supports any backend which can generate JSON, including PHP, Rails, Django, ASP.net</li>
    <li>Smooth animations when results load</li>
    <li>Select, delete and navigate items using the mouse or keyboard</li>
    <li>Client-side result caching to reduce server load</li>
    <li>Crossdomain support via JSONP</li>
    <li>Callbacks when items are added or removed from the list</li>
    <li>Preprocess results from the server with the onResult callback</li>
    <li>Programatically add, remove, clear and get tokens</li>
    <li>Customize the output format of the results and tokens</li>
</ul>

<h2>
    <a href="#user-manual" class="anchor" name="user-manual"><span class="octicon octicon-link"></span></a>User Manual</h2>


<h2>
    <a href="#example-project" class="anchor" name="example-project"><span class="octicon octicon-link"></span></a>Example Project from original jQuery
</h2>

<ul>
    <li>  <a href="http://loopj.com/jquery-tokeninput/">jQuery Tokeninput</a></li>
</ul>

<p>Got more examples? Open a pull request.</p>

<h2>
    <a href="#my-other-projects" class="anchor" name="my-other-projects"><span class="octicon octicon-link"></span></a>My Other Projects</h2>

<p>Visit <a href="http://tourexplora.com">tourexplora</a> to see and subscribe to other thingies I make.</p>

<h1></h1>