<?php
require("../config.php");
require("../components.php");

$ApiKey = VarClean($_POST['ApiKey']);
$IdPlantilla = VarClean($_POST['IdPlantilla']);
$NEmpleado = VarClean($_POST['NEmpleado']);

if ($ApiKey == $TokenKey){

    if (IdPlantilla_Valida($IdPlantilla) == TRUE ){

        if (NEmpleado_Valida($NEmpleado)==TRUE){

            //Variables
            if (isset($_POST["VC001"])){$VC001 = VarClean($_POST["VC001"]);} else { $VC001="";}
            if (isset($_POST["VC002"])){$VC002 = VarClean($_POST["VC002"]);} else { $VC002="";}
            if (isset($_POST["VC003"])){$VC003 = VarClean($_POST["VC003"]);} else { $VC003="";}
            if (isset($_POST["VC004"])){$VC004 = VarClean($_POST["VC004"]);} else { $VC004="";}
            if (isset($_POST["VC005"])){$VC005 = VarClean($_POST["VC005"]);} else { $VC005="";}
            if (isset($_POST["VC006"])){$VC006 = VarClean($_POST["VC006"]);} else { $VC006="";}
            if (isset($_POST["VC007"])){$VC007 = VarClean($_POST["VC007"]);} else { $VC007="";}
            if (isset($_POST["VC008"])){$VC008 = VarClean($_POST["VC008"]);} else { $VC008="";}
            if (isset($_POST["VC009"])){$VC009 = VarClean($_POST["VC009"]);} else { $VC009="";}
            if (isset($_POST["VC010"])){$VC010 = VarClean($_POST["VC010"]);} else { $VC010="";}
            if (isset($_POST["VC011"])){$VC011 = VarClean($_POST["VC011"]);} else { $VC011="";}
            if (isset($_POST["VC012"])){$VC012 = VarClean($_POST["VC012"]);} else { $VC012="";}
            if (isset($_POST["VC013"])){$VC013 = VarClean($_POST["VC013"]);} else { $VC013="";}
            if (isset($_POST["VC014"])){$VC014 = VarClean($_POST["VC014"]);} else { $VC014="";}
            if (isset($_POST["VC015"])){$VC015 = VarClean($_POST["VC015"]);} else { $VC015="";}
            if (isset($_POST["VC016"])){$VC016 = VarClean($_POST["VC016"]);} else { $VC016="";}
            if (isset($_POST["VC017"])){$VC017 = VarClean($_POST["VC017"]);} else { $VC017="";}
            if (isset($_POST["VC018"])){$VC018 = VarClean($_POST["VC018"]);} else { $VC018="";}
            if (isset($_POST["VC019"])){$VC019 = VarClean($_POST["VC019"]);} else { $VC019="";}
            if (isset($_POST["VC020"])){$VC020 = VarClean($_POST["VC020"]);} else { $VC020="";}
            if (isset($_POST["VC021"])){$VC021 = VarClean($_POST["VC021"]);} else { $VC021="";}
            if (isset($_POST["VC022"])){$VC022 = VarClean($_POST["VC022"]);} else { $VC022="";}
            if (isset($_POST["VC023"])){$VC023 = VarClean($_POST["VC023"]);} else { $VC023="";}
            if (isset($_POST["VC024"])){$VC024 = VarClean($_POST["VC024"]);} else { $VC024="";}
            if (isset($_POST["VC025"])){$VC025 = VarClean($_POST["VC025"]);} else { $VC025="";}
            if (isset($_POST["VC026"])){$VC026 = VarClean($_POST["VC026"]);} else { $VC026="";}
            if (isset($_POST["VC027"])){$VC027 = VarClean($_POST["VC027"]);} else { $VC027="";}
            if (isset($_POST["VC028"])){$VC028 = VarClean($_POST["VC028"]);} else { $VC028="";}
            if (isset($_POST["VC029"])){$VC029 = VarClean($_POST["VC029"]);} else { $VC029="";}
            if (isset($_POST["VC030"])){$VC030 = VarClean($_POST["VC030"]);} else { $VC030="";}
            if (isset($_POST["VC031"])){$VC031 = VarClean($_POST["VC031"]);} else { $VC031="";}
            if (isset($_POST["VC032"])){$VC032 = VarClean($_POST["VC032"]);} else { $VC032="";}
            if (isset($_POST["VC033"])){$VC033 = VarClean($_POST["VC033"]);} else { $VC033="";}
            if (isset($_POST["VC034"])){$VC034 = VarClean($_POST["VC034"]);} else { $VC034="";}
            if (isset($_POST["VC035"])){$VC035 = VarClean($_POST["VC035"]);} else { $VC035="";}
            if (isset($_POST["VC036"])){$VC036 = VarClean($_POST["VC036"]);} else { $VC036="";}
            if (isset($_POST["VC037"])){$VC037 = VarClean($_POST["VC037"]);} else { $VC037="";}
            if (isset($_POST["VC038"])){$VC038 = VarClean($_POST["VC038"]);} else { $VC038="";}
            if (isset($_POST["VC039"])){$VC039 = VarClean($_POST["VC039"]);} else { $VC039="";}
            if (isset($_POST["VC040"])){$VC040 = VarClean($_POST["VC040"]);} else { $VC040="";}
            if (isset($_POST["VC041"])){$VC041 = VarClean($_POST["VC041"]);} else { $VC041="";}
            if (isset($_POST["VC042"])){$VC042 = VarClean($_POST["VC042"]);} else { $VC042="";}
            if (isset($_POST["VC043"])){$VC043 = VarClean($_POST["VC043"]);} else { $VC043="";}
            if (isset($_POST["VC044"])){$VC044 = VarClean($_POST["VC044"]);} else { $VC044="";}
            if (isset($_POST["VC045"])){$VC045 = VarClean($_POST["VC045"]);} else { $VC045="";}
            if (isset($_POST["VC046"])){$VC046 = VarClean($_POST["VC046"]);} else { $VC046="";}
            if (isset($_POST["VC047"])){$VC047 = VarClean($_POST["VC047"]);} else { $VC047="";}
            if (isset($_POST["VC048"])){$VC048 = VarClean($_POST["VC048"]);} else { $VC048="";}
            if (isset($_POST["VC049"])){$VC049 = VarClean($_POST["VC049"]);} else { $VC049="";}
            if (isset($_POST["VC050"])){$VC050 = VarClean($_POST["VC050"]);} else { $VC050="";}
            if (isset($_POST["VC051"])){$VC051 = VarClean($_POST["VC051"]);} else { $VC051="";}
            if (isset($_POST["VC052"])){$VC052 = VarClean($_POST["VC052"]);} else { $VC052="";}
            if (isset($_POST["VC053"])){$VC053 = VarClean($_POST["VC053"]);} else { $VC053="";}
            if (isset($_POST["VC054"])){$VC054 = VarClean($_POST["VC054"]);} else { $VC054="";}
            if (isset($_POST["VC055"])){$VC055 = VarClean($_POST["VC055"]);} else { $VC055="";}
            if (isset($_POST["VC056"])){$VC056 = VarClean($_POST["VC056"]);} else { $VC056="";}
            if (isset($_POST["VC057"])){$VC057 = VarClean($_POST["VC057"]);} else { $VC057="";}
            if (isset($_POST["VC058"])){$VC058 = VarClean($_POST["VC058"]);} else { $VC058="";}
            if (isset($_POST["VC059"])){$VC059 = VarClean($_POST["VC059"]);} else { $VC059="";}
            if (isset($_POST["VC060"])){$VC060 = VarClean($_POST["VC060"]);} else { $VC060="";}
            if (isset($_POST["VC061"])){$VC061 = VarClean($_POST["VC061"]);} else { $VC061="";}
            if (isset($_POST["VC062"])){$VC062 = VarClean($_POST["VC062"]);} else { $VC062="";}
            if (isset($_POST["VC063"])){$VC063 = VarClean($_POST["VC063"]);} else { $VC063="";}
            if (isset($_POST["VC064"])){$VC064 = VarClean($_POST["VC064"]);} else { $VC064="";}
            if (isset($_POST["VC065"])){$VC065 = VarClean($_POST["VC065"]);} else { $VC065="";}
            if (isset($_POST["VC066"])){$VC066 = VarClean($_POST["VC066"]);} else { $VC066="";}
            if (isset($_POST["VC067"])){$VC067 = VarClean($_POST["VC067"]);} else { $VC067="";}
            if (isset($_POST["VC068"])){$VC068 = VarClean($_POST["VC068"]);} else { $VC068="";}
            if (isset($_POST["VC069"])){$VC069 = VarClean($_POST["VC069"]);} else { $VC069="";}
            if (isset($_POST["VC070"])){$VC070 = VarClean($_POST["VC070"]);} else { $VC070="";}
            if (isset($_POST["VC071"])){$VC071 = VarClean($_POST["VC071"]);} else { $VC071="";}
            if (isset($_POST["VC072"])){$VC072 = VarClean($_POST["VC072"]);} else { $VC072="";}
            if (isset($_POST["VC073"])){$VC073 = VarClean($_POST["VC073"]);} else { $VC073="";}
            if (isset($_POST["VC074"])){$VC074 = VarClean($_POST["VC074"]);} else { $VC074="";}
            if (isset($_POST["VC075"])){$VC075 = VarClean($_POST["VC075"]);} else { $VC075="";}
            if (isset($_POST["VC076"])){$VC076 = VarClean($_POST["VC076"]);} else { $VC076="";}
           // if (isset($_POST["VC077"])){$VC077 = VarClean($_POST["VC077"]);} else { $VC077="";}
            if (isset($_POST["VC077"])){$VC077 = $_POST["VC077"];} else { $VC077="";}
            if (isset($_POST["VC078"])){$VC078 = VarClean($_POST["VC078"]);} else { $VC078="";}
            if (isset($_POST["VC079"])){$VC079 = VarClean($_POST["VC079"]);} else { $VC079="";}
            if (isset($_POST["VC080"])){$VC080 = VarClean($_POST["VC080"]);} else { $VC080="";}
            if (isset($_POST["VC081"])){$VC081 = VarClean($_POST["VC081"]);} else { $VC081="";}
            if (isset($_POST["VC082"])){$VC082 = VarClean($_POST["VC082"]);} else { $VC082="";}
            if (isset($_POST["VC083"])){$VC083 = VarClean($_POST["VC083"]);} else { $VC083="";}
            if (isset($_POST["VC084"])){$VC084 = VarClean($_POST["VC084"]);} else { $VC084="";}
            if (isset($_POST["VC085"])){$VC085 = VarClean($_POST["VC085"]);} else { $VC085="";}
            if (isset($_POST["VC086"])){$VC086 = VarClean($_POST["VC086"]);} else { $VC086="";}
            if (isset($_POST["VC087"])){$VC087 = VarClean($_POST["VC087"]);} else { $VC087="";}
            if (isset($_POST["VC088"])){$VC088 = VarClean($_POST["VC088"]);} else { $VC088="";}
            if (isset($_POST["VC089"])){$VC089 = VarClean($_POST["VC089"]);} else { $VC089="";}
            if (isset($_POST["VC090"])){$VC090 = VarClean($_POST["VC090"]);} else { $VC090="";}
            if (isset($_POST["VC091"])){$VC091 = VarClean($_POST["VC091"]);} else { $VC091="";}
            if (isset($_POST["VC092"])){$VC092 = VarClean($_POST["VC092"]);} else { $VC092="";}
            if (isset($_POST["VC093"])){$VC093 = VarClean($_POST["VC093"]);} else { $VC093="";}
            if (isset($_POST["VC094"])){$VC094 = VarClean($_POST["VC094"]);} else { $VC094="";}
            if (isset($_POST["VC095"])){$VC095 = VarClean($_POST["VC095"]);} else { $VC095="";}
            if (isset($_POST["VC096"])){$VC096 = VarClean($_POST["VC096"]);} else { $VC096="";}
            if (isset($_POST["VC097"])){$VC097 = VarClean($_POST["VC097"]);} else { $VC097="";}
            if (isset($_POST["VC098"])){$VC098 = VarClean($_POST["VC098"]);} else { $VC098="";}
            if (isset($_POST["VC099"])){$VC099 = VarClean($_POST["VC099"]);} else { $VC099="";}
            if (isset($_POST["VC100"])){$VC100 = VarClean($_POST["VC100"]);} else { $VC100="";}
            if (isset($_POST["VC101"])){$VC101 = VarClean($_POST["VC101"]);} else { $VC101="";}
            if (isset($_POST["VC102"])){$VC102 = VarClean($_POST["VC102"]);} else { $VC102="";}
            if (isset($_POST["VC103"])){$VC103 = VarClean($_POST["VC103"]);} else { $VC103="";}
            if (isset($_POST["VC104"])){$VC104 = VarClean($_POST["VC104"]);} else { $VC104="";}
            if (isset($_POST["VC105"])){$VC105 = VarClean($_POST["VC105"]);} else { $VC105="";}
            if (isset($_POST["VC106"])){$VC106 = VarClean($_POST["VC106"]);} else { $VC106="";}
            if (isset($_POST["VC107"])){$VC107 = VarClean($_POST["VC107"]);} else { $VC107="";}
            if (isset($_POST["VC108"])){$VC108 = VarClean($_POST["VC108"]);} else { $VC108="";}
            if (isset($_POST["VC109"])){$VC109 = VarClean($_POST["VC109"]);} else { $VC109="";}
            if (isset($_POST["VC110"])){$VC110 = VarClean($_POST["VC110"]);} else { $VC110="";}
            if (isset($_POST["VC111"])){$VC111 = VarClean($_POST["VC111"]);} else { $VC111="";}
            if (isset($_POST["VC112"])){$VC112 = VarClean($_POST["VC112"]);} else { $VC112="";}
            if (isset($_POST["VC113"])){$VC113 = VarClean($_POST["VC113"]);} else { $VC113="";}
            if (isset($_POST["VC114"])){$VC114 = VarClean($_POST["VC114"]);} else { $VC114="";}
            if (isset($_POST["VC115"])){$VC115 = VarClean($_POST["VC115"]);} else { $VC115="";}
            if (isset($_POST["VC116"])){$VC116 = VarClean($_POST["VC116"]);} else { $VC116="";}
            if (isset($_POST["VC117"])){$VC117 = VarClean($_POST["VC117"]);} else { $VC117="";}
            if (isset($_POST["VC118"])){$VC118 = VarClean($_POST["VC118"]);} else { $VC118="";}
            if (isset($_POST["VC119"])){$VC119 = VarClean($_POST["VC119"]);} else { $VC119="";}
            if (isset($_POST["VC120"])){$VC120 = VarClean($_POST["VC120"]);} else { $VC120="";}
            if (isset($_POST["VC121"])){$VC121 = VarClean($_POST["VC121"]);} else { $VC121="";}
            if (isset($_POST["VC122"])){$VC122 = VarClean($_POST["VC122"]);} else { $VC122="";}
            if (isset($_POST["VC123"])){$VC123 = VarClean($_POST["VC123"]);} else { $VC123="";}
            if (isset($_POST["VC124"])){$VC124 = VarClean($_POST["VC124"]);} else { $VC124="";}
            if (isset($_POST["VC125"])){$VC125 = VarClean($_POST["VC125"]);} else { $VC125="";}
            if (isset($_POST["VC126"])){$VC126 = VarClean($_POST["VC126"]);} else { $VC126="";}
            if (isset($_POST["VC127"])){$VC127 = VarClean($_POST["VC127"]);} else { $VC127="";}
            if (isset($_POST["VC128"])){$VC128 = VarClean($_POST["VC128"]);} else { $VC128="";}
            if (isset($_POST["VC129"])){$VC129 = VarClean($_POST["VC129"]);} else { $VC129="";}
            if (isset($_POST["VC130"])){$VC130 = VarClean($_POST["VC130"]);} else { $VC130="";}
            if (isset($_POST["VC131"])){$VC131 = VarClean($_POST["VC131"]);} else { $VC131="";}
            if (isset($_POST["VC132"])){$VC132 = VarClean($_POST["VC132"]);} else { $VC132="";}
            if (isset($_POST["VC133"])){$VC133 = VarClean($_POST["VC133"]);} else { $VC133="";}
            if (isset($_POST["VC134"])){$VC134 = VarClean($_POST["VC134"]);} else { $VC134="";}
            if (isset($_POST["VC135"])){$VC135 = VarClean($_POST["VC135"]);} else { $VC135="";}
            if (isset($_POST["VC136"])){$VC136 = VarClean($_POST["VC136"]);} else { $VC136="";}
            if (isset($_POST["VC137"])){$VC137 = VarClean($_POST["VC137"]);} else { $VC137="";}
            if (isset($_POST["VC138"])){$VC138 = VarClean($_POST["VC138"]);} else { $VC138="";}
            if (isset($_POST["VC139"])){$VC139 = VarClean($_POST["VC139"]);} else { $VC139="";}
            if (isset($_POST["VC140"])){$VC140 = VarClean($_POST["VC140"]);} else { $VC140="";}
            if (isset($_POST["VC141"])){$VC141 = VarClean($_POST["VC141"]);} else { $VC141="";}
            if (isset($_POST["VC142"])){$VC142 = VarClean($_POST["VC142"]);} else { $VC142="";}
            if (isset($_POST["VC143"])){$VC143 = VarClean($_POST["VC143"]);} else { $VC143="";}
            if (isset($_POST["VC144"])){$VC144 = VarClean($_POST["VC144"]);} else { $VC144="";}
            if (isset($_POST["VC145"])){$VC145 = VarClean($_POST["VC145"]);} else { $VC145="";}
            if (isset($_POST["VC146"])){$VC146 = VarClean($_POST["VC146"]);} else { $VC146="";}
            if (isset($_POST["VC147"])){$VC147 = VarClean($_POST["VC147"]);} else { $VC147="";}
            if (isset($_POST["VC148"])){$VC148 = VarClean($_POST["VC148"]);} else { $VC148="";}
            if (isset($_POST["VC149"])){$VC149 = VarClean($_POST["VC149"]);} else { $VC149="";}
            if (isset($_POST["VC150"])){$VC150 = VarClean($_POST["VC150"]);} else { $VC150="";}
            if (isset($_POST["VC151"])){$VC151 = VarClean($_POST["VC151"]);} else { $VC151="";}
            if (isset($_POST["VC152"])){$VC152 = VarClean($_POST["VC152"]);} else { $VC152="";}
            if (isset($_POST["VC153"])){$VC153 = VarClean($_POST["VC153"]);} else { $VC153="";}
            if (isset($_POST["VC154"])){$VC154 = VarClean($_POST["VC154"]);} else { $VC154="";}
            if (isset($_POST["VC155"])){$VC155 = VarClean($_POST["VC155"]);} else { $VC155="";}
            if (isset($_POST["VC156"])){$VC156 = VarClean($_POST["VC156"]);} else { $VC156="";}
            if (isset($_POST["VC157"])){$VC157 = VarClean($_POST["VC157"]);} else { $VC157="";}
            if (isset($_POST["VC158"])){$VC158 = VarClean($_POST["VC158"]);} else { $VC158="";}
            if (isset($_POST["VC159"])){$VC159 = VarClean($_POST["VC159"]);} else { $VC159="";}
            if (isset($_POST["VC160"])){$VC160 = VarClean($_POST["VC160"]);} else { $VC160="";}
            if (isset($_POST["VC161"])){$VC161 = VarClean($_POST["VC161"]);} else { $VC161="";}
            if (isset($_POST["VC162"])){$VC162 = VarClean($_POST["VC162"]);} else { $VC162="";}
            if (isset($_POST["VC163"])){$VC163 = VarClean($_POST["VC163"]);} else { $VC163="";}
            if (isset($_POST["VC164"])){$VC164 = VarClean($_POST["VC164"]);} else { $VC164="";}
            if (isset($_POST["VC165"])){$VC165 = VarClean($_POST["VC165"]);} else { $VC165="";}
            if (isset($_POST["VC166"])){$VC166 = VarClean($_POST["VC166"]);} else { $VC166="";}
            if (isset($_POST["VC167"])){$VC167 = VarClean($_POST["VC167"]);} else { $VC167="";}
            if (isset($_POST["VC168"])){$VC168 = VarClean($_POST["VC168"]);} else { $VC168="";}
            if (isset($_POST["VC169"])){$VC169 = VarClean($_POST["VC169"]);} else { $VC169="";}
            if (isset($_POST["VC170"])){$VC170 = VarClean($_POST["VC170"]);} else { $VC170="";}
            if (isset($_POST["VC171"])){$VC171 = VarClean($_POST["VC171"]);} else { $VC171="";}
            if (isset($_POST["VC172"])){$VC172 = VarClean($_POST["VC172"]);} else { $VC172="";}
            if (isset($_POST["VC173"])){$VC173 = VarClean($_POST["VC173"]);} else { $VC173="";}
            if (isset($_POST["VC174"])){$VC174 = VarClean($_POST["VC174"]);} else { $VC174="";}
            if (isset($_POST["VC175"])){$VC175 = VarClean($_POST["VC175"]);} else { $VC175="";}
            if (isset($_POST["VC176"])){$VC176 = VarClean($_POST["VC176"]);} else { $VC176="";}
            if (isset($_POST["VC177"])){$VC177 = VarClean($_POST["VC177"]);} else { $VC177="";}
            if (isset($_POST["VC178"])){$VC178 = VarClean($_POST["VC178"]);} else { $VC178="";}
            if (isset($_POST["VC179"])){$VC179 = VarClean($_POST["VC179"]);} else { $VC179="";}
            if (isset($_POST["VC180"])){$VC180 = VarClean($_POST["VC180"]);} else { $VC180="";}

            
            $input        = '../plantillas/'.$IdPlantilla.'.docx';
            // $input        = 'testfile.docx';

            // $output       = 'output/testfile2.docx';
            $output = "output/".$NEmpleado.'_'.$IdPlantilla.'_'.TokenGenerate().'.docx';	
            $replacements = [
                'VC001' => $VC001,
                'VC002' => $VC002,
                'VC003' => $VC003,
                'VC004' => $VC004,
                'VC005' => $VC005,
                'VC006' => $VC006,
                'VC007' => $VC007,
                'VC008' => $VC008,
                'VC009' => $VC009,
                'VC010' => $VC010,
                'VC011' => $VC011,
                'VC012' => $VC012,
                'VC013' => $VC013,
                'VC014' => $VC014,
                'VC015' => $VC015,
                'VC016' => $VC016,
                'VC017' => $VC017,
                'VC018' => $VC018,
                'VC019' => $VC019,
                'VC020' => $VC020,
                'VC021' => $VC021,
                'VC022' => $VC022,
                'VC023' => $VC023,
                'VC024' => $VC024,
                'VC025' => $VC025,
                'VC026' => $VC026,
                'VC027' => $VC027,
                'VC028' => $VC028,
                'VC029' => $VC029,
                'VC030' => $VC030,
                'VC031' => $VC031,
                'VC032' => $VC032,
                'VC033' => $VC033,
                'VC034' => $VC034,
                'VC035' => $VC035,
                'VC036' => $VC036,
                'VC037' => $VC037,
                'VC038' => $VC038,
                'VC039' => $VC039,
                'VC040' => $VC040,
                'VC041' => $VC041,
                'VC042' => $VC042,
                'VC043' => $VC043,
                'VC044' => $VC044,
                'VC045' => $VC045,
                'VC046' => $VC046,
                'VC047' => $VC047,
                'VC048' => $VC048,
                'VC049' => $VC049,
                'VC050' => $VC050,
                'VC051' => $VC051,
                'VC052' => $VC052,
                'VC053' => $VC053,
                'VC054' => $VC054,
                'VC055' => $VC055,
                'VC056' => $VC056,
                'VC057' => $VC057,
                'VC058' => $VC058,
                'VC059' => $VC059,
                'VC060' => $VC060,
                'VC061' => $VC061,
                'VC062' => $VC062,
                'VC063' => $VC063,
                'VC064' => $VC064,
                'VC065' => $VC065,
                'VC066' => $VC066,
                'VC067' => $VC067,
                'VC068' => $VC068,
                'VC069' => $VC069,
                'VC070' => $VC070,
                'VC071' => $VC071,
                'VC072' => $VC072,
                'VC073' => $VC073,
                'VC074' => $VC074,
                'VC075' => $VC075,
                'VC076' => $VC076,
                'VC077' => $VC077,
                'VC078' => $VC078,
                'VC079' => $VC079,
                'VC080' => $VC080,
                'VC081' => $VC081,
                'VC082' => $VC082,
                'VC083' => $VC083,
                'VC084' => $VC084,
                'VC085' => $VC085,
                'VC086' => $VC086,
                'VC087' => $VC087,
                'VC088' => $VC088,
                'VC089' => $VC089,
                'VC090' => $VC090,
                'VC091' => $VC091,
                'VC092' => $VC092,
                'VC093' => $VC093,
                'VC094' => $VC094,
                'VC095' => $VC095,
                'VC096' => $VC096,
                'VC097' => $VC097,
                'VC098' => $VC098,
                'VC099' => $VC099,
                'VC100' => $VC100,
                'VC101' => $VC101,
                'VC102' => $VC102,
                'VC103' => $VC103,
                'VC104' => $VC104,
                'VC105' => $VC105,
                'VC106' => $VC106,
                'VC107' => $VC107,
                'VC108' => $VC108,
                'VC109' => $VC109,
                'VC110' => $VC110,
                'VC111' => $VC111,
                'VC112' => $VC112,
                'VC113' => $VC113,
                'VC114' => $VC114,
                'VC115' => $VC115,
                'VC116' => $VC116,
                'VC117' => $VC117,
                'VC118' => $VC118,
                'VC119' => $VC119,
                'VC120' => $VC120,
                'VC121' => $VC121,
                'VC122' => $VC122,
                'VC123' => $VC123,
                'VC124' => $VC124,
                'VC125' => $VC125,
                'VC126' => $VC126,
                'VC127' => $VC127,
                'VC128' => $VC128,
                'VC129' => $VC129,
                'VC130' => $VC130,
                'VC131' => $VC131,
                'VC132' => $VC132,
                'VC133' => $VC133,
                'VC134' => $VC134,
                'VC135' => $VC135,
                'VC136' => $VC136,
                'VC137' => $VC137,
                'VC138' => $VC138,
                'VC139' => $VC139,
                'VC140' => $VC140,
                'VC141' => $VC141,
                'VC142' => $VC142,
                'VC143' => $VC143,
                'VC144' => $VC144,
                'VC145' => $VC145,
                'VC146' => $VC146,
                'VC147' => $VC147,
                'VC148' => $VC148,
                'VC149' => $VC149,
                'VC150' => $VC150,
                'VC151' => $VC151,
                'VC152' => $VC152,
                'VC153' => $VC153,
                'VC154' => $VC154,
                'VC155' => $VC155,
                'VC156' => $VC156,
                'VC157' => $VC157,
                'VC158' => $VC158,
                'VC159' => $VC159,
                'VC160' => $VC160,
                'VC161' => $VC161,
                'VC162' => $VC162,
                'VC163' => $VC163,
                'VC164' => $VC164,
                'VC165' => $VC165,
                'VC166' => $VC166,
                'VC167' => $VC167,
                'VC168' => $VC168,
                'VC169' => $VC169,
                'VC170' => $VC170,
                'VC171' => $VC171,
                'VC172' => $VC172,
                'VC173' => $VC173,
                'VC174' => $VC174,
                'VC175' => $VC175,
                'VC176' => $VC176,
                'VC177' => $VC177,
                'VC178' => $VC178,
                'VC179' => $VC179,
                'VC180' => $VC180,
                
            ];
            
            $successful = WordReplace($input, $output, $replacements);
            if ($successful == true){
                $FinalOutput = $WebsiteURL."/ws/".$output;
                $Embed  = "https://view.officeapps.live.com/op/embed.aspx?src=".$FinalOutput;
                Historia($NEmpleado,"Count Plantilla",$IdPlantilla);
                echo RespuestaJSON(TRUE,$FinalOutput , "Archivo creado satisfactoriamente", $Embed, $NEmpleado);
                

            } else {
                echo RespuestaJSON(FALSE, "", "Error al crear el archivo de plantilla", "",$NEmpleado);
            }
            // echo $successful ? "Creado con exito $output" : 'Fallo!';
            
            



            

        } else {
            echo RespuestaJSON(FALSE, "", "NEmpleado no Valido", "",$NEmpleado);
        }

    } else {
        echo RespuestaJSON(FALSE, "", "Plantilla no Valida", "",$NEmpleado);
    }

    

} else {
    echo RespuestaJSON(FALSE, "", "ApiKey no Valida", "",$NEmpleado);
}


function RespuestaJSON($exito, $urlfile, $msg, $embed, $NEmpleado){
    $myObj = new stdClass;
	$myObj->exito = $exito;
	$myObj->urlfile =$urlfile;
    $myObj->msg = $msg;
    $myObj->embed = $embed;
    $myJSON = json_encode($myObj,JSON_UNESCAPED_SLASHES);
    
    Historia($NEmpleado,"WS",$myJSON);
    return $myJSON;
}


function WordReplace(string $input, string $output, array $replacements): bool
{

    print_r ($replacements);
    if (copy($input, $output)) {

        
        $zip = new ZipArchive();

        
        if ($zip->open($output, ZipArchive::CREATE) !== true) {
            return false;
        }

        
        $xml = $zip->getFromName('word/document.xml');
        
        
        $xml = str_replace(array_keys($replacements), array_values($replacements), $xml);
        var_dump($xml)."<br>-------xml";
        
        if (false === $zip->addFromString('word/document.xml', $xml)) {
            return false;
        }
        $zip->close();

        return true;
    }

    return false;
}
?>