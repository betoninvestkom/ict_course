<?php
	echo '<table border="1" cellspacing="1" cellpadding="1">
	<caption>Таблица "users"</caption> 
      <tr> 
          <th>id</th> 
          <th>username</th> 
          <th>email</th> 
          <th>gender</th> 
          <th>password</th> 
      </tr>';
	$query_select = "SELECT * FROM users";
	$result1 = mysqli_query($connection, $query_select);;

	

	if ($result1->num_rows > 0) {
    
    while($row = $result1->fetch_assoc()) {
		$field1 = $row["id"];
		$field2 = $row["username"];
		$field3 = $row["email"];
		$field4 = $row["gender"];
		$field5 = $row["password"];

		echo '<tr> 
                  <td>'.$field1.'</td> 
                  <td>'.$field2.'</td> 
                  <td>'.$field3.'</td> 
                  <td>'.$field4.'</td> 
                  <td>'.$field5.'</td> 
              </tr>';

	}
} else {
    echo "0 results";
}
	?>