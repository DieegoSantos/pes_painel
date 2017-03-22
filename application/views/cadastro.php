<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-user fa-fw"></i> Cadastro
                </div>
                <div class="panel-body">
                    <form action="" method="POST">
                        <fieldset class="form-group">
                            <label for="nome">Nome: </label>
                            <input autofocus name="nome" class="form-control" placeholder="Nome">
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="login">Login: </label>
                            <input autofocus name="login" class="form-control" placeholder="Login">
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="foto">Foto: </label>
                            <input autofocus name="foto" class="form-control" placeholder="Foto">
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="psn">PSN: </label>
                            <input autofocus name="psn" class="form-control" placeholder="PSN">
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="login">Skype: </label>
                            <input autofocus name="skype" class="form-control" placeholder="Skype">
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="login">Time do Coração: </label>
                            <input autofocus name="time" class="form-control" placeholder="Time">
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="whatsapp">WhatsApp: </label>
                            <input autofocus name="whatsapp" class="form-control" placeholder="WhatsApp">
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="login">Cidade: </label>
                            <input autofocus name="cidade" class="form-control" placeholder="Cidade">
                        </fieldset>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div> 
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-user fa-fw"></i> Imagem Atual
                </div>
                <div class="panel-body" style="text-align:center">
                    <img src="img/img_cadastro.png" width="350" alt="Imagem Atual" align="center" />
                </div>
            </div>
        </div>       
    </div>
</div>    
</div>
</body>

</html>
