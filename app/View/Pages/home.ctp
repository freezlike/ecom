<div class="shoes-grid">

    <div class="wrap-in">
        <!---->
        <div class="slide-grid">
            <div class="slider">
                <div class="callbacks_container">
                    <ul class="rslides" id="slider">
                        <?php foreach ($promoted as $promot): ?>
                            <li>
                                <a href="<?php echo $this->Html->url(array('controller' => 'products', 'action' => 'show','slug'=>$promot['Product']['slug'])); ?>">
                                    <div class="banner-matter">
                                        <div class="col-md-5 banner-bag">
                                            <?php echo $this->Html->image($promot['Media'][0]['urlm'], array()); ?>
                                        </div>
                                        <div class="col-md-7 banner-off">							
                                            <h2><?php echo $promot['Product']['name'] ?></h2>
                                            <label><?php echo __('À'); ?> <b><?php echo $promot['Product']['price'] ?> €</b></label>
                                            <p>
                                                <?php echo $this->Text->truncate($promot['Product']['description'], 100) ?>
                                            </p>					
                                            <a href="<?php echo $this->Html->url(array('controller' => 'products', 'action' => 'show','slug'=>$promot['Product']['slug'])); ?>">
                                                <span class="on-get"><?php echo __("Voir plus"); ?></span>
                                            </a>
                                        </div>

                                        <div class="clearfix"> </div>
                                    </div>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <!---->

            <div class="shoes-grid-left">
                <a href="single.html">				 
                    <div class="col-md-6 con-sed-grid">

                        <div class=" elit-grid"> 

                            <h4>consectetur  elit</h4>
                            <label>FOR ALL PURCHASE VALUE</label>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, </p>
                            <span class="on-get">GET NOW</span>						
                        </div>						
                        <img class="img-responsive shoe-left" src="/img/sh.jpg" alt=" ">

                        <div class="clearfix"> </div>

                    </div>
                </a>
                <a href="single.html">	
                    <div class="col-md-6 con-sed-grid sed-left-top">
                        <div class=" elit-grid"> 
                            <h4>consectetur  elit</h4>
                            <label>FOR ALL PURCHASE VALUE</label>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, </p>
                            <span class="on-get">GET NOW</span>
                        </div>		
                        <img class="img-responsive shoe-left" src="/img/wa.jpg" alt=" ">

                        <div class="clearfix"> </div>
                    </div>
                </a>
                <div class="clearfix"> </div>
            </div>
            <div class="products">
                <h5 class="latest-product">LATEST PRODUCTS</h5>	
                <a class="view-all" href="product.html">VIEW ALL<span> </span></a> 		     
                <div class="clearfix"> </div>
            </div>
            <div class="product-left">
                <div class="col-md-4 chain-grid">
                    <a href="single.html"><img class="img-responsive chain" src="/img/ch.jpg" alt=" "></a>
                    <span class="star"> </span>
                    <div class="grid-chain-bottom">
                        <h6><a href="single.html">Lorem ipsum dolor</a></h6>
                        <div class="star-price">
                            <div class="dolor-grid"> 
                                <span class="actual">300$</span>
                                <span class="reducedfrom">400$</span>
                                <span class="rating">
                                    <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
                                    <label for="rating-input-1-5" class="rating-star1"> </label>
                                    <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
                                    <label for="rating-input-1-4" class="rating-star1"> </label>
                                    <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
                                    <label for="rating-input-1-3" class="rating-star"> </label>
                                    <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
                                    <label for="rating-input-1-2" class="rating-star"> </label>
                                    <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
                                    <label for="rating-input-1-1" class="rating-star"> </label>
                                </span>
                            </div>
                            <a class="now-get get-cart" href="#">ADD TO CART</a> 
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 chain-grid">
                    <a href="single.html"><img class="img-responsive chain" src="/img/ba.jpg" alt=" "></a>
                    <span class="star"> </span>
                    <div class="grid-chain-bottom">
                        <h6><a href="single.html">Lorem ipsum dolor</a></h6>
                        <div class="star-price">
                            <div class="dolor-grid"> 
                                <span class="actual">300$</span>
                                <span class="reducedfrom">400$</span>
                                <span class="rating">
                                    <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
                                    <label for="rating-input-1-5" class="rating-star1"> </label>
                                    <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
                                    <label for="rating-input-1-4" class="rating-star1"> </label>
                                    <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
                                    <label for="rating-input-1-3" class="rating-star"> </label>
                                    <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
                                    <label for="rating-input-1-2" class="rating-star"> </label>
                                    <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
                                    <label for="rating-input-1-1" class="rating-star"> </label>
                                </span>
                            </div>
                            <a class="now-get get-cart" href="#">ADD TO CART</a> 
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 chain-grid grid-top-chain">
                    <a href="single.html"><img class="img-responsive chain" src="/img/bo.jpg" alt=" "></a>
                    <span class="star"> </span>
                    <div class="grid-chain-bottom">
                        <h6><a href="single.html">Lorem ipsum dolor</a></h6>
                        <div class="star-price">
                            <div class="dolor-grid"> 
                                <span class="actual">300$</span>
                                <span class="reducedfrom">400$</span>
                                <span class="rating">
                                    <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
                                    <label for="rating-input-1-5" class="rating-star1"> </label>
                                    <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
                                    <label for="rating-input-1-4" class="rating-star1"> </label>
                                    <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
                                    <label for="rating-input-1-3" class="rating-star"> </label>
                                    <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
                                    <label for="rating-input-1-2" class="rating-star"> </label>
                                    <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
                                    <label for="rating-input-1-1" class="rating-star"> </label>
                                </span>
                            </div>
                            <a class="now-get get-cart" href="#">ADD TO CART</a> 
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="products">
                <h5 class="latest-product">LATEST PRODUCTS</h5>	
                <a class="view-all" href="product.html">VIEW ALL<span> </span></a> 		     
                <div class="clearfix"> </div>
            </div>
            <div class="product-left">
                <div class="col-md-4 chain-grid">
                    <a href="single.html"><img class="img-responsive chain" src="/img/bott.jpg" alt=" "></a>
                    <span class="star"> </span>
                    <div class="grid-chain-bottom">
                        <h6><a href="single.html">Lorem ipsum dolor</a></h6>
                        <div class="star-price">
                            <div class="dolor-grid"> 
                                <span class="actual">300$</span>
                                <span class="reducedfrom">400$</span>
                                <span class="rating">
                                    <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
                                    <label for="rating-input-1-5" class="rating-star1"> </label>
                                    <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
                                    <label for="rating-input-1-4" class="rating-star1"> </label>
                                    <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
                                    <label for="rating-input-1-3" class="rating-star"> </label>
                                    <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
                                    <label for="rating-input-1-2" class="rating-star"> </label>
                                    <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
                                    <label for="rating-input-1-1" class="rating-star"> </label>
                                </span>
                            </div>
                            <a class="now-get get-cart" href="#">ADD TO CART</a> 
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 chain-grid">
                    <a href="single.html"><img class="img-responsive chain" src="/img/bottle.jpg" alt=" "></a>
                    <span class="star"> </span>
                    <div class="grid-chain-bottom">
                        <h6><a href="single.html">Lorem ipsum dolor</a></h6>
                        <div class="star-price">
                            <div class="dolor-grid"> 
                                <span class="actual">300$</span>
                                <span class="reducedfrom">400$</span>
                                <span class="rating">
                                    <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
                                    <label for="rating-input-1-5" class="rating-star1"> </label>
                                    <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
                                    <label for="rating-input-1-4" class="rating-star1"> </label>
                                    <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
                                    <label for="rating-input-1-3" class="rating-star"> </label>
                                    <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
                                    <label for="rating-input-1-2" class="rating-star"> </label>
                                    <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
                                    <label for="rating-input-1-1" class="rating-star"> </label>
                                </span>
                            </div>
                            <a class="now-get get-cart" href="#">ADD TO CART</a> 
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 chain-grid grid-top-chain">
                    <a href="single.html"><img class="img-responsive chain" src="/img/baa.jpg" alt=" "></a>
                    <span class="star"> </span>
                    <div class="grid-chain-bottom">
                        <h6><a href="single.html">Lorem ipsum dolor</a></h6>
                        <div class="star-price">
                            <div class="dolor-grid"> 
                                <span class="actual">300$</span>
                                <span class="reducedfrom">400$</span>
                                <span class="rating">
                                    <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
                                    <label for="rating-input-1-5" class="rating-star1"> </label>
                                    <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
                                    <label for="rating-input-1-4" class="rating-star1"> </label>
                                    <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
                                    <label for="rating-input-1-3" class="rating-star"> </label>
                                    <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
                                    <label for="rating-input-1-2" class="rating-star"> </label>
                                    <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
                                    <label for="rating-input-1-1" class="rating-star"> </label>
                                </span>
                            </div>
                            <a class="now-get get-cart" href="#">ADD TO CART</a> 
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
