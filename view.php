<?php
/** VIEW */
/** Recebe dados da CONTROLLER para exibição, interface que o usuário enxerga */
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./css/bootstrap.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">

    <title>Calculadora</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-auto">
                <div class="card text-bg-secondary mb-3" style="max-width: 38rem;">
                    <div class="card-header">Calculadora</div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-auto">
                                <input id="visor" class="form-control text-end" type="text" value="<?=$resultado?>" disabled />
                                <form id="calcula" action="/calculadora/?action=processar" method="POST">
                                    <input id="formula" type="hidden" name="formula" />
                                </form>
                            </div>
                        </div>
                        
                        <div class="row gx-1 mb-1">
                            <div class="col">
                                <div class="d-grid">
                                    <button type="button" class="btn btn-dark btn-clear">C</button>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-grid">
                                    <button type="button" class="btn btn-dark btn-backspace"><=</button>
                                </div>
                            </div>
                        </div>

                        <div class="row gx-1 mb-1">
                            <div class="col">
                                <div class="d-grid">
                                    <button type="button" class="btn btn-dark btn-number-operator">7</button>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-grid">
                                    <button type="button" class="btn btn-dark btn-number-operator">8</button>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-grid">
                                    <button type="button" class="btn btn-dark btn-number-operator">9</button>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-grid">
                                    <button type="button" class="btn btn-dark btn-number-operator">/</button>
                                </div>
                            </div>
                        </div>

                        <div class="row gx-1 mb-1">
                            <div class="col">
                                <div class="d-grid">
                                    <button type="button" class="btn btn-dark btn-number-operator">4</button>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-grid">
                                    <button type="button" class="btn btn-dark btn-number-operator">5</button>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-grid">
                                    <button type="button" class="btn btn-dark btn-number-operator">6</button>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-grid">
                                    <button type="button" class="btn btn-dark btn-number-operator">*</button>
                                </div>
                            </div>
                        </div>

                        <div class="row gx-1 mb-1">
                            <div class="col">
                                <div class="d-grid">
                                    <button type="button" class="btn btn-dark btn-number-operator">1</button>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-grid">
                                    <button type="button" class="btn btn-dark btn-number-operator">2</button>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-grid">
                                    <button type="button" class="btn btn-dark btn-number-operator">3</button>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-grid">
                                    <button type="button" class="btn btn-dark btn-number-operator">-</button>
                                </div>
                            </div>
                        </div>

                        <div class="row gx-1 mb-1">
                            <div class="col-6">
                                <div class="d-grid">
                                    <button type="button" class="btn btn-dark btn-number-operator">0</button>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-grid">
                                    <button type="button" class="btn btn-dark btn-number-operator">,</button>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-grid">
                                    <button type="button" class="btn btn-dark btn-number-operator">+</button>
                                </div>
                            </div>
                        </div>

                        <div class="row gx-1 mb-1">
                            <div class="col">
                                <div class="d-grid">
                                    <button type="button" class="btn btn-dark btn-number-operator">(</button>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-grid">
                                    <button type="button" class="btn btn-dark btn-number-operator">)</button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-grid">
                                    <button type="button" class="btn btn-danger btn-calculate">=</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        $('.btn-number-operator').click(function(){
            $('#visor').val($('#visor').val() + $(this).html());
        });

        $('.btn-clear').click(function(){
            $('#visor').val('');
        });

        $('.btn-backspace').click(function(){
            $('#visor').val($('#visor').val().substr(0, $('#visor').val().length - 1));
        });

        $('.btn-calculate').click(function(){
            $('#formula').val($('#visor').val());
            $('#calcula').submit();
        });
    </script>
</body>
</html>