<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * user_username_value_exist Model Action
     * @return array
     */
	function user_username_value_exist($val){
		$db = $this->GetModel();
		$db->where("username", $val);
		$exist = $db->has("user");
		return $exist;
	}

	/**
     * user_email_value_exist Model Action
     * @return array
     */
	function user_email_value_exist($val){
		$db = $this->GetModel();
		$db->where("email", $val);
		$exist = $db->has("user");
		return $exist;
	}

	/**
     * getcount_questionsanswers Model Action
     * @return Value
     */
	function getcount_questionsanswers(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM questions_answers";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_searchnotes Model Action
     * @return Value
     */
	function getcount_searchnotes(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM search_notes";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_kmtctestpapers Model Action
     * @return Value
     */
	function getcount_kmtctestpapers(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM kmtc_test_papers";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_cmspapers Model Action
     * @return Value
     */
	function getcount_cmspapers(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM cms_papers";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_mlspapers Model Action
     * @return Value
     */
	function getcount_mlspapers(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM mls_papers";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_otmpapers Model Action
     * @return Value
     */
	function getcount_otmpapers(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM otm_papers";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_cohpapers Model Action
     * @return Value
     */
	function getcount_cohpapers(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM coh_papers";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_mispapers Model Action
     * @return Value
     */
	function getcount_mispapers(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM mis_papers";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_mepapers Model Action
     * @return Value
     */
	function getcount_mepapers(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM me_papers";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_hritpapers Model Action
     * @return Value
     */
	function getcount_hritpapers(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM hrit_papers";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_pharmarcypapers Model Action
     * @return Value
     */
	function getcount_pharmarcypapers(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM pharmarcy_papers";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_dtpapers Model Action
     * @return Value
     */
	function getcount_dtpapers(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM dt_papers";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_nursingpapers Model Action
     * @return Value
     */
	function getcount_nursingpapers(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM nursing_papers";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_phpapers Model Action
     * @return Value
     */
	function getcount_phpapers(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM ph_papers";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_ndpapers Model Action
     * @return Value
     */
	function getcount_ndpapers(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM nd_papers";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_otpapers Model Action
     * @return Value
     */
	function getcount_otpapers(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM ot_papers";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_hppapers Model Action
     * @return Value
     */
	function getcount_hppapers(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM hp_papers";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_ortpapers Model Action
     * @return Value
     */
	function getcount_ortpapers(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM ort_papers";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_optometrypapers Model Action
     * @return Value
     */
	function getcount_optometrypapers(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM optometry_papers";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_physiotherapypapers Model Action
     * @return Value
     */
	function getcount_physiotherapypapers(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM physiotherapy_papers";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_medengpapers Model Action
     * @return Value
     */
	function getcount_medengpapers(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM medeng_papers";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_notice Model Action
     * @return Value
     */
	function getcount_notice(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM notice";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

}
