
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
?>
<table>
    <tr>
        <td>
            <?php
                foreach($products as $key=>$value){
                    echo("<br>" .$key);
                }
        ?>
        </td> 
        <td>
            <?php
                foreach($products['iphone 11'] as $key=>$value){
                    echo("<br>" .$value);
                }
            ?>
        
        </td>
        <td>
            <?php
                foreach($products['iphone 11']['made'] as $key=>$value){
                    echo("<br>" .$value);
                }
            ?>
        </td>
       
    </tr>
</table>