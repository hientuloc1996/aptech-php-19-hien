<!DOCTYPE html>
<html>
<body>
    
<h1>has</h1>
<?php
$products = [
    'iphone 11' => [
        'price' => 1099,
        'made' => [
            'in' => 'China',
            'by' => 'California'
        ]
        ],
    'note 9' => [
        'price' => 1099,
        'made' => [
            'in' => 'Viet Nam',
            'by' => 'Korean'
        ]
        ],
    'mua tai' => 'namcoi.com'
    ];
$tenCuaSanPham = array_keys($products);
?>
 <h1> mua tai wepsite <?php echo $products['mua tai'];?></h1>
<table>
     <tr>
         <td>Ten</td>
         <td>Price</td>
         <td>Made in</td>
         <td>Made by</td>
     </tr>
 
<?php $tong =0;
    for ($i = 0; $i < count($products) -1; $i++) { $tong = $tong + $products[$tenCuaSanPham[$i]]['price'];
        ?>
    <tr>
        <td><?php echo $tenCuaSanPham[$i]; ?></td>
        <td><?php echo $products[$tenCuaSanPham[$i]]['price']; ?></td>
        <td><?php echo $products[$tenCuaSanPham[$i]]['made']['in']; ?></td>
        <td><?php echo $products[$tenCuaSanPham[$i]]['made']['by']; ?></td>
    </tr>
    <?php  } ?>
    }
    <tr>
        <td>
        <?php echo ($tong);?>
        </td>
    </tr>
        
</table>
</body>
</html>