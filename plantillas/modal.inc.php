
<!-- Modal Registro nuevo -->
<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Crear nuevo registro de Especie</h4>
            </div>
            
            <div class="modal-body" style="width: 100%">
                <!--***************************-->
                    <div class="row"> <!-- div da esquerda -->
                        <!-- Text input CNPJ e Razao Social-->
                        <div class=""> <!-- div da direita -->
                            <form id="contact" method="post" class="form" role="form">
                                <div class="row">
                                    <div class="col-xs-6 col-md-3 form-group">
                                        <input class="form-control" id="inputCNPJ" name="CNPJ" placeholder="CNPJ" type="text" required autofocus />
                                    </div>
                                    <div class="col-xs-4 col-md-9 form-group">
                                        <input class="form-control" id="inputrazaosocial" name="razaocosial" placeholder="Razão Social" type="text" />
                                    </div>
                                </div> <!-- fim row -->
                                <!-- Text input endereco-->
                                <div class="col-xs-4 col-md-12 form-group">
                                    <div class="controls">
                                        <input class="form-control" id="inputendereco" name="endereco" placeholder="Endereço"  type="text">
                                    </div>
                                </div><!--fim control-group-->
                                <br> <!--pulando uma linha -->
                                <!-- Text input cidade e estado-->
                                <div class="row">
                                    <div class="col-xs-6 col-md-9 form-group">
                                        <input class="form-control" id="inputcidade" name="cidade" placeholder="Cidade" type="text" />
                                    </div>
                                    <div class="col-xs-4 col-md-3">
                                        <select class="form-control" id="selectbasic" name="selectestado" >
                                            <option>Selecione</option>
                                            <option>AC</option>
                                            <option>AL</option>
                                            <option>AP</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-6 col-md-3 form-group">
                                        <input class="form-control" id="inputtelefone" name="telefone" placeholder="Telefone" type="text" />
                                    </div>
                                    <div class="col-xs-4 col-md-3 form-group">
                                        <input class="form-control" id="inputcontato" name="contato" placeholder="Contato" type="text" />
                                    </div>
                                    <div class="col-xs-4 col-md-6 form-group">
                                        <input class="form-control" id="inputemail" name="email" placeholder="E-mail" type="text" />
                                    </div>
                                </div><!--fim Text input cidade e estado-->
                                <div class="col-xs-4 col-md-12 form-group">
                                    <div class="controls">
                                        <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
                                    </div>
                                </div>
                                <br />

                                <div class="row">
                                    <div class="col-xs-12 col-md-12 form-group">
                                        <button class="btn btn-primary pull-right" type="submit">Salvar</button>
                                        <button class="btn btn-primary pull-right" type="submit">Limpar</button>
                                        <!--<button class="btn btn-primary pull-right" type="submit">Enviar</button>-->
                                    </div>
                                </div>
                            </form>
                        </div> <!-- fim div da direita -->
                    </div> <!-- fim div da esquerda -->
                <!--***************************-->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Actualizar registro -->
<div class="modal fade" id="modalActualizar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Actualizar registro</h4>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Ver registro completo -->
<div class="modal fade" id="modalVer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Datos completos del Registro</h4>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal editar Galeria -->
<div class="modal fade" id="modalFotos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Editar galería de registro</h4>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Registros favoritos -->
<div class="modal fade" id="modalFavoritos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Lista de Favoritos</h4>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Registros a Exportar -->
<div class="modal fade" id="modalExcel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Lista de registros a Exportar</h4>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Registros ocultos -->
<div class="modal fade" id="modalOcultos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Lista de registros Ocultos</h4>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>