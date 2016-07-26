<?php

class UseageTrackingController extends BaseController {

    public static $failurMessage = array("result" => 0, "message" => "failed");
    public static $successMessage = array("result" => 1, "message" => "successful");

    public function __construct() {
        $this->createRules = array(
            'username' => 'required|min:3|max:16',
            'module' => 'required',
            'status' => 'required'
        );
    }

    public function saveTrack() {
        $errStatus = true;
        $errMsgs = array();

        $validator = Validator::make(Input::all(), $this->createRules);

        if ($validator->fails()) {
            $errors = $validator->messages();
            $errStatus = true;
            $errMsgs = $errors->toArray();
            return json_encode(UseageTrackingController::$failurMessage);
        } else {
//
            $useage = new UseageTracking;
            $useage->user_name = Input::get("username");
            $useage->module = Input::get("module");
            $useage->sub_module = Input::get("sub_module");
            $useage->type = Input::get("type");
            $useage->action_date = date("Y-m-d H:i:s", strtotime(Input::get("action_date")));
            $useage->duration = Input::get("duration");
            $useage->duration_played = Input::get("duration_played");
            $useage->status = Input::get("status");
            $useage->extras = Input::get("extras");
            $useage->created_at = date("Y-m-d H:i:s");
            $useage->created_by = "api";
            try {
                $useage->save();
            } catch (Exception $exc) {
                echo $exc->getMessage();
            }


            return json_encode(UseageTrackingController::$successMessage);
        }
    }

}

?>