<div class="container">
    
        
        <h3>List of products</h3>
        <table class="table table-striped table-hover table-condensed">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Manufacturer</th>
                <th>Price</th>
                <th>Delete</th>
                <th>Edit</th>
                <th>See Orders</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($products as $product) { ?>
                <tr>
                    <td><?php if (isset($product->id)) echo htmlspecialchars($product->id, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($product->name)) echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($product->manufacturer)) echo htmlspecialchars($product->manufacturer, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td>
                        <?php if (isset($product->price)) { ?>
                            <?php echo "$".htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8'); ?></a>
                        <?php } ?>
                    </td>
                    <td><a href="<?php echo URL . 'products/deleteproduct/' . htmlspecialchars($product->id, ENT_QUOTES, 'UTF-8'); ?>"> <span class="label label-danger">Delete</span></a></td>
                    <td><a href="<?php echo URL . 'products/editproduct/' . htmlspecialchars($product->id, ENT_QUOTES, 'UTF-8'); ?>"><span class="label label-primary">Edit</span></a></td>
                    <td><a href="<?php echo URL . 'orders/ordersbyproduct/' . htmlspecialchars($product->id, ENT_QUOTES, 'UTF-8'); ?>"><span class="label label-info">See Orders</span></a></td>

                </tr>
            <?php } ?>
            </tbody>
        </table>
    
        
        <h3>Add a product</h3>
        
        <form class="form-inline" action="<?php echo URL; ?>products/addproduct" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input class="form-control" type="text" name="name" value="" required />
            </div>


            <div class="form-group">
                <label for="manufacturer">Manufacturer:</label>
                <input class="form-control" type="text" name="manufacturer" value="" required />
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input class="form-control" type="text" name="price" value="" required />
            </div>

            <input class="btn btn-default" type="submit" name="submit_add_product" value="Submit" />
        </form>
   
</div>
