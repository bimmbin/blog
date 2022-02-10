<?php
require 'includes/db.inc.php';
require 'includes/functions.inc.php';
include 'dashHeader.php';


if (isset($_POST['edit'])) {

    $editId = $_POST['editId'];
    
    $articles = fetch('article', 'id', $editId);
    $subhead = fetch('subheadline', 'articleId', $editId);
    $below = fetch('productbelow', 'articleId', $editId);

    // print_r(array_filter($subhead));

    // print_r($below);
}

?>





<section class="blogSection">
        <div class="container">
            <form action="includes/edit.inc.php" method="post" enctype="multipart/form-data">

<!----------------- createBlog1 ------------->
                <div class="createBlog">
                    <h2 id="cret">Create Blog</h2>
                    <div class="rowBetween1">
                        <div class="columnBetween headline">
                            <p class="bolded">Headline</p>
                            <textarea name="headline" placeholder="Blog Title"><?php echo $articles['headline']; ?></textarea>
                        </div>
                        <div class="columnBetween cat">
                            <p>Category</p>
                            <select class="js-example-basic-single" name="category">
                                <option value="Gadgets">Gadgets</option>
                                <option value="Farming">Farming</option>
                            </select>
                        </div>
                        <div class="columnBetween fayl">
                            <p>Headline Image</p>
                            <input type="file" onchange="validateSizeHead(this)" accept=".png, .jpg, .jpeg" name="fileheadline">
                        </div>
                    </div>
                </div>



<!-----------------  createBlog2 ------------->
                <div class="createBlog2">
                    <div class="columnBetween">
                        <p>Explanation</p>
                        <textarea name="firstp" placeholder="Explain Blog"><?php echo $articles['firstp']; ?></textarea>
                    </div>
                    <div class="columnBetween">
                        <p>Direct Answer</p>
                        <textarea name="directanswer" placeholder="Bolded Text"><?php echo $articles['directanswer']; ?></textarea>
                    </div>
                </div>

<!----------------- SubHeadline ------------->
            <?php for ($i=1; $i <= 8; $i++) { ?> 
                <div class="subhead head<?php echo $i;?>">
                    <div class="columnBetween titlePa">
                        <p class="bolded">Subheadline<?php echo $i;?></p>
                        <textarea name="headline<?php echo $i;?>" placeholder="Subheadline Title"><?php if(!empty($subhead['headline'.$i])) { echo $subhead['headline'.$i]; }?></textarea>
                    </div>
                    <div class="columnBetween titlePa">
                        <p>Subheadline Paragraph</p>
                        <textarea name="pheadline<?php echo $i;?>" placeholder="Subheadline Explanation"><?php if(!empty($subhead['headline'.$i])) { echo $subhead['pheadline'.$i]; }?></textarea>
                    </div>
                    <h3>Optional</h3>
                    <div class="rowBetween sub">
                        <div class="columnBetween">
                            <p>Product Name</p>
                            <textarea name="productsubname<?php echo $i;?>" placeholder="Product Name"><?php if(!empty($subhead['headline'.$i])) { echo $subhead['productsubname'.$i]; }?></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Url</p>
                            <textarea name="productsuburl<?php echo $i;?>" placeholder="Product Url"><?php if(!empty($subhead['headline'.$i])) { echo $subhead['productsuburl'.$i]; }?></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Image</p>
                            <input type="file" onchange="validateSize(this)" accept=".png, .jpg, .jpeg" name="filesubproduct<?php echo $i;?>">
                        </div>
                    </div>
                    <div class="rowBetween notBetween">
                        <p>Add more Subheadline</p>
                        <img src="img/rec.png" alt="" class="subplus<?php echo $i;?>">
                    </div>
                </div>
            <?php } ?>
<!----------------- s ------------->
             

<!----------------- ProductsBelow ------------->




<div class="productsBelow below1">
                    <h3>Products Below</h3>
                    <?php for ($i=1; $i <= 4; $i++) { ?> 
                        <div class="rowBetween">
                            <div class="columnBetween">
                                <p>Product Name</p>
                                <textarea name="productname<?php echo $i;?>" placeholder="Product Name"><?php if(!empty($below['productname'.$i])) { echo $below['productname'.$i]; }?></textarea>
                            </div>
                            <div class="columnBetween">
                                <p>Product Url</p>
                                <textarea name="producturl<?php echo $i;?>" placeholder="Product Url"><?php if(!empty($below['producturl'.$i])) { echo $below['producturl'.$i]; }?></textarea>
                            </div>
                            <div class="columnBetween">
                                <p>Product Image</p>
                                <input type="file" onchange="validateSize(this)" accept=".png, .jpg, .jpeg" name="imgproduct<?php echo $i;?>">
                            </div>
                        </div>
                    <?php } ?>
                    <div class="rowBetween notBetween">
                        <p>Add more Products</p>
                        <img src="img/rec.png" alt="" id="belowPlus">
                    </div>
                </div>

                <div class="productsBelow below2 non">
                    <h3>Products Below2</h3>
                    <?php for ($i=5; $i <= 8; $i++) { ?> 
                        <div class="rowBetween">
                            <div class="columnBetween">
                                <p>Product Name</p>
                                <textarea name="productname<?php echo $i;?>" placeholder="Product Name"><?php if(!empty($below['productname'.$i])) { echo $below['productname'.$i]; }?></textarea>
                            </div>
                            <div class="columnBetween">
                                <p>Product Url</p>
                                <textarea name="producturl<?php echo $i;?>" placeholder="Product Url"><?php if(!empty($below['producturl'.$i])) { echo $below['producturl'.$i]; }?></textarea>
                            </div>
                            <div class="columnBetween">
                                <p>Product Image</p>
                                <input type="file" onchange="validateSize(this)" accept=".png, .jpg, .jpeg" name="imgproduct<?php echo $i;?>">
                            </div>
                        </div>
                    <?php } ?>
                </div>



                <div class="submitBtn">
                    <input type="submit" name="update" value="Update Blogpost">
                    <input type="hidden" name="updateId" value="<?php echo $editId; ?>">
                </div>




            </form>
        </div>
    </section>



















<?php

include 'dashFooter.php';

?>
