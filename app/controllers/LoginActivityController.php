<?php

class LoginActivityController extends BaseController {

    public function __construct() {
        $this->createRules = array(
            'username' => 'required|min:3|max:16',
            'status' => 'required'
        );
    }

    public function saveLoginActivity() {

        $errStatus = true;
        $errMsgs = array();

        $validator = Validator::make(Input::all(), $this->createRules);

        if ($validator->fails()) {
            $errors = $validator->messages();
            $errStatus = true;
            $errMsgs = $errors->toArray();
            return json_encode(UseageTrackingController::$failurMessage);
        } else {
            $login = new LoginActivity;

            $login->username = Input::get("username");
            $login->status = Input::get("status");
            $login->time_logged_in = Input::get("time_logged_in");
            $login->date_logged_in = Input::get("date_logged_in");
            $login->created_at = date("Y-m-d H:i:s");
            $login->created_by = "api";
            try {
                $login->save();
               
            } catch (Exception $exc) {
                echo $exc->getMessage();    
            }
            return json_encode(UseageTrackingController::$successMessage);
        }
    }

}

?>