
	 <table>
      <thead>
        <tr>
          <th> Eventos </th>
          <th> Referencia </th>
          <th> Desconto </th>       
        </tr> 
      </thead>
	
<?php

	$salario = $_POST['salario'];	
		
		$resultInss = Inss($salario);	

		   $resultIr = Ir($salario);
	
				$INSSporcent = porcentagem_Inss($salario);

					$IRporcent  = porcentagem_Ir($salario);
 	
						$totalDesconto = $resultInss + $resultIr;
	
							$totalliquido = $salario - $totalDesconto;
	
    echo '<tr>';
	echo '<td>INSS</td>'; 
	echo "<td>{$INSSporcent}</td>";
	echo "<td>{$resultInss}</td>";	
	echo '</tr>'; 
	echo '<tr>';
	echo '<td>IRRF</td>';
	echo "<td>{$IRporcent}</td>";
	echo "<td>{$resultIr}</td>";
	echo '</tr>'; 
	echo '<tr>';			
	echo '<td colspan="2" >Total</td>';	
	echo "<td>{$totalDesconto}</td>";	
	echo '</tr>';
	echo '<tr>';		
	echo '<td colspan="2">Valor Bruto</td>';	
	echo "<td>{$salario}</td>";							
    echo '</tr>';	
	echo '<tr>';			
	echo '<td colspan="2">Valor Líquido</td>';						
	echo "<td>{$totalliquido}</td>";				
	echo '</tr>';
	
	function Inss($salario){
		$alicotaINSS = 0;
		if($salario >= 0 && $salario <= 1556.94){
			$alicotaINSS = $salario * 0.92;
		}
			else if($salario >= 1556.95 && $salario <= 2594.92){
				$alicotaINSS = $salario * 0.91;
			}
				else if($salario >= 2594.95 && $salario <= 5189.82){
					$alicotaINSS = $salario * 0.89;
				}
				   else if($salario >= 5189.93){
				   	 $alicotaINSS = 5189.92 * 0.89;
				   }

				$alicotaINSS = $salario - $alicotaINSS;
				   
		return $alicotaINSS;
	}



	function Ir($alicotaINSS){
		$alicotaIR = 0;
		if($alicotaINSS >= 0 && $alicotaINSS <= 1903.98){
			$alicotaIR = $alicotaIR;
			$alicotaINSS = $alicotaIR;
		}
			else if($alicotaINSS >= 1903.99 && $alicotaINSS <= 2826.65){
				$alicotaIR = $alicotaINSS * 0.925;
			}
				else if($alicotaINSS >= 2826.66 && $alicotaINSS <= 3751.05){
					$alicotaIR = $alicotaINSS * 0.85;
				}
					else if($alicotaINSS >= 3751.06 && $alicotaINSS <= 4664.68){
						$alicotaIR = $alicotaINSS * 0.775;
					}	
						else if($alicotaINSS >= 4664.69){
							$alicotaIR = $alicotaINSS * 0.725;
						}

				$alicotaIR = $alicotaINSS - $alicotaIR;		
		return $alicotaIR;				
	}

	function porcentagem_Inss($salario){
		$alicotaInss = 0;
		if($salario >= 0 && $salario <= 1556.94){
			$porcentagemInss = '8%';
		}
			else if($salario >= 1556.95 && $salario <= 2594.92){
				$porcentagemInss = '9%';
			}
				else if($salario >= 2594.95 && $salario <= 5189.82){
					$porcentagemInss = '11%';
				}
				   else if($salario >= 5189.93){
				   	 $porcentagemInss = '11%';
				   }
		return $porcentagemInss;;
	}

	function porcentagem_Ir($alicotaINSS){
		$alicotaIr = 0;
		if($alicotaINSS >= 0 && $alicotaINSS <= 1903.98){
			$porcentagemIR = 'insento';
		}
			else if($alicotaINSS >= 1903.99 && $alicotaINSS <= 2826.65){
				$porcentagemIR = '7.5%';
			}
				else if($alicotaINSS >= 2826.66 && $alicotaINSS <= 3751.05){
					$porcentagemIR = '15%';
				}
					else if($alicotaINSS >= 3751.06 && $alicotaINSS <= 4664.68){
						$porcentagemIR = '22.5%';
					}	
						else if($alicotaINSS >= 4664.69){
							$porcentagemIR = '27.5';
						}
		return $porcentagemIR;				
	}
?>	
    </table>