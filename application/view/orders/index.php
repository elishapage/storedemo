<div class="container">
    
        
        <h3>List of orders 
        <?php if (isset($product_id)) 
                echo(" including: " . $productname[0]->manufacturer ." ". $productname[0]->name) ?>
                    
        </h3>



        <table class="table table-striped table-hover table-condensed">
            <thead>
            <tr>
                <th>Order Id</th>
                <th>Customer Name</th>
                <th>Time Ordered</th>
                <th>Order Details</th>

               
            </tr>
            </thead>
            <tbody>
            <?php foreach ($orders as $order) { ?>
                <tr>
                    <td><?php if (isset($order->order_id)) echo htmlspecialchars($order->order_id, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($order->customer_name)) echo htmlspecialchars($order->customer_name, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($order->time_ordered)) echo htmlspecialchars($order->time_ordered, ENT_QUOTES, 'UTF-8'); ?></td>
                   <td><a href="<?php echo URL . 'orderitems/index/' . htmlspecialchars($order->order_id, ENT_QUOTES, 'UTF-8'); ?>"><span class="label label-info">See Order</span></a></td>
                    
                </tr>
            <?php } ?>

                        </tbody>
        </table>

</div>
