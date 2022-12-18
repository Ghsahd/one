<?php
// header
include('header.php')

<aside>
    include('sidebar.php')
</aside>

<div class="content">
    <div class="content-wrapper">
    yield('content')

    </div>
</div>

include('footer.php')