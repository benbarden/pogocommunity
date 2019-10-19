<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use Illuminate\Support\Facades\DB;

class PokedexPopulate extends Migration
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

        // Buddy distance: 1km - Gen 1
        DB::insert($insertSql." VALUES('010', 'Caterpie', 1, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('011', 'Metapod', 1, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('012', 'Butterfree', 1, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('013', 'Weedle', 1, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('014', 'Kakuna', 1, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('015', 'Beedrill', 1, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('016', 'Pidgey', 1, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('017', 'Pidgeotto', 1, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('018', 'Pidgeot', 1, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('019', 'Rattata', 1, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('020', 'Raticate', 1, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('021', 'Spearow', 1, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('022', 'Fearow', 1, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('025', 'Pikachu', 1, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('026', 'Raichu', 1, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('035', 'Clefairy', 1, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('036', 'Clefable', 1, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('039', 'Jigglypuff', 1, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('040', 'Wigglytuff', 1, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('041', 'Zubat', 1, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('042', 'Golbat', 1, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('074', 'Geodude', 1, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('075', 'Graveler', 1, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('076', 'Golem', 1, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('129', 'Magikarp', 1, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('130', 'Gyarados', 1, 1, 0, 0, 0, 1, 1, NOW(), NOW())");

        // Buddy distance: 1km - Gen 2
        DB::insert($insertSql." VALUES('161', 'Sentret', 2, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('162', 'Furret', 2, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('163', 'Hoothoot', 2, 1, 0, 0, 0, 1, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('164', 'Noctowl', 2, 1, 0, 0, 0, 1, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('165', 'Ledyba', 2, 1, 0, 0, 0, 1, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('166', 'Ledian', 2, 1, 0, 0, 0, 1, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('167', 'Spinarak', 2, 1, 0, 0, 0, 1, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('168', 'Ariados', 2, 1, 0, 0, 0, 1, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('169', 'Crobat', 2, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('172', 'Pichu', 2, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('173', 'Cleffa', 2, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('174', 'Igglybuff', 2, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('218', 'Slugma', 2, 1, 0, 0, 0, 1, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('219', 'Magcargo', 2, 1, 0, 0, 0, 1, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('223', 'Remoraid', 2, 1, 0, 0, 0, 1, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('224', 'Octillery', 2, 1, 0, 0, 0, 1, 0, NOW(), NOW())");

        // Buddy distance: 1km - Gen 3
        DB::insert($insertSql." VALUES('261', 'Poochyena', 3, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('262', 'Mightyena', 3, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('263', 'Zigzagoon', 3, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('264', 'Linoone', 3, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('265', 'Wurmple', 3, 1, 0, 0, 0, 1, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('266', 'Silcoon', 3, 1, 0, 0, 0, 1, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('267', 'Beautifly', 3, 1, 0, 0, 0, 1, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('268', 'Cascoon', 3, 1, 0, 0, 0, 1, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('269', 'Dustox', 3, 1, 0, 0, 0, 1, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('276', 'Taillow', 3, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('277', 'Swellow', 3, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('283', 'Surskit', 3, 1, 0, 0, 0, 1, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('284', 'Masquerain', 3, 1, 0, 0, 0, 1, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('293', 'Whismur', 3, 1, 0, 0, 0, 1, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('294', 'Loudred', 3, 1, 0, 0, 0, 1, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('295', 'Exploud', 3, 1, 0, 0, 0, 1, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('304', 'Aron', 3, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('305', 'Lairon', 3, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('306', 'Aggron', 3, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('316', 'Gulpin', 3, 1, 0, 0, 0, 1, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('317', 'Swalot', 3, 1, 0, 0, 0, 1, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('320', 'Wailmer', 3, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('321', 'Wailord', 3, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('325', 'Spoink', 3, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('326', 'Grumpig', 3, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('333', 'Swablu', 3, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('334', 'Altaria', 3, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('339', 'Barboach', 3, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('340', 'Whiscash', 3, 1, 0, 0, 0, 1, 1, NOW(), NOW())");

        // Buddy distance: 1km - Gen 4
        DB::insert($insertSql." VALUES('396', 'Starly', 4, 1, 0, 0, 0, 1, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('397', 'Staravia', 4, 1, 0, 0, 0, 1, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('398', 'Staraptor', 4, 1, 0, 0, 0, 1, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('399', 'Bidoof', 4, 1, 0, 0, 0, 1, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('400', 'Bibarel', 4, 1, 0, 0, 0, 1, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('401', 'Kricketot', 4, 1, 0, 0, 0, 1, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('402', 'Kricketune', 4, 1, 0, 0, 0, 1, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('412', 'Burmy', 4, 1, 0, 0, 0, 1, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('413', 'Wormadam', 4, 1, 0, 0, 0, 1, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('414', 'Mothim', 4, 1, 0, 0, 0, 1, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('420', 'Cherubi', 4, 1, 0, 0, 0, 1, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('421', 'Cherrim', 4, 1, 0, 0, 0, 1, 0, NOW(), NOW())");

        // Buddy distance: 1km - Gen 5
        DB::insert($insertSql." VALUES('504', 'Patrat', 5, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('505', 'Watchog', 5, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('506', 'Lillipup', 5, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('507', 'Herdier', 5, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('508', 'Stoutland', 5, 1, 0, 0, 0, 1, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('509', 'Purrloin', 5, 1, 0, 0, 0, 1, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('510', 'Liepard', 5, 1, 0, 0, 0, 1, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('519', 'Pidove', 5, 1, 0, 0, 0, 1, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('520', 'Tranquill', 5, 1, 0, 0, 0, 1, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('521', 'Unfezant', 5, 1, 0, 0, 0, 1, 0, NOW(), NOW())");

        // Buddy distance: 3km - Gen 1
        DB::insert($insertSql." VALUES('001', 'Bulbasaur', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('002', 'Ivysaur', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('003', 'Venusaur', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('004', 'Charmander', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('005', 'Charmeleon', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('006', 'Charizard', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('007', 'Squirtle', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('008', 'Wartortle', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('009', 'Blastoise', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('023', 'Ekans', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('024', 'Arbok', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('027', 'Sandshrew', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('028', 'Sandslash', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('029', 'Nidoran♀', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('030', 'Nidorina', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('031', 'Nidoqueen', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('032', 'Nidoran♂', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('033', 'Nidorino', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('034', 'Nidoking', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('037', 'Vulpix', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('038', 'Ninetales', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('043', 'Oddish', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('044', 'Gloom', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('045', 'Vileplume', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('046', 'Paras', 1, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('047', 'Parasect', 1, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('048', 'Venonat', 1, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('049', 'Venomoth', 1, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('050', 'Diglett', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('051', 'Dugtrio', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('052', 'Meowth', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('053', 'Persian', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('054', 'Psyduck', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('055', 'Golduck', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('056', 'Mankey', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('057', 'Primeape', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('058', 'Growlithe', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('059', 'Arcanine', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('060', 'Poliwag', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('061', 'Poliwhirl', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('062', 'Poliwrath', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('063', 'Abra', 1, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('064', 'Kadabra', 1, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('065', 'Alakazam', 1, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('066', 'Machop', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('067', 'Machoke', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('068', 'Machamp', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('069', 'Bellsprout', 1, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('070', 'Weepinbell', 1, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('071', 'Victreebel', 1, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('072', 'Tentacool', 1, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('073', 'Tentacruel', 1, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('077', 'Ponyta', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('078', 'Rapidash', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('079', 'Slowpoke', 1, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('080', 'Slowbro', 1, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('081', 'Magnemite', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('082', 'Magneton', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('084', 'Doduo', 1, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('085', 'Dodrio', 1, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('086', 'Seel', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('087', 'Dewgong', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('088', 'Grimer', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('089', 'Muk', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('090', 'Shellder', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('091', 'Cloyster', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('092', 'Gastly', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('093', 'Haunter', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('094', 'Gengar', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('096', 'Drowzee', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('097', 'Hypno', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('098', 'Krabby', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('099', 'Kingler', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('100', 'Voltorb', 1, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('101', 'Electrode', 1, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('102', 'Exeggcute', 1, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('103', 'Exeggutor', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('104', 'Cubone', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('105', 'Marowak', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('108', 'Lickitung', 1, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('109', 'Koffing', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('110', 'Weezing', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('111', 'Rhyhorn', 1, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('112', 'Rhydon', 1, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('114', 'Tangela', 1, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('116', 'Horsea', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('117', 'Seadra', 1, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('118', 'Goldeen', 1, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('119', 'Seaking', 1, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('120', 'Staryu', 1, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('121', 'Starmie', 1, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('132', 'Ditto', 1, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('137', 'Porygon', 1, 1, 0, 0, 0, 3, 0, NOW(), NOW())");

        // Buddy distance: 3km - Gen 2
        DB::insert($insertSql." VALUES('152', 'Chikorita', 2, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('153', 'Bayleef', 2, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('154', 'Meganium', 2, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('155', 'Cyndaquil', 2, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('156', 'Quilava', 2, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('157', 'Typhlosion', 2, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('158', 'Totodile', 2, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('159', 'Croconaw', 2, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('160', 'Feraligatr', 2, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('170', 'Chinchou', 2, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('171', 'Lanturn', 2, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('175', 'Togepi', 2, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('176', 'Togetic', 2, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('177', 'Natu', 2, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('178', 'Xatu', 2, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('182', 'Bellossom', 2, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('183', 'Marill', 2, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('184', 'Azumarill', 2, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('186', 'Politoed', 2, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('187', 'Hoppip', 2, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('188', 'Skiploom', 2, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('189', 'Jumpluff', 2, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('190', 'Aipom', 2, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('191', 'Sunkern', 2, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('192', 'Sunflora', 2, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('193', 'Yanma', 2, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('194', 'Wooper', 2, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('195', 'Quagsire', 2, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('198', 'Murkrow', 2, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('199', 'Slowking', 2, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('200', 'Misdreavus', 2, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('202', 'Wobbuffet', 2, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('203', 'Girafarig', 2, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('206', 'Dunsparce', 2, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('209', 'Snubbull', 2, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('210', 'Granbull', 2, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('211', 'Qwuilfish', 2, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('213', 'Shuckle', 2, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('215', 'Sneasel', 2, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('216', 'Teddiursa', 2, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('217', 'Ursaring', 2, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('220', 'Swinub', 2, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('221', 'Piloswine', 2, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('228', 'Houndour', 2, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('229', 'Houndoom', 2, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('230', 'Kingdra', 2, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('231', 'Phanpy', 2, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('232', 'Donphan', 2, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('233', 'Porygon2', 2, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('234', 'Stantler', 2, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('235', 'Smeargle', 2, 1, 0, 0, 0, 3, 0, NOW(), NOW())");

        // Buddy distance: 3km - Gen 3
        DB::insert($insertSql." VALUES('252', 'Treecko', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('253', 'Grovyle', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('254', 'Sceptile', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('255', 'Torchic', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('256', 'Combusken', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('257', 'Blaziken', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('258', 'Mudkip', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('259', 'Marshtomp', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('260', 'Swampert', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('270', 'Lotad', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('271', 'Lombre', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('272', 'Ludicolo', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('273', 'Seedot', 3, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('274', 'Nuzleaf', 3, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('275', 'Shiftry', 3, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('278', 'Wingull', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('279', 'Pelipper', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('285', 'Shroomish', 3, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('286', 'Breloom', 3, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('296', 'Makuhita', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('297', 'Hariyama', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('298', 'Azurill', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('299', 'Nosepass', 3, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('300', 'Skitty', 3, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('301', 'Delcatty', 3, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('307', 'Meditite', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('308', 'Medicham', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('309', 'Electrike', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('310', 'Manectric', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('311', 'Plusle', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('312', 'Minun', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('315', 'Roselia', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('318', 'Carvanha', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('319', 'Sharpedo', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('322', 'Numel', 3, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('323', 'Camerupt', 3, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('327', 'Spinda', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('331', 'Cacnea', 3, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('332', 'Cacturne', 3, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('341', 'Corphish', 3, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('342', 'Crawdaunt', 3, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('343', 'Baltoy', 3, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('344', 'Claydol', 3, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('345', 'Lileep', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('346', 'Cradily', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('347', 'Anorith', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('348', 'Armaldo', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('353', 'Shuppet', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('354', 'Banette', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('355', 'Duskull', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('356', 'Dusclops', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('360', 'Wynaut', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('361', 'Snorunt', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('362', 'Glalie', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('363', 'Spheal', 3, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('364', 'Sealeo', 3, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('365', 'Walrein', 3, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('366', 'Clamperl', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('367', 'Huntail', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('368', 'Gorebyss', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('370', 'Luvdisc', 3, 1, 0, 0, 0, 3, 1, NOW(), NOW())");

        // Buddy distance: 3km - Gen 4
        DB::insert($insertSql." VALUES('387', 'Turtwig', 4, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('388', 'Grotle', 4, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('389', 'Torterra', 4, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('390', 'Chimchar', 4, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('391', 'Monferno', 4, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('392', 'Infernape', 4, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('393', 'Piplup', 4, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('394', 'Prinplup', 4, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('395', 'Empoleon', 4, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('406', 'Budew', 4, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('407', 'Roserade', 4, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('415', 'Combee', 4, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('416', 'Vespiquen', 4, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('418', 'Buizel', 4, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('419', 'Floatzel', 4, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('422', 'Shellos', 4, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('423', 'Gastrodon', 4, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('424', 'Ambipom', 4, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('427', 'Buneary', 4, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('428', 'Lopunny', 4, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('429', 'Mismagius', 4, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('430', 'Honchkrow', 4, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('431', 'Glameow', 4, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('432', 'Purugly', 4, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('434', 'Stunky', 4, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('435', 'Skuntank', 4, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('436', 'Bronzor', 4, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('437', 'Bronzong', 4, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('449', 'Hippopotas', 4, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('450', 'Hippowdon', 4, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('453', 'Croagunk', 4, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('454', 'Toxicroak', 4, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('456', 'Finneon', 4, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('457', 'Lumineon', 4, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('459', 'Snover', 4, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('460', 'Abomasnow', 4, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('461', 'Weavile', 4, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('462', 'Magnezone', 4, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('463', 'Lickilicky', 4, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('464', 'Rhyperior', 4, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('465', 'Tangrowth', 4, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('468', 'Togekiss', 4, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('469', 'Yanmega', 4, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('473', 'Mamoswine', 4, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('474', 'Porygon-Z', 4, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('476', 'Probopass', 4, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('477', 'Dusknoir', 4, 1, 0, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('478', 'Froslass', 4, 1, 0, 0, 0, 3, 1, NOW(), NOW())");

        // Buddy distance: 3km - Gen 5
        DB::insert($insertSql." VALUES('495', 'Snivy', 5, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('496', 'Servine', 5, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('497', 'Serperior', 5, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('498', 'Tepig', 5, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('499', 'Pignite', 5, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('500', 'Emboar', 5, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('501', 'Oshawott', 5, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('502', 'Dewott', 5, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('503', 'Samurott', 5, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('522', 'Blitzle', 5, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('523', 'Zekstrika', 5, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('529', 'Drilbur', 5, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('530', 'Excadrill', 5, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('562', 'Yamask', 5, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('563', 'Cofragrigus', 5, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('590', 'Foongus', 5, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('591', 'Amoonguss', 5, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('597', 'Ferroseed', 5, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('598', 'Ferrothorn', 5, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('631', 'Heatmor', 5, 1, 0, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('632', 'Durant', 5, 1, 0, 0, 0, 3, 0, NOW(), NOW())");

        // Buddy distance: 5km - Gen 1
        DB::insert($insertSql." VALUES('095', 'Onix', 1, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('106', 'Hitmonlee', 1, 1, 0, 0, 0, 5, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('107', 'Hitmonchan', 1, 1, 0, 0, 0, 5, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('113', 'Chansey', 1, 1, 0, 0, 0, 5, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('123', 'Scyther', 1, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('124', 'Jynx', 1, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('125', 'Electabuzz', 1, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('126', 'Magmar', 1, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('127', 'Pinsir', 1, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('131', 'Lapras', 1, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('133', 'Eevee', 1, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('134', 'Vaporeon', 1, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('135', 'Jolteon', 1, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('136', 'Flareon', 1, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('138', 'Omanyte', 1, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('139', 'Omastar', 1, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('140', 'Kabuto', 1, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('141', 'Kabutops', 1, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('142', 'Aerodactyl', 1, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('143', 'Snorlax', 1, 1, 0, 0, 0, 5, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('147', 'Dratini', 1, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('148', 'Dragonair', 1, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('149', 'Dragonite', 1, 1, 0, 0, 0, 5, 1, NOW(), NOW())");

        // Buddy distance: 5km - Gen 2
        DB::insert($insertSql." VALUES('179', 'Mareep', 2, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('180', 'Flaaffy', 2, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('181', 'Ampharos', 2, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('185', 'Sudowoodo', 2, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('196', 'Espeon', 2, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('197', 'Umbreon', 2, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('201', 'Unown', 2, 1, 0, 0, 0, 5, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('204', 'Pineco', 2, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('205', 'Forretress', 2, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('207', 'Gligar', 2, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('208', 'Steelix', 2, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('212', 'Scizor', 2, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('225', 'Delibird', 2, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('226', 'Mantine', 2, 1, 0, 0, 0, 5, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('227', 'Skarmory', 2, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('236', 'Tyrogue', 2, 1, 0, 0, 0, 5, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('237', 'Hitmontop', 2, 1, 0, 0, 0, 5, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('238', 'Smoochum', 2, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('239', 'Elekid', 2, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('240', 'Magby', 2, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('241', 'Miltank', 2, 1, 0, 0, 0, 5, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('242', 'Blissey', 2, 1, 0, 0, 0, 5, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('246', 'Larvitar', 2, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('247', 'Pupitar', 2, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('248', 'Tyranitar', 2, 1, 0, 0, 0, 5, 1, NOW(), NOW())");

        // Buddy distance: 5km - Gen 3
        DB::insert($insertSql." VALUES('280', 'Ralts', 3, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('281', 'Kirlia', 3, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('282', 'Gardevoir', 3, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('287', 'Slakoth', 3, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('288', 'Vigoroth', 3, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('289', 'Slaking', 3, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('290', 'Nincada', 3, 1, 0, 0, 0, 5, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('291', 'Ninjask', 3, 1, 0, 0, 0, 5, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('292', 'Shedinja', 3, 1, 0, 0, 0, 5, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('302', 'Sableye', 3, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('303', 'Mawile', 3, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('328', 'Trapinch', 3, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('329', 'Vibrava', 3, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('330', 'Flygon', 3, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('349', 'Feebas', 3, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('350', 'Milotic', 3, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('351', 'Castform', 3, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('358', 'Chimecho', 3, 1, 0, 0, 0, 5, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('359', 'Absol', 3, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('371', 'Bagon', 3, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('372', 'Shelgon', 3, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('373', 'Salamence', 3, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('374', 'Beldum', 3, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('375', 'Metang', 3, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('376', 'Metagross', 3, 1, 0, 0, 0, 5, 1, NOW(), NOW())");

        // Buddy distance: 5km - Gen 4
        DB::insert($insertSql." VALUES('403', 'Shinx', 4, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('404', 'Luxio', 4, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('405', 'Luxray', 4, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('408', 'Cranidos', 4, 1, 0, 0, 0, 5, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('409', 'Rampardos', 4, 1, 0, 0, 0, 5, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('410', 'Shieldon', 4, 1, 0, 0, 0, 5, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('411', 'Bastiodon', 4, 1, 0, 0, 0, 5, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('425', 'Drifloon', 4, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('426', 'Drifblim', 4, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('433', 'Chingling', 4, 1, 0, 0, 0, 5, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('438', 'Bonsly', 4, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('440', 'Happiny', 4, 1, 0, 0, 0, 5, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('442', 'Spiritomb', 4, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('443', 'Gible', 4, 1, 0, 0, 0, 5, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('444', 'Gabite', 4, 1, 0, 0, 0, 5, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('445', 'Garchomp', 4, 1, 0, 0, 0, 5, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('446', 'Munchlax', 4, 1, 0, 0, 0, 5, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('447', 'Riolu', 4, 1, 0, 0, 0, 5, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('448', 'Lucario', 4, 1, 0, 0, 0, 5, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('451', 'Skorupi', 4, 1, 0, 0, 0, 5, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('452', 'Drapion', 4, 1, 0, 0, 0, 5, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('458', 'Mantyke', 4, 1, 0, 0, 0, 5, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('466', 'Electivire', 4, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('467', 'Magmortar', 4, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('470', 'Leafeon', 4, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('471', 'Glaceon', 4, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('472', 'Gliscar', 4, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('475', 'Gallade', 4, 1, 0, 0, 0, 5, 1, NOW(), NOW())");

        // Buddy distance: 5km - Gen 5
        DB::insert($insertSql." VALUES('599', 'Klink', 5, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('600', 'Klang', 5, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('601', 'Klinklang', 5, 1, 0, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('607', 'Litwick', 5, 1, 0, 0, 0, 5, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('608', 'Lampent', 5, 1, 0, 0, 0, 5, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('609', 'Chandelure', 5, 1, 0, 0, 0, 5, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('622', 'Golett', 5, 1, 0, 0, 0, 5, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('623', 'Golurk', 5, 1, 0, 0, 0, 5, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('633', 'Deino', 5, 1, 0, 0, 0, 5, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('634', 'Zweilous', 5, 1, 0, 0, 0, 5, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('635', 'Hydreigon', 5, 1, 0, 0, 0, 5, 0, NOW(), NOW())");

        // Buddy distance: 20km - (Legendaries and Mythical)
        DB::insert($insertSql." VALUES('144', 'Articuno', 1, 1, 0, 1, 0, 20, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('145', 'Zapdos', 1, 1, 0, 1, 0, 20, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('146', 'Moltres', 1, 1, 0, 1, 0, 20, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('150', 'Mewtwo', 1, 1, 0, 1, 0, 20, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('151', 'Mew', 1, 1, 0, 0, 1, 20, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('243', 'Raikou', 2, 1, 0, 1, 0, 20, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('244', 'Entei', 2, 1, 0, 1, 0, 20, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('245', 'Suicune', 2, 1, 0, 1, 0, 20, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('249', 'Lugia', 2, 1, 0, 1, 0, 20, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('250', 'Ho-Oh', 2, 1, 0, 1, 0, 20, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('251', 'Celebi', 2, 1, 0, 0, 1, 20, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('377', 'Regirock', 3, 1, 0, 0, 0, 20, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('378', 'Regice', 3, 1, 0, 0, 0, 20, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('379', 'Registeel', 3, 1, 0, 0, 0, 20, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('380', 'Latias', 3, 1, 0, 0, 0, 20, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('381', 'Latios', 3, 1, 0, 0, 0, 20, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('382', 'Kyogre', 3, 1, 0, 0, 0, 20, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('383', 'Groudon', 3, 1, 0, 0, 0, 20, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('384', 'Rayquaza', 3, 1, 0, 0, 0, 20, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('385', 'Jirachi', 3, 1, 0, 0, 1, 20, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('386', 'Deoxys', 3, 1, 0, 0, 1, 20, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('480', 'Uxie', 4, 1, 1, 0, 0, 20, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('481', 'Mesprit', 4, 1, 1, 0, 0, 20, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('482', 'Azelf', 4, 1, 1, 0, 0, 20, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('483', 'Dialga', 4, 1, 0, 1, 0, 20, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('484', 'Palkia', 4, 1, 0, 1, 0, 20, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('485', 'Heatran', 4, 1, 0, 1, 0, 20, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('487', 'Giratina', 4, 1, 0, 1, 0, 20, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('488', 'Cresselia', 4, 1, 0, 1, 0, 20, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('491', 'Darkrai', 4, 1, 0, 0, 1, 20, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('808', 'Meltan', 8, 1, 0, 0, 1, 20, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('809', 'Melmetal', 8, 1, 0, 0, 1, 20, 1, NOW(), NOW())");

        // Regionals
        DB::insert($insertSql." VALUES('083', 'Farfetch\'d', 1, 1, 1, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('115', 'Kangaskhan', 1, 1, 1, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('122', 'Mr. Mime', 1, 1, 1, 0, 0, 5, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('128', 'Tauros', 1, 1, 1, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('214', 'Heracross', 2, 1, 1, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('222', 'Corsola', 2, 1, 1, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('313', 'Volbeat', 3, 1, 1, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('314', 'Illumise', 3, 1, 1, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('324', 'Torkoal', 3, 1, 1, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('335', 'Zangoose', 3, 1, 1, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('336', 'Seviper', 3, 1, 1, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('337', 'Lunatone', 3, 1, 1, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('357', 'Tropius', 3, 1, 0, 0, 0, 5, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('369', 'Relicanth', 3, 1, 0, 0, 0, 5, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('338', 'Solrock', 3, 1, 1, 0, 0, 3, 1, NOW(), NOW())");
        DB::insert($insertSql." VALUES('511', 'Pansage', 5, 1, 1, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('512', 'Simisage', 5, 1, 1, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('513', 'Pansear', 5, 1, 1, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('514', 'Simisear', 5, 1, 1, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('515', 'Panpour', 5, 1, 1, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('516', 'Simipour', 5, 1, 1, 0, 0, 3, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('417', 'Pachirisu', 4, 1, 1, 0, 0, 5, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('439', 'Mime Jr.', 4, 1, 1, 0, 0, 5, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('441', 'Chatot', 4, 1, 1, 0, 0, 5, 0, NOW(), NOW())");
        DB::insert($insertSql." VALUES('455', 'Carnivine', 4, 1, 1, 0, 0, 5, 0, NOW(), NOW())");

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
