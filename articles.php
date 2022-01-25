<?php

if (isset($_GET['headline'])) {
include "header.php";
include "includes/db.inc.php";


    $headline = $_GET['headline'];

    $sqle = "SELECT * FROM article WHERE headline = '$headline'";

    $result = mysqli_query($conn, $sqle);

    $topicc = mysqli_fetch_assoc($result);

    $artId = $topicc['id'];
    $phdate = strtotime($topicc['date']);
    $deyt = date('F j, Y', $phdate);

    $queryImg = "SELECT * FROM imglinks WHERE articleId = '$artId'";

    $resultImg = mysqli_query($conn, $queryImg);

    $imglink = mysqli_fetch_assoc($resultImg);
}

?>



<!-- Section -->
<div class="container">
    <div class="articlePageArt">

            <!-- blogShowcase -->
            
            <div class="blogShowcaseArt">
            <?php if ($topicc) { ?>
                <p class="category"><?php echo $topicc['category']; ?></p>
                <p class="headline"><?php echo $topicc['headline']; ?></p>
                <p class="andTime">By: <span class="author"><?php echo $topicc['author']; ?></span> | <?php echo $deyt; ?></p>
                <img src="uploads/<?php echo $imglink['headline']; ?>" alt="">
            <?php } ?>
                <!-- subheadline -->

                <div class="sub">
                    <p class="subheadline">Lorem ipsum dolor sit amet?</p>
                    <pre>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et accumsan diam. Sed blandit sem in odio suscipit pulvinar. Vivamus nec sem vitae tortor rhoncus volutpat eget eget sem. Nam ut rhoncus orci. Nunc congue metus non libero interdum tincidunt. In hac habitasse platea dictumst. Maecenas odio libero, tempus et pharetra vel, imperdiet pharetra eros. Duis in efficitur urna. Etiam consequat lorem justo, ac dictum erat laoreet non. Praesent condimentum vitae velit sed rhoncus. Donec sed tortor sodales, facilisis libero egestas, ultrices diam. Suspendisse in pellentesque justo, non placerat est.

Suspendisse quis quam vitae sapien blandit aliquam nec id tortor. Mauris aliquet arcu eget nulla porta, quis mollis urna suscipit. Vivamus viverra augue at sapien consequat, a lobortis ante pharetra. Aliquam sed justo tempus, commodo risus convallis, eleifend nulla. Duis sed viverra mauris. Phasellus volutpat, nibh rutrum posuere iaculis, quam ex mattis magna, in volutpat massa urna ornare turpis. Cras tincidunt efficitur urna non efficitur. Fusce ut aliquam tortor. Quisque eget nisi at erat rutrum fringilla. Morbi nec consectetur neque, at commodo nisi. Praesent a eros tristique, feugiat felis non, pellentesque diam. Cras at ornare ligula.
                    </pre>
                    <div class="subheadproduct">
                        <img src="img/123.jpg" alt="" class="productImg">
                        <p class="productName">Gefore Rtx 3090 ti</p>
                        <a href="#" class="productLink">Check on Amazon</a>
                    </div>
                </div>
                

                <div class="sub">
                    <p class="subheadline">Lorem ipsum dolor sit amet?</p>
                    <pre>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et accumsan diam. Sed blandit sem in odio suscipit pulvinar. Vivamus nec sem vitae tortor rhoncus volutpat eget eget sem. Nam ut rhoncus orci. Nunc congue metus non libero interdum tincidunt. In hac habitasse platea dictumst. Maecenas odio libero, tempus et pharetra vel, imperdiet pharetra eros. Duis in efficitur urna. Etiam consequat lorem justo, ac dictum erat laoreet non. Praesent condimentum vitae velit sed rhoncus. Donec sed tortor sodales, facilisis libero egestas, ultrices diam. Suspendisse in pellentesque justo, non placerat est.

Suspendisse quis quam vitae sapien blandit aliquam nec id tortor. Mauris aliquet arcu eget nulla porta, quis mollis urna suscipit. Vivamus viverra augue at sapien consequat, a lobortis ante pharetra. Aliquam sed justo tempus, commodo risus convallis, eleifend nulla. Duis sed viverra mauris. Phasellus volutpat, nibh rutrum posuere iaculis, quam ex mattis magna, in volutpat massa urna ornare turpis. Cras tincidunt efficitur urna non efficitur. Fusce ut aliquam tortor. Quisque eget nisi at erat rutrum fringilla. Morbi nec consectetur neque, at commodo nisi. Praesent a eros tristique, feugiat felis non, pellentesque diam. Cras at ornare ligula.
                    </pre>
                    <div class="subheadproduct">
                        <img src="img/123.jpg" alt="" class="productImg">
                        <p class="productName">Gefore Rtx 3090 ti</p>
                        <a href="#" class="productLink">Check on Amazon</a>
                    </div>
                </div>

                
                <div class="productBelow">
                    <div class="subheadproduct">
                        <img src="img/123.jpg" alt="" class="productImg">
                        <p class="productName">Gefore Rtx 3090 ti</p>
                        <a href="#" class="productLink">Check on Amazon</a>
                    </div>
                    <div class="subheadproduct">
                        <img src="img/123.jpg" alt="" class="productImg">
                        <p class="productName">Gefore Rtx 3090 ti</p>
                        <a href="#" class="productLink">Check on Amazon</a>
                    </div>
                    <div class="subheadproduct">
                        <img src="img/123.jpg" alt="" class="productImg">
                        <p class="productName">Gefore Rtx 3090 ti</p>
                        <a href="#" class="productLink">Check on Amazon</a>
                    </div>
                    <div class="subheadproduct">
                        <img src="img/123.jpg" alt="" class="productImg">
                        <p class="productName">Gefore Rtx 3090 ti</p>
                        <a href="#" class="productLink">Check on Amazon</a>
                    </div>
                </div>


                


            </div>

            <!-- CardWrapped -->
            <div class="blogRight">
                <div class="wrapperArt">
                    <div class="flex-containerArt">
                            <p>Latest posts</p>
                            <div class="cardArt">
                                <img src="img/rec.png" alt="">
                                <div class="blogDetails">
                                    <p class="blogTitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et</p>
                                    <div class="dAndTimeArt">
                                        <p>By: Arvin Gomez</p>
                                        <p>Jan 3, 2022</p>
                                    </div>
                                </div>
                            </div>

                            <div class="cardArt">
                                <img src="img/rec.png" alt="">
                                <div class="blogDetails">
                                    <p class="blogTitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et</p>
                                    <div class="dAndTimeArt">
                                        <p>By: Arvin Gomez</p>
                                        <p>Jan 3, 2022</p>
                                    </div>
                                </div>
                            </div>

                            <div class="cardArt">
                                <img src="img/rec.png" alt="">
                                <div class="blogDetails">
                                    <p class="blogTitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et</p>
                                    <div class="dAndTimeArt">
                                        <p>By: Arvin Gomez</p>
                                        <p>Jan 3, 2022</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
    </div>
</div>










<?php
        include "footer.php";
?>