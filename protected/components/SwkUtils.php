<?php
/**
 * Funções uteis para calculo, conversão e formatação de dados
 */
class SwkUtils
{
    /**
     * @param $dataNasc
     * @param string $dataBase Se não especificado data atual é utilizadas
     * @param string $formatoRetorno Padrão '%Y' mas pode ser especificado. Ex.: '%Y Anos, %m Meses e %d Dias'
     * @return string
     */
    public static function calculaIdade($dataNasc, $dataBase='', $formatoRetorno='%Y') {
        if (empty ($dataBase))
            $dataBase = date('Y-m-d');

        $date = new DateTime($dataNasc);
        $interval = $date->diff(new DateTime($dataBase));
        return $interval->format($formatoRetorno);
    }

}