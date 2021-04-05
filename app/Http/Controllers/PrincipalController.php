<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PrincipalController extends Controller
{
    public function principal() {
        // controle de validação dos campos
        $erro = 0;
        return view("principal", compact('erro'));
    }


    public function validar(Request $request) {
        $validator = Validator::make($request->all(), [
            'fatura_mes' => 'required',
            'rbt12' => 'required',
            'anexo' => 'required'
        ]);
        if ($validator->fails()) {
            $erro = 1;
            return view("principal", compact('erro'));
        }

        // vars para o calculo
        $fatura_mes = $request->input('fatura_mes');
        $rbt12 = $request->input('rbt12');
        $anexo = $request->input('anexo');
        $faixa = 1;
        $aliquota = 0.0;
        $deducao = 0;
        $temp = [180000, 360000, 720000, 1800000, 3600000, 4800000];

        // checar em qual faixa do anexo o cliente se encontra
        for($i = 0; $rbt12 > $temp[$i]; $i++) {
            $faixa++;
        }

        // checar qual anexo a faixa se encaixa e atribui os respectivos valores
        switch ($anexo) {
            case 1:
                if($faixa == 1) {
                    $aliquota = 0.04;
                } else if($faixa == 2) {
                    $aliquota = 0.073;
                    $deducao = 5940;
                } else if($faixa == 3) {
                    $aliquota = 0.095;
                    $deducao = 13860;
                } else if($faixa == 4) {
                    $aliquota = 0.107;
                    $deducao = 22500;
                } else if($faixa == 5) {
                    $aliquota = 0.1430;
                    $deducao = 87300;
                }else if($faixa == 6) {
                    $aliquota = 0.19;
                    $deducao = 378000;
                }
                break;
            case 2:
                if($faixa == 1) {
                    $aliquota = 0.045;
                } else if($faixa == 2) {
                    $aliquota = 0.078;
                    $deducao = 5940;
                } else if($faixa == 3) {
                    $aliquota = 0.10;
                    $deducao = 13860;
                } else if($faixa == 4) {
                    $aliquota = 0.1120;
                    $deducao = 22500;
                } else if($faixa == 5) {
                    $aliquota = 0.1470;
                    $deducao = 85500;
                }else if($faixa == 6) {
                    $aliquota = 0.30;
                    $deducao = 7200;
                }
                break;
            case 3:
                if($faixa == 1) {
                    $aliquota = 0.06;
                } else if($faixa == 2) {
                    $aliquota = 0.1120;
                    $deducao = 9360;
                } else if($faixa == 3) {
                    $aliquota = 0.1350;
                    $deducao = 17640;
                } else if($faixa == 4) {
                    $aliquota = 0.16;
                    $deducao = 35640;
                } else if($faixa == 5) {
                    $aliquota = 0.21;
                    $deducao = 125640;
                }else if($faixa == 6) {
                    $aliquota = 0.33;
                    $deducao = 648000;
                }
                break;
            case 4:
                if($faixa == 1) {
                    $aliquota = 0.045;
                } else if($faixa == 2) {
                    $aliquota = 0.09;
                    $deducao = 8100;
                } else if($faixa == 3) {
                    $aliquota = 0.1020;
                    $deducao = 12420;
                } else if($faixa == 4) {
                    $aliquota = 0.14;
                    $deducao = 39780;
                } else if($faixa == 5) {
                    $aliquota = 0.22;
                    $deducao = 183780;
                }else if($faixa == 6) {
                    $aliquota = 0.33;
                    $deducao = 828000;
                }
                break;
            case 5:
                if($faixa == 1) {
                    $aliquota = 0.1550;
                } else if($faixa == 2) {
                    $aliquota = 0.18;
                    $deducao = 4500;
                } else if($faixa == 3) {
                    $aliquota = 0.1950;
                    $deducao = 9900;
                } else if($faixa == 4) {
                    $aliquota = 0.2050;
                    $deducao = 17100;
                } else if($faixa == 5) {
                    $aliquota = 0.23;
                    $deducao = 62100;
                }else if($faixa == 6) {
                    $aliquota = 0.3050;
                    $deducao = 540000;
                }
                break;
        }

//        inicio calculo
        $valor_provisorio = ($rbt12 * $aliquota) - $deducao;
        $aliquota_efetiva = $valor_provisorio / $rbt12;
        $simples_total = $fatura_mes * $aliquota_efetiva;

        // formatar valores
         $fatura_mes = number_format($fatura_mes,2,',','.');
         $rbt12 = number_format($rbt12,2,',','.');
         $simples_total = number_format($simples_total,2,',','.');

        $erro = 0;
        return view("principal", compact(
            'erro',
            'fatura_mes', 'rbt12', 'simples_total', 'faixa', 'aliquota'));
    }
}
