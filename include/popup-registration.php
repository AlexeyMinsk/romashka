<div id="popup-registration" data-effect="mfp-zoom-in" class=" white-popup mfp-with-anim mfp-hide clearfix">
    <div class="popup_header">
        <div class="title_line_horizontal title_line_decor">
            <span>Регистрация</span>
		</div>
	</div>
	
    <div class="col-xs-offset-1 col-xs-10 popup_wrap">
		
		<form name="registration" class="clearfix" action="/">
            <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" class="form-control" name="name" placeholder="">
			</div>
            <div class="form-group">
                <label for="fam">Фамилия</label>
                <input type="text" class="form-control" name="fam" placeholder="">
			</div>
            <div class="form-group has-error">
                <label for="login"> Логин (минимум 3 символа)<span class="color_danger">*</span></label>
                <input type="text" class="form-control" name="login" required>
			</div>
			
            <div class="form-group has-error">
                <label for="pass"> Пароль<span class="color_danger">*</span></label>
                <input type="text" class="form-control" name="pass" required>
			</div>
			
            <div class="form-group">
                <label for="passpod">Подтверждение пароля<span class="color_danger">*</span></label>
                <input type="text" class="form-control" name="passpod" required>
			</div>
			
            <div class="form-group">
                <label for="mail">Ваша почта<span class="color_danger">*</span></label>
                <input type="text" class="form-control" name="mail" required>
			</div>
			
            <div class="form-group">
                <label for="captcha">Введите символы на картинке<span class="color_danger">*</span></label>
                <div class="bx-captcha"><img src="" width="180" height="40" alt="CAPTCHA"></div>
                <input type="text" class="form-control" name="captcha" placeholder="">
			</div>
			
            <div class= "col-xs-offset-2 col-xs-8 text_center mt_2 mb_1">
                <input class="btn btn-primary full_width _upper" value="Регистрация" type="submit"/>
			</div>
		</form>
        <hr/>
        <div class="text-center fz_12">
            Пароль не должен быть менее 6 символов. <br/>
            <span class="color_danger">*</span> Поля, обязательные для заполнения.<br/>
            <a class="" href="javascript:void(0)">Авторизация</a>
		</div>
	</div>
</div> 
