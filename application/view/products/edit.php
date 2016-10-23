<div class="container">
    
    <div>
        <h3>Edit a product</h3>

        <form class="form-inline" action="<?php echo URL; ?>products/updateproduct" method="POST">
           
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" autofocus type="text" name="name" value="<?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>" required />
             </div>   

            <div class="form-group">
                <label for="manufacturer">Manufacturer</label>
                <input class="form-control" type="text" name="manufacturer" value="<?php echo htmlspecialchars($product->manufacturer, ENT_QUOTES, 'UTF-8'); ?>" required />
            </div>  

            <div class="form-group">
                <label for="price">Price</label>
                <input class="form-control" type="text" name="price" value="<?php echo htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8'); ?>" />
            </div>

                <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product->id, ENT_QUOTES, 'UTF-8'); ?>" />
                

                <input class="btn btn-default" type="submit" name="submit_update_product" value="Update" />
        </form>
   




    </div>
</div>

