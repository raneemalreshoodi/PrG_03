<section id="contact">
  <div class="contact">
      <h2>تواصل معنا</h2>
      <div class="form-card1">
          <div class="form-card2">
              <form class="form" action="{{ url('/sendcon') }}" method="POST">
                  @csrf
                  <p class="form-heading">تواصل معنا</p>

                  <div class="form-field">
                      <input required placeholder="الاسم" name="name" class="input-field" type="text" />
                  </div>

                  <div class="form-field">
                      <input required placeholder="ايميلك" name="email" class="input-field" type="email" />
                  </div>

                  <div class="form-field">
                      <input required placeholder="العنوان" name="title" class="input-field" type="text" />
                  </div>

                  <div class="form-field">
                      <textarea required placeholder="الرسالة" name="message" cols="30" rows="3" class="input-field"></textarea>
                  </div>

                  <button class="sendMessage-btn" type="submit">ارسال</button>
              </form>
          </div>
      </div>
  </div>
</section>
