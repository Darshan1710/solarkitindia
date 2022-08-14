<div id="right_column" class="left-cat column clearfix">
    <section class="block blockcms column_box">
                                <span class="left_title"><em>Categories</em><span></span><i
                                            class="column_icon_toggle icon-plus-sign"></i></span>
        <div class="block_content toggle_content">
            <ul class="mtree">
                <?php
                $categories_query = "SELECT * FROM category";
                $categories = mysqli_query($db, $categories_query);
                foreach ($categories as $cat) {
                    ?>
                    <li><b></b><a
                                href="<?= $link;?>products/?category_id=<?php echo $cat['id']; ?>"><?php echo $cat['category'] ?></a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </section>
</div>