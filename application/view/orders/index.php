<div class="container">
    
        
        <h3>List of orders</h3>
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>Order Id</td>
                <td>Customer Name</td>
                <td>Time Ordered</td>
               
            </tr>
            </thead>
            <tbody>
            <?php foreach ($orders as $order) { ?>
                <tr>
                    <td><?php if (isset($order->order_id)) echo htmlspecialchars($order->order_id, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($order->customer_name)) echo htmlspecialchars($order->customer_name, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($order->time_ordered)) echo htmlspecialchars($order->time_ordered, ENT_QUOTES, 'UTF-8'); ?></td>
                   <td><a href="<?php echo URL . 'orderitems/index/' . htmlspecialchars($order->order_id, ENT_QUOTES, 'UTF-8'); ?>">see order</a></td>
                    
                </tr>
            <?php } ?>
            </tbody>
        </table>

</div>
