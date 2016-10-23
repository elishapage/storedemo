<div class="container">
    
        <table class="table table-striped table-hover table-condensed">
            <thead>
            <tr>
                <th>Order ID</th>
                <th>Customer Name</th>
                <th>Date Ordered</th>
                
               
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
        
        <table class="table table-striped table-hover table-condensed">
            <thead>
            <tr>
                <th>Product</th>
                <th>Manufacturer</th>
                <th>Quantity</th>
                
               
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

                

            


            
            


        </table>

</div>
