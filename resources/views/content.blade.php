<h1>@yield('con')</h1>
<section id="content">
    <div class="intro">
        <h1>بانوراما القصيم للبرمجة والتصميم</h1>
        <p>نقدم لعملائنا أفضل الحلول والخدمات الرقميـة المتكاملة</p>
    </div>

    <section id="about">
       <div class="about"> 
        <h1>من نحن</h1>
        <p>
            إيمانًا منا بأهمية البرمجة و العالم الرقمي في حياتنا كنا نحن بانوراما القصيم، من الرواد 
<br>
في هذه المجالاتي التي تسعى للارتقاء بمجال التصميم والبرمجة لتكون من كبرى
<br>
 الصروح بالمملكة والشرق الأوسط في تصميم وبرمجة المواقع وتطبيقات الجوال
<br>
 والبرامج الإدارية والمحاسبية .
                                        </p>
                                <p>
                                    
نهدف دائمًا لإرضاء كافة العملاء لدينا من خلال تقديم مجموعة من الخدمات المميزة. 
<br>
نسعى لخلق وتنمية جسور التعاون والشراكة وتبادل الخبرات بين المبرمجين في
<br>
  مختلف تخصصاتهم، ونستهدف إعداد برامج متميزة تلبي الاحتياجات الحقيقية
<br>
 للمجتمع وسوق العمل مع تطويرها المستمر. ندرب المبرمجين حديثي التخرج لنرتقي
<br>
 بـالمستويات المهارية في جميع مجالات البرمجة من الأنشطة الأساسية لخدمة
<br>
 المجتمع المدني.
                                </p>
                                <p>
                                   رسالتنا هي خلق مجتمع واعِ فكريًا و متطور علميًا، قادرًا على مواكبة العالم الرقمي
<br>
 بأسهل الطرق وأبسطها.
                                </p>

            </div>
    </section> 

    {{-- <!-- Clients Section with Image Slider --> --}}
    <section id="clients">
        <div class="clients">
        <h2>عملائنا</h2>
        <div class="slider">
            <div class="slides">
                {{-- <!-- Slides for Clients --> --}}
                <div class="slide">
                    <img src="img/cl2.jpg" alt="عميل 2">
                    <div class="slide-content">
                        <h3>عميل 2</h3>
                        <p>وصف للعميل 2</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="img/cl1.jpg" alt="عميل 1">
                    <div class="slide-content">
                        <h3>عميل 1</h3>
                        <p>وصف للعميل 1</p>
                    </div>
                </div>
                
                {{-- <!-- <div class="slide">
                    <img src="img/cl3.jpg" alt="عميل 2">
                    <div class="slide-content">
                        <h3>عميل 2</h3>
                        <p>وصف للعميل 2</p>
                    </div>
                </div>
                    <div class="slide">
                    <img src="img/cl4.jpg" alt="عميل 2">
                    <div class="slide-content">
                        <h3>عميل 2</h3>
                        <p>وصف للعميل 2</p>
                    </div>
                </div>
                    <div class="slide">
                    <img src="img/cl5.jpg" alt="عميل 2">
                    <div class="slide-content">
                        <h3>عميل 2</h3>
                        <p>وصف للعميل 2</p>
                    </div>
                </div>
                    <div class="slide">
                    <img src="img/cl6.jpg" alt="عميل 2">
                    <div class="slide-content">
                        <h3>عميل 2</h3>
                        <p>وصف للعميل 2</p>
                    </div>
                </div>
                    <div class="slide">
                    <img src="img/cl7.jpg" alt="عميل 2">
                    <div class="slide-content">
                        <h3>عميل 2</h3>
                        <p>وصف للعميل 2</p>
                    </div>
                </div>
                    <div class="slide">
                    <img src="img/cl8.jpg" alt="عميل 2">
                    <div class="slide-content">
                        <h3>عميل 2</h3>
                        <p>وصف للعميل 2</p>
                    </div>
                </div>
                    <div class="slide">
                    <img src="img/cl9.jpg" alt="عميل 2">
                    <div class="slide-content">
                        <h3>عميل 2</h3>
                        <p>وصف للعميل 2</p>
                    </div>
                </div>
                    <div class="slide">
                    <img src="img/cl10.jpg" alt="عميل 2">
                    <div class="slide-content">
                        <h3>عميل 2</h3>
                        <p>وصف للعميل 2</p>
                    </div>
                </div>
                    <div class="slide">
                    <img src="img/cl11.jpg" alt="عميل 2">
                    <div class="slide-content">
                        <h3>عميل 2</h3>
                        <p>وصف للعميل 2</p>
                    </div>
                </div>
                    <div class="slide">
                    <img src="img/cl12.jpg" alt="عميل 2">
                    <div class="slide-content">
                        <h3>عميل 2</h3>
                        <p>وصف للعميل 2</p>
                    </div>
                </div>
                    <div class="slide">
                    <img src="img/cl13.jpg" alt="عميل 2">
                    <div class="slide-content">
                        <h3>عميل 2</h3>
                        <p>وصف للعميل 2</p>
                    </div>
                </div> --> --}}
            </div>
            <button class="prev" onclick="changeSlide(-1, 'clients')">&#10094;</button>
            <button class="next" onclick="changeSlide(1, 'clients')">&#10095;</button>
        </div>
        </div>
    </section>

    {{-- <!-- Services Section with Image Slider --> --}}
    <section id="services">
        <div class="services">
        <h2>خدماتنا</h2>
        <div class="slider">
            <div class="slides">
                {{-- <!-- Slides for Services --> --}}
                <div class="slide">
                    <img src="img/service1.jpg" alt="خدمة 1">
                    <div class="slide-content">
                        <h3>عنوان الخدمة 1</h3>
                        <p>وصف للخدمة 1</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="img/service2.jpg" alt="خدمة 2">
                    <div class="slide-content">
                        <h3>عنوان الخدمة 2</h3>
                        <p>وصف للخدمة 2</p>
                    </div>
                {{-- </div>
                <!-- <div class="slide">
                    <img src="img/service3.jpg" alt="خدمة 2">
                    <div class="slide-content">
                        <h3>عنوان الخدمة 2</h3>
                        <p>وصف للخدمة 2</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="img/service4.jpg" alt="خدمة 1">
                    <div class="slide-content">
                        <h3>عنوان الخدمة 1</h3>
                        <p>وصف للخدمة 1</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="img/service5.jpg" alt="خدمة 2">
                    <div class="slide-content">
                        <h3>عنوان الخدمة 2</h3>
                        <p>وصف للخدمة 2</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="img/service6.jpg" alt="خدمة 2">
                    <div class="slide-content">
                        <h3>عنوان الخدمة 2</h3>
                        <p>وصف للخدمة 2</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="img/service7.jpg" alt="خدمة 1">
                    <div class="slide-content">
                        <h3>عنوان الخدمة 1</h3>
                        <p>وصف للخدمة 1</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="img/service8.jpg" alt="خدمة 2">
                    <div class="slide-content">
                        <h3>عنوان الخدمة 2</h3>
                        <p>وصف للخدمة 2</p>
                    </div>
                </div> --> --}}
            
            </div>
            <button class="prev" onclick="changeSlide(-1, 'services')">&#10094;</button>
            <button class="next" onclick="changeSlide(1, 'services')">&#10095;</button>
        </div>
    </div>
    </section>

    {{-- <!-- Contact Section --> --}}

<section id="contact">
    <div class="contact">
      <h2> <br><br> </h2>
      <div class="form-card1">
  <div class="form-card2">
    <form class="form">
      <p class="form-heading"> تواصل معنا</p>

      <div class="form-field">
        <input required="" placeholder="الاسم" class="input-field" type="text" />
      </div>

      <div class="form-field">
        <input
          required=""
          placeholder="ايميلك"
          class="input-field"
          type="email"
        />
      </div>

      <div class="form-field">
        <input
          required=""
          placeholder="العنوان"
          class="input-field"
          type="text"
        />
      </div>

      <div class="form-field">
        <textarea
          required=""
          placeholder="الرسالة"
          cols="30"
          rows="3"
          class="input-field"
        ></textarea>
      </div>

      <button class="sendMessage-btn">ارسال</button>
    </form>
  </div>
</div>
</section>
  
   