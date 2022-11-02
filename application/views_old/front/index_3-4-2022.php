<div class="hero-slider-with-category-container  mb-35">
		<div class="banner">
			
			<video autoplay muted loop id="myVideo">
  <source src="<?php echo base_url();?>/front_assets/Banner_Video_update.mp4" type="video/mp4">
 </video>
 <div class="content">
  <h1 class="displayf">Welcome to the web's comprehensive shroom library</h1>
  <h3  class="displayf">**For research purposes only, of course…</h3>
 </div>
			<!--<div class="row">
				<div class="col-lg-12 col-md-12">
					 
					<div class="slider-container">
					 
						<div class="hero-slider-two">				  
<?php foreach($slider as $view) { 
if($view->status ==1) {?>
							<div class="hero-slider-item  ">
								 <img src="<?php echo base_url();?>upload_images/<?php echo $view->image;?>" width="100%">
							</div>
<?php }} ?>

						</div>

						 
					</div>

					 
				</div>
			</div>-->
		</div>
	</div>
	
	
	<style>
 
 .banner { 
 
 position: relative;
 
 }
#myVideo {
	width:100%;
  position: relative;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}

 

#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}

.content {
text-align: center;
    position: absolute;
    top: 40%;
    left: 0;
    width: 67%;
    right: 0;
    margin: 0 auto;
   
}

.content h1 {
padding: 10px;
background: #00000085;
color: #fff;
}

.displayf {
  
  margin: 10px;
	}


.content h3 {
    padding: 10px;
  
  color: #000;
}


@media only screen and (max-width: 767px) {
	
 .content h1 {
    font-size: 15px;
    padding: 10px;
    background: #00000085;
    color: #fff;
    line-height: 20px;
}

.content h3 {
    line-height: 16px;
    padding: 10px;
    color: #000;
    font-size: 16px;
}
  
}

</style>

	<!--=====  End of Hero slider with category   ======-->


	<!--=============================================
	=            category slider         =
	=============================================-->

	<div class="slider category-slider mb-35">
		<div class="container">
			<div class="row">
			<div class="col-lg-3 "></div>
				<div class="col-lg-6 ">
					<!--=======  category slider section title  =======-->

						<div class="header-advance-search">
								<form action="<?php echo base_url();?>home/search" method="post">
									<input type="text" name="search" placeholder="Search for a Strain">
									<button type="submit"><span class="icon_search"></span></button>
								</form>
							</div> 
<br>
					<!--=======  End of category slider section title  =======-->

				</div>
			</div>
			
				<div class="category_type_search">
				<div class="row">
				<div class="col-lg-12">
					<!--=======  category slider section title  =======-->

					<div class="section-title">
						<h3>Explore by potency 
</h3>
					</div>

					<!--=======  End of category slider section title  =======-->

				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<!--=======  category container  =======-->

					<div class="category-slider-container">

					 	<div class="single-category">
							<div class="category_thumb">
								<a style="font-size:30px;" href="#" title="Fruits">
									🍄
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="#">  Potency<br>(weakest)</a>
								</h3>
							</div>
						</div> 
					
						<div class="single-category">
							<div class="category_thumb">
								<a style="font-size:30px;" href="#" title="Fruits">
									🍄🍄
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="#">  Potency<br>(Medium)</a>
								</h3>
							</div>
						</div> 
						
						<div class="single-category">
							<div class="category_thumb">
								<a style="font-size:30px;" href="#" title="Fruits">
									🍄🍄🍄
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="#">  Potency<br>(Strongest)</a>
								</h3>
							</div>
						</div> 
						
						
						<div class="single-category">
							<div class="category_thumb">
								<a style="font-size:30px;" href="#" title="Fruits">
									✨
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="#">  Vibe<br>(Euphoric )</a>
								</h3>
							</div>
						</div> 
						
						
						 
						<div class="single-category">
							<div class="category_thumb">
								<a style="font-size:30px;" href="#" title="Fruits">
									😔
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="#">  Vibe <br>(Introspective)</a>
								</h3>
							</div>
						</div> 
						
						 
						<div class="single-category">
							<div class="category_thumb">
								<a style="font-size:30px;" href="#" title="Fruits">
									🎬
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="#">  Vibe <br>(Visuals)</a>
								</h3>
							</div>
						</div> 
						
						<div class="single-category">
							<div class="category_thumb">
								<a style="font-size:30px;" href="#" title="Fruits">
									<img src="https://cdn2.iconfinder.com/data/icons/brain-shape-mind-2/64/Neural-brain-_sensorial-_sensory-nervous-512.png" width="30px">
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="#">  Vibe <br>(Sensory )</a>
								</h3>
							</div>
						</div> 
						
						
						<div class="single-category">
							<div class="category_thumb">
								<a style="font-size:30px;" href="#" title="Fruits">
									<img src="https://cdn-icons-png.flaticon.com/512/2065/2065064.png" width="30px">
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="#">  Vibe <br>(Social )</a>
								</h3>
							</div>
						</div> 
							
					<div class="single-category">
							<div class="category_thumb">
								<a style="font-size:30px;" href="#" title="Fruits">
									<img src="https://cdn-icons-png.flaticon.com/512/1974/1974058.png" width="30px">
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="#">  Vibe <br>(Relaxed)</a>
								</h3>
							</div>
						</div> 
						
								
					 <div class="single-category">
							<div class="category_thumb">
								<a style="font-size:30px;" href="#" title="Fruits">
									💰
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="#">  Cost <br>(Cheapest)</a>
								</h3>
							</div>
						</div>
						
						 <div class="single-category">
							<div class="category_thumb">
								<a style="font-size:30px;" href="#" title="Fruits">
									💰💰
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="#">  Cost <br>(Medium)</a>
								</h3>
							</div>
						</div>
						
						 <div class="single-category">
							<div class="category_thumb">
								<a style="font-size:30px;" href="#" title="Fruits">
									💰💰💰
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="#">  Cost <br>(Expensive)</a>
								</h3>
							</div>
						</div>
						
						 <div class="single-category">
							<div class="category_thumb">
								<a style="font-size:30px;" href="#" title="Fruits">
									😀
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="#">  Cultivation Difficulty <br>(Easy)</a>
								</h3>
							</div>
						</div>
						 
						 	 <div class="single-category">
							<div class="category_thumb">
								<a style="font-size:30px;" href="#" title="Fruits">
									😬
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="#">  Cultivation Difficulty <br>(Hard)</a>
								</h3>
							</div>
						</div>
						 
						 
 

					 
						<!--=======  End of single category  =======-->

					</div>

					<!--=======  End of category container  =======-->

				</div>
			</div>
		
		</div>
		<br>
		
		<div class="category_type_search">
				<div class="row">
				<div class="col-lg-12">
					<!--=======  category slider section title  =======-->

					<div class="section-title">
						<h3>Explore by potency 
</h3>
					</div>

					<!--=======  End of category slider section title  =======-->

				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<!--=======  category container  =======-->

					<div class="category-slider-container">

					 	<div class="single-category">
							<div class="category_thumb">
								<a style="font-size:30px;" href="#" title="Fruits">
									🍄
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="#">  Potency<br>(weakest)</a>
								</h3>
							</div>
						</div> 
					
						<div class="single-category">
							<div class="category_thumb">
								<a style="font-size:30px;" href="#" title="Fruits">
									🍄🍄
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="#">  Potency<br>(Medium)</a>
								</h3>
							</div>
						</div> 
						
						<div class="single-category">
							<div class="category_thumb">
								<a style="font-size:30px;" href="#" title="Fruits">
									🍄🍄🍄
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="#">  Potency<br>(Strongest)</a>
								</h3>
							</div>
						</div> 
						
						
						<div class="single-category">
							<div class="category_thumb">
								<a style="font-size:30px;" href="#" title="Fruits">
									✨
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="#">  Vibe<br>(Euphoric )</a>
								</h3>
							</div>
						</div> 
						
						
						 
						<div class="single-category">
							<div class="category_thumb">
								<a style="font-size:30px;" href="#" title="Fruits">
									😔
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="#">  Vibe <br>(Introspective)</a>
								</h3>
							</div>
						</div> 
						
						 
						<div class="single-category">
							<div class="category_thumb">
								<a style="font-size:30px;" href="#" title="Fruits">
									🎬
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="#">  Vibe <br>(Visuals)</a>
								</h3>
							</div>
						</div> 
						
						<div class="single-category">
							<div class="category_thumb">
								<a style="font-size:30px;" href="#" title="Fruits">
									<img src="https://cdn2.iconfinder.com/data/icons/brain-shape-mind-2/64/Neural-brain-_sensorial-_sensory-nervous-512.png" width="30px">
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="#">  Vibe <br>(Sensory )</a>
								</h3>
							</div>
						</div> 
						
						
						<div class="single-category">
							<div class="category_thumb">
								<a style="font-size:30px;" href="#" title="Fruits">
									<img src="https://cdn-icons-png.flaticon.com/512/2065/2065064.png" width="30px">
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="#">  Vibe <br>(Social )</a>
								</h3>
							</div>
						</div> 
							
					<div class="single-category">
							<div class="category_thumb">
								<a style="font-size:30px;" href="#" title="Fruits">
									<img src="https://cdn-icons-png.flaticon.com/512/1974/1974058.png" width="30px">
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="#">  Vibe <br>(Relaxed)</a>
								</h3>
							</div>
						</div> 
						
								
					 <div class="single-category">
							<div class="category_thumb">
								<a style="font-size:30px;" href="#" title="Fruits">
									💰
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="#">  Cost <br>(Cheapest)</a>
								</h3>
							</div>
						</div>
						
						 <div class="single-category">
							<div class="category_thumb">
								<a style="font-size:30px;" href="#" title="Fruits">
									💰💰
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="#">  Cost <br>(Medium)</a>
								</h3>
							</div>
						</div>
						
						 <div class="single-category">
							<div class="category_thumb">
								<a style="font-size:30px;" href="#" title="Fruits">
									💰💰💰
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="#">  Cost <br>(Expensive)</a>
								</h3>
							</div>
						</div>
						
						 <div class="single-category">
							<div class="category_thumb">
								<a style="font-size:30px;" href="#" title="Fruits">
									😀
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="#">  Cultivation Difficulty <br>(Easy)</a>
								</h3>
							</div>
						</div>
						 
						 	 <div class="single-category">
							<div class="category_thumb">
								<a style="font-size:30px;" href="#" title="Fruits">
									😬
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="#">  Cultivation Difficulty <br>(Hard)</a>
								</h3>
							</div>
						</div>
						 
						 
 

					 
						<!--=======  End of single category  =======-->

					</div>

					<!--=======  End of category container  =======-->

				</div>
			</div>
		
		</div>
		<br>
		</div>
	</div>

	<!--=====  End of category slider  ======-->

	<!--=============================================
	=            Double banner          =
	=============================================

	<div class="double-banner-section mb-35">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 mb-xs-35">
				 

					<div class="single-banner">
						<a href="#">
							<img width="100%" src="<?php echo base_url();?>front_assets/images/banners/home2-banner1-1.png" class="img-fluid" alt="">
						</a>
					</div>

			 
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					 

					<div class="single-banner">
						<a href="#">
							<img width="100%"   src="<?php echo base_url();?>front_assets/images/banners/home2-banner1-2.png" class="img-fluid" alt="">
						</a>
					</div>

					 
				</div>
			</div>
		</div>
	</div>

	 -->

	<div class="  mb-80   "  >
		  <div data-test="page-section" data-section-theme="black-bold" class="page-section
    
      layout-engine-section
    
    background-width--full-bleed
    
      section-height--large
    
    
      content-width--wide
    
    horizontal-alignment--left
    vertical-alignment--top
    
    
    black-bold" data-section-id="615e0ef98ae2ad67cbcf8364" data-controller="SectionWrapperController" data-current-styles="{
                                      &quot;backgroundImage&quot;: {
                                        &quot;id&quot;: &quot;616758491647a71aabaa147f&quot;,
                                        &quot;recordType&quot;: 2,
                                        &quot;addedOn&quot;: 1634162761990,
                                        &quot;updatedOn&quot;: 1636927408944,
                                        &quot;workflowState&quot;: 1,
                                        &quot;publishOn&quot;: 1634162761990,
                                        &quot;authorId&quot;: &quot;5fb59f16309f4c7cc84a1d09&quot;,
                                        &quot;systemDataId&quot;: &quot;0c4ac72d-6d5b-4eef-8eff-d9cc3f7ca1ac&quot;,
                                        &quot;systemDataVariants&quot;: &quot;1894x1060,100w,300w,500w,750w,1000w,1500w&quot;,
                                        &quot;systemDataSourceType&quot;: &quot;PNG&quot;,
                                        &quot;filename&quot;: &quot;Screen Shot 2021-10-13 at 5.57.44 PM.png&quot;,
                                        &quot;mediaFocalPoint&quot;: {
                                          &quot;x&quot;: 0.5,
                                          &quot;y&quot;: 0.5,
                                          &quot;source&quot;: 3
                                        },
                                        &quot;colorData&quot;: {
                                          &quot;topLeftAverage&quot;: &quot;bbc3d0&quot;,
                                          &quot;topRightAverage&quot;: &quot;dedfe2&quot;,
                                          &quot;bottomLeftAverage&quot;: &quot;b7becb&quot;,
                                          &quot;bottomRightAverage&quot;: &quot;d2d5dd&quot;,
                                          &quot;centerAverage&quot;: &quot;50493f&quot;,
                                          &quot;suggestedBgColor&quot;: &quot;bcc3d0&quot;
                                        },
                                        &quot;urlId&quot;: &quot;038fnwkudetj4anxrs8z0od1thjqyk&quot;,
                                        &quot;title&quot;: &quot;&quot;,
                                        &quot;body&quot;: null,
                                        &quot;likeCount&quot;: 0,
                                        &quot;commentCount&quot;: 0,
                                        &quot;publicCommentCount&quot;: 0,
                                        &quot;commentState&quot;: 2,
                                        &quot;unsaved&quot;: false,
                                        &quot;author&quot;: {
                                          &quot;id&quot;: &quot;5fb59f16309f4c7cc84a1d09&quot;,
                                          &quot;displayName&quot;: &quot;Stefany Nieto&quot;,
                                          &quot;firstName&quot;: &quot;Stefany&quot;,
                                          &quot;lastName&quot;: &quot;Nieto&quot;,
                                          &quot;bio&quot;: &quot;&quot;
                                        },
                                        &quot;assetUrl&quot;: &quot;https://images.squarespace-cdn.com/content/v1/615e0ee28ae2ad67cbcf81da/0c4ac72d-6d5b-4eef-8eff-d9cc3f7ca1ac/Screen+Shot+2021-10-13+at+5.57.44+PM.png&quot;,
                                        &quot;contentType&quot;: &quot;image/png&quot;,
                                        &quot;items&quot;: [ ],
                                        &quot;pushedServices&quot;: { },
                                        &quot;pendingPushedServices&quot;: { },
                                        &quot;recordTypeLabel&quot;: &quot;image&quot;,
                                        &quot;originalSize&quot;: &quot;1894x1060&quot;
                                      },
                                      &quot;imageOverlayOpacity&quot;: 0.15,
                                      &quot;backgroundWidth&quot;: &quot;background-width--full-bleed&quot;,
                                      &quot;sectionHeight&quot;: &quot;section-height--large&quot;,
                                      &quot;customSectionHeight&quot;: 85,
                                      &quot;horizontalAlignment&quot;: &quot;horizontal-alignment--left&quot;,
                                      &quot;verticalAlignment&quot;: &quot;vertical-alignment--top&quot;,
                                      &quot;contentWidth&quot;: &quot;content-width--wide&quot;,
                                      &quot;sectionTheme&quot;: &quot;black-bold&quot;,
                                      &quot;sectionAnimation&quot;: &quot;none&quot;,
                                      &quot;backgroundMode&quot;: &quot;video&quot;,
                                      &quot;imageEffect&quot;: &quot;zoom&quot;
                                    }" data-animation="none" style="padding-top: 51px;" data-controllers-bound="SectionWrapperController" data-active="true">
  <div class="section-background">
  
    
      
        <div data-controller="VideoBackgroundNative" data-controllers-bound="VideoBackgroundNative">
          <div class="sqs-video-background-native content-fill" data-config-native-video="{
                                      &quot;id&quot;: &quot;61698b884fd91a562b0cf65f&quot;,
                                      &quot;recordType&quot;: 61,
                                      &quot;addedOn&quot;: 1634306952696,
                                      &quot;updatedOn&quot;: 1634306952696,
                                      &quot;authorId&quot;: &quot;5fb59f16309f4c7cc84a1d09&quot;,
                                      &quot;systemDataId&quot;: &quot;274e02f9-9c6d-4a9d-a5f7-028a1e2c1914&quot;,
                                      &quot;systemDataVariants&quot;: &quot;1920:1080,640:360&quot;,
                                      &quot;systemDataSourceType&quot;: &quot;mp4&quot;,
                                      &quot;filename&quot;: &quot;Chrome_Mushroom_in_Desert_1080p.mp4&quot;,
                                      &quot;body&quot;: null,
                                      &quot;likeCount&quot;: 0,
                                      &quot;commentCount&quot;: 0,
                                      &quot;publicCommentCount&quot;: 0,
                                      &quot;commentState&quot;: 1,
                                      &quot;author&quot;: {
                                        &quot;id&quot;: &quot;5fb59f16309f4c7cc84a1d09&quot;,
                                        &quot;displayName&quot;: &quot;Stefany Nieto&quot;,
                                        &quot;firstName&quot;: &quot;Stefany&quot;,
                                        &quot;lastName&quot;: &quot;Nieto&quot;,
                                        &quot;bio&quot;: &quot;&quot;
                                      },
                                      &quot;assetUrl&quot;: &quot;https://static1.squarespace.com/static/615e0ee28ae2ad67cbcf81da/t/61698b884fd91a562b0cf65f/1634306952696/Chrome_Mushroom_in_Desert_1080p.mp4&quot;,
                                      &quot;contentType&quot;: &quot;video/mp4&quot;,
                                      &quot;structuredContent&quot;: {
                                        &quot;_type&quot;: &quot;SqspHostedVideo&quot;,
                                        &quot;videoCodec&quot;: &quot;h264&quot;,
                                        &quot;alexandriaUrl&quot;: &quot;https://video.squarespace-cdn.com/content/v1/615e0ee28ae2ad67cbcf81da/274e02f9-9c6d-4a9d-a5f7-028a1e2c1914/{variant}&quot;,
                                        &quot;alexandriaLibraryId&quot;: &quot;615e0ee28ae2ad67cbcf81da&quot;,
                                        &quot;aspectRatio&quot;: 1.7777777777777777,
                                        &quot;durationSeconds&quot;: 4.004
                                      },
                                      &quot;videoCodec&quot;: &quot;h264&quot;,
                                      &quot;alexandriaUrl&quot;: &quot;https://video.squarespace-cdn.com/content/v1/615e0ee28ae2ad67cbcf81da/274e02f9-9c6d-4a9d-a5f7-028a1e2c1914/{variant}&quot;,
                                      &quot;alexandriaLibraryId&quot;: &quot;615e0ee28ae2ad67cbcf81da&quot;,
                                      &quot;aspectRatio&quot;: 1.7777777777777777,
                                      &quot;durationSeconds&quot;: 4.004,
                                      &quot;items&quot;: [ ],
                                      &quot;pushedServices&quot;: { },
                                      &quot;pendingPushedServices&quot;: { },
                                      &quot;recordTypeLabel&quot;: &quot;sqsp-hosted-video&quot;,
                                      &quot;originalSize&quot;: &quot;1920:1080&quot;
                                    }" data-config-playback-speed="0.5" data-config-filter="1" data-config-filter-strength="0">
  

  <div class="sqs-video-background-native__video-player video-player video-player--medium video-player--large"><div tabindex="0" class="plyr plyr--full-ui plyr--video plyr--html5 plyr--pip-supported plyr--playing plyr--hide-controls"><div class="plyr__controls" style=""></div><div class="plyr__video-wrapper"><video autoplay="" loop="" muted="" playsinline=""><source src="https://video.squarespace-cdn.com/content/v1/615e0ee28ae2ad67cbcf81da/274e02f9-9c6d-4a9d-a5f7-028a1e2c1914/mp4-h264-1920:1080" provider="html5" size="1080"><source src="https://video.squarespace-cdn.com/content/v1/615e0ee28ae2ad67cbcf81da/274e02f9-9c6d-4a9d-a5f7-028a1e2c1914/mp4-h264-640:360" provider="html5" size="360"></video><div class="plyr__poster" hidden=""></div></div><div class="plyr__captions"></div></div></div>
</div>

        </div>
      
    
  
  </div>
 
  
</div>
		 
		 </div>

	<!--=====  End of Featured product image gallery  ======-->


	<!--=============================================
	=            Multi sale slider         =
	=============================================-->

	<div class="slider multisale-slider mb-35">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--=======  multisale  slider section title  =======-->

					<div class="section-title">
						<h3>Favourite Strains</h3>
					</div>

					<!--=======  End of multisale slider section title  =======-->
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<!--=======  multi sale slider wrapper  =======-->

					<div class="multisale-slider-wrapper">
						<!--=======  single multisale slider product  =======-->
<?php foreach($product as $view) {
if($view->favourite ==1) {	?>
						<div class="gf-product multisale-slider-product">
							<div class="image">
								<a href="<?php echo base_url();?>home/product_detail/<?php echo  $view->id;?>">
									<span class="onsale">Favourite</span>
									
									<?php if($view->thumb_image) { ?>
									
									
									<img style="height:300px;" src="<?php echo base_url();?>upload_images/<?php echo  $view->thumb_image;?>" class="img-fluid" alt="">
									<?php } else { ?>
									<img style="height:300px;" src="<?php echo base_url();?>front_assets/dummy.png" class="img-fluid" alt="">
									<?php } ?>
								</a>
								
							</div>
						 
							<div class="product-content">
								<div class="product-categories">
									<div class="product-categories">
										<a href="#">Species : <?php echo  $view->species;?></a> <br>
										<a href="#">Potency : <?php echo  $view->potency;?></a> | 
										<a href="#">Cost : <?php echo  $view->cost;?></a>  <br>
										<a href="#">Cultivation difficulty : <?php echo  $view->cultivation_difficulty;?></a>  
									</div>
								</div>
								<h3 class="product-title"><a href="<?php echo base_url();?>home/product_detail/<?php echo  $view->id;?>"><?php echo $view->title;?></a></h3>
								 
							</div>

						</div>
 
<?php }} ?>
					</div>

					<!--=======  End of multi sale slider wrapper  =======-->
				</div>
			</div>
		</div>
	</div>


<div class="slider multisale-slider mb-35">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--=======  multisale  slider section title  =======-->

					<div class="section-title">
						<h3>Popular Strains</h3>
					</div>

					<!--=======  End of multisale slider section title  =======-->
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<!--=======  multi sale slider wrapper  =======-->

					<div class="multisale-slider-wrapper">
						<!--=======  single multisale slider product  =======-->
<?php foreach($product as $view) {
if($view->popular ==1) {	?>
						<div class="gf-product multisale-slider-product">
							<div class="image">
								<a href="<?php echo base_url();?>home/product_detail/<?php echo  $view->id;?>">
									<span class="onsale">Popular</span>
									
									<?php if($view->thumb_image) { ?>
									
									
									<img style="height:300px;" src="<?php echo base_url();?>upload_images/<?php echo  $view->thumb_image;?>" class="img-fluid" alt="">
									<?php } else { ?>
									<img style="height:300px;" src="<?php echo base_url();?>front_assets/dummy.png" class="img-fluid" alt="">
									<?php } ?>
								</a>
								
							</div>
						 
							<div class="product-content">
								<div class="product-categories">
									<div class="product-categories">
										<a href="#">Species : <?php echo  $view->species;?></a> |
										<a href="#">Potency : <?php echo  $view->potency;?></a>
									</div>
								</div>
								<h3 class="product-title"><a href="<?php echo base_url();?>home/product_detail/<?php echo  $view->id;?>"><?php echo $view->title;?></a></h3>
								 
							</div>

						</div>
 
<?php }} ?>
					</div>

					<!--=======  End of multi sale slider wrapper  =======-->
				</div>
			</div>
		</div>
	</div>
	<!--=====  End of Multi sale slider  ======-->

 


 
 