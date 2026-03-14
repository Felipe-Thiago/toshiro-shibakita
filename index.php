<html>

<head>
<title>Exemplo PHP</title>
</head>
<body>

<?php
ini_set("display_errors", 1);
header('Content-Type: text/html; charset=iso-8859-1');



echo 'Versao Atual do PHP: ' . phpversion() . '<br>';

$servername = "54.234.153.24";
$username = "root";
$password = "Senha123";
$database = "meubanco";

// Criar conexão


$link = new mysqli($servername, $username, $password, $database);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$valor_rand1 =  rand(1, 999);
$valor_rand2 = strtoupper(substr(bin2hex(random_bytes(4)), 1));
$cpf_rand = rand(11111111111, 99999999999);
$valorAleatorio = mt_rand(1 * 100, 1000 * 100) / 100;
$valorFormatado = number_format($valorAleatorio, 2, '.', '');
$opcoesPag = ['debito', 'credito', 'dinheiro', 'pix'];
$pag_rand = $opcoesPag[array_rand($opcoesPag)];
$host_name = gethostname();


$query = "INSERT INTO dados (CompraID, Nome_Cliente, CPF, Cidade, Valor, OpcaoPagamento, Host) VALUES ('$valor_rand1' , '$valor_rand2', '$cpf_rand', '$valor_rand2', '$valorFormatado', '$pag_rand', '$host_name')";


if ($link->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $link->error;
}

?>
</body>
</html>
