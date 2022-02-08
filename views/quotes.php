<?php  if($_SESSION['cotizaciones'] == 1){ ?>
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
        <h4 class="mb-3 mb-md-0">Cotizaciones</h4>
    </div>
    <div class="d-flex align-items-center flex-wrap text-nowrap">
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-primary dropdown-toggle btn-icon-text mb-2 mb-md-0" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="btn-icon-prepend mr-2" data-feather="plus"></i> Crear
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="main?module=add-quote-charge"><i data-feather="chevron-right" class="icon-dd"></i> Cotización Cargo</a>
                <a class="dropdown-item" href="main?module=add-quote-baggage"><i data-feather="chevron-right" class="icon-dd"></i> Cotización Maleta</a>
            </div>
        </div>
    </div>
</div>
<!-- row -->

<div class="row">
    <div class="col-12 col-xl-12 grid-margin stretch-card">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="dataTableQuotes" class="table table-stripe table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Número</th>
                                <th>Proveedor</th>
                                <th>Producto</th>
                                <th>Precio Producto</th>
                                <th>Peso Producto</th>
                                <th>Imp. Aduanas</th>
                                <th>Precio Shop4us</th>
                                <th>Comision Compra</th>
                                <th>Total ($ )</th>
                                <th>Total (S/. )</th>
                                <th>Tipo de cambio</th>
                                <th>Tipo</th>
                                <th>Estado</th>
                                <th>created_at</th>
                                <th>updated_at</th>
                                <th width="10px">Acción</th>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- row -->


<!-- Modals -->

<div class="modal fade" id="modalViewDetails" tabindex="-1" role="dialog" aria-labelledby="modalEditPurchases"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detalle de venta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="viewDetail" class="modal-body">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalDeleteSales" tabindex="-1" role="dialog" aria-labelledby="modalDeleteSales"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form id="formDeleteSales">
                <div class="modal-body">
                    <input type="hidden" value="delete" name="option">
                    <input type="hidden" class="id" name="id">
                    <div class="d-flex justify-content-center align-items-center p-4">
                        <div class="mr-3">
                            <i class="fas fa-question-circle" style="color:#d03433; font-size:5em;"></i>
                        </div>
                        <div class="modal-icon">
                            <h4>Eliminar</h4>
                            <p>¿Estás seguro de querer borrar el registro?</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php }else{?>

<div class="d-flex justify-content-center align-items-center flex-wrap grid-margin p-5">
    <img src="assets/images/401.svg" width="100%" alt="security">
</div>


<?php } ?>
<!-- row -->