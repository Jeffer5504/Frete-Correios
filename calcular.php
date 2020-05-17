<?php

    $cep_o = filter_input(INPUT_POST,'n-cep-o',FILTER_SANITIZE_STRING);
    $cep_d = filter_input(INPUT_POST,'n-cep-d',FILTER_SANITIZE_STRING);
    $serv = filter_input(INPUT_POST,'n-serv',FILTER_SANITIZE_STRING);
    $peso = filter_input(INPUT_POST,'n-peso',FILTER_SANITIZE_STRING);
    $compri= filter_input(INPUT_POST,'n-comp',FILTER_SANITIZE_STRING);
    $largura = filter_input(INPUT_POST,'n-larg',FILTER_SANITIZE_STRING);
    $altura = filter_input(INPUT_POST,'n-alt',FILTER_SANITIZE_STRING);
    $valor_dec = filter_input(INPUT_POST,'n-val',FILTER_SANITIZE_STRING);
   
    $cep_o = str_replace(".","",str_replace("-","",$cep_o));
    $cep_d = str_replace(".","",str_replace("-","",$cep_d));
    $peso = str_replace(",",".",str_replace(".","",$peso));
    $compri = str_replace(",",".",str_replace(".","",$compri));
    $largura = str_replace(",",".",str_replace(".","",$largura));
    $altura = str_replace(",",".",str_replace(".","",$altura));
    $valor_dec = str_replace(",",".",str_replace(".","",$valor_dec));
    
    function calcular($cep_o,$cep_d,$serv,$peso,$compri,$largura,$altura,$valor_dec){

        $url = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?";$url .= "nCdEmpresa=";
        $url .= "&sDsSenha=";$url .= "&sCepOrigem=" . $cep_o;
        $url .= "&sCepDestino=" . $cep_d;$url .= "&nVlPeso=" . $peso;
        $url .= "&nVlLargura=" . $largura;$url .= "&nVlAltura=" . $altura;
        $url .= "&nCdFormato=1";$url .= "&nVlComprimento=" . $compri;
        $url .= "&sCdMaoProria=n";$url .= "&nVlValorDeclarado=" . $valor_dec;
        $url .= "&sCdAvisoRecebimento=n";$url .= "&nCdServico=" . $serv;
        $url .= "&nVlDiametro=0";$url .= "&StrRetorno=xml";$url .= "&nIndicaCalculo=3";

        $arq_xml = simplexml_load_file($url);
            if($arq_xml->cServico->Erro=="0"){
                return $arq_xml;
            }else{
                return $arq_xml->cServico->Erro;
            }
   
    return $arq_xml;
}
    $frete=calcular($cep_o,$cep_d,$serv,$peso,$compri,$largura,$altura,$valor_dec);
