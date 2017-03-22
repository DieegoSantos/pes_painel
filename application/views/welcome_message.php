<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-user fa-fw"></i> Dados do Usuário
                </div>
                <div class="panel-body">
                    <div class="pull-left" style="margin-right:20px;">
                        <div style="width:150px; height:150px; background-color: #000" class="imagem"> </div>
                    </div>  
                    <div class="pull-left">
                        <p> E-mail </p>
                        <p> - </p>
                        <p> - </p>
                        <p> - </p>
                    </div> 
                    <div class="pull-right" style="margin-right:20px; text-align:center">
                        <div id="positionData">
                            <h2> 1 º </h2>
                            <p>Série A</p>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-money fa-fw"></i> Finanças
                </div>
                <div class="panel-body">
                    <div class="pull-left" style="margin-right:20px;">
                        <img src="img/ico_dinheiro.jpg" width="150" />
                    </div>  
                    <div class="pull-left">
                    	<table>
                    		<tr>
                    			<td width="150">Saldo Atual</td>
                    			<td align="right"><strong>100.000,00</strong></td>
                    		</tr>
                    		<tr>
                    			<td>Salários a Pagar</td>
                    			<td align="right"><strong>50.000,00</strong></td>
                    		</tr>
                    		<tr>
                    			<td>Saldo Final</td>
                    			<td align="right"><strong>50.000,00</strong></td>
                    		</tr>
                    	</table>                                
                    </div> 
                    <div class="pull-right" style="margin-right:20px; text-align:center">
                        <table>
                        	<tr>
                        		<td width="100">Liga</td>
                        		<td width="100">Copas</td>
                        	</tr>
                        	<tr>
                        		<td width="100"><img src="img/ico_amarelo.png" width="15" style="margin-right:5px;" /><span>0</span></td>
                        		<td width="100"><img src="img/ico_amarelo.png" width="15"  style="margin-right:5px;" /><span>0</span></td>
                        	</tr>
                        	<tr>
                        		<td width="100"><img src="img/ico_vermelho.png" width="15" style="margin-right:5px;" /><span>0</span></td>
                        		<td width="100"><img src="img/ico_vermelho.png" width="15"  style="margin-right:5px;" /><span>0</span></td>
                        	</tr>
                        	<tr>
                        		<td width="100"><img src="img/ico_bola.png" width="15" style="margin-right:5px;" /><span>0</span></td>
                        		<td width="100"><img src="img/ico_bola.png" width="15"  style="margin-right:5px;" /><span>0</span></td>
                        	</tr>
                        </table>
                    </div>  
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Ultimos Jogos
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                	<thead>
                                		<th>Campeonato</th>
                                		<th>Mandante</th>
                                		<td align="center"> <strong>X</strong> </td>
                                		<th>Visitante</th>
                                	</thead>
                                	<tbody>
                                		<?php for($i=0; $i<8; $i++): ?>
                                		<tr>
	                                		<td> Série A </td>
	                                		<td><img src="img/ico_time.png" width="20" /> Atlético de Madrid (dieegossantos) </td>
	                                		<td align="center"> 0 x 0 </td>
	                                		<td><img src="img/ico_time.png" width="20" /> Atlético de Madrid (dieegossantos) </td>
	                                	</tr>	
	                                <?php endfor; ?>
                                	</tbody>
                                   
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div id="morris-bar-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-users fa-fw"></i> Elenco Atual
                </div>
                <div class="panel-body">
                	<div class="table-responsive table-striped">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Posição</th>
                                    <th>Nome</th>
                                    <th>Gols</th>
                                    <th>Passe</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php for($i=0; $i < 20; $i++): ?>
                                <tr>
                                    <td>POS</td>
                                    <td>Diego</td>
                                    <td>0</td>
                                    <td>50.000,00</td>
                                </tr>
                            <?php endfor; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
</div>
</body>

</html>
