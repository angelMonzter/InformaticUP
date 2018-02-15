<?php
	require_once('../app/lib/pdf/mpdf.php');

	$con = new mysqli('localhost','root', 'root', 'floreriav4');
	$query="SELECT * from pedido where id_pedido = (SELECT MAX(id_pedido) FROM pedido)";
  //$query="SELECT * FROM pedido"; 
  //$query = "SELECT MAX(id_pedido) FROM pedido";

	$prepare = $con->prepare($query);
	$prepare->execute();
	$resultSet = $prepare->get_result();
	while($productos[] = $resultSet->fetch_array());
	$resultSet->close();
	$prepare->close();
	$con->close();


	$html = ' <!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Recibo</title>
    <link rel="stylesheet" href="../app/reportes/style.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div align="center" id="logo">
        <img src="../img/logo.jpg">
      </div>
      <h2>Recibo</h2>
      <div id="company" class="clearfix">
        <div>Floreria Antohan</div>
        <div>José Vicente Villada 411, Francisco Murguía,<br />50130 Toluca de Lerdo, Méx.</div>
        <div>01 722 215 4355</div>
        <div>floreria-antohan@flanha.xyz</div>
      </div>
    
      <div id="project">
      ';
          foreach ($productos as $pedido) {
            $html .='<tr>
        <div><span>CLIENTE </span> '.$pedido['nombre'].'</div>
        <div><span>DIRECCION</span> '.$pedido['direccion'].'</div>
        <div><span>EMAIL</span> <a href="'.$pedido['correo'].'">'.$pedido['correo'].'</a></div>
        <div><span>FECHA HOY</span> 2017/12/1</div>
        <div><span>FEHCHA ENTREGA</span> '.$pedido['fecha'].'</div>
        ';
          }
          $html .='</tr>
      </div>
      
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">PRODUCTO</th>
            <th class="desc">DESCRIPCION</th>
            <th>PRECIO</th>
            <th>CANTIDAD</th>
            <th>TOTAL</th>
          </tr>
        </thead>
        <tbody>';
          foreach ($productos as $pedido) {
            $html .='<tr>
          <td class="service">'.$pedido['detallesp'].'</td>
            <td class="desc">'.$pedido['detallesp'].'</td>
            <td class="unit">'.$pedido['costo'].'</td>
            <td class="qty">'.$pedido['unidades'].'</td>
            <td class="total">'.$pedido['total'].'</td>
          </tr>';
          }
          $html .='<tr>
            
          </tr>
          <tr>

          <td colspan="6" class="grand total">TOTAL NETO</td>
            ';
          foreach ($productos as $pedido) {
            $html .='<tr>
            <td colspan="6" class="total">'.$pedido['total'].'</td>
          </tr>';
          }
          $html .='

          </tr>
        </tbody>
      </table>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">Cualquier aclaracion sera solucionada solo en tienda.</div>
        <br>
        <div>¡¡GRACIAS POR SU COMPRA!!</div>
      </div>
    </main>
    <footer>
      Si su producto(s) sera entregado en determinado tiempo es necesario concervar este recibo.
    </footer>
  </body>
</html>';

	$mpdf = new mPDF('c', 'A4');
	$css = file_get_contents('style.css');
	$mpdf->writeHTML($css, 1);
	$mpdf->writeHTML($html);
	$mpdf->Output('reporte.pdf', 'I');
?>