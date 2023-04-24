<?php
include '../includes/header.php'
?>
<h2>Lista top </h2>
<p>veja bem a listinha:</p>

<?php
//http://localhost/curso/php/atividades/atividadefuncao.php
$conjuntos = array(
  array("café", "leite", "nescau"),
  array("pão", "queijo", "presunto"),
  array("arroz", "feijão", "macarrão"),
  array("muceca", "carambola", "ovo")
);

$quantos = count($conjuntos);
$repet = 0;
echo "<div class='accordion' id='accordionExample'>";
do {
  echo "
        <div class='accordion-item'>
          <h2 class='accordion-header' id='heading{$repet}' >
            <button class='accordion-button' type='button' data-bs-toggle='collapse' data-bs-target='#collapse{$repet}' aria-expanded='true' aria-controls='collapse{$repet}'>
              Lista #{$repet}
            </button>
          </h2>
          <div id='collapse{$repet}' class='accordion-collapse collapse show' aria-labelledby='heading{$repet}' data-bs-parent='#accordionExample' >
            <div class='accordion-body'>   
                <li>Lista 1 {$repet}
                    <ul>
                        <li>{$conjuntos[$repet][0]}</li>
                        <li>{$conjuntos[$repet][1]}</li>
                        <li>{$conjuntos[$repet][2]}</li>
                    </ul>
                </li> 
            </div>
          </div>
        </div>   
    ";
  $repet++;
} while ($repet < $quantos);

echo "</div>";

?>
<?php
include '../includes/footer.php'


/*
echo "<pre>";
var_dump($vetor);
echo "</pre>";
echo 'O email da usuária é: ' . $vetor['Ciara Marks']['email'];


foreach ($vetor as $key => $value) {
                        if ($key == 0) {
                            echo "<try>";
                            foreach ($vetor[$key] as $cedula) {
                                echo "<th>" . $cedula . "</th>";
                            };
                            echo "<th>";
                        } else {
                            echo "<th>";
                            foreach ($vetor[$key] as $cedula) {
                                echo "<td>" . $cedula . "</td>";
                            };
                            echo "</tr>";
                        }
                    }
*/
?>