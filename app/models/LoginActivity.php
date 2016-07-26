<?php

class LoginActivity extends Eloquent {

    protected $fillable = array('update_at','username', 'time_logged_in', 'date_logged_in', 'created_at', 'created_by', 'status');
    protected $guarded = ['*'];
    protected $table = 'login_activity';

}

