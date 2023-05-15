<?php require_once "atas.php" ?>
<style>
    .testimoni {
        background-color: #6d6d6d;
        padding: 50px 0;
    }

    .testimoni h2 {
        text-align: center;
        font-size: 30px;
        margin-bottom: 30px;
        color: #ff6f09;
    }

    .testimoni-container {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    .testimoni-item {
        max-width: 350px;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        margin-bottom: 30px;
        text-align: center;
    }

    .testimoni-item img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin-bottom: 20px;
    }

    .nama {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .testimoni-text {
        font-size: 18px;
        line-height: 1.5;
        margin-bottom: 20px;
    }
</style>
<section class="testimoni">
    <h2>Testimoni Pelanggan</h2>
    <div class="testimoni-container">
        <div class="testimoni-item">
            <img src="images/testimonials-1.jpg" alt="Avatar">
            <p class="nama">Mahadi</p>
            <p class="testimoni-text">"Pelayanan pelanggan yang baik, sangat membantu dan responsif dalam menyelesaikan masalah saya."</p>
        </div>
        <div class="testimoni-item">
            <img src="images/testimonials-2.jpg" alt="Avatar">
            <p class="nama">Rintan</p>
            <p class="testimoni-text">"Produk ini sangat membantu pekerjaan saya menjadi lebih mudah, saya tidak bisa bayangkan hidup tanpa produk ini."
            </p>
        </div>
        <div class="testimoni-item">
            <img src="images/testimonials-3.jpg" alt="Avatar">
            <p class="nama">Nabila</p>
            <p class="testimoni-text">"Saya merasa sangat senang dengan pembelian saya, pengiriman cepat dan tepat waktu."</p>
        </div>
    </div>
</section>
<?php require_once "bawah.php" ?>