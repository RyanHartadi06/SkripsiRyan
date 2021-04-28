<footer id="footer">
  <div class="container">
  <?php foreach ($hero as $h) { ?>
    <h3><?= $h['name']?></h3>
    <?php } ?>
    <?php foreach($fSkill as $f){?>
      <p><?= $f['quote']?></p>
   
    <?php } ?>
   <div class="social-links">
   <?php foreach($kontak as $k){?>
    
      <a href="https://twitter.com/<?=$k['twitter']?>/" class="twitter"><i class="bx bxl-twitter"></i></a>
				<a href="https://www.facebook.com/<?=$k['fb']?>/" class="facebook"><i class="bx bxl-facebook"></i></a>
				<a href="https://www.instagram.com/<?=$k['ig']?>/" class="instagram"><i class="bx bxl-instagram"></i></a>
				<a href="https://github.com/<?=$k['github']?>" class="github"><i class="bx bxl-github"></i></a>
				<a href="https://www.linkedin.com/in/<?=$k['linkedin']?>/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      <?php } ?>
    </div>
    <!-- <div class="copyright">
      &copy; Copyright <strong><span>MyResume</span></strong>. All Rights Reserved
    </div> -->
    <div class="credits">
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </div>
</footer> 