<?php
include("banco-intercessor.php"); 

class QuadroHorariosUtil {
    
    function drawRow($indexInicio, $colunas) {
    $html = '';        
        
    $array = $this->formataArrayPeriodos();
    
    $html .= '<tr>';

            $limite = ($colunas*2) + $indexInicio;
            for ($i = $indexInicio; $i < $limite; $i+=2) {
                    $separaHora = explode("-",$array[$i]);
                    $qtdIntercessor = $this->verificaQtdIntercessoresHorario($array[$i]);
                    $horaInicial = $separaHora[0];
                    $horaFinal = $separaHora[1];
                    
                    $html .= $this->setCorHorarioVerde($qtdIntercessor);
                    $html .= '    <div data-toggle="tooltip" data-placement="top" title="' . $this->mensagemIntercessoresCadastrados($qtdIntercessor) . '" class="checkbox">';
                    $html .= '      <label class="label-quadro">';
                    $html .= '        <input name="check_list[]" type="checkbox" value="'  . $array[$i] . '">';
                    $html .= $horaInicial . ' às ' . $horaFinal . $this->setCorBadge($qtdIntercessor) . '</span>';
                    $html .= '      </label>';
                    $html .= '    </div>';
                    $html .= '  </td>';
                $i+1;
            }
    $html .= '</tr>';    
       
    
    return $html;
        
    }
    
    function mensagemIntercessoresCadastrados($qtdIntercessor) {
        $html = '';
        if ($qtdIntercessor > 1) {
            $html .= $qtdIntercessor . ' intercessores neste horário';
        } else if ($qtdIntercessor == 1){
            $html .= $qtdIntercessor . ' intercessor neste horário';
        } else {
            $html .= ' nenhum intercessor neste horário';
        }
        
        return $html;
    }
    
    function setCorHorarioVerde($qtdIntercessor) {
        $html = '';
        if ($qtdIntercessor > 0) {
            $html .= '<td class="bg-success">';
        } else {
            $html .= '<td>';
        }
        return $html;
    }
    
    function setCorBadge($qtdIntercessor) {
        $html = '';
        if ($qtdIntercessor > 0) {
            $html .= '<span class="badge badge-success">' . $qtdIntercessor;
        } else {
            //$html .= '<span class="badge badge-light">';
            $html .= '<span>';
        }
        
        return $html;
    }

    function verificaQtdIntercessoresHorario($horario) {
        $arrayIntercessores = listaIntercessores();
        $arrlength = count($arrayIntercessores);
        
        $contador = 0;
        for ($i = 0; $i < $arrlength; $i++) {
            $horarioIntercessor = $arrayIntercessores[$i]->getHorario();
            $horarios = explode(";", $horarioIntercessor);
            
            $lenghtHorarios = count($horarios);
            
            for ($j = 0; $j < $lenghtHorarios; $j++) {
                if($horarios[$j] == $horario) {
                    $contador++;
                    break;
                }
            }
        }
        
        return $contador;
    }
    
    function drawQuadro() {
        $html = '<tbody>';
        
        $html .= $this->drawCabecalho(6);
        $html .= $this->drawRow(0, 6);
        $html .= $this->drawRow(1, 6);
        
        $html .= $this->drawCabecalho(12);
        $html .= $this->drawRow(12, 6);
        $html .= $this->drawRow(13, 6);
        
        $html .= $this->drawCabecalho(18);
        $html .= $this->drawRow(24, 6);
        $html .= $this->drawRow(25, 6);
        
        $html .= $this->drawCabecalho(0);
        $html .= $this->drawRow(36, 6);
        $html .= $this->drawRow(37, 6);
        
        $html .= '</tbody>';
        
        return $html;
    }
    
    function drawCabecalho($inicio) {
        $html = '';
        $html .= '<thead class="thead-dark">';
        $html .= '  <tr>';
        for ($i = 0; $i < 6; $i++) {
            $html .= '<th scope="col">' . sprintf("%02d", ($inicio + $i)) . 'h</th>';
        }
        $html .= '  </tr>';
        $html .= '</thead>';
        
        return $html;
    }

    function halfHourTimes() {
        date_default_timezone_set('America/Sao_Paulo');
        $formatter = function ($time) {
            return date('H:i', $time);
        };
        $halfHourSteps = range(-54000, 18 * 1800, 1800);
        return array_map($formatter, $halfHourSteps);
    }
    
    function formataArrayPeriodos() {
        
        $array = array();
        $arrlength = count($this->halfHourTimes());
        for ($i = 0; $i < $arrlength-1; $i++) {
            $array[$i] = $this->halfHourTimes()[$i] . '-' . $this->halfHourTimes()[$i+1];
        }
        
        return $array;
    }
    
    function getConexao() {
        return $conexao;
    }
    
    function drawResultadoRelogio($inicioIndex) {
        $html = '';
        
        $arrayIntercessores = listaIntercessores();
        $array = $this->formataArrayPeriodos();
        $arrlength = count($array);
        $contador=0;
        
        for ($i = $inicioIndex; $i < $arrlength; $i++) {
            $separaHora = explode("-",$array[$i]);
            $horaInicial = $separaHora[0];
            $horaFinal = $separaHora[1]; 
            if ($inicioIndex == 0 && $horaInicial == '18:00') {
                break;
            }
            
            $intercessores = '';

            $length = count($arrayIntercessores);
            $contador=0;
            for ($j = 0; $j < $length; $j++) {
                $nome = $arrayIntercessores[$j]->getNome();
                $horarios = explode(";", $arrayIntercessores[$j]->getHorario());

                foreach ($horarios as $value) {
                    if ($array[$i] == $value) {
                        $intercessores .= '      ' . $nome . '<br>';
                        $intercessores .= '<div class="linha-intercessor"></div>';
                        $contador++;
                    } 
                }
            }

            $html .= '<ul class="list-group">';
                $html .= '  <li class="list-group-item grupo-intercessores">';
                $html .= '    <div class="row toggle header-horario" id="dropdown-detail-1" data-toggle="detail-' . $i . '">';
                $html .= '      <div class="col-xs-10">';
                $html .= '       <strong class="text-primary">Das ' . $horaInicial . ' até às ' . $horaFinal . '</strong>';
                $html .= '      </div>';
                //$html .= '      <div class="col-xs-2"><span class="badge badge-success">' . $contador . '</span><i class="fa fa-chevron-down pull-right"></i></div>';
                $html .= '<div class="col-xs-2"><i class="fa fa-chevron-down pull-right"></i></div>';
                $html .= '    </div>';
                $html .= '<hr></hr>';
                    $html .= '<div id="detail-' . $i . '">';
                    $html .= '  <div class="row">';
                    $html .= '    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">';
                    $html .= '<strong>' . $intercessores . '</strong>';
                    $html .= '    </div>';
                    $html .= '  </div>';
                    $html .= '</div>';                    
                
                $html .= '  </li>';
                $html .= '</ul>';
                
        }
        
        return $html;
    }

}
?>