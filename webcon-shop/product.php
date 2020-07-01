<?php include "partials/header.php"; ?>

<!--- headers   -->
    <section class="headers">
        <h2>Product</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, autem.</p>
    </secton>

<!--- product   -->
<section class="product container">
    <article>
        <img src="img/products1.jpg" alt="">
    </article>
    <aside>
        <h3>Nike</h3>
        <h4>139$</h4>
        <p>Category: <span>Shoes</span></p>
        <p>Availibility: <span>In stock</span></p>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores vitae ut perferendis obcaecati numquam quos ipsa asperiores fugiat fugit provident, iure cum doloremque magni animi consequatur deleniti deserunt dolorum! Eum autem excepturi illum sed necessitatibus dolor, a beatae vitae eius.</p>
        <form>
            <label>Quantity</label>
            <select>
                <option value="quantity">1</option>
                <option value="quantity">2</option>
                <option value="quantity">3</option>
            </select>
            <br>
            <button type="button">Add to cart</button>
            <span><i class="far fa-gem"></i></span>
            <span><i class="far fa-heart"></i></span>
        </form>
    </aside>
    
</section>

<?php include "partials/footer.php"; ?>