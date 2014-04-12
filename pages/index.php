<?php include('../includes/header.php'); ?>
  <body style="height: 100vh;" class="gray-background">   
  	<div class="row" style="height: 100vh;">
	 	<div id="carousel-form" class="carousel slide col-md-12" data-ride="carousel" data-interval="false" style="height: 100vh;">
			<div class="carousel-inner">
			    <div class="item active black-background">
			    	<div class="container carousel-content ">
			    		<h1 class="text-center line-bot">SNAP4M</h1>
			    		<p class="light-green text-center">
			    			The future of completing  <br /> 
			    			forms and ID verification <br />
			    			within seconds<br />
			    		</p>	
			    	</div>	
			    	<div class="control-container padding-right-0">
			    		<div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-2 col-xs-6 vitanneo-container">
			    			<img src="../images/vitanneo.png" class="img-responsive vitanneo"/>
			    		</div>
				    	<button class="pull-right next-button" href="#carousel-form" data-slide-to="1" style="bottom: 0;">
							ENTER
				  		</button>	
			  		</div>	      
			    </div>
			    <div class="item gray-background">
			    	<form id="info-form">
			    	<div class="container carousel-content padding-top-50">
			    		<p class="text-center"><img src="../images/one.jpg"> Please enter your information.</p>				    		
					    <div class="form-group  margin-top-50  col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
			    			<div class="controls">
			    				<input class="form-control input-lg" type="number" pattern="[0-9\]*" placeholder="Member Number" name="member_number">	
			    			</div>	
					    </div>	
			    		<div class="form-group col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
			    			<div class="controls">
			    				<input class="form-control input-lg" type="text" placeholder="First Name" name="first_name" required minlength="2" maxlength="20">
			    			</div>
			    		</div>
			    		<div class="form-group col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
			    			<div class="controls">
			    				<input class="form-control input-lg" type="text" placeholder="Last Name" name="last_name" required minlength="2" maxlength="20">
			    			</div>			    				
			    		</div>
			            <div class="form-group col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
			                <div class='controls' id='birthdate-container'>
			                    
			                </div>
			            </div>			    		
		    				    		 						    					    		
			    	</div>	
			    	<div class="control-container padding-right-0">
			    		<div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-2 col-xs-6 vitanneo-container">
			    			<img src="../images/vitanneo.png" class="img-responsive vitanneo"/>
			    		</div>			    		
				    	<button class="pull-right next-button" type="submit" id="info-button" style="bottom: 0;">
							NEXT
				  		</button>
			  		</div>
			  		</form> 				    				    				      
			    </div>	
			    <div class="item gray-background">
			    	<form id="contact-form">
			    	<div class="container carousel-content padding-top-50">
			    		<p class="text-center"><img src="../images/2.jpg"> Thank you, <span class="txt-first-name"></span>.  Please enter your contact details. </p>	
			    		<div class="form-group  margin-top-50 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
			    			<div class="controls">
			    				<input class="form-control input-lg" type="number" pattern="[0-9\]*" placeholder="Phone number" name="phone_number">
			    			</div>
			    		</div>
			    		<div class="form-group col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
			    			<div class="controls">
			    				<input class="form-control input-lg" type="number" pattern="[0-9\]*" placeholder="Mobile" name="mobile" >
			    			</div>
			    		</div>
			    		<div class="form-group col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
			    			<div class="controls">
			    				<input class="form-control input-lg" type="text" placeholder="Address" name="address">	
			    			</div>				    			  
			    		</div>
			    		<div class="form-group col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
			    			<div class="controls">
			    				<input class="form-control input-lg" type="email" placeholder="Email" name="email" required="" autocomplete="off">
			    			</div>
			    		</div>			    					    							    					    		
			    	</div>	
			    	<div class="control-container padding-right-0">
			    		<div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-2 col-xs-6 vitanneo-container">
			    			<img src="../images/vitanneo.png" class="img-responsive vitanneo"/>
			    		</div>			    		
				    	<button class="pull-right next-button" type="submit" id="contact-button" style="bottom: 0;">
							NEXT
				  		</button>
			  		</div>
			  		</form>				    				      
			    </div>	
			    <div class="item gray-background">
			    	<div class="container carousel-content padding-top-50">
			    		<p class="text-center"><img src="../images/3.jpg"> Next Step, please enter your fund information. </p>	
			    		<div class="form-group margin-top-50 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
			    			<input class="form-control input-lg" type="text" placeholder="Name of Fund" name="name_of_fund_1">
			    		</div>
			    		<div class="form-group col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 hidden">
			    			<input class="form-control input-lg" type="text" placeholder="Name of Fund" name="name_of_fund_2">
			    		</div>
			    		<div class="form-group col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 hidden">
			    			<input class="form-control input-lg" type="text" placeholder="Name of Fund" name="name_of_fund_3">
			    		</div>
			    		<div class="form-group col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 hidden">
			    			<input class="form-control input-lg" type="text" placeholder="Name of Fund" name="name_of_fund_4">
			    		</div>
			    		<div class="form-group col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 hidden">
			    			<input class="form-control input-lg" type="text" placeholder="Name of Fund" name="name_of_fund_5">
			    		</div>			    					    					    					    		
			    		<div class="form-group col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
			    			<button class="btn bnt-large btn-primary" id="btn-add-fund">Add Another Fund</button> 
			    		</div>					    					    		
			    	</div>	
			    	<div class="control-container padding-right-0">
			    		<div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-2 col-xs-6 vitanneo-container">
			    			<img src="../images/vitanneo.png" class="img-responsive vitanneo"/>
			    		</div>			    		
				    	<button class="pull-right next-button" href="#carousel-form" data-slide-to="4" style="bottom: 0;">
							NEXT
				  		</button>
			  		</div>				    				      
			    </div>	
			    <div class="item gray-background">
			    	<div class="container carousel-content padding-top-50">
						<!--form id="previous-form"-->
			    		<p class="text-center"><img src="../images/3.jpg"> Next Step, please enter your fund information. </p>	
			    		<div class="form-group margin-top-50 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 font-16">
			    			<label>Could your previous funds hold either an old address or previous name for you?</label>
			    			 <label class="radio-inline">
							    <input type="radio" name="radio-fund" id="radio-fund-y" value="y">
							    Yes
  							</label>
  			    			 <label class="radio-inline margin-left-50">
							    <input type="radio" name="radio-fund" id="radio-fund-n" value="n" checked>
							    No
  							</label>							
			    		</div>
			    		<div class="form-group col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12" id="previous-name-row" style="display: none;">
			    			<input class="form-control input-lg" type="text" placeholder="Previous Name" name="previous_name">
			    		</div>
			    		<div class="form-group col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12" id="previous-address-row" style="display: none;">
			    			<input class="form-control input-lg" type="text" placeholder="Previous Address" name="previous_address">
			    		</div>
			    						    					    		
			    	</div>	
			    	<div class="control-container padding-right-0">
			    		<div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-2 col-xs-6 vitanneo-container">
			    			<img src="../images/vitanneo.png" class="img-responsive vitanneo"/>
			    		</div>			    		
				    	<button class="pull-right next-button" href="#carousel-form" data-slide-to="5" style="bottom: 0;">
							NEXT
				  		</button>
			  		</div>				    				      
			    </div>				    
			    <div class="item gray-background">
			    	<div class="container carousel-content padding-top-50">
			    		<p class="text-center"><img src="../images/4.jpg"> Terms and Condition </p>	 
						<ul class="terms">
							<li>I have read and understood this form and the information provided is accurate.</li>
							<li>I am aware I may ask any of my super funds above, or XXX Super, for information 
								about fees, charges, or any other information about the effect any of these transfers 
								may have on my benefits such as insurance. I don’t require any further information.
							<li>I am aware that insurance policies held with my other superfunds may cease as a 
							part of this transfer process and I have assessed my insurance needs and am comfortable 
							that my insurance situation will be adequate after these transfers take place.</li>
							<li>I discharge my super funds from whom I am transferring my super, of all further 
								liability in respect of the benefits paid and transferred to XXX Super.									
							</li>
							<li>I discharge my super funds from whom I am transferring my super, of all further 
								liability in respect of the benefits paid and transferred to XXX Super.									
							</li>
							<li>I request and consent to the transfer of the above super accounts into my XXX 
								Super account and authorise each of the funds named in this form, to give effect to these transfers.									
							</li>
							<li>I authorise XXX to conduct all necessary searches for Lost Super that I may have and transfer 
								these Funds to XXX Super.									
							</li>
						</ul> 
 						<!--div class="row">
	 			    		<div class="col-md-2 col-sm-3 col-xs-6 padding-top-50">
				    			<button type="button" class="btn btn-warning" href="#carousel-form" data-slide-to="0" style="width: 100%" >CANCEL</button>
				    		</div>							
 						</div-->					    					    		

			    	</div>
			    		
			    	<div class="control-container padding-right-0">
			    		<div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-2 col-xs-6 vitanneo-container-terms">
			    			<button type="button" class="btn btn-lg btn-warning row pull-right visible-xs" href="#carousel-form" data-slide-to="0" >CANCEL</button>
			    			<img src="../images/vitanneo.png" class="img-responsive vitanneo padding-top-xs-40"/>
			    		</div>
			    		<button type="button" class="btn btn-lg btn-warning row hidden-xs col-md-1 col-md-offset-3" href="#carousel-form" data-slide-to="0" >CANCEL</button>			    		
				    	<button class="pull-right next-button" href="#carousel-form" data-slide-to="6" style="bottom: 0;">
							AGREE
				  		</button>
			  		</div>				    				      
			    </div>				    
			    <div class="item gray-background">
			    	<div class="container carousel-content padding-top-50 ">
			    		<p class="text-center"><img src="../images/5.jpg"> We're almost done.  Please sign this form. </p>	
			    		<div class="form-group signature-container margin-top-50 col-md-7 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 ">
			    			<div id="signature"></div>
			    		</div>				    					    		
			    	</div>	
			    	<div class="control-container padding-right-0">
			    		<div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-2 col-xs-6 vitanneo-container">
			    			<img src="../images/vitanneo.png" class="img-responsive vitanneo"/>
			    		</div>				    		
				    	<button class="pull-right next-button" id="sign-button" style="bottom: 0;">
				    		NEXT
				  		</button>
			  		</div>			    				      
			    </div>	
			    <div class="item gray-background">
			    	<div class="container carousel-content padding-top-50 ">
			    		<p class="text-center"><img src="../images/5.jpg"> Please review your information.</p>	
			    		<div class="form-group  col-md-7 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 font-16">
			    			<p><span class="label">MEMBER NUMBER:</span><span id="text-member-number"></span></p>
			    			<p><span class="label">NAME:</span><span id="text-name"></span></p>
			    			<p><span class="label">BIRTHDATE:</span><span id="text-birthdate"></span></p>
			    			<p><span class="label">PHONE NUMBER:</span><span id="text-phone-number"></span></p>
			    			<p><span class="label">MOBILE NUMBER:</span><span id="text-mobile-number"></span></p>
			    			<p><span class="label">ADDRESS:</span><span id="text-address"></span></p>
			    			<p><span class="label">EMAIL:</span><span id="text-email"></span></p>
			    			<p><span class="label">NAME OF FUND:</span><span id="text-name-of-fund"></span></p>
			    			<p><span class="label">PREVIOUS NAME:</span><span id="text-previous-name"></span></p>
			    			<p><span class="label">PREVIOUS ADDRESS:</span><span id="text-previous-address"></span></p>
			    			<p><span class="label">SIGNATURE:</span><img src="" id="image-signature"/></p>
			    		</div>				    					    		
			    	</div>	
			    	<div class="control-container padding-right-0">
			    		<div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-2 col-xs-6 vitanneo-container">
			    			<img src="../images/vitanneo.png" class="img-responsive vitanneo"/>
			    		</div>				    		
				    	<button class="pull-right submit-button" id="submit-button" style="bottom: 0;">
				  		</button>
			  		</div>			    				      
			    </div>				    
			    <div class="item green-background">
			    	<div class="container carousel-content padding-top-50">
			    		<p class="text-center"> Thank you, <span class="txt-first-name"></span>. </p>
			    		<div class="col-md-6 margin-top-50 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
			    			<a class="btn btn-social btn-fb" href="http://www.facebook.com/sharer.php?s=100&p[url]=http://snap4m.com&p[title]=I successfully consolidated my super to XXX Super within seconds with SNAP4M">
			    				<i class="fa fa-facebook"></i>
			    				Share on Facebook
			    			</a>
			    		</div>	
			    		<div class="col-md-6 margin-top-10 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
			    			<a class="btn btn-social btn-twitter" href="http://twitter.com/share?text=I%20successfully%20consolidated%20my%20super%20to%20XXX%20Super%20within%20seconds%20with%20SNAP4M&url=http%3A//snap4m.com">
			    				<i class="fa fa-twitter"></i>
			    				Share on Twitter
			    			</a>
			    		</div>
			    		<div class="col-md-6 margin-top-10 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
			    			<a class="btn btn-social btn-google-plus" href="https://plus.google.com/share?url=http://snap4m.com">
			    				<i class="fa fa-google-plus"></i>
			    				Share on Google+
			    			</a>
			    		</div>	
			    		<div class="col-md-6 margin-top-10 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
			    			<a class="btn btn-social btn-linkedin" href="http://www.linkedin.com/shareArticle?mini=true&url=http%3A//snap4m.com.com/snap4ms&title=I%20successfully%20consolidated%20my%20super%20to%20XXX%20Super%20within%20seconds%20with%20SNAP4M&source=LinkedIn">  
			    				<i class="fa fa-linkedin"></i>
			    				Share on LinkedIn
			    			</a>
			    		</div>				    					    						    			    					    		
			    	</div>	
			    	<div class="control-container padding-right-0 green-background">
			    		<div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-2 col-xs-6 vitanneo-container">
			    			<img src="../images/vitanneo.png" class="img-responsive vitanneo"/>
			    		</div>			    		
			  		</div>				    				    				      
			    </div>	
		    			    			    			    		    	    
		  	</div>	
  			<!--a class="left carousel-control" href="#carousel-form" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			  </a-->

		</div>	 		
  	</div>	
<script src="../js/scripts.js"></script>			
<?php include('../includes/footer.php'); ?>