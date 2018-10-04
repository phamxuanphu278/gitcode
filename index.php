<?php

$users = array(
        0 => array(
                'id' => 10, 
                'name' => 'Messi',
                'email' => array(
                        'gmail' => '10@gmail.com',
                        'yahoo' => '10@yahoo.com',
                ),
        ),                
        1=> array(
                'id' => 7,
                'name' => 'Ronaldo',
                'email' => array(
                        'gmail' => '7@gmail.com',
                        'yahoo' => '7@yahoo.com',
                ),
        ),
        2=> array(
                'id' => 4, 
                'name' => 'Ramos',
                'email' => array(
                        'gmail' => '4@gmail.com',
                        'yahoo' => '4@yahoo.com',
                ),
        ),
        3=> array(
                'id' => 13, 
                'name' => 'Muller',
                'email' => array(
                        'gmail' => '13@gmail.com',
                        'yahoo' => '13@yahoo.com',
                ),
        ),
        4=> array(
                'id' => 11, 
                'name' => 'Neymar',
                'email' => array(
                        'gmail' => '11@gmail.com',
                        'yahoo' => '11@yahoo.com',
                ),
        ),

);
$j = 1;
$u =1;
?>
<!DOCTYPE html>
<html>
<head>
        <title> BT 
        </title>
</head>
<body>
        <table border>
                <tr>
                      <th>STT</th> 
                      <th>ID</th> 
                      <th>Name</th>
                      <th>Gmail</th>
                      <th>Yahoo</th>
                </tr>
                <?php
                for ($i=0; $i < 5; $i++) { 
                ?>
                <tr>
                        <td><?php
                        echo $j++;
                        ?>
                                
                        </td>
                        <td><?php 
                        echo $users[$i]['id'];
                        ?>
                                
                        </td>
                        <td>
                                <?php
                                echo $users[$i]['name'];
                                ?>
                        </td>
                        <td>
                                <?php
                                echo $users[$i]['email']['gmail'];
                                ?>
                        </td>
                        <td>
                                <?php
                                echo $users[$i]['email']['yahoo'];
                                ?>
                        </td>
                </tr>
        <?php
        }
        ?>
        </table>
        <br>
        <br>

        <?php
             $temp = 0;
             $a = 0;
             for ($i=0; $i < 5; $i++) { 
                   if($users[$i]['id'] == 15)
                   {
                        $temp++;
                        $a = $i;
                   }
             }
             if ($temp == 1)
             {
                echo "co ton tai user co ID la: "; 
                echo $users[$a]['name'];
                echo $users[$a]['email']['gmail'];
             }
             else
             {
                echo "Khong ton tai user co ID la 15!!!";
             }
        ?>
        <br> <br>
        <?php
                $nas = 0;
                for ($i=0; $i < 5; $i++) { 
                       for ($k= $i+1; $k < 5 ; $k++) { 
                             if($users[$i]['id'] > $users[$k]['id'])
                              {
                                $nas = $users[$i];
                                $users[$i] = $users[$k];
                                $users[$k] = $nas;
                              }  
                       }
                }
               ?>
                <table border>
                <tr>
                      <th>STT</th> 
                      <th>ID</th> 
                      <th>Name</th>
                      <th>Gmail</th>
                      <th>Yahoo</th>
                </tr>
                <?php
                for ($i=0; $i < 5; $i++) { 
                ?>
                <tr>
                        <td><?php
                        echo $u++;
                        ?>
                                
                        </td>
                        <td><?php 
                        echo $users[$i]['id'];
                        ?>
                                
                        </td>
                        <td>
                                <?php
                                echo $users[$i]['name'];
                                ?>
                        </td>
                        <td>
                                <?php
                                echo $users[$i]['email']['gmail'];
                                ?>
                        </td>
                        <td>
                                <?php
                                echo $users[$i]['email']['yahoo'];
                                ?>
                        </td>
                </tr>
        <?php
        }
        ?>
        </table>

</body>
</html>

