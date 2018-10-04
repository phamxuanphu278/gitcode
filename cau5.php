<?php  
	require 'index.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>

	<br> <br>
	<form>
		<b> ID </b> <input type="txt" name="id" placeholder="Tìm kiếm ID">
		<input type="submit" name="submit" id="submit" value="Tìm kiếm">
	</form>
		<?php var_dump(empty($_GET['id'])) ;
		if (empty($_GET['id'])) echo "chưa nhập...";
		else {
			 $pet = $_GET['id'];
			 $temp = 0;
             $a = 0;
             for ($i=0; $i < 5; $i++){ 
                   if($users[$i]['id'] == $pet)
                   {
                        $temp++;
                        $a = $i;
                   }
             }
             if ($temp == 1)
             {
                echo "co ton tai user: "; 
                echo $users[$a]['name'];
                echo $users[$a]['email']['gmail'];
                echo $users[$a]['email']['yahoo'];
             }
             else
             {
                echo "Khong ton tai user co ID = ";
                echo $pet;
             }
		}
			
		
        ?>
</body>
</html>