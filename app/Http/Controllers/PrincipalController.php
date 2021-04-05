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

        // formatar valores
        // $fatura_mes_form = number_format($fatura_mes,2,',','.');
       // $rbt12_form = number_format($rbt12,2,',','.');

        $anexo = $request->input('anexo');
        $faixa = 0;
        $aliquota = 0;
        $deducao = 0;
        $done = false;

        // checar em qual faixa do anexo o cliente se encontra
        if($fatura_mes < 180000)
        while(!$done) {
            switch ($anexo) {
                case 1:

                    break;
                case 2:

                    break;
                case 3:

                    break;
                case 4:

                    break;
                case 5:

                    break;
            }
        }

//        inicio calculo


        $erro = 0;
        return view("principal", compact('erro', 'fatura_mes', 'rbt12'));
    }

}
