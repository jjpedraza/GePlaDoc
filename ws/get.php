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
            if (isset($_POST["VC001"])){$VC001 = VarClean($_POST["VC001"]);}
            if (isset($_POST["VC002"])){$VC002 = VarClean($_POST["VC002"]);}
            if (isset($_POST["VC003"])){$VC003 = VarClean($_POST["VC003"]);}
            if (isset($_POST["VC004"])){$VC004 = VarClean($_POST["VC004"]);}
            if (isset($_POST["VC005"])){$VC005 = VarClean($_POST["VC005"]);}
            if (isset($_POST["VC006"])){$VC006 = VarClean($_POST["VC006"]);}
            if (isset($_POST["VC007"])){$VC007 = VarClean($_POST["VC007"]);}
            if (isset($_POST["VC008"])){$VC008 = VarClean($_POST["VC008"]);}
            if (isset($_POST["VC009"])){$VC009 = VarClean($_POST["VC009"]);}
            if (isset($_POST["VC010"])){$VC010 = VarClean($_POST["VC010"]);}
            if (isset($_POST["VC011"])){$VC011 = VarClean($_POST["VC011"]);}
            if (isset($_POST["VC012"])){$VC012 = VarClean($_POST["VC012"]);}
            if (isset($_POST["VC013"])){$VC013 = VarClean($_POST["VC013"]);}
            if (isset($_POST["VC014"])){$VC014 = VarClean($_POST["VC014"]);}
            if (isset($_POST["VC015"])){$VC015 = VarClean($_POST["VC015"]);}
            if (isset($_POST["VC016"])){$VC016 = VarClean($_POST["VC016"]);}
            if (isset($_POST["VC017"])){$VC017 = VarClean($_POST["VC017"]);}
            if (isset($_POST["VC018"])){$VC018 = VarClean($_POST["VC018"]);}
            if (isset($_POST["VC019"])){$VC019 = VarClean($_POST["VC019"]);}
            if (isset($_POST["VC020"])){$VC020 = VarClean($_POST["VC020"]);}
            if (isset($_POST["VC021"])){$VC021 = VarClean($_POST["VC021"]);}
            if (isset($_POST["VC022"])){$VC022 = VarClean($_POST["VC022"]);}
            if (isset($_POST["VC023"])){$VC023 = VarClean($_POST["VC023"]);}
            if (isset($_POST["VC024"])){$VC024 = VarClean($_POST["VC024"]);}
            if (isset($_POST["VC025"])){$VC025 = VarClean($_POST["VC025"]);}
            if (isset($_POST["VC026"])){$VC026 = VarClean($_POST["VC026"]);}
            if (isset($_POST["VC027"])){$VC027 = VarClean($_POST["VC027"]);}
            if (isset($_POST["VC028"])){$VC028 = VarClean($_POST["VC028"]);}
            if (isset($_POST["VC029"])){$VC029 = VarClean($_POST["VC029"]);}
            if (isset($_POST["VC030"])){$VC030 = VarClean($_POST["VC030"]);}
            if (isset($_POST["VC031"])){$VC031 = VarClean($_POST["VC031"]);}
            if (isset($_POST["VC032"])){$VC032 = VarClean($_POST["VC032"]);}
            if (isset($_POST["VC033"])){$VC033 = VarClean($_POST["VC033"]);}
            if (isset($_POST["VC034"])){$VC034 = VarClean($_POST["VC034"]);}
            if (isset($_POST["VC035"])){$VC035 = VarClean($_POST["VC035"]);}
            if (isset($_POST["VC036"])){$VC036 = VarClean($_POST["VC036"]);}
            if (isset($_POST["VC037"])){$VC037 = VarClean($_POST["VC037"]);}
            if (isset($_POST["VC038"])){$VC038 = VarClean($_POST["VC038"]);}
            if (isset($_POST["VC039"])){$VC039 = VarClean($_POST["VC039"]);}
            if (isset($_POST["VC040"])){$VC040 = VarClean($_POST["VC040"]);}
            if (isset($_POST["VC041"])){$VC041 = VarClean($_POST["VC041"]);}
            if (isset($_POST["VC042"])){$VC042 = VarClean($_POST["VC042"]);}
            if (isset($_POST["VC043"])){$VC043 = VarClean($_POST["VC043"]);}
            if (isset($_POST["VC044"])){$VC044 = VarClean($_POST["VC044"]);}
            if (isset($_POST["VC045"])){$VC045 = VarClean($_POST["VC045"]);}
            if (isset($_POST["VC046"])){$VC046 = VarClean($_POST["VC046"]);}
            if (isset($_POST["VC047"])){$VC047 = VarClean($_POST["VC047"]);}
            if (isset($_POST["VC048"])){$VC048 = VarClean($_POST["VC048"]);}
            if (isset($_POST["VC049"])){$VC049 = VarClean($_POST["VC049"]);}
            if (isset($_POST["VC050"])){$VC050 = VarClean($_POST["VC050"]);}
            if (isset($_POST["VC051"])){$VC051 = VarClean($_POST["VC051"]);}
            if (isset($_POST["VC052"])){$VC052 = VarClean($_POST["VC052"]);}
            if (isset($_POST["VC053"])){$VC053 = VarClean($_POST["VC053"]);}
            if (isset($_POST["VC054"])){$VC054 = VarClean($_POST["VC054"]);}
            if (isset($_POST["VC055"])){$VC055 = VarClean($_POST["VC055"]);}
            if (isset($_POST["VC056"])){$VC056 = VarClean($_POST["VC056"]);}
            if (isset($_POST["VC057"])){$VC057 = VarClean($_POST["VC057"]);}
            if (isset($_POST["VC058"])){$VC058 = VarClean($_POST["VC058"]);}
            if (isset($_POST["VC059"])){$VC059 = VarClean($_POST["VC059"]);}
            if (isset($_POST["VC060"])){$VC060 = VarClean($_POST["VC060"]);}
            if (isset($_POST["VC061"])){$VC061 = VarClean($_POST["VC061"]);}
            if (isset($_POST["VC062"])){$VC062 = VarClean($_POST["VC062"]);}
            if (isset($_POST["VC063"])){$VC063 = VarClean($_POST["VC063"]);}
            if (isset($_POST["VC064"])){$VC064 = VarClean($_POST["VC064"]);}
            if (isset($_POST["VC065"])){$VC065 = VarClean($_POST["VC065"]);}
            if (isset($_POST["VC066"])){$VC066 = VarClean($_POST["VC066"]);}
            if (isset($_POST["VC067"])){$VC067 = VarClean($_POST["VC067"]);}
            if (isset($_POST["VC068"])){$VC068 = VarClean($_POST["VC068"]);}
            if (isset($_POST["VC069"])){$VC069 = VarClean($_POST["VC069"]);}
            if (isset($_POST["VC070"])){$VC070 = VarClean($_POST["VC070"]);}
            if (isset($_POST["VC071"])){$VC071 = VarClean($_POST["VC071"]);}
            if (isset($_POST["VC072"])){$VC072 = VarClean($_POST["VC072"]);}
            if (isset($_POST["VC073"])){$VC073 = VarClean($_POST["VC073"]);}
            if (isset($_POST["VC074"])){$VC074 = VarClean($_POST["VC074"]);}
            if (isset($_POST["VC075"])){$VC075 = VarClean($_POST["VC075"]);}
            if (isset($_POST["VC076"])){$VC076 = VarClean($_POST["VC076"]);}
            if (isset($_POST["VC077"])){$VC077 = VarClean($_POST["VC077"]);}
            if (isset($_POST["VC078"])){$VC078 = VarClean($_POST["VC078"]);}
            if (isset($_POST["VC079"])){$VC079 = VarClean($_POST["VC079"]);}
            if (isset($_POST["VC080"])){$VC080 = VarClean($_POST["VC080"]);}
            if (isset($_POST["VC081"])){$VC081 = VarClean($_POST["VC081"]);}
            if (isset($_POST["VC082"])){$VC082 = VarClean($_POST["VC082"]);}
            if (isset($_POST["VC083"])){$VC083 = VarClean($_POST["VC083"]);}
            if (isset($_POST["VC084"])){$VC084 = VarClean($_POST["VC084"]);}
            if (isset($_POST["VC085"])){$VC085 = VarClean($_POST["VC085"]);}
            if (isset($_POST["VC086"])){$VC086 = VarClean($_POST["VC086"]);}
            if (isset($_POST["VC087"])){$VC087 = VarClean($_POST["VC087"]);}
            if (isset($_POST["VC088"])){$VC088 = VarClean($_POST["VC088"]);}
            if (isset($_POST["VC089"])){$VC089 = VarClean($_POST["VC089"]);}
            if (isset($_POST["VC090"])){$VC090 = VarClean($_POST["VC090"]);}
            if (isset($_POST["VC091"])){$VC091 = VarClean($_POST["VC091"]);}
            if (isset($_POST["VC092"])){$VC092 = VarClean($_POST["VC092"]);}
            if (isset($_POST["VC093"])){$VC093 = VarClean($_POST["VC093"]);}
            if (isset($_POST["VC094"])){$VC094 = VarClean($_POST["VC094"]);}
            if (isset($_POST["VC095"])){$VC095 = VarClean($_POST["VC095"]);}
            if (isset($_POST["VC096"])){$VC096 = VarClean($_POST["VC096"]);}
            if (isset($_POST["VC097"])){$VC097 = VarClean($_POST["VC097"]);}
            if (isset($_POST["VC098"])){$VC098 = VarClean($_POST["VC098"]);}
            if (isset($_POST["VC099"])){$VC099 = VarClean($_POST["VC099"]);}
            if (isset($_POST["VC100"])){$VC100 = VarClean($_POST["VC100"]);}
            if (isset($_POST["VC101"])){$VC101 = VarClean($_POST["VC101"]);}
            if (isset($_POST["VC102"])){$VC102 = VarClean($_POST["VC102"]);}
            if (isset($_POST["VC103"])){$VC103 = VarClean($_POST["VC103"]);}
            if (isset($_POST["VC104"])){$VC104 = VarClean($_POST["VC104"]);}
            if (isset($_POST["VC105"])){$VC105 = VarClean($_POST["VC105"]);}
            if (isset($_POST["VC106"])){$VC106 = VarClean($_POST["VC106"]);}
            if (isset($_POST["VC107"])){$VC107 = VarClean($_POST["VC107"]);}
            if (isset($_POST["VC108"])){$VC108 = VarClean($_POST["VC108"]);}
            if (isset($_POST["VC109"])){$VC109 = VarClean($_POST["VC109"]);}
            if (isset($_POST["VC110"])){$VC110 = VarClean($_POST["VC110"]);}
            if (isset($_POST["VC111"])){$VC111 = VarClean($_POST["VC111"]);}
            if (isset($_POST["VC112"])){$VC112 = VarClean($_POST["VC112"]);}
            if (isset($_POST["VC113"])){$VC113 = VarClean($_POST["VC113"]);}
            if (isset($_POST["VC114"])){$VC114 = VarClean($_POST["VC114"]);}
            if (isset($_POST["VC115"])){$VC115 = VarClean($_POST["VC115"]);}
            if (isset($_POST["VC116"])){$VC116 = VarClean($_POST["VC116"]);}
            if (isset($_POST["VC117"])){$VC117 = VarClean($_POST["VC117"]);}
            if (isset($_POST["VC118"])){$VC118 = VarClean($_POST["VC118"]);}
            if (isset($_POST["VC119"])){$VC119 = VarClean($_POST["VC119"]);}
            if (isset($_POST["VC120"])){$VC120 = VarClean($_POST["VC120"]);}
            if (isset($_POST["VC121"])){$VC121 = VarClean($_POST["VC121"]);}
            if (isset($_POST["VC122"])){$VC122 = VarClean($_POST["VC122"]);}
            if (isset($_POST["VC123"])){$VC123 = VarClean($_POST["VC123"]);}
            if (isset($_POST["VC124"])){$VC124 = VarClean($_POST["VC124"]);}
            if (isset($_POST["VC125"])){$VC125 = VarClean($_POST["VC125"]);}
            if (isset($_POST["VC126"])){$VC126 = VarClean($_POST["VC126"]);}
            if (isset($_POST["VC127"])){$VC127 = VarClean($_POST["VC127"]);}
            if (isset($_POST["VC128"])){$VC128 = VarClean($_POST["VC128"]);}
            if (isset($_POST["VC129"])){$VC129 = VarClean($_POST["VC129"]);}
            if (isset($_POST["VC130"])){$VC130 = VarClean($_POST["VC130"]);}
            if (isset($_POST["VC131"])){$VC131 = VarClean($_POST["VC131"]);}
            if (isset($_POST["VC132"])){$VC132 = VarClean($_POST["VC132"]);}
            if (isset($_POST["VC133"])){$VC133 = VarClean($_POST["VC133"]);}
            if (isset($_POST["VC134"])){$VC134 = VarClean($_POST["VC134"]);}
            if (isset($_POST["VC135"])){$VC135 = VarClean($_POST["VC135"]);}
            if (isset($_POST["VC136"])){$VC136 = VarClean($_POST["VC136"]);}
            if (isset($_POST["VC137"])){$VC137 = VarClean($_POST["VC137"]);}
            if (isset($_POST["VC138"])){$VC138 = VarClean($_POST["VC138"]);}
            if (isset($_POST["VC139"])){$VC139 = VarClean($_POST["VC139"]);}
            if (isset($_POST["VC140"])){$VC140 = VarClean($_POST["VC140"]);}
            if (isset($_POST["VC141"])){$VC141 = VarClean($_POST["VC141"]);}
            if (isset($_POST["VC142"])){$VC142 = VarClean($_POST["VC142"]);}
            if (isset($_POST["VC143"])){$VC143 = VarClean($_POST["VC143"]);}
            if (isset($_POST["VC144"])){$VC144 = VarClean($_POST["VC144"]);}
            if (isset($_POST["VC145"])){$VC145 = VarClean($_POST["VC145"]);}
            if (isset($_POST["VC146"])){$VC146 = VarClean($_POST["VC146"]);}
            if (isset($_POST["VC147"])){$VC147 = VarClean($_POST["VC147"]);}
            if (isset($_POST["VC148"])){$VC148 = VarClean($_POST["VC148"]);}
            if (isset($_POST["VC149"])){$VC149 = VarClean($_POST["VC149"]);}
            if (isset($_POST["VC150"])){$VC150 = VarClean($_POST["VC150"]);}
            if (isset($_POST["VC151"])){$VC151 = VarClean($_POST["VC151"]);}
            if (isset($_POST["VC152"])){$VC152 = VarClean($_POST["VC152"]);}
            if (isset($_POST["VC153"])){$VC153 = VarClean($_POST["VC153"]);}
            if (isset($_POST["VC154"])){$VC154 = VarClean($_POST["VC154"]);}
            if (isset($_POST["VC155"])){$VC155 = VarClean($_POST["VC155"]);}
            if (isset($_POST["VC156"])){$VC156 = VarClean($_POST["VC156"]);}
            if (isset($_POST["VC157"])){$VC157 = VarClean($_POST["VC157"]);}
            if (isset($_POST["VC158"])){$VC158 = VarClean($_POST["VC158"]);}
            if (isset($_POST["VC159"])){$VC159 = VarClean($_POST["VC159"]);}
            if (isset($_POST["VC160"])){$VC160 = VarClean($_POST["VC160"]);}
            if (isset($_POST["VC161"])){$VC161 = VarClean($_POST["VC161"]);}
            if (isset($_POST["VC162"])){$VC162 = VarClean($_POST["VC162"]);}
            if (isset($_POST["VC163"])){$VC163 = VarClean($_POST["VC163"]);}
            if (isset($_POST["VC164"])){$VC164 = VarClean($_POST["VC164"]);}
            if (isset($_POST["VC165"])){$VC165 = VarClean($_POST["VC165"]);}
            if (isset($_POST["VC166"])){$VC166 = VarClean($_POST["VC166"]);}
            if (isset($_POST["VC167"])){$VC167 = VarClean($_POST["VC167"]);}
            if (isset($_POST["VC168"])){$VC168 = VarClean($_POST["VC168"]);}
            if (isset($_POST["VC169"])){$VC169 = VarClean($_POST["VC169"]);}
            if (isset($_POST["VC170"])){$VC170 = VarClean($_POST["VC170"]);}
            if (isset($_POST["VC171"])){$VC171 = VarClean($_POST["VC171"]);}
            if (isset($_POST["VC172"])){$VC172 = VarClean($_POST["VC172"]);}
            if (isset($_POST["VC173"])){$VC173 = VarClean($_POST["VC173"]);}
            if (isset($_POST["VC174"])){$VC174 = VarClean($_POST["VC174"]);}
            if (isset($_POST["VC175"])){$VC175 = VarClean($_POST["VC175"]);}
            if (isset($_POST["VC176"])){$VC176 = VarClean($_POST["VC176"]);}
            if (isset($_POST["VC177"])){$VC177 = VarClean($_POST["VC177"]);}
            if (isset($_POST["VC178"])){$VC178 = VarClean($_POST["VC178"]);}
            if (isset($_POST["VC179"])){$VC179 = VarClean($_POST["VC179"]);}
            if (isset($_POST["VC180"])){$VC180 = VarClean($_POST["VC180"]);}



            

            

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
?>