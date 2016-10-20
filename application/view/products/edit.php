<div class="container">
    
    <div>
        <h3>Edit a product</h3>
        <form action="<?php echo URL; ?>products/updateproduct" method="POST">
            <label>name</label>
            <input autofocus type="text" name="name" value="<?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>manufacturer</label>
            <input type="text" name="manufacturer" value="<?php echo htmlspecialchars($product->manufacturer, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>price</label>
            <input type="text" name="price" value="<?php echo htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8'); ?>" />
            <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product->id, ENT_QUOTES, 'UTF-8'); ?>" />
            <input type="submit" name="submit_update_product" value="Update" />
        </form>
    </div>
</div>

