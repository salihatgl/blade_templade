<nav class="navbar navbar-expand-sm bg-light justify-content-center border-bottom">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link active text-dark me-2" href="#">@lang('messages.Anasayfa')</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark me-2 active" href="#">{{ __('messages.Hobiler') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link  text-dark me-2 " href="#">{{ __('messages.Paylaşımlar') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link  text-dark me-2" href="#">{{ __('messages.Hakkımda') }}</a>
        </li>
        <li>
            <select id="dil" style="height: 25px; width:150px;" class="mt-2">
                <option >{{ __('messages.Dil Seçeneği') }}</option>
                <option  value="1">Turkish</option>
                <option  value="2">English</option>
                <option  value="3">French</option>
                <option  value="4">Russian</option>
                <option  value="5">German</option>
                <option  value="6">Japanese</option>

            </select>
        </li>



    </ul>
</nav>