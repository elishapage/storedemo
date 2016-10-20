<div class="container">
    
        
        <h3>List of products</h3>
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Manufacturer</td>
                <td>Price</td>
                <td>DELETE</td>
                <td>EDIT</td>
                <td>See Orders</td>
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
                    <td><a href="<?php echo URL . 'products/deleteproduct/' . htmlspecialchars($product->id, ENT_QUOTES, 'UTF-8'); ?>">delete</a></td>
                    <td><a href="<?php echo URL . 'products/editproduct/' . htmlspecialchars($product->id, ENT_QUOTES, 'UTF-8'); ?>">edit</a></td>
                    <td><a href="<?php echo URL . 'products/seeorders/' . htmlspecialchars($product->id, ENT_QUOTES, 'UTF-8'); ?>">see orders</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>

         <div class="box">
        <h3>Add a product</h3>
        <form action="<?php echo URL; ?>products/addproduct" method="POST">
            <label>Name</label>
            <input type="text" name="name" value="" required />
            <label>Manufacturer</label>
            <input type="text" name="manufacturer" value="" required />
            <label>Price</label>
            <input type="text" name="price" value="" />
            <input type="submit" name="submit_add_product" value="Submit" />
        </form>
    </div>
</div>
