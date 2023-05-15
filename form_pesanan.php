<?php require_once "atas.php" ?>
<div class="form-container">
  <form>
    <label for="name">Nama Lengkap</label>
    <input type="text" id="name" name="name" required>

    <label for="alamat">Alamat Lengkap</label>
    <input type="text" id="alamat" name="alamat" required>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>

    <label for="phone">Nomor Telepon</label>
    <input type="tel" id="phone" name="phone" required>

    <label for="product">Produk</label>
    <select id="product" name="product">
      <option value="product1">Kaos1</option>
      <option value="product2">Kaos2</option>
      <option value="product3">kemeja1</option>
      <option value="product3">kemeja2</option>
      <option value="product3">kemeja3</option>
      <option value="product3">kemeja4</option>
      <option value="product3">Laptop</option>
      <option value="product3">Komputer</option>
      <option value="product3">SmartPhone</option>
      <option value="product3">kamera</option>
      <option value="product3">Televisi</option>
      <option value="product3">Speaker</option>
    </select>

    <label for="quantity">Jumlah</label>
    <input type="number" id="quantity" name="quantity" min="1" max="100" required>

    <label for="address">Catatan</label>
    <textarea id="address" name="address" rows="4" required></textarea>

    <input type="submit" value="Pesan Sekarang" onclick="location.href='thanks.php'">
  </form>
</div>
<?php require_once "bawah.php" ?>