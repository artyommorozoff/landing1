<footer class="footer_wrapper" id="contact">
    <div class="container">
        <section class="page_section contact" id="contact">
            <div class="contact_section">
                <h2>Наши контакты</h2>
                <div class="row">
                    <div class="col-lg-4">

                    </div>
                    <div class="col-lg-4">

                    </div>
                    <div class="col-lg-4">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 wow fadeInLeft">
                    <div class="contact_info">
                        <div class="detail">
                            <h4>Наш адрес</h4>
                            <p>Днепр, Украина</p>
                        </div>
                        <div class="detail">
                            <h4>Позвонить нам</h4>
                            <p><a href="tel:+380505675764">+38 050 123 45 67</a></p>
                        </div>
                        <div class="detail">
                            <h4>Email</h4>
                            <p><a href="mailto:morozoff.web@gmail.com">morozoff.web@gmail.com</a></p>
                        </div>
                    </div>

                    <ul class="social_links">
                        <li class="twitter animated bounceIn wow delay-02s"><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                        <li class="facebook animated bounceIn wow delay-03s"><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                        <li class="pinterest animated bounceIn wow delay-04s"><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
                        <li class="gplus animated bounceIn wow delay-05s"><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-8 wow fadeInLeft delay-06s">
                    <div class="form">
                        <form action="{{ route('home') }}" method="POST">
                            <input class="input-text" type="text" name="name" value="Ваше имя *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
                            <input class="input-text" type="text" name="email" value="Ваш E-mail *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
                            <textarea class="input-text text-area" name="text" cols="0" rows="0" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">Ваше сообщение *</textarea>
                            <input class="input-btn" type="submit" value="Отправить">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="container">
        <div class="footer_bottom"><span>Copyright © 2018, MorozOff Studio </span> </div>
    </div>
</footer>
