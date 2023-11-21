<?php 
$ee= show_thong_kesp($tk_hh);
$hh= show_thong_kebl($tk_bl);

?>
<div class="main-content">
    <h3 class="title-page">Thống kê sản phẩm:</h3>

    <table id="example" class="table table-striped" style="width: 100%">
        <thead>
            <tr>
                <th>MÃ DANH MỤC</th>
                <th>TÊN DANH MỤC</th>
                <th>SỐ LƯỢNG SẢN PHẨM</th>
                <th>GIÁ CAO NHẤT</th>
                <th>GIÁ THẤP NHẤT</th>
                <th>GIÁ TRUNG BÌNH</th>
                <th>Thao Tác</th>

            </tr>
        </thead>
        <tbody>
            <?php
            echo $ee;
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th>MÃ DANH MỤC</th>
                <th>TÊN DANH MỤC</th>
                <th>SỐ LƯỢNG SẢN PHẨM</th>
                <th>GIÁ CAO NHẤT</th>
                <th>GIÁ THẤP NHẤT</th>
                <th>GIÁ TRUNG BÌNH</th>
                <th>Thao Tác</th>

            </tr>
        </tfoot>
    </table>
</div>
<div class="main-content">
    <h3 class="title-page">Thống kê bình luận:</h3>

    <table id="example" class="table table-striped" style="width: 100%">
        <thead>
            <tr>
                <th>MÃ SẢN PHẨM</th>
                <th>HÌNH ẢNH</th>
                <th>TÊN SẢN PHẨM</th>
                <th>SỐ LƯỢNG BÌNH LUẬN</th>
                <th>Thao TÁC</th>

            </tr>
        </thead>
        <tbody>
            <?php
            echo $hh;
            ?>
        </tbody>
    </table>
   
    <?php
    for ($i = 1; $i <= $total_pages; $i++) {
        ?>
        <button class="phantrang"><a class="nutphantrang" href='admin.php?pg=thongke&page=<?= $i ?>'>
            <?= $i ?>
        </a> </button>
    <?php
    } ?>
   
</div>
</div>
</div>
