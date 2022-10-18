<style>
<?php include 'page-products.css'?>
</style>
<?php /* Template Name: our products*/ ?>
<?php get_header();?>
<?php

        $curl = curl_init(); //Khai báo crul (thư viện được sử dụng để truyền dữ liệu thông qua nhiều giao thức: HTTP,...)

        curl_setopt_array($curl, array( //Thiết lập curl
            CURLOPT_URL => 'https://628ae9bf667aea3a3e240e01.mockapi.io/cats', //đường dẫn gửi request
            CURLOPT_RETURNTRANSFER => true, //Kết quả trả về là dạng chuỗi
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,//Thời gian duy trì kết nối của curl là vô tận với giá trị = 0
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl); //curl-exec() -> hàm thực thi -> trả vè kết quả là một chuỗi

        curl_close($curl); //Đóng request, giải phóng tài nguyên


        $data = json_decode($response);

        // echo "<b>Total APIs: $data->count </b><br>";
        // $entries = $data->entries[0]->API;
        ?>
<div class="list-products">
    <?php
        foreach ($data as $print) { ?> <div class="item-products">
        <div> <?php echo '<img src="' . $print->image . '" />' ?></div>
        <div>
            <h1><?php echo $print->title; ?></h1>
            <h3><?php echo $print->price; ?> VND</h3>
        </div>
    </div>
    <?php }
    ?>
</div>

<?php get_footer();?>