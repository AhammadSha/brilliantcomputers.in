<!-- ---------- ----- Footer ----- ---------- -->
<footer class="footer">
	<div class="container">
		<div class="footer_upper">
			<div class="footer_row">
				<div class="footer_col">
					<div class="footer_logo">
						<img src="<?= BASE_URL ?>assets/media/brilliant-logo.png" alt="Logo | Brilliant Computer Education">
					</div>
					
					<p>“Brilliant Computers Established in the Year 1995, the Brilliant Computer Education, an ISO 9001:2015 certified institute and is the only organization in and around Ongole, Prakasam District, Andhra Pradesh.”</p>

					<div class="footer_social">
						<a target="_blank" href="<?php echo $facebook; ?>">  <i class="fa-brands fa-facebook-f"></i>  </a>
						<a target="_blank" href="<?php echo $instagram; ?>"> <i class="fa-brands fa-instagram"></i>   </a>
						<a target="_blank" href="<?php echo $linkedin; ?>">  <i class="fa-brands fa-linkedin-in"></i> </a>
						<a target="_blank" href="<?php echo $youtube; ?>">   <i class="fa-brands fa-youtube"></i>     </a>
					</div>
				</div>
				<div class="footer_col">
					<h4>Useful Links</h4>
					<ul class="footer_links">
						<li> <a href="<?= BASE_URL ?>about.html">    About Us      </a> </li>
						<li> <a href="<?= BASE_URL ?>courses.html">  Courses       </a> </li>
						<li> <a href="<?= BASE_URL ?>services.html"> Services      </a> </li>
						<li> <a href="<?= BASE_URL ?>blog.html">     News & Events </a> </li>
						<li> <a href="<?= BASE_URL ?>contact.html">  Contact Us    </a> </li>
					</ul>
				</div>
				<div class="footer_col">
					<h4>Quick links</h4>
					<ul class="footer_links">
						<li> <a href="<?= BASE_URL ?>"> Careers            </a> </li>
						<li> <a href="<?= BASE_URL ?>"> Testimonials       </a> </li>
						<li> <a href="<?= BASE_URL ?>"> Privacy Policy     </a> </li>
						<li> <a href="<?= BASE_URL ?>"> Refund Policy      </a> </li>
						<li> <a href="<?= BASE_URL ?>"> Terms & Conditions </a> </li>
					</ul>
				</div>
				<div class="footer_col">
					<h4>Get Contact</h4>

					<div class="footer_card">
						<div class="fc_icon"> <i class="fa-solid fa-phone"></i>  </div>
						<div class="fc_text">
							<a href="tel:<?php echo $phn1; ?>"> <?php echo $phn1; ?> </a>
							<a href="tel:<?php echo $phn2; ?>"> <?php echo $phn2; ?> </a>
						</div>
					</div>

					<div class="footer_card">
						<div class="fc_icon"> <i class="fa-regular fa-envelope"></i> </div>
						<div class="fc_text">
							<a href="mailto:<?php echo $email1; ?>"> <?php echo $email1; ?> </a>
							<a href="mailto:<?php echo $email2; ?>"> <?php echo $email2; ?> </a>
						</div>
					</div>

					<div class="footer_card">
						<div class="fc_icon"> <i class="fa-solid fa-location-dot"></i> </div>
						<div class="fc_text">
							<h5> Head Office: </h5>
							<a target="_blank" href="<?php echo $addUrl1; ?>"> <?php echo $address1; ?> </a>
							<h5> Branch Office </h5>
							<a target="_blank" href="<?php echo $addUrl2; ?>"> <?php echo $address2; ?> </a>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="footer_lower">
			<div class="lower_row">
				<p> © All rights reserved <span id="year"></span> <a href="<?= BASE_URL ?>">Brilliant Computer Education</a> </p> 
			</div>
		</div>
	</div>
</footer>

<!-- ---------- ---------- ---------- ---------- ---------- ---------- ---------- -->
<!-- ---------- ---------- ---------- JAVASCRIPT ---------- ---------- ---------- -->
<!-- ---------- ---------- ---------- ---------- ---------- ---------- ---------- -->
<script>
	document.getElementById("year").textContent = new Date().getFullYear();
</script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js'></script>

<script type="text/javascript">
	$(".class_name").flickity({
		cellAlign: 'left',
		wrapAround: true,
		autoPlay: true,
		prevNextButtons: false,
		pageDots: false
	});
</script>

<script>
const modal = document.getElementById("enrollNow");
const buttons = document.querySelectorAll(".openEnroll");
const closeBtn = document.getElementById("closeEnroll");

buttons.forEach(btn => {
	btn.addEventListener("click", () => { modal.style.display = "flex"; });
});

closeBtn.onclick = () => { modal.style.display = "none"; };
window.onclick = (e) => {
	if (e.target === modal) { modal.style.display = "none"; }
};
</script>