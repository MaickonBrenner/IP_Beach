<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="css/reserva.css">
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <link rel="shortcut icon" href="icon.png">

    <title>Reserva | IP Beach Sports</title>  
</head>
<body>

    <div class="row">
        <div class="col-12"  style="display: flex; flex-direction: column; align-items: center; justify-content: center">
            <img src="images/logo_branca.png" alt="logo" width="100px">
            <h1 style="color: #fff; font-weight: bold;">Formulário de Reserva</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12" style="display: flex; align-items: center; justify-content: center">

            <div class="card" style="width: 90%; min-width: 300px; max-width: 500px;">
                <form action="criar_reserva.php" method="post" class="card-body text-center">
                    <h5 class="card-title"><b>Selecione uma data
                        <?php 
                            if (isset($_GET['date']) and $_GET['date'] == 'error-date') { echo '<span style="color: red;font-size: 1rem;"> Data inválida</span>'; }       
                        ?>
                    </b></h5>
                    
                    <input name="data" class="form-control" type="date" placeholder="Digite o usuário"  style="width: 100%;" required>

                    <div class="info-texto">
                        <p>Selecione um horário 
                            <?php 
                                if (isset($_GET['date']) and $_GET['date'] == 'error-date-res') { echo '<span style="color: red;font-size: 1rem;"> Hora já reservada</span>'; }       
                        ?></p>
                    </div>

                    <div class="info-horario form-inline text-center">
                        <div class="periodo">
                            <p style="font-weight: bold;">Manhã</p>
                        
                            <div class="form-inline text-center" style="margin-bottom: 5px;">
                                <div class="btn btn-warning">
                                    <label for="hora">06:00</label>
                                    <input type="radio" name="hora" id="hora" value="6">
                                </div>
                                <div class="btn btn-warning" style="margin-bottom: 5px;">
                                    <label for="horaa">07:00</label>
                                    <input type="radio" name="hora" id="horaa"  value="7">
                                </div>
                                <div class="btn btn-warning" style="margin-bottom: 5px;">
                                    <label for="horaaa">08:00</label>
                                    <input type="radio" name="hora" id="horaaa" value="8">
                                </div>
                                <div class="btn btn-warning" style="margin-bottom: 5px;">
                                    <label for="horaaaa">09:00</label>
                                    <input type="radio" name="hora" id="horaaaa" value="9">
                                </div>
                                <div class="btn btn-warning" style="margin-bottom: 5px;">
                                    <label for="horaaaaa">10:00</label>
                                    <input type="radio" name="hora" id="horaaaaa" value="10">
                                </div>
                                <div class="btn btn-warning" style="margin-bottom: 5px;">
                                    <label for="horaaaaa">11:00</label>
                                    <input type="radio" name="hora" id="horaaaaa" value="11">
                                </div>
                            </div>
                        </div>

                        <div class="periodo">
                            <p style="font-weight: bold;">Tarde</p>
                            <div class="form-inline text-center">
                                <div class="btn btn-warning" style="margin-bottom: 5px;">
                                    <label for="horra">12:00</label>
                                    <input type="radio" name="hora" id="horra" value="12">
                                </div>
                                <div class="btn btn-warning" style="margin-bottom: 5px;">
                                    <label for="horrra">13:00</label>
                                    <input type="radio" name="hora" id="horrra" value="13">
                                </div>
                                <div class="btn btn-warning" style="margin-bottom: 5px;">
                                    <label for="horrrra">14:00</label>
                                    <input type="radio" name="hora" id="horrrra" value="14">
                                </div>
                                <div class="btn btn-warning" style="margin-bottom: 5px;">
                                    <label for="horrrrra">15:00</label>
                                    <input type="radio" name="hora" id="horrrrra" value="15">
                                </div>
                                <div class="btn btn-warning" style="margin-bottom: 5px;">
                                    <label for="horrrrrra">16:00</label>
                                    <input type="radio" name="hora" id="horrrrrra" value="16">
                                </div>
                                <div class="btn btn-warning" style="margin-bottom: 5px;">
                                    <label for="horrrrrra">17:00</label>
                                    <input type="radio" name="hora" id="horrrrrra" value="17">
                                </div>
                                
                            </div>
                        </div>

                    <div class="periodo">
                        <p style="font-weight: bold;">Noite</p>
                        <div class="form-inline text-center">
                            <div class="btn btn-warning" style="margin-bottom: 5px;">
                                <label for="hoora">18:00</label>
                                <input type="radio" name="hora" id="hoora" value="18">
                            </div>
                            <div class="btn btn-warning" style="margin-bottom: 5px;">
                                <label for="hooora">19:00</label>
                                <input type="radio" name="hora" id="hooora" value="19">
                            </div>
                            <div class="btn btn-warning" style="margin-bottom: 5px;">
                                <label for="hoooora">20:00</label>
                                <input type="radio" name="hora" id="hoooora" value="20">
                            </div>
                            <div class="btn btn-warning" style="margin-bottom: 5px;">
                                <label for="hooooora">21:00</label>
                                <input type="radio" name="hora" id="hooooora" value="21">
                            </div>
                            <div class="btn btn-warning" style="margin-bottom: 5px;">
                                <label for="hoooooora">22:00</label>
                                <input type="radio" name="hora" id="hoooooora" value="22">
                            </div>
                            
                        </div>
                </div>
                    <br>
                    <p>Preencha as informações</p>

                    <label for="fnome"> Nome</label>
                    <br>
                    <input value="<?php if(isset($_GET['nome'])) { echo $_GET['nome'];} ?>" type="text" class="form-control form-control-sm" name="tipo_nome" size="60" style="width: 100%;" required>
                    <br><br>
                    <label for="femail"> E-mail</label>
                    <br>
                    <input value="<?php if(isset($_GET['email'])) { echo $_GET['email'];} ?>" type="email" class="form-control form-control-sm"  name="tipo_email" size="60" style="width: 100%;" required>
                    <br><br>
                    <label for="ftelefone"> Telefone</label>
                    <br>
                    <input value="<?php if(isset($_GET['telefone'])) { echo $_GET['telefone'];} ?>" id="tel" type="tel" class="form-control form-control-sm" name="tipo_telefone" size="60" style="width: 100%;" required>
                    <br>
                    <!-- <div class="form-group">
                        <label for="modalidade">Modalidade</label>
                        <select id="modalidade" name="modalidade">
                            <option value="" disabled selected>Selecione uma modalidade</option>
                            <option value="beach-tenis">Beach Tênis</option>
                            <option value="volei">Vôlei</option>
                        </select>
                    </div> -->
                    <div>
                        <button type="submit" class="btn btn-warning" style="color: #fff;">Confirmar</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

    <!-- JavaScript -->
    
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>

    <script>
        $('#tel').mask('(00) 00000-0000');
    </script>

</body>
</html>