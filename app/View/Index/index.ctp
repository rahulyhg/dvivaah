<section class="wrapper-max color-background-section banner">
    <div class="container">
    	 <?php echo $this->element('action-msg-div');?>
      <div class="slider-container">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="<?php echo $this->webroot;?>img/image2.jpg" alt="...">
              <div class="carousel-caption"></div>
            </div>

            <div class="item">
              <img src="<?php echo $this->webroot;?>img/image2.jpg" alt="...">
              <div class="carousel-caption"></div>
            </div>

            <div class="item">
              <img src="<?php echo $this->webroot;?>img/image2.jpg" alt="...">
              <div class="carousel-caption"></div>
            </div>

          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>

<section class="wrapper-max search-profile  add-background">
<div class="container">
	<div class="content-style">
  	 <form action="<?php echo PAGE_SEARCH_PROFILE;?>" method="get"> 
	<h2><?php echo __('Find Your Special Someone..!');?></h2>
	<div class="row select-bride-groom">
	  <div class="six columns">            
		<label class="u-pull-right"><input type="radio" checked="checked" name="user_type" value="0"> <?php echo __('Bride (Vadhu)');?></label>            
	  </div>
	  <div class="six columns">            
		<label><input type="radio" name="user_type" value="1"> <?php echo __('Groom (Var)');?></label>            
	  </div>          
	</div>
	
	<div class="row">
	  <div class="six columns">
		<label><?php echo __('Age From');?></label>
		<select class="u-full-width" type="select" name="age[]">
        	<?php echo $this->element('age-options');?>
		</select>           
	  </div>
	  <div class="six columns">
		<label><?php echo __('Age To');?></label> 
		<select  class="u-full-width" type="select" name="age[]">
		  <?php echo $this->element('age-options');?>
		</select>           
	  </div>
	</div>

	<div class="row">
	  <div class="six columns">
		<label><?php echo __('Subcaste');?></label>
		<select class="u-full-width" name="sub_cast">
        	<?php echo $this->element('subcaste-options');?>
        </select>
	  </div>
	  <div class="six columns">
		<label><?php echo __('Education');?></label>
		<select class="u-full-width" name="education">
        	<?php echo $this->element('education-options');?>
        </select>
	  </div>
	</div>

	<div class="row search-btn-container">
	  <input type="submit" class="button button-primary" name="search" value="<?php echo __('SEARCH');?>">
	</div>

  </form>
  	</div>
</div>
</section>

<section class="wrapper-max color-background-section subscription-plans">
<div class="container">
  <div class="row">
	<div class="four columns three-months">
	  <div class="subscription-months">
		<p>3 <?php echo __('Months');?></p>
	  </div>
	  <span class="rupee"><sub>&#x20B9;</sub>300</span>
	  <p><?php echo __('Get four profile contact details each month');?></p>
	  <p><a class="subscription-more-details" href="#."><?php echo __('Read More');?></a></p>
	  <a class="button button-primary" href="<?php echo PAGE_REGISTER;?>"><?php echo __('REGISTER NOW');?></a>
	</div>
	<div class="four columns six-months">
	   <div class="subscription-months">
		<p>6 <?php echo __('Months');?></p>
	  </div>
	  <span class="rupee"><sub>&#x20B9;</sub>500</span>
	  <p><?php echo __('Get four profile contact details each month');?></p>
	  <p><a class="subscription-more-details" href="#."><?php echo __('Read More');?></a></p>
	  <a class="button button-primary" href="<?php echo PAGE_REGISTER;?>"><?php echo __('REGISTER NOW');?></a>
	</div>

	<div class="four columns thelve-months">
	   <div class="subscription-months">
		<p>1 <?php echo __('Year');?></p>
	  </div>
	  <span class="rupee"><sub>&#x20B9;</sub>800</span>
	  <p><?php echo __('Get four profile contact details each month');?></p>
	  <p><a class="subscription-more-details" href="#."><?php echo __('Read More');?></a></p>
	  <a class="button button-primary" href="<?php echo PAGE_REGISTER;?>"><?php echo __('REGISTER NOW');?></a>
	</div>

  </div>
</div>
</section>