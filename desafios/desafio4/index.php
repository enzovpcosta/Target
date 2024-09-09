<?php 
    $sp = 67836.43;
    $rj = 36678.66;
    $mg = 29229.88;
    $es = 27165.48;
    $outros = 19849.53;

    $total = $sp + $rj + $mg + $es + $outros;

    $porcentagemSP = ($sp/$total)*100;
    echo '<p> São Paulo = '.number_format($porcentagemSP,2,',').'%</p>';
    
    $porcentagemRJ = ($rj/$total)*100;
    echo '<p> Rio de Janeiro = '.number_format($porcentagemRJ,2,',').'%</p>'; 

    $porcentagemMG = ($mg/$total)*100;
    echo '<p> Minas Gerais = '.number_format($porcentagemMG,2,',').'%</p>'; 

    $porcentagemES = ($es/$total)*100;
    echo '<p> Espiríto Santo = '.number_format($porcentagemES,2,',').'%</p>'; 

    $porcentagemOutros = ($outros/$total)*100;
    echo '<p> Outros = '.number_format($porcentagemOutros,2,',').'%</p>';
    
    echo '<p> Total = 100% </p>';

?>