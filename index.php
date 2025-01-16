<?php include 'header.php' ?>
<!-- Main Section Start -->
<section class="mainSection">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-lg-12">
                <div class="mainImg">
                    <div class="main-content">
                        <div class="main-text text-center position-absolute">
                            <p class="mb-0">the<br> cafe</p>
                        </div>
                        <div class="main-text1 position-absolute">
                            <p class="mb-0">Open from 6am to 5pm</p>
                        </div>
                        <div class="main-text2 position-absolute">
                            <p class="mb-0">15 Adr street, 5015</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
<!-- Main Section End -->

<!-- About Section Start -->
<section class="aboutSection" id="aboutSection">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 m-auto">
                <div class="title text-center">
                    <h2>About the cafe</h2>
                </div>
                <div class="para-text">
                    <p>The Cafe was founded in blabla by Mr. Smith in lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p class="mb-0">In addition to our full espresso and brew bar menu, we serve fresh made-to-order breakfast and lunch sandwiches, as well as a selection of sides and salads and other good stuff.</p>
                </div>
                <div class="para-text para-text-bg my-4">
                    <p><i>"Use products from nature for what it's worth - but never too early, nor too late." Fresh is the new sweet.</i></p>
                    <p class="mb-0">Chef, Coffeeist and Owner: Liam Brown</p>
                </div>
                <div class="mb-4">
                    <img src="img/coffeeshop.jpg" class="img-fluid" alt="">
                </div>
                <div class="para-text">
                    <p><strong>Opening hours:</strong> everyday from 6am to 5pm.</p>
                    <p><strong>Address:</strong> 15 Adr street, 5015, NY</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Menu Section Start -->
<section class="menuSection" id="menuSection">
    <div class="container">
        <div class="row"> 
            <div class="col-lg-7 m-auto">
                <div class="title text-center">
                    <h2>the menu</h2>
                </div>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Eat</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Drink</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h5>Bread Basket</h5>
                        <p class="mb-5">Assortment of fresh baked fruit breads and muffins 5.50</p>
                        
                        <h5 class="mb-3">Honey Almond Granola with Fruits</h5>
                        <p class="mb-5">Natural cereal of honey toasted oats, raisins, almonds and dates 7.00</p>
                        
                        <h5 class="mb-3">Belgian Waffle</h5>
                        <p class="mb-5">Vanilla flavored batter with malted flour 7.50</p>
                        
                        <h5 class="mb-3">Scrambled eggs</h5>
                        <p class="mb-5">Scrambled eggs, roasted red pepper and garlic, with green onions 7.50</p>
                        
                        <h5 class="mb-3">Blueberry Pancakes</h5>
                        <p>With syrup, butter and lots of berries 8.50</p>
                    </div>

                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h5 class="mb-3">Coffee</h5>
                        <p class="mb-5">Regular coffee 2.50</p>
                        
                        <h5 class="mb-3">Chocolato</h5>
                        <p class="mb-5">Chocolate espresso with milk 4.50</p>
                        
                        <h5 class="mb-3">Corretto</h5>
                        <p class="mb-5">Whiskey and coffee 5.00</p>
                        
                        <h5 class="mb-3">Iced tea</h5>
                        <p class="mb-5">Hot tea, except not hot 3.00</p>
                        
                        <h5 class="mb-3">Soda</h5>
                        <p>Coke, Sprite, Fanta, etc. 2.50</p>
                    </div>
                </div>
                <div class="mt-4">
                    <img src="img/coffeehouse2.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Menu Section End -->

<!-- Where Section Start -->
<section class="whereSection" id="whereSection">
    <div class="container">
        <div class="row"> 
            <div class="col-lg-7 m-auto">
                <div class="title text-center">
                    <h2>where to find us</h2>
                </div>
                <div class="para-text">
                    <p>Find us at some address at some place.</p>
                </div>
                <div class="my-4">
                    <img src="img/map.jpg" class="img-fluid" alt="">
                </div>
                <div class="para-text">
                    <p><span class="title-bg">FYI!</span> We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste.</p>
                    <p><strong>Reserve</strong> a table, ask for today's special or just send us a message:</p>
                </div>
                <form class="needs-validation" id="contact_form_message" method="post" action="#">
                    <div class="row g-4">
                        <div class="col-md-12">
                            <div class="form-outline">
                                <input type="text" class="form-control" name="name" placeholder="Name" required="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-outline">
                                <input type="text" class="form-control" name="people" placeholder="How many people" required="">
                            </div>
                        </div>                    
                        <div class="col-md-12">
                            <div class="form-outline">
                                <input class="form-control" type="datetime-local" required="" name="date" value="2020-11-16T20:00">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-outline">
                                <input type="text" class="form-control" name="message" placeholder="Message \ Special requirements" required="">
                            </div>
                        </div>
                        <div class="col-md-12 mb-5">
                            <button type="submit" name="submit" class="theme-btn"><span>Send Message</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Where Section End -->

<!-- Contact Section Start -->
<!-- <section class="contactSection" id="contactSection">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form class="needs-validation" id="contact_form_message" method="post" action="#">
                    <div class="row g-4">
                        <div class="col-md-12">
                            <div class="form-outline">
                                <input type="text" class="form-control" name="firstname" placeholder="Name" required="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-outline">
                                <input type="text" class="form-control" name="phone" placeholder="How many people" required="">
                            </div>
                        </div>                    
                        <div class="col-md-12">
                            <div class="form-outline">
                                <input type="email" name="email" class="form-control" required="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-outline">
                                <input type="text" class="form-control" name="phone" placeholder="Message \ Special requirements" required="">
                            </div>
                        </div>
                        <div class="col-md-12 text-start">
                            <button type="submit" name="submit" class="theme-btn mt-4"><span>Send Message</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section> -->
<!-- Contact Section End -->
<?php include 'footer.php' ?>