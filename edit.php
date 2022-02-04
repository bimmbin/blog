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
                <div class="subhead head1">
                    <div class="columnBetween titlePa">
                        <p class="bolded">Subheadline1</p>
                        <textarea name="headline1" placeholder="Subheadline Title"><?php if(!empty($subhead['headline1'])) { echo $subhead['headline1']; } ?></textarea>
                    </div>
                    <div class="columnBetween titlePa">
                        <p>Subheadline Paragraph</p>
                        <textarea name="pheadline1" placeholder="Subheadline Explanation"><?php if(!empty($subhead['pheadline1'])) { echo $subhead['pheadline1']; }?></textarea>
                    </div>
                    <h3>Optional</h3>
                    <div class="rowBetween sub">
                        <div class="columnBetween">
                            <p>Product Name</p>
                            <textarea name="productsubname1" placeholder="Product Name"><?php if(!empty($subhead['productsubname1'])) { echo $subhead['productsubname1']; }?></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Url</p>
                            <textarea name="productsuburl1" placeholder="Product Url"><?php if(!empty($subhead['productsuburl1'])) { echo $subhead['productsuburl1']; }?></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Image</p>
                            <input type="file" onchange="validateSize(this)" accept=".png, .jpg, .jpeg" name="filesubproduct1">
                        </div>
                    </div>
                    <div class="rowBetween notBetween">
                        <p>Add more Subheadline</p>
                        <img src="img/rec.png" alt="" id="subplus1">
                    </div>
                </div>
<!----------------- s ------------->
                <div class="subhead head2 non">
                    <div class="columnBetween titlePa">
                        <p class="bolded">Subheadline2</p>
                        <textarea name="headline2" placeholder="Subheadline Title"><?php if(!empty($subhead['headline2'])) { echo $subhead['headline2']; }?></textarea>
                    </div>
                    <div class="columnBetween titlePa">
                        <p>Subheadline Paragraph</p>
                        <textarea name="pheadline2" placeholder="Subheadline Explanation"><?php if(!empty($subhead['pheadline2'])) { echo $subhead['pheadline2']; }?></textarea>
                    </div>
                    <h3>Optional</h3>
                    <div class="rowBetween sub">
                        <div class="columnBetween">
                            <p>Product Name</p>
                            <textarea name="productsubname2" placeholder="Product Name"><?php if(!empty($subhead['productsubname2'])) { echo $subhead['productsubname2']; }?></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Url</p>
                            <textarea name="productsuburl2" placeholder="Product Url"><?php if(!empty($subhead['productsuburl2'])) { echo $subhead['productsuburl2']; }?></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Image</p>
                            <input type="file" onchange="validateSize(this)" accept=".png, .jpg, .jpeg" name="filesubproduct2">
                        </div>
                    </div>
                    <div class="rowBetween notBetween">
                        <p>Add more Subheadline</p>
                        <img src="img/rec.png" alt="" id="subplus2">
                    </div>
                </div>
<!----------------- s ------------->
                <div class="subhead head3 non">
                    <div class="columnBetween titlePa">
                        <p class="bolded">Subheadline3</p>
                        <textarea name="headline3" placeholder="Subheadline Title"><?php if(!empty($subhead['headline3'])) {  echo $subhead['headline3']; }?></textarea>
                    </div>
                    <div class="columnBetween titlePa">
                        <p>Subheadline Paragraph</p>
                        <textarea name="pheadline3" placeholder="Subheadline Explanation"><?php if(!empty($subhead['pheadline3'])) {  echo $subhead['pheadline3']; }?></textarea>
                    </div>
                    <h3>Optional</h3>
                    <div class="rowBetween sub">
                        <div class="columnBetween">
                            <p>Product Name</p>
                            <textarea name="productsubname3" placeholder="Product Name"><?php if(!empty($subhead['productsubname3'])) {  echo $subhead['productsubname3']; }?></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Url</p>
                            <textarea name="productsuburl3" placeholder="Product Url"><?php if(!empty($subhead['productsuburl3'])) {  echo $subhead['productsuburl3']; }?></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Image</p>
                            <input type="file" onchange="validateSize(this)" accept=".png, .jpg, .jpeg" name="filesubproduct3">
                        </div>
                    </div>
                    <div class="rowBetween notBetween">
                        <p>Add more Subheadline</p>
                        <img src="img/rec.png" alt="" id="subplus3">
                    </div>
                </div>
<!----------------- s ------------->
                <div class="subhead head4 non">
                    <div class="columnBetween titlePa">
                        <p class="bolded">Subheadline4</p>
                        <textarea name="headline4" placeholder="Subheadline Title"><?php if(!empty($subhead['headline4'])) {  echo $subhead['headline4']; }?></textarea>
                    </div>
                    <div class="columnBetween titlePa">
                        <p>Subheadline Paragraph</p>
                        <textarea name="pheadline4" placeholder="Subheadline Explanation"><?php if(!empty($subhead['pheadline4'])) {  echo $subhead['pheadline4']; }?></textarea>
                    </div>
                    <h3>Optional</h3>
                    <div class="rowBetween sub">
                        <div class="columnBetween">
                            <p>Product Name</p>
                            <textarea name="productsubname4" placeholder="Product Name"><?php if(!empty($subhead['productsubname4'])) {  echo $subhead['productsubname4']; }?></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Url</p>
                            <textarea name="productsuburl4" placeholder="Product Url"><?php if(!empty($subhead['productsuburl4'])) {  echo $subhead['productsuburl4']; }?></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Image</p>
                            <input type="file" onchange="validateSize(this)" accept=".png, .jpg, .jpeg" name="filesubproduct4">
                        </div>
                    </div>
                    <div class="rowBetween notBetween">
                        <p>Add more Subheadline</p>
                        <img src="img/rec.png" alt="" id="subplus4">
                    </div>
                </div>
<!----------------- s ------------->
                <div class="subhead head5 non">
                    <div class="columnBetween titlePa">
                        <p class="bolded">Subheadline5</p>
                        <textarea name="headline5" placeholder="Subheadline Title"><?php if(!empty($subhead['headline5'])) { echo $subhead['headline5']; }?></textarea>
                    </div>
                    <div class="columnBetween titlePa">
                        <p>Subheadline Paragraph</p>
                        <textarea name="pheadline5" placeholder="Subheadline Explanation"><?php if(!empty($subhead['pheadline5'])) { echo $subhead['pheadline5']; }?></textarea>
                    </div>
                    <h3>Optional</h3>
                    <div class="rowBetween sub">
                        <div class="columnBetween">
                            <p>Product Name</p>
                            <textarea name="productsubname5" placeholder="Product Name"><?php if(!empty($subhead['productsubname5'])) { echo $subhead['productsubname5']; }?></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Url</p>
                            <textarea name="productsuburl5" placeholder="Product Url"><?php if(!empty($subhead['productsuburl5'])) { echo $subhead['productsuburl5']; }?></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Image</p>
                            <input type="file" onchange="validateSize(this)" accept=".png, .jpg, .jpeg" name="filesubproduct5">
                        </div>
                    </div>
                    <div class="rowBetween notBetween">
                        <p>Add more Subheadline</p>
                        <img src="img/rec.png" alt="" id="subplus5">
                    </div>
                </div>
<!----------------- s ------------->
                <div class="subhead head6 non">
                    <div class="columnBetween titlePa">
                        <p class="bolded">Subheadline6</p>
                        <textarea name="headline6" placeholder="Subheadline Title"><?php if(!empty($subhead['headline6'])) { echo $subhead['headline6']; }?></textarea>
                    </div>
                    <div class="columnBetween titlePa">
                        <p>Subheadline Paragraph</p>
                        <textarea name="pheadline6" placeholder="Subheadline Explanation"><?php if(!empty($subhead['pheadline6'])) { echo $subhead['pheadline6']; }?></textarea>
                    </div>
                    <h3>Optional</h3>
                    <div class="rowBetween sub">
                        <div class="columnBetween">
                            <p>Product Name</p>
                            <textarea name="productsubname6" placeholder="Product Name"><?php if(!empty($subhead['productsubname6'])) { echo $subhead['productsubname6']; }?></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Url</p>
                            <textarea name="productsuburl6" placeholder="Product Url"><?php if(!empty($subhead['productsuburl6'])) { echo $subhead['productsuburl6']; }?></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Image</p>
                            <input type="file" onchange="validateSize(this)" accept=".png, .jpg, .jpeg" name="filesubproduct6">
                        </div>
                    </div>
                    <div class="rowBetween notBetween">
                        <p>Add more Subheadline</p>
                        <img src="img/rec.png" alt="" id="subplus6">
                    </div>
                </div>
<!----------------- s ------------->
                <div class="subhead head7 non">
                    <div class="columnBetween titlePa">
                        <p class="bolded">Subheadline7</p>
                        <textarea name="headline7" placeholder="Subheadline Title"><?php if(!empty($subhead['headline7'])) { echo $subhead['headline7']; }?></textarea>
                    </div>
                    <div class="columnBetween titlePa">
                        <p>Subheadline Paragraph</p>
                        <textarea name="pheadline7" placeholder="Subheadline Explanation"><?php if(!empty($subhead['pheadline7'])) { echo $subhead['pheadline7']; }?></textarea>
                    </div>
                    <h3>Optional</h3>
                    <div class="rowBetween sub">
                        <div class="columnBetween">
                            <p>Product Name</p>
                            <textarea name="productsubname7" placeholder="Product Name"><?php if(!empty($subhead['productsubname7'])) { echo $subhead['productsubname7']; }?></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Url</p>
                            <textarea name="productsuburl7" placeholder="Product Url"><?php if(!empty($subhead['productsuburl7'])) { echo $subhead['productsuburl7']; }?></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Image</p>
                            <input type="file" onchange="validateSize(this)" accept=".png, .jpg, .jpeg" name="filesubproduct7">
                        </div>
                    </div>
                    <div class="rowBetween notBetween">
                        <p>Add more Subheadline</p>
                        <img src="img/rec.png" alt="" id="subplus7">
                    </div>
                </div>
<!----------------- s ------------->
                <div class="subhead head8 non">
                    <div class="columnBetween titlePa">
                        <p class="bolded">Subheadline8</p>
                        <textarea name="headline8" placeholder="Subheadline Title"><?php if(!empty($subhead['headline8'])) { echo $subhead['headline8']; }?></textarea>
                    </div>
                    <div class="columnBetween titlePa">
                        <p>Subheadline Paragraph</p>
                        <textarea name="pheadline8" placeholder="Subheadline Explanation"><?php if(!empty($subhead['pheadline8'])) { echo $subhead['pheadline8']; }?></textarea>
                    </div>
                    <h3>Optional</h3>
                    <div class="rowBetween sub">
                        <div class="columnBetween">
                            <p>Product Name</p>
                            <textarea name="productsubname8" placeholder="Product Name"><?php if(!empty($subhead['productsubname8'])) { echo $subhead['productsubname8']; }?></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Url</p>
                            <textarea name="productsuburl8" placeholder="Product Url"><?php if(!empty($subhead['productsuburl8'])) { echo $subhead['productsuburl8']; }?></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Image</p>
                            <input type="file" onchange="validateSize(this)" accept=".png, .jpg, .jpeg" name="filesubproduct8">
                        </div>
                    </div>
                </div>

<!----------------- ProductsBelow ------------->
                <div class="productsBelow below1">
                    <h3>Products Below</h3>
                    <div class="rowBetween">
                        <div class="columnBetween">
                            <p>Product Name</p>
                            <textarea name="productname1" placeholder="Product Name"><?php if(!empty($below['productname1'])) { echo $below['productname1']; }?></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Url</p>
                            <textarea name="producturl1" placeholder="Product Url"><?php if(!empty($below['producturl1'])) { echo $below['producturl1']; }?></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Image</p>
                            <input type="file" onchange="validateSize(this)" accept=".png, .jpg, .jpeg" name="imgproduct1">
                        </div>
                    </div>

                    <div class="rowBetween">
                        <div class="columnBetween">
                            <p>Product Name</p>
                            <textarea name="productname2" placeholder="Product Name"><?php if(!empty($below['productname2'])) { echo $below['productname2']; }?></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Url</p>
                            <textarea name="producturl2" placeholder="Product Url"><?php if(!empty($below['producturl2'])) { echo $below['producturl2']; }?></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Image</p>
                            <input type="file" onchange="validateSize(this)" accept=".png, .jpg, .jpeg" name="imgproduct2">
                        </div>
                    </div>

                    <div class="rowBetween">
                        <div class="columnBetween">
                            <p>Product Name</p>
                            <textarea name="productname3" placeholder="Product Name"><?php if(!empty($below['productname3'])) { echo $below['productname3']; }?></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Url</p>
                             <textarea name="producturl3" placeholder="Product Url"><?php if(!empty($below['producturl3'])) { echo $below['producturl3']; }?></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Image</p>
                            <input type="file" onchange="validateSize(this)" accept=".png, .jpg, .jpeg" name="imgproduct3">
                        </div>
                    </div>

                    <div class="rowBetween">
                        <div class="columnBetween">
                            <p>Product Name</p>
                            <textarea name="productname4" placeholder="Product Name"><?php if(!empty($below['productname4'])) { echo $below['productname4']; }?></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Url</p>
                            <textarea name="producturl4" placeholder="Product Url"><?php if(!empty($below['producturl4'])) { echo $below['producturl4']; }?></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Image</p>
                            <input type="file" onchange="validateSize(this)" accept=".png, .jpg, .jpeg" name="imgproduct4">
                        </div>
                    </div>
                    <div class="rowBetween notBetween">
                        <p>Add more Products</p>
                        <img src="img/rec.png" alt="" id="belowPlus">
                    </div>
                </div>

                <div class="productsBelow below2 non">
                    <h3>Products Below2</h3>
                    <div class="rowBetween">
                        <div class="columnBetween">
                            <p>Product Name</p>
                            <textarea name="productname5" placeholder="Product Name"><?php if(!empty($subhead['productname5'])) { echo $below['productname5']; }?></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Url</p>
                            <textarea name="producturl5" placeholder="Product Url"><?php if(!empty($subhead['producturl5'])) { echo $below['producturl5']; }?></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Image</p>
                            <input type="file" onchange="validateSize(this)" accept=".png, .jpg, .jpeg" name="imgproduct5">
                        </div>
                    </div>

                    <div class="rowBetween">
                        <div class="columnBetween">
                            <p>Product Name</p>
                            <textarea name="productname6" placeholder="Product Name"><?php if(!empty($subhead['productname6'])) { echo $below['productname6']; }?></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Url</p>
                            <textarea name="producturl6" placeholder="Product Url"><?php if(!empty($subhead['producturl6'])) { echo $below['producturl6']; }?></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Image</p>
                            <input type="file" onchange="validateSize(this)" accept=".png, .jpg, .jpeg" name="imgproduct6">
                        </div>
                    </div>

                    <div class="rowBetween">
                        <div class="columnBetween">
                            <p>Product Name</p>
                            <textarea name="productname7" placeholder="Product Name"><?php if(!empty($subhead['productname7'])) { echo $below['productname7']; }?></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Url</p>
                             <textarea name="producturl7" placeholder="Product Url"><?php if(!empty($subhead['producturl7'])) { echo $below['producturl7']; }?></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Image</p>
                            <input type="file" onchange="validateSize(this)" accept=".png, .jpg, .jpeg" name="imgproduct7">
                        </div>
                    </div>

                    <div class="rowBetween">
                        <div class="columnBetween">
                            <p>Product Name</p>
                            <textarea name="productname8" placeholder="Product Name"><?php if(!empty($subhead['productname8'])) { echo $below['productname8']; }?></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Url</p>
                            <textarea name="producturl8" placeholder="Product Url"><?php if(!empty($subhead['producturl8'])) { echo $below['producturl8']; }?></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Image</p>
                            <input type="file" onchange="validateSize(this)" accept=".png, .jpg, .jpeg" name="imgproduct8">
                        </div>
                    </div>
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
