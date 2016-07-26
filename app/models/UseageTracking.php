<?php

class UseageTracking extends Eloquent {

    protected $table = 'useage_tracking';

		public static function UsageData() {
		$users = DB::table('useage_tracking')
					 -> where ('user_name','!=','Admin Admin')
					 -> where ('module','!=','api')
					 ->get();
		return $users;
		    
	}  
	 public static function PregnancyMessages() {
		$types = DB::table('useage_tracking')
                     ->select(DB::raw('count(*) as c, user_name,module,type,extras,sub_module,duration,action_date'))
                     ->where('user_name', '!=', 'Admin Admin')
                     ->where ('module','!=','api')
                     ->where('module','=','Pregnancy messages')
                     ->groupBy('extras')
                     ->get();
		return $types;
		    
	}   
	 public static function TrimesterMessages() {
		$mgs = DB::table('useage_tracking')
                     ->select(DB::raw('count(*) as c, user_name,module,type,extras,sub_module,duration,action_date'))
                     ->where('user_name', '!=', 'Admin Admin')
                     ->where ('module','!=','api')
                     ->where('module','=','Pregnancy messages')
                     ->groupBy('sub_module')
                     ->get();
		return $mgs;
		    
	}   

	 public static function MessageDuration() {
		$duration = DB::table('useage_tracking')
                     ->select(DB::raw('user_name,module,type,extras,sub_module,duration,duration_played,action_date'))
                     ->where('user_name', '!=', 'Admin Admin')
                     ->where ('module','!=','api')
                     ->where('module','=','Pregnancy messages')
                     ->get();
		return $duration;
		    
	}   


	 
	 public static function BabyMessagesCategory() {
		$category = DB::table('useage_tracking')
                     ->select(DB::raw('count(*) as c, user_name,module,type,extras,sub_module,duration,action_date'))
                     ->where('user_name', '!=', 'Admin Admin')
                     ->where ('module','!=','api')
                     ->where('module','like','%Baby%')
                     ->groupBy('sub_module')
                     ->get();
		return $category;
		    
	}   

	 public static function BabyMessageDuration() {
		$duration = DB::table('useage_tracking')
                     ->select(DB::raw('user_name,module,type,extras,sub_module,duration,duration_played,action_date'))
                     ->where('user_name', '!=', 'Admin Admin')
                     ->where ('module','!=','api')
                     ->where('module','like','%Baby%')
                     ->get();
		return $duration;
		    
	}   
	public static function TypeofMessages() {
		$types = DB::table('useage_tracking')
                     ->select(DB::raw('count(*) as c, user_name,module,type,sub_module,duration,action_date'))
                     ->where('user_name', '!=', 'Admin Admin')
                     -> where ('module','!=','api')
                     ->groupBy('module')
                     ->get();
		return $types;
		    
	} 
	public static function ChartData() {
			$types = DB::table('useage_tracking')
                     ->select(DB::raw('count(*) as c,sub_module'))
                     ->where('user_name', '!=', 'Admin Admin')
                     ->groupBy('sub_module')
                     ->get();
		return $types;
		    
	}     
}
