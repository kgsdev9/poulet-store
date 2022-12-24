<?php

use Illuminate\Support\Facades\Auth;


 function fullname_user() {
return Auth::user()->name .  " " . Auth::user()->email ;

}
