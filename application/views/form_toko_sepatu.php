<!DOCTYPE html>
<html>
    <title>Form Input Sepatu</title>
<head>
    <?php echo validation_errors(); ?>
    <center>
        <form action="<?= base_url('Toko_sepatu/pesan'); ?>"method="post">
        <table>
            <tr><th colspan="3"><h2>Form Toko Sepatu</h2></th></tr>
            <tr><td colspan="3"><hr></td></tr>
            <tr><th align="left">Nama Pembeli</th>
            <th>:</th>
            <td><input type="text" name="nama" id="nama"></td>
</tr>
<tr>
    <th align='left'>No. Telepon</th><td>:</td>
    <td><input type="text" name="telepon" id="telepon"></td>
</tr>
<tr>
    <th align='left'>Merk Sepatu</th>
    <td>:</td>
    <td><select name="merk" id="merk">
        <option value="">Pilih Merk Sepatu</option>
        <option value="Nike     375.000">Nike       375.000</option>
        <option value="Adidas   300.000">Adidas     300.000</option>
        <option value="Kickers  250.000">Kickers    250.000</option>
        <option value="Eiger    275.000">Eiger      275.000</option>
        <option value="Bucherri 400.000">Bucherri   400.000</option>
</select></td>
</tr>
<tr>
    <th align='left'>Ukuran Sepatu</th>
    <td>:</td>
    <td><select name="ukuran" id="ukuran">
        <option value="">Pilih Ukuran Sepatu</option>
        <option value="32">32</option>
        <option value="33">33</option>
        <option value="34">34</option>
        <option value="35">35</option>
        <option value="36">36</option>
        <option value="37">37</option>
        <option value="38">38</option>
        <option value="39">39</option>
        <option value="40">40</option>
        <option value="41">41</option>
        <option value="42">42</option>
        <option value="43">43</option>
        <option value="44">44</option>
</select></td>
</tr>
<tr><td colspan="3" align="center">
    <input type="submit" value="Submit">
</td></tr></table></form></center></body></html>
