<?php require_once "atas.php" ?>
<style>
    .thank-you {
      text-align: center;
      padding: 50px;
      background-color: #f2f2f2;
    }

    h1 {
      font-size: 48px;
      font-weight: bold;
      color: #ff6f09;
      margin-bottom: 30px;
    }

    p {
      font-size: 24px;
      line-height: 1.5;
      margin-bottom: 50px;
    }

    button {
      background-color: #ff6f09;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 20px;
    }

    button:hover {
      background-color: #1d1f21;
    }
  </style>
<div class="thank-you">
    <h1>Terima Kasih!</h1>
    <p>Terima kasih telah mengunjungi situs kami. Kami berharap Anda menemukan produk dan barang yang anda suka.</p>
    <button type="button" onclick="location.href='index.php'">Kembali ke Beranda</button>
  </div>
<?php require_once "bawah.php" ?>