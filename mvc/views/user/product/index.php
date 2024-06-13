<?php
$thumbnails = explode(',', $data['product'][0]['thumbnail']);
?>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="padding: 20px;border: none;">
                <!-- card left -->
                <div class="product-imgs">
                    <div class="img-display">
                        <div class="img-showcase">
                            <?php
foreach($thumbnails as $item) {
    echo '<img src="'._WEB_ROOT.'/public/clients/images/'.$item.'.jpg" alt="">';
}
?>
                        </div>
                    </div>
                    <div class="img-select">
                        <?php
$i = 1;
foreach($thumbnails as $item) {
    echo '<div class="img-item">
    <a href="#" data-id="'.$i++.'">
        <img src="'._WEB_ROOT.'/public/clients/images/'.$item.'.jpg" alt="">
    </a>
</div>';
}
?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8" style="display: flex; justify-content: center; padding-top: 50px;">
            <div class="product-dtl">
                <div class="product-content">
                    <h2 class="product-title" style="font-size: 30px;">
                        <?php
echo $data['product'][0]['title'];
?>
                    </h2>

                    <div class="product-price">
                        <div class="price-container">
                            <p class="old-price">Giá:
                                <span><?php echo $data['product'][0]['outbound_price']; ?></span>
                            </p>
                            <p class="new-price">
                                <span><?php echo $data['product'][0]['outbound_price']; ?></span>
                            </p>
                        </div>
                        </span>

                        </p>
                        <h2>Mô tả sản phẩm: </h2>
                        <p>
                            <?php
echo $data['product'][0]['description'];
?>
                        </p>
                    </div>
                    <div class="product-count">
                        <label for="size" style="margin-bottom: 8px;">Số lượng</label>
                        <div class="quantity" style="display:flex">
                            <div class="qtyminus">-</div>
                            <input type="text" id="shared-qty" name="quantity" value="1" class="qty">
                            <div class="qtyplus">+</div>
                        </div>
                        <div class="button-container">
                            <form action="http://localhost:8088/web/cart/add" method="post">
                                <input type="hidden" name="id" value="<?= $data['product'][0]['id'] ?>">
                                <input type="hidden" name="price" value="<?= $data['product'][0]['outbound_price'] ?>">
                                <input type="hidden" name="title" value="<?= $data['product'][0]['title'] ?>">
                                <input type="hidden" name="image" value="<?= $thumbnails[0]?>">
                                <input type="hidden" name="quantity" id="form2-qty">
                                <input type="submit" name="add-card-btn" class="round-black-btn" value="Thêm vào giỏ">
                            </form>

                            <form action=" http://localhost:8088/web/cart/checkout" method="post">
                                <input type="hidden" name="id" value="<?= $data['product'][0]['id'] ?>">
                                <input type="hidden" name="price" value="<?= $data['product'][0]['outbound_price'] ?>">
                                <input type="hidden" name="title" value="<?= $data['product'][0]['title'] ?>">
                                <input type="hidden" name="image" value="<?= $thumbnails[0]?>">
                                <input type="hidden" name="quantity" id="form1-qty">
                                <input type="submit" name="buy-btn" class="round-black-btn" value="Mua ngay">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Các đoạn mã JavaScript của bạn ở đây
    const imgs = document.querySelectorAll('.img-select a');
    const imgBtns = [...imgs];
    let imgId = 1;

    imgBtns.forEach((imgItem) => {
        imgItem.addEventListener('click', (event) => {
            event.preventDefault();
            imgId = imgItem.dataset.id;
            slideImage(); // Gọi slideImage() sau khi imgId đã được cập nhật
        });
    });

    function slideImage() {
        const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

        document.querySelector('.img-showcase').style.transform =
            `translateX(${- (imgId - 1) * displayWidth}px)`;
    }

    window.addEventListener('resize', slideImage);
});
const qtyminus = document.querySelector(".qtyminus");
const qtyplus = document.querySelector(".qtyplus");

qtyminus.addEventListener("click", function() {
    const qty = document.querySelector(".qty");;
    var val = qty.value;
    if (parseInt(val) > 1) {
        qty.value = parseInt(val) - 1;
    }
});

qtyplus.addEventListener("click", function() {
    const qty = document.querySelector(".qty");;
    var val = qty.value;
    if (parseInt(val) < 1000) {
        qty.value = parseInt(val) + 1;
    }
});

document.querySelectorAll("form").forEach(function(form) {
    form.addEventListener("submit", function() {
        var qtyValue = document.getElementById("shared-qty").value;
        form.querySelector("input[name='quantity']").value = qtyValue;
    });
});
</script>