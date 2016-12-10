<?php 
							require_once 'connect.php';
							$sql="SELECT * FROM userclothes u INNER JOIN user us on us.id=u.userid";
							$query = mysqli_query($conn,$sql);
					