<?php
$this->setLayout('layout');
?>

<?php
$this->startSection('contenido');
?>

<div class="col-6">
    <h4>LISTADO DE PEDIDOS</h4>
    <ul>
        <li>Pedido 1</li>
        <li>Pedido 2</li>
        <li>Pedido 3</li>
    </ul>
</div>

<?php
$this->endSection('contenido');
?>

<?php 
$this->startSection('titulo');
?>
Listado de pedidos
<?php 
$this->endSection('titulo');
?>