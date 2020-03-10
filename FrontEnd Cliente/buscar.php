<?php 
require_once "head.php";
require_once "body.php";
?>

<div class="input-group">
    <div class="input-group-prepend"><span class="input-group-text">Buscar</span></div><input class="form-control" type="text" name="buscar" id="buscar"/>
    <div class="input-group-append"><button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button></div>
</div>   
<hr/>
<div role="tablist" id="accordion-1">
    <div class="card">
        <div class="card-header" role="tab">
            <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="true" aria-controls="accordion-1 .item-1" href="#accordion-1 .item-1">Filtros</a></h5>
        </div>
        <div class="collapse show item-1" role="tabpanel" data-parent="#accordion-1">
            <div class="card-body">
                <label for="precio">Rango de precio:</label>
                <input type="range" id="precio" name="precio" class="form-control" value="" required="required">
                <hr/>
                <label for="estrellas">Estrellas:</label>
                <input type="range" id="estrellas" name="estrellas" class="form-control" value="" required="required">
                <hr/>
                <label for="estrellas">Horario:</label>
                <input type="time" />a.m. <input type="time" />p.m.
                <hr/>
                <label for="estrellas">Disponibilidad:</label>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck-1" />
                    <label class="form-check-label" for="formCheck-1">Abiertos ahora</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck-2" />
                    <label class="form-check-label" for="formCheck-2">Abiertos 24/7</label>
                </div>
                <hr/>
                <label for="estrellas">Tamaño:</label>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck-1" />
                    <label class="form-check-label" for="formCheck-1">Pequeño</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck-1" />
                    <label class="form-check-label" for="formCheck-1">Mediano</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck-1" />
                    <label class="form-check-label" for="formCheck-1">Grande</label>
                </div>
                <hr/>
                <label for="estrellas">Concepto:</label>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck-1" />
                    <label class="form-check-label" for="formCheck-1">Gourmet</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck-1" />
                    <label class="form-check-label" for="formCheck-1">De especialidad</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck-1" />
                    <label class="form-check-label" for="formCheck-1">Familiar</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck-1" />
                    <label class="form-check-label" for="formCheck-1">Buffet</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck-1" />
                    <label class="form-check-label" for="formCheck-1">Comida rápida</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck-1" />
                    <label class="form-check-label" for="formCheck-1">Temático</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck-1" />
                    <label class="form-check-label" for="formCheck-1">Para llevar</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck-1" />
                    <label class="form-check-label" for="formCheck-1">Bar</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck-1" />
                    <label class="form-check-label" for="formCheck-1">Cerveceria</label>
                </div>
                <hr/>
                <label for="estrellas">Servicios:</label>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck-1" />
                    <label class="form-check-label" for="formCheck-1">Valet Parking</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck-1" />
                    <label class="form-check-label" for="formCheck-1">Shows en vivo</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck-1" />
                    <label class="form-check-label" for="formCheck-1">Area de fumar</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck-1" />
                    <label class="form-check-label" for="formCheck-1">Drive Thru</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck-1" />
                    <label class="form-check-label" for="formCheck-1">Area para niños</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck-1" />
                    <label class="form-check-label" for="formCheck-1">Baños</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck-1" />
                    <label class="form-check-label" for="formCheck-1">Estacionamiento</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck-1" />
                    <label class="form-check-label" for="formCheck-1">Seguridad</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck-1" />
                    <label class="form-check-label" for="formCheck-1">Servicio a domicilio</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck-1" />
                    <label class="form-check-label" for="formCheck-1">Reservaciones</label>
                </div>
                <hr/>
                <label for="estrellas">Formas de pago:</label>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck-1" />
                    <label class="form-check-label" for="formCheck-1">Efectivo</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck-1" />
                    <label class="form-check-label" for="formCheck-1">Tarjeta de prepago</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck-1" />
                    <label class="form-check-label" for="formCheck-1">Monedero electronico</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck-1" />
                    <label class="form-check-label" for="formCheck-1">Visa</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck-1" />
                    <label class="form-check-label" for="formCheck-1">MasterCard</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck-1" />
                    <label class="form-check-label" for="formCheck-1">American Express</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck-1" />
                    <label class="form-check-label" for="formCheck-1">Discover Network</label>
                </div>
                <hr/>
                <label for="estrellas">Comida y/o bebidas:</label>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck-1" />
                    <label class="form-check-label" for="formCheck-1">Comida tipica o regional</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck-1" />
                    <label class="form-check-label" for="formCheck-1">Comida rapida</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck-1" />
                    <label class="form-check-label" for="formCheck-1">Cortes</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck-1" />
                    <label class="form-check-label" for="formCheck-1">Comida vegetariana</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck-1" />
                    <label class="form-check-label" for="formCheck-1">Postres</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck-1" />
                    <label class="form-check-label" for="formCheck-1">Alcohol</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck-1" />
                    <label class="form-check-label" for="formCheck-1">Desayunos</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header" role="tab">
            <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-2" href="#accordion-1 .item-2">Resultados</a></h5>
        </div>
        <div class="collapse item-2" role="tabpanel" data-parent="#accordion-1">
            <div id="datos">
            <div class="card-body">
                <div class="media"><img src="images/2079821.png" width="150" class="mr-3"/>
                    <div class="media-body">
                        <h5>Media Heading</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
                        <a href="#">Ver perfil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>                      

<?php
require_once "footer.php";
?>