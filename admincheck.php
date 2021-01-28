<?php
$conn = mysqli_connect('std-mysql', 'std_943_21', 'MR20022001','std_943_21');
// $mysql = new mysqli('std-mysql', 'std_943_21', 'MR20022001','std_943_21');
$sql = "SELECT * FROM `test`";

echo('<table class="table">
<thead>
  <tr>
    <th>id</th>
    <th>Вариант</th>
    <th>Фрукт</th>
    <th>Овощь</th>
    <th>Номер</th>
    <th>Удалить</th>
  </tr>
</thead>
<tbody>');

$get_data = mysqli_query($conn,$sql); 
        if (mysqli_num_rows($get_data) > 0) {
            while ($line = mysqli_fetch_assoc($get_data)) {

                echo '

    <tr>
      <th scope="row">'.$line['id'].'</th>
      <td>'.$line['variant'].'</td>
      <td>'.$line['fryct'].'</td>
      <td>'.$line['ovosh'].'</td>
      <td>'.$line['contact'].'</td>
      <td><a href="delete.php?line_id=' . $line['id'] . '" type="button" class="btn btn-danger">Delete</a></td>
    </tr>


                ';
            }
        } else {
            echo "<h3>No records found. Please insert some records</h3>";
        }
        echo('  </tbody>
        </table>');
        ?>