<?php include('include/header.php');?>
<div id="main">
<div id="content" class="freshbus">

  <div class="content">
  	<div id="sub-nav" class="clearfix">
    	<ul>
      	<li><a href="about.php">About The Buss</a></li>
        <li><a href="register.php">Booking</a></li>
        <li><a href="rules.php">Rules & Regulation</a></li>
      </ul>
    
    </div>
    
  	<div id="sponsors">
    	<img src="img/sponsors.jpg" alt=" " />
    </div>
    <div id="registration">
    	<div class="inner">
	    	<form action="#" id="bs_reg">
      
       <div id="ck-bni">
      	<label for="bni_user">Pengguna BNI Card?</label>
        <div class="field">
	      	<input type="checkbox" value="ck1" id="bni_user" name="bni_user"  />
        </div>
      </div>
      
      <div>
      	<label for="nama">Nama loe</label>
        <div class="field">
	      	<input type="text" class="text" placeholder="Nama" id="nama" name="nama" validate="required:true" />
        </div>
      </div>
      
      <div>
      	<label for="jumlah_seat">Jumlah seat</label>
        <div class="field">
          <select name="jumlah_seat" id="jumlah_seat">
            <option disabled="disabled" selected="selected" value="" validate="required:true">--Pilih jumlah seat--</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
          </select>
        </div>
      </div>
      
      <div id="other">
      	<label for="nama1">Nama teman-teman loe</label>
        <div class="field">
        </div>
      </div>
      
      <div>
      	<label for="booking_code">Concert booking code</label>
        <div class="field">
	      	<input type="text" class="text" placeholder="Concert Booking Code" id="booking_code" name="booking_code" validate="required:true" />
        </div>
      </div>

      <div>
      	<label for="email">Email</label>
        <div class="field">
	      	<input type="text" class="text email" placeholder="Email" id="email" name="email" validate="required:true" />
        </div>
      </div>
      
       <div>
      	<label for="email2">Repeat Email</label>
        <div class="field">
	      	<input type="text" class="text email" placeholder="Retype email" id="email2" name="email2" validate="required:true" />
        </div>
      </div>

      <div>
      	<label for="no_telp">Nomor telepon</label>
        <div class="field">
	      	<input type="text" class="text" placeholder="Nomor Telepon" id="no_telp" name="no_telp" validate="required:true" />
        </div>
      </div>

      <div>
      	<label for="no_id">Nomor tanda pengenal</label>
        <div class="field">
	      	<input type="text" class="text" placeholder="Nomor Tanda Pengenal" id="no_id" name="no_id" validate="required:true" />
        </div>
      </div>

      <div>
      	<label for="pilih_jam">Pilih Jam Keberangkatan</label>
        <div class="field">
          <select name="pilih_jam" id="pilih_jam">
            <option disabled="disabled" selected="selected" value="" validate="required:true">--Pilih jam keberangkatan--</option>
            <option disabled="disabled">12:00 - <i>0</i>&nbsp;Seat&nbsp;Available </option>
            <option>13:00 - <i>30</i>&nbsp;Seat<i>s</i>&nbsp;Available </option>
            <option>14:00 - <i>30</i>&nbsp;Seat<i>s</i>&nbsp;Available </option>
            <option>15:00 - <i>30</i>&nbsp;Seat<i>s</i>&nbsp;Available </option>
          </select>
        </div>
      </div>

      <div id="agreement">
      	<p>Saya setuju dengan <a href="#">terms & condition</a>

	      	<input type="checkbox" value="agree" id="agree" validate="required:true" class="checkbox" />
        </p>
      </div>
      
      <div id="recapcha-wrapper">
        <img src="img/capcha-placeholder.png" />      
      </div>
        
      <div id="submit-wrapper">
	      <input type="submit" name="submit" value="Book Now!" id="submit" class="button" />
      </div>
  
      
      <div id="arrow-btm"></div>

      </form>
      </div>
      
      <div class="ps">
      	<div class="inner">
	      	<p>*Pastikan <strong>nama, booking code, email</strong> sesuai dengan data yg digunakan saat memesan ticket konser Katy Perry.</p>
        </div>
      </div>

    </div>
    <div id="logo-kp">
    <img src="img/logo-kp.png">
    </div>
  </div>
  
</div>
</div>
<?php include('include/footer.php');?>