<?php


$carreras= [1 => "seleccione", 2=> "Software", 3=>"Redes", 4=>"Seguridad", 5=>"Multimedia", 6=>"Sonido", 7=>"Mecatronica", 8=>"Manofactura Automatizada", 9=>"Manofactura Dis.Medicos", 10=>"Ciencia de Datos", 11=>"Diseño Industrial"];


function getLastElement($list){

        $countList = count($list);
        $lastElement = $list[$countList -1];

    return $lastElement;
}

function getCarrera($carrerasid){

return $GLOBALS['carreras'] [$carrerasid];

}

function getIndexElement($list, $property, $value){

    $index=0;

    foreach($list as $key => $item){

        if($item[$property] == $value){

            $index = $key;
        }

    }

        return $index;


}
function searchProperty($list, $property, $value){

$filter=[];

    foreach($list as $item){
        if($item[$property]== $value){
            array_push($filter, $item);

        }

    }

    return $filter;
}
?>