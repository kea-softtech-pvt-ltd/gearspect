<?php
    $pageWords = "Gear cutting machine, gear measuring instruments, gearspect, Gear Hobbing Machines, Gear Shaping Machines, Bevel Gear Grinding Machines, geometric deviation of cylindrical gears and gear cutting tools";
    $pageDescription = "GearSpect-We are leading gear service provider";
    $pageTitle = "GearSpect - Career";
	include_once('header.php');
	
	$message = "";
	if(isset($_POST['submit']) && $_POST['submit'] !="")
	{
		$varfname = $_POST['fname'];
		$varlname = $_POST['lname'];
		$emailname = $_POST['emailname'];
		$phonename = $_POST['phonename'];
		$form_message = $_POST['form_message'];
		
		$target_dir = "upload/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		
		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 500000) 
		{
			$message = "Sorry, your file is too large.";
		}
		
		// Allow certain file formats
		if($imageFileType != "pdf" && $imageFileType != "doc" && $imageFileType != "docx" && $imageFileType != "PDF" ) 
		{
			$message = "Sorry, pdf, doc and docx files are allowed.";
		} 
		else 
		{
			if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
			{	
				$filename = basename($_FILES["fileToUpload"]["name"]);
				$path = $target_dir;
				$file = $path . $filename;

				$mailto = ' sales.info@gearspect.com';
				$subject = "Career Enquiry by ".$varfname;
				$message_text = "Full Name : ".$varfname." ".$varlname."<br>Email :".$emailname."<br>Phone : ".$phonename."<br>Message :".$form_message;
				
				$content = file_get_contents($file);
				$content = chunk_split(base64_encode($content));

				// a random hash will be necessary to send mixed content
				$separator = md5(time());

				// carriage return type (RFC)
				$eol = "\r\n";

				// main header (multipart mandatory)
				$headers = "From: sales.info@gearspect.com" . $eol;
				$headers .= "MIME-Version: 1.0" . $eol;
				$headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
				$headers .= "Content-Transfer-Encoding: 7bit" . $eol;
				$headers .= "This is a MIME encoded message." . $eol;

				// message
				$body = "--" . $separator . $eol;
				$body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
				$body .= "Content-Transfer-Encoding: 8bit" . $eol;
				$body .= $message_text . $eol;

				// attachment
				$body .= "--" . $separator . $eol;
				$body .= "Content-Type: application/octet-stream; name=\"" . $filename . "\"" . $eol;
				$body .= "Content-Transfer-Encoding: base64" . $eol;
				$body .= "Content-Disposition: attachment" . $eol;
				$body .= $content . $eol;
				$body .= "--" . $separator . "--";
				
				//SEND Mail
				if (mail($mailto, $subject, $body, $headers)) 
				{
					$message = "Thank you for your interest. We will get back to you soon.";
					unlink($target_file);
				}
			} 
			else 
			{
				$message =  "Sorry, there was an error uploading your file.";
			}
		}		
	}
?>   

<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url(images/resources/breadcrumb-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title text-center">
                       <h1>Career</h1>
                    </div>
                </div>
            </div>
        </div>
	</div>
</section>
<!--End breadcrumb area-->     

<!--Start contact form area-->
<section class="contact-info-area">
    <div class="container">
        <div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
				<div class="contact-form">
					<div class="related-product">
						<div class="title">
							<h3>GearSpect Career</h3>
						</div>
					</div>                
					<?php if(!empty($message)) { ?>
					<div class="alert alert-success text-center"><?php echo $message; ?></div> 
                    <?php } ?>
					<form id="contact-form" name="contact_form" class="default-form" action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-box">   
                                    <input type="text" name="fname" value="" placeholder="First Name" required="">
                                    <div class="icon">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </div>
                                </div>    
                            </div>
                            <div class="col-md-6">
                                <div class="input-box">   
                                    <input type="text" name="lname" value="" placeholder="Last Name" required="">
                                    <div class="icon">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </div>
                                </div>    
                            </div>     
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-box"> 
                                    <input type="email" name="emailname" value="" placeholder="Email Address" required="">
                                    <div class="icon">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </div>
                                </div>    
                            </div>
                            <div class="col-md-6">
                                <div class="input-box"> 
                                    <input type="tel" required name="phonename" value="" placeholder="Phone">
                                    <div class="icon">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                    </div>
                                </div>    
                            </div>      
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-box">
                                    <input type="text" name="form_position" value="" placeholder="Position">
                                    <div class="icon">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
							<div class="col-md-6">
                                <div class="input-box">
									<span>Upload CV/Resume<span><br/>
                                    <input type="file" name="fileToUpload" value="" placeholder="Resume">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-box">    
                                    <textarea name="form_message" placeholder="Your Message..." required=""></textarea>
                                    <div class="icon">
                                        <i class="fa fa-comment" aria-hidden="true"></i>
                                    </div>
                                </div>   
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="button-box text-right">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                    <input class="btn-one" type="submit" data-loading-text="Please wait..." name="submit" value="Submit Here">    
                                </div>     
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End contact form area-->


<?php include_once('footer.php'); ?>