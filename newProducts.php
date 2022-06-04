<div id="right_column" class="left-pro column clearfix">
    <section class="block blockcms column_box">
                                <span class="left_title"><em>New Products</em><span></span><i
                                        class="column_icon_toggle icon-plus-sign"></i></span>
        <div class="block_content toggle_content">
            <ul class="list clearfix">
                <?php
                $newProductsQuery = "SELECT * FROM sub_products WHERE product_status = '2'";
                $newProducts = mysqli_query($db, $newProductsQuery);
                if ($newProducts) {
                    foreach ($newProducts as $newProductsRow) {
                        ?>
                        <li class="clearfix">
                            <div class="box clearfix">
                                <div class="image pro_image">
                                    <a href="#"></a>
                                    <img id="product_detail_img"
                                         alt="<?php echo $newProductsRow['title'] ?>"
                                         src="<?php echo $image_link.$newProductsRow['thumbnail'] ?>"/>
                                    <em class="icon"><i></i></em>
                                </div>
                                <div class="main">
                                    <a href="#"
                                       class="title"><?php echo $newProductsRow['title'] ?></a>
                                    <a rel="nofollow" href="#" class="page_more">view more</a>
                                </div>
                            </div>
                        </li>
                    <?php }
                } ?>
            </ul>
        </div>
    </section>
</div>