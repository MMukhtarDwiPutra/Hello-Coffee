<section class="our-webcoderskull padding-lg">
  <div class="container">
    <div class="row heading heading-icon">

        <h2>Daftar Belanja</h2>

            <table class="table table-dark">
                <tr >
                    <td width="2%">No</td>
                    <td width="20%">Gambar</td>
                    <td width="33%">Item</td>
                    <td width="17%">Harga</td>
                    <td width="8%">Qty</td>
                    <td width="20%">Jumlah</td>
                    <td width="10%">Hapus</td>
                </tr>
                
                <tr >
                    <td >1</td>
                    <td ><img src =<?php echo base_url('assets/img/coffee2.jpg')?>></td>
                    <td >Kop Cibarusah</td>
                    <td >Mahal bet dah</td>
                    <td >1</td>
                    <td >Amsyong</td>
                    <td ><a href="#" class="btn btn-sm btn-danger">Hapus</a></td>
                </tr>
                <tr>
                    <td colspan="3"><b>Order Total: Rp</b></td>
                    <td colspan="4" align="right">
                    <a data-toggle="modal" data-target="#myModal"  class ='btn btn-sm btn-danger'>Kosongkan Cart</a>
                    <button class='btn btn-sm btn-success'  type="submit">Update Cart</button>
                    <a href="<?php echo base_url('shopping/checkout')?>"  class ='btn btn-sm btn-primary'>Check Out</a>
                </tr>

          </table>
    </div>
  </div>
</section>

