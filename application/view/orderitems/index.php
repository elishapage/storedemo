<div class="container">
    
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>Order ID</td>
                <td>Customer Name</td>
                <td>Date Ordered</td>
                
               
            </tr>
            </thead>
            <tbody>

                <tr>
                    <td><?php if (isset($orderinfo[0]->order_id)) echo htmlspecialchars($orderinfo[0]->order_id, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($orderinfo[0]->customer_name)) echo htmlspecialchars($orderinfo[0]->customer_name, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($orderinfo[0]->time_ordered)) echo htmlspecialchars($orderinfo[0]->time_ordered, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
           </tbody>
        </table>    
        
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>Product</td>
                <td>Manufacturer</td>
                <td>Quantity</td>
                
               
            </tr>
            </thead>
            <tbody>
            <?php foreach ($orderitems as $orderitem) { ?>
                <tr>
                    <td><?php if (isset($orderitem->name)) echo htmlspecialchars($orderitem->name, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($orderitem->manufacturer)) echo htmlspecialchars($orderitem->manufacturer, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($orderitem->quantity)) echo htmlspecialchars($orderitem->quantity, ENT_QUOTES, 'UTF-8'); ?></td>
                    
                   
                    
                </tr>
            <?php } ?>

            <!-- <?php print_r($orderinfo) ?> -->
           
                

            


            
            


        </table>

</div>
