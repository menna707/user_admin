<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
</head>



<body>

<h2>search in file</h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<table id="myTable">
  <tr class="header">
   
    <th style="width:20%;">type</th>
    <th style="width:20%;">title</th>
    <th style="width:40%;">subject</th>
     <th style="width:20%;">edit</th>
      <th style="width:20%;">delete</th>
  </tr>
  <?php
include ('../../connect.php');
$query = "SELECT * FROM addfile  ";
$result = $conn->query($query);
while ($row = $result->fetch_assoc())
{  

  ?>
  <tr>
    <td style="display: none;"><?php echo $row['type'].$row['address'].$row['address'].$row['subject'];?></td>
    <td><?php echo $row['type'];?></td>
    <td><?php echo $row['address'];?></td>
    <td><?php echo $row['subject'];?></td>
    <td><a href="updatefile.php?id=<?php echo $row['fid'];?> ]"><button>Edit</button></a></td>
    <td><a href="deletefile.php?id=<?php echo $row['fid'] ?> & nameoffile=<?php echo $row['attachment'];?>"><button>delete</button></a></td>
  
</tr>

  <?php
}
?>
</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>
</html>
