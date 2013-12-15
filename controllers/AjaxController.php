<?php

class AjaxController extends Controller
{
    /*
     * create Table City
     * DROP TABLE IF EXISTS `city`;

      CREATE TABLE `city` (
      `id` bigint(20) NOT NULL AUTO_INCREMENT,
      `name` varchar(255) NOT NULL DEFAULT '',
      PRIMARY KEY (`id`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
      insert  into `city`(`id`,`name`) values (58,'Yogyakarta');
     */

    public function actionCity()
    {
        // search keyword from ajax
        $q = $_GET['q'];

        $rows = array();

        $sql = 'SELECT id, `name` FROM city WHERE `name` LIKE "%' . $q . '%"';
        $rows = Yii::app()->db->createCommand($sql)->queryAll();
        if ($rows)
            echo CJSON::encode($rows);
    }

}
