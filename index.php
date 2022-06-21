<?php
//conxexão
include_once 'php_action/db_connect.php';
//header
include_once 'includes/header.php';
//mensagem
include_once 'includes/mensagem.php';
?>

<ul class="collapsible">
    <li>
      <div class="collapsible-header"><i class="material-icons">account_circle</i>Clientes</div>
      <div class="collapsible-body"><span><a href = "clientes.php" class = "btn">Nossos clientes</a></span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">child_care</i>Vendedores</div>
      <div class="collapsible-body"><span><a href = "vendedores.php" class = "btn">Nossos vendedores</a></span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">add_shopping_cart</i>Produtos</div>
      <div class="collapsible-body"><span><a href = "produtos.php" class = "btn">Nossos produtos</a></span></div>
    </li>
  </ul>

<?php
include_once 'includes/footer.php';
?>