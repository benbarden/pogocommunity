<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use Illuminate\Support\Facades\DB;

class PokedexGen5 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $insertSql = "INSERT IGNORE INTO pokemon(pokemon_no, pokemon_name, generation, ".
            "is_available, is_regional, is_legendary, is_mythical, buddy_distance, has_shiny, ".
            "created_at, updated_at)";

        DB::insert($insertSql." VALUES('494', 'Victini', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('517', 'Munna', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('518', 'Musharna', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('524', 'Roggenrola', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('525', 'Boldore', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('526', 'Gigalith', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('527', 'Woobat', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('528', 'Swoobat', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('531', 'Audino', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('532', 'Timburr', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('533', 'Gurdurr', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('534', 'Conkeldurr', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('535', 'Tympole', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('536', 'Palpitoad', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('537', 'Seismitoad', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('538', 'Throh', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('539', 'Sawk', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('540', 'Sewaddle', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('541', 'Swadloon', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('542', 'Leavanny', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('543', 'Venipede', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('544', 'Whirlipede', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('545', 'Scolipede', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('546', 'Cottonee', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('547', 'Whimsicott', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('548', 'Petilil', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('549', 'Lilligant', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('550', 'Basculin', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('551', 'Sandile', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('552', 'Krokorok', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('553', 'Krookodile', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('554', 'Darumaka', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('555', 'Darmanitan', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('556', 'Maractus', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('557', 'Dwebble', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('558', 'Crustle', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('559', 'Scraggy', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('560', 'Scrafty', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('561', 'Sigilyph', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('564', 'Tirtouga', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('565', 'Carracosta', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('566', 'Archen', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('567', 'Archeops', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('568', 'Trubbish', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('569', 'Garbodor', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('570', 'Zorua', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('571', 'Zoroark', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('572', 'Minccino', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('573', 'Cinccino', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('574', 'Gothita', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('575', 'Gothorita', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('576', 'Gothitelle', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('577', 'Solosis', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('578', 'Duosion', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('579', 'Reuniclus', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('580', 'Ducklett', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('581', 'Swanna', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('582', 'Vanillite', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('583', 'Vanillish', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('584', 'Vanilluxe', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('585', 'Deerling', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('586', 'Sawsbuck', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('587', 'Emolga', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('588', 'Karrablast', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('589', 'Escavalier', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('592', 'Frillish', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('593', 'Jellicent', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('594', 'Alomomola', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('595', 'Joltik', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('596', 'Galvantula', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('602', 'Tynamo', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('603', 'Eelektrik', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('604', 'Eelektross', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('605', 'Elgyem', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('606', 'Beheeyem', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('610', 'Axew', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('611', 'Fraxure', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('612', 'Haxorus', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('613', 'Cubchoo', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('614', 'Beartic', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('615', 'Cryogonal', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('616', 'Shelmet', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('617', 'Accelgor', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('618', 'Stunfisk', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('619', 'Mienfoo', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('620', 'Mienshao', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('621', 'Druddigon', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('624', 'Pawniard', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('625', 'Bisharp', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('626', 'Bouffalant', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('627', 'Rufflet', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('628', 'Braviary', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('629', 'Vullaby', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('630', 'Mandibuzz', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('636', 'Larvesta', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('637', 'Volcarona', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('638', 'Cobalion', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('639', 'Terrakion', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('640', 'Virizion', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('641', 'Tornadus', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('642', 'Thundurus', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('643', 'Reshiram', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('644', 'Zekrom', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('645', 'Landorus', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('646', 'Kyurem', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('647', 'Keldeo', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('648', 'Meloetta', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('649', 'Genesect', 5, 0, 0, 0, 0, NULL, 0, NOW(), NOW())");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
