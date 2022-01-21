<?php
        include "dashHeader.php";
        include "includes/dashboard.inc.php";
?>









    <section class="blogSection">
        <div class="container">
            <form action="includes/dashboard.inc.php" method="post">

<!----------------- createBlog1 ------------->
                <div class="createBlog">
                    <h2 id="cret">Create Blog</h2>
                    <div class="rowBetween">
                        <div class="columnBetween">
                            <p class="bolded">Headline</p>
                            <textarea name="headline" placeholder="Blog Title"></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Category</p>
                            <select class="js-example-basic-single" name="category">
                                <option value="gadgets">Gadgets</option>
                                <option value="farming">Farming</option>
                            </select>
                        </div>
                    </div>
                </div>



<!-----------------  createBlog2 ------------->
                <div class="createBlog2">
                    <div class="columnBetween">
                        <p>Explanation</p>
                        <textarea name="firstp" placeholder="Explain Blog"></textarea>
                    </div>
                    <div class="columnBetween">
                        <p>Direct Answer</p>
                        <textarea name="directanswer" placeholder="Bolded Text"></textarea>
                    </div>
                </div>

<!----------------- SubHeadline ------------->
                <div class="subhead head1">
                    <div class="columnBetween titlePa">
                        <p class="bolded">Subheadline1</p>
                        <textarea name="headline1" placeholder="Subheadline Title"></textarea>
                    </div>
                    <div class="columnBetween titlePa">
                        <p>Subheadline Paragraph</p>
                        <textarea name="pheadline1" placeholder="Subheadline Explanation"></textarea>
                    </div>
                    <h3>Optional</h3>
                    <div class="rowBetween sub">
                        <div class="columnBetween">
                            <p>Product Name</p>
                            <textarea name="productsubname1" placeholder="Product Name"></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Url</p>
                            <textarea name="productsuburl1" placeholder="Product Url"></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Image</p>
                            <input type="file" name="imgsubproduct1">
                        </div>
                    </div>
                    <div class="rowBetween notBetween">
                        <p>Add more Subheadline</p>
                        <img src="img/rec.png" alt="" id="subplus1">
                    </div>
                </div>

                <div class="subhead head2 non">
                    <div class="columnBetween titlePa">
                        <p class="bolded">Subheadline2</p>
                        <textarea name="headline2" placeholder="Subheadline Title"></textarea>
                    </div>
                    <div class="columnBetween titlePa">
                        <p>Subheadline Paragraph</p>
                        <textarea name="pheadline2" placeholder="Subheadline Explanation"></textarea>
                    </div>
                    <h3>Optional</h3>
                    <div class="rowBetween sub">
                        <div class="columnBetween">
                            <p>Product Name</p>
                            <textarea name="productsubname2" placeholder="Product Name"></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Url</p>
                            <textarea name="productsuburl2" placeholder="Product Url"></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Image</p>
                            <input type="file" name="imgsubproduct2">
                        </div>
                    </div>
                    <div class="rowBetween notBetween">
                        <p>Add more Subheadline</p>
                        <img src="img/rec.png" alt="" id="subplus2">
                    </div>
                </div>

                <div class="subhead head3 non">
                    <div class="columnBetween titlePa">
                        <p class="bolded">Subheadline3</p>
                        <textarea name="headline3" placeholder="Subheadline Title"></textarea>
                    </div>
                    <div class="columnBetween titlePa">
                        <p>Subheadline Paragraph</p>
                        <textarea name="pheadline3" placeholder="Subheadline Explanation"></textarea>
                    </div>
                    <h3>Optional</h3>
                    <div class="rowBetween sub">
                        <div class="columnBetween">
                            <p>Product Name</p>
                            <textarea name="productsubname3" placeholder="Product Name"></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Url</p>
                            <textarea name="productsuburl3" placeholder="Product Url"></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Image</p>
                            <input type="file" name="imgsubproduct3">
                        </div>
                    </div>
                    <div class="rowBetween notBetween">
                        <p>Add more Subheadline</p>
                        <img src="img/rec.png" alt="" id="subplus3">
                    </div>
                </div>

                <div class="subhead head4 non">
                    <div class="columnBetween titlePa">
                        <p class="bolded">Subheadline4</p>
                        <textarea name="headline4" placeholder="Subheadline Title"></textarea>
                    </div>
                    <div class="columnBetween titlePa">
                        <p>Subheadline Paragraph</p>
                        <textarea name="pheadline4" placeholder="Subheadline Explanation"></textarea>
                    </div>
                    <h3>Optional</h3>
                    <div class="rowBetween sub">
                        <div class="columnBetween">
                            <p>Product Name</p>
                            <textarea name="productsubname4" placeholder="Product Name"></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Url</p>
                            <textarea name="productsuburl4" placeholder="Product Url"></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Image</p>
                            <input type="file" name="imgsubproduct4">
                        </div>
                    </div>
                    <div class="rowBetween notBetween">
                        <p>Add more Subheadline</p>
                        <img src="img/rec.png" alt="" id="subplus4">
                    </div>
                </div>

                <div class="subhead head5 non">
                    <div class="columnBetween titlePa">
                        <p class="bolded">Subheadline5</p>
                        <textarea name="headline5" placeholder="Subheadline Title"></textarea>
                    </div>
                    <div class="columnBetween titlePa">
                        <p>Subheadline Paragraph</p>
                        <textarea name="pheadline5" placeholder="Subheadline Explanation"></textarea>
                    </div>
                    <h3>Optional</h3>
                    <div class="rowBetween sub">
                        <div class="columnBetween">
                            <p>Product Name</p>
                            <textarea name="productsubname5" placeholder="Product Name"></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Url</p>
                            <textarea name="productsuburl5" placeholder="Product Url"></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Image</p>
                            <input type="file" name="imgsubproduct5">
                        </div>
                    </div>
                    <div class="rowBetween notBetween">
                        <p>Add more Subheadline</p>
                        <img src="img/rec.png" alt="" id="subplus5">
                    </div>
                </div>

                <div class="subhead head6 non">
                    <div class="columnBetween titlePa">
                        <p class="bolded">Subheadline6</p>
                        <textarea name="headline6" placeholder="Subheadline Title"></textarea>
                    </div>
                    <div class="columnBetween titlePa">
                        <p>Subheadline Paragraph</p>
                        <textarea name="pheadline6" placeholder="Subheadline Explanation"></textarea>
                    </div>
                    <h3>Optional</h3>
                    <div class="rowBetween sub">
                        <div class="columnBetween">
                            <p>Product Name</p>
                            <textarea name="productsubname6" placeholder="Product Name"></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Url</p>
                            <textarea name="productsuburl6" placeholder="Product Url"></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Image</p>
                            <input type="file" name="imgsubproduct6">
                        </div>
                    </div>
                    <div class="rowBetween notBetween">
                        <p>Add more Subheadline</p>
                        <img src="img/rec.png" alt="" id="subplus6">
                    </div>
                </div>

                <div class="subhead head7 non">
                    <div class="columnBetween titlePa">
                        <p class="bolded">Subheadline7</p>
                        <textarea name="headline7" placeholder="Subheadline Title"></textarea>
                    </div>
                    <div class="columnBetween titlePa">
                        <p>Subheadline Paragraph</p>
                        <textarea name="pheadline7" placeholder="Subheadline Explanation"></textarea>
                    </div>
                    <h3>Optional</h3>
                    <div class="rowBetween sub">
                        <div class="columnBetween">
                            <p>Product Name</p>
                            <textarea name="productsubname7" placeholder="Product Name"></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Url</p>
                            <textarea name="productsuburl7" placeholder="Product Url"></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Image</p>
                            <input type="file" name="imgsubproduct7">
                        </div>
                    </div>
                    <div class="rowBetween notBetween">
                        <p>Add more Subheadline</p>
                        <img src="img/rec.png" alt="" id="subplus7">
                    </div>
                </div>
                
                <div class="subhead head8 non">
                    <div class="columnBetween titlePa">
                        <p class="bolded">Subheadline8</p>
                        <textarea name="headline8" placeholder="Subheadline Title"></textarea>
                    </div>
                    <div class="columnBetween titlePa">
                        <p>Subheadline Paragraph</p>
                        <textarea name="pheadline8" placeholder="Subheadline Explanation"></textarea>
                    </div>
                    <h3>Optional</h3>
                    <div class="rowBetween sub">
                        <div class="columnBetween">
                            <p>Product Name</p>
                            <textarea name="productsubname8" placeholder="Product Name"></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Url</p>
                            <textarea name="productsuburl8" placeholder="Product Url"></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Image</p>
                            <input type="file" name="imgsubproduct8">
                        </div>
                    </div>
                </div>

<!----------------- ProductsBelow ------------->
                <div class="productsBelow below1">
                    <h3>Products Below</h3>
                    <div class="rowBetween">
                        <div class="columnBetween">
                            <p>Product Name</p>
                            <textarea name="productname1" placeholder="Product Name"></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Url</p>
                            <textarea name="producturl1" placeholder="Product Url"></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Image</p>
                            <input type="file" name="imgproduct1">
                        </div>
                    </div>

                    <div class="rowBetween">
                        <div class="columnBetween">
                            <p>Product Name</p>
                            <textarea name="productname2" placeholder="Product Name"></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Url</p>
                            <textarea name="producturl2" placeholder="Product Url"></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Image</p>
                            <input type="file" name="imgproduct2">
                        </div>
                    </div>

                    <div class="rowBetween">
                        <div class="columnBetween">
                            <p>Product Name</p>
                            <textarea name="productname3" placeholder="Product Name"></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Url</p>
                             <textarea name="producturl3" placeholder="Product Url"></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Image</p>
                            <input type="file" name="imgproduct3">
                        </div>
                    </div>

                    <div class="rowBetween">
                        <div class="columnBetween">
                            <p>Product Name</p>
                            <textarea name="productname4" placeholder="Product Name"></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Url</p>
                            <textarea name="producturl4" placeholder="Product Url"></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Image</p>
                            <input type="file" name="imgproduct4">
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
                            <textarea name="productname5" placeholder="Product Name"></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Url</p>
                            <textarea name="producturl5" placeholder="Product Url"></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Image</p>
                            <input type="file" name="imgproduct5">
                        </div>
                    </div>

                    <div class="rowBetween">
                        <div class="columnBetween">
                            <p>Product Name</p>
                            <textarea name="productname6" placeholder="Product Name"></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Url</p>
                            <textarea name="producturl6" placeholder="Product Url"></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Image</p>
                            <input type="file" name="imgproduct6">
                        </div>
                    </div>

                    <div class="rowBetween">
                        <div class="columnBetween">
                            <p>Product Name</p>
                            <textarea name="productname7" placeholder="Product Name"></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Url</p>
                             <textarea name="producturl7" placeholder="Product Url"></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Image</p>
                            <input type="file" name="imgproduct7">
                        </div>
                    </div>

                    <div class="rowBetween">
                        <div class="columnBetween">
                            <p>Product Name</p>
                            <textarea name="productname8" placeholder="Product Name"></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Url</p>
                            <textarea name="producturl8" placeholder="Product Url"></textarea>
                        </div>
                        <div class="columnBetween">
                            <p>Product Image</p>
                            <input type="file" name="imgproduct8">
                        </div>
                    </div>
                </div>


                <div class="submitBtn">
                    <input type="submit" name="submit" value="Submit Blogpost">
                </div>




            </form>
        </div>
    </section>










<?php
        include "dashFooter.php";
?>