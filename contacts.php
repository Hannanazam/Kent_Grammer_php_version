<?php include('header.php') ?>

<style>
	.add_top_30 .btn_1{
		background:#097e88;
		width: 50%;
	}
	p.add_top_30{
		text-align:right;
	}
	.add_top_30 .btn_1:hover{
		background:#ea693c;
	}
</style>
		<main>
			<section id="hero_in" class="contacts">
				<div class="wrapper">
					<div class="container">
						<h1 class="fadeInUp"><span></span>Contact KGS</h1>
					</div>
				</div>
			</section>
			<!--/hero_in-->

			<div class="contact_info">
				<div class="container">
					<ul class="clearfix">
						<li>
							<i class="pe-7s-map-marker"></i>
							<h4>Address</h4>
							<span>PO Box 97845 Baker st. 567, Los Angeles<br>California - US.</span>
						</li>
						<li>
							<i class="pe-7s-mail-open-file"></i>
							<h4>Email address</h4>
							<span>admission@KGS.com - info@KGS.com<br><small>Monday to Friday 9am -
									7pm</small></span>

						</li>
						<li>
							<i class="pe-7s-phone"></i>
							<h4>Contacts info</h4>
							<span>+ 61 (2) 8093 3402 + 61 (2) 8093 3402<br><small>Monday to Friday 9am -
									7pm</small></span>
						</li>
					</ul>
				</div>
			</div>
			<!--/contact_info-->

			<div class="bg_color_1">
				<div class="container margin_120_95">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="map_contact">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d924234.6302710465!2d66.59495074892502!3d25.19338946981612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e06651d4bbf%3A0x9cf92f44555a0c23!2sKarachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1632986222921!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</div>
							<!-- /map -->
						</div>
						<div class="col-lg-6">
							<h4>Send a message</h4>
							<p>For any question and queries?</p>
							<div id="message-contact"></div>
							<form method="post" action="assets/contact.php" id="contactform" autocomplete="off">
								<div class="row">
									<div class="col-md-6">
										<span class="input">
											<input class="input_field" type="text" id="name_contact"
												name="name_contact">
											<label class="input_label">
												<span class="input__label-content">Your Name</span>
											</label>
										</span>
									</div>
									<div class="col-md-6">
										<span class="input">
											<input class="input_field" type="text" id="lastname_contact"
												name="lastname_contact">
											<label class="input_label">
												<span class="input__label-content">Last name</span>
											</label>
										</span>
									</div>
								</div>
								<!-- /row -->
								<div class="row">
									<div class="col-md-6">
										<span class="input">
											<input class="input_field" type="email" id="email_contact"
												name="email_contact">
											<label class="input_label">
												<span class="input__label-content">Your email</span>
											</label>
										</span>
									</div>
									<div class="col-md-6">
										<span class="input">
											<input class="input_field" type="text" id="phone_contact"
												name="phone_contact">
											<label class="input_label">
												<span class="input__label-content">Your telephone</span>
											</label>
										</span>
									</div>
								</div>
								<!-- /row -->
								<span class="input">
									<textarea class="input_field" id="message_contact" name="message_contact"
										style="height:150px;"></textarea>
									<label class="input_label">
										<span class="input__label-content">Your message</span>
									</label>
								</span>
								<p class="add_top_30 submit_btn"><input type="submit" value="Submit" class="btn_1 rounded"
										id="submit-contact"></p>
							</form>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bg_color_1 -->
		</main>
		<!--/main-->

		<?php include('footer.php') ?>
