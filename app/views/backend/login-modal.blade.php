<div id="nicdark_window">

    <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow">
        <div class="nicdark_textevidence nicdark_bg_blue nicdark_radius_top">
            <h4 class="white nicdark_margin20">Entrar al sistema</h4>
        </div>
        <div class="nicdark_margin20">
            {{ Form::open(['route' => 'login', 'method' => 'POST']) }}

            <input name="email" class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle" type="text" value="" placeholder="Usuario">
            <div class="nicdark_space20"></div>
            <input name="password"  class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle" type="password" value="" placeholder="Contraseña">
            <div class="nicdark_space20"></div>
            <input class=" right nicdark_btn nicdark_bg_green medium nicdark_shadow nicdark_radius white" type="submit" value="Acceder">
            {{Form::close()}}

        </div>
    </div>

</div>

<!-- 

    <div id="nicdark_window">

    <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow">
        <div class="nicdark_textevidence nicdark_bg_blue nicdark_radius_top">
            <h4 class="white nicdark_margin20">Entrar al sistema</h4>
        </div>
        <div class="nicdark_margin20">
            {{ Form::open(['route' => 'login', 'method' => 'POST', 'role' => 'form', 'novalidate']) }}

            {{Form::email('email', null, ['class'=> 'nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle', 'placeholder' => 'Email'])}}
            <div class="nicdark_space20"></div>
            {{Form::password('password', ['class' => 'nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle', 'placeholder' => 'Password'])}}
            <div class="nicdark_space20"></div>
            <input class=" right nicdark_btn nicdark_bg_green medium nicdark_shadow nicdark_radius white" type="submit" value="Acceder">
            {{Form::close()}}

        </div>
    </div>

</div>
-->