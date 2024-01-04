<?php
/**
 * Page Access Control
 * @category  RBAC Helper
 */
defined('ROOT') or exit('No direct script access allowed');
class ACL
{
	

	/**
	 * Array of user roles and page access 
	 * Use "*" to grant all access right to particular user role
	 * @var array
	 */
	public static $role_pages = array(
			'administrator' =>
						array(
							'cms_papers' => array('list','view','add','edit', 'editfield','delete'),
							'coh_papers' => array('list','view','add','edit', 'editfield','delete'),
							'dt_papers' => array('list','view','add','edit', 'editfield','delete'),
							'hp_papers' => array('list','view','add','edit', 'editfield','delete'),
							'hrit_papers' => array('list','view','add','edit', 'editfield','delete'),
							'me_papers' => array('list','view','add','edit', 'editfield','delete'),
							'mis_papers' => array('list','view','add','edit', 'editfield','delete'),
							'mls_papers' => array('list','view','add','edit', 'editfield','delete'),
							'nd_papers' => array('list','view','add','edit', 'editfield','delete'),
							'nursing_papers' => array('list','view','add','edit', 'editfield','delete'),
							'optometry_papers' => array('list','view','add','edit', 'editfield','delete'),
							'ort_papers' => array('list','view','add','edit', 'editfield','delete'),
							'ot_papers' => array('list','view','add','edit', 'editfield','delete'),
							'otm_papers' => array('list','view','add','edit', 'editfield','delete'),
							'ph_papers' => array('list','view','add','edit', 'editfield','delete'),
							'pharmarcy_papers' => array('list','view','add','edit', 'editfield','delete'),
							'physiotherapy_papers' => array('list','view','add','edit', 'editfield','delete'),
							'medeng_papers' => array('list','view','add','edit', 'editfield','delete'),
							'kmtc_test_papers' => array('list','view','add','edit', 'editfield','delete'),
							'search_notes' => array('list','view','add','edit', 'editfield','delete','list','view','add','edit', 'editfield','delete'),
							'user' => array('list','view','add','edit', 'editfield','delete','userregister','accountedit','accountview'),
							'nav' => array('list','view','add','edit', 'editfield','delete'),
							'bloga' => array('list','view','add','edit', 'editfield','delete'),
							'blogb' => array('list','view','add','edit', 'editfield','delete'),
							'blogd' => array('list','view','add','edit', 'editfield','delete'),
							'bloge' => array('list','view','add','edit', 'editfield','delete'),
							'about' => array('list','view','add','edit', 'editfield','delete'),
							'contact_us' => array('list','view','add','edit', 'editfield','delete'),
							'term' => array('list','view','add','edit', 'editfield','delete'),
							'notice' => array('list','view','add','edit', 'editfield','delete'),
							'questions_answers' => array('list','view','add','edit', 'editfield','delete','list','view','add','edit', 'editfield','delete')
						),
		
			'clinical medicine and surgery (diploma and higher diploma)' =>
						array(
							'cms_papers' => array('list','view'),
							'search_notes' => array('list','view'),
							'user' => array('userregister','accountedit','accountview'),
							'questions_answers' => array('list','view')
						),
		
			'medical laboratory sciences(diploma and higher diploma)' =>
						array(
							'mls_papers' => array('list','view'),
							'search_notes' => array('list','view'),
							'user' => array('userregister','accountedit','accountview'),
							'questions_answers' => array('list','view')
						),
		
			'orthopaedic and trauma medicine (certificate and diploma)' =>
						array(
							'otm_papers' => array('list','view'),
							'search_notes' => array('list','view'),
							'user' => array('userregister','accountedit','accountview'),
							'questions_answers' => array('list','view')
						),
		
			'community oral health( diploma)' =>
						array(
							'coh_papers' => array('list','view'),
							'search_notes' => array('list','view'),
							'user' => array('userregister','accountedit','accountview'),
							'questions_answers' => array('list','view')
						),
		
			'medicine imaging sciences( diploma and higher diploma)' =>
						array(
							'mis_papers' => array('list','view'),
							'search_notes' => array('list','view'),
							'user' => array('userregister','accountedit','accountview'),
							'questions_answers' => array('list','view')
						),
		
			'medical education( higher diploma)' =>
						array(
							'me_papers' => array('list','view'),
							'search_notes' => array('list','view'),
							'user' => array('userregister','accountedit','accountview'),
							'questions_answers' => array('list','view')
						),
		
			'health records and information technology (certificate adn diploma)' =>
						array(
							'hrit_papers' => array('list','view'),
							'search_notes' => array('list','view'),
							'user' => array('userregister','accountedit','accountview'),
							'questions_answers' => array('list','view')
						),
		
			'pharmacy (diploma and higher and higher diploma)' =>
						array(
							'pharmarcy_papers' => array('list','view'),
							'search_notes' => array('list','view'),
							'user' => array('userregister','accountedit','accountview'),
							'questions_answers' => array('list','view')
						),
		
			'dental technology (diploma)' =>
						array(
							'dt_papers' => array('list','view'),
							'search_notes' => array('list','view'),
							'user' => array('userregister','accountedit','accountview'),
							'questions_answers' => array('list','view')
						),
		
			'nursing (certificate,diploma and higher diploma)' =>
						array(
							'nursing_papers' => array('list','view'),
							'search_notes' => array('list','view'),
							'user' => array('userregister','accountedit','accountview'),
							'questions_answers' => array('list','view')
						),
		
			'public health (certificate, diploma and higher diploma)' =>
						array(
							'ph_papers' => array('list','view'),
							'search_notes' => array('list','view'),
							'user' => array('userregister','accountedit','accountview'),
							'questions_answers' => array('list','view')
						),
		
			'nutrition and dietetics(certificate and diploma)' =>
						array(
							'nd_papers' => array('list','view'),
							'search_notes' => array('list','view'),
							'user' => array('userregister','accountedit','accountview'),
							'questions_answers' => array('list','view')
						),
		
			'occupational therapy (diploma and higher diploma)' =>
						array(
							'ot_papers' => array('list','view'),
							'search_notes' => array('list','view'),
							'user' => array('userregister','accountedit','accountview'),
							'questions_answers' => array('list','view')
						),
		
			'health promotion( certificate,diploma and higher diploma)' =>
						array(
							'hp_papers' => array('list','view'),
							'search_notes' => array('list','view'),
							'user' => array('userregister','accountedit','accountview'),
							'questions_answers' => array('list','view')
						),
		
			'orthopaedics technology (diploma and higher diploma)' =>
						array(
							'ort_papers' => array('list','view'),
							'search_notes' => array('list','view'),
							'user' => array('userregister','accountedit','accountview'),
							'questions_answers' => array('list','view')
						),
		
			'optometry(diploma and higher diploma)' =>
						array(
							'optometry_papers' => array('list','view'),
							'search_notes' => array('list','view'),
							'user' => array('userregister','accountedit','accountview'),
							'questions_answers' => array('list','view')
						),
		
			'physiotherapy (diploma and higher diploma)' =>
						array(
							'physiotherapy_papers' => array('list','view'),
							'search_notes' => array('list','view'),
							'user' => array('userregister','accountedit','accountview'),
							'questions_answers' => array('list','view')
						),
		
			'medical engineering (ceritficate ,diploma and higher diploma)' =>
						array(
							'medeng_papers' => array('list','view'),
							'search_notes' => array('list','view'),
							'user' => array('userregister','accountedit','accountview'),
							'questions_answers' => array('list','view')
						),
		
			'lecturer' =>
						array(
							'cms_papers' => array('list','view','add','edit', 'editfield'),
							'coh_papers' => array('list','view','add','edit', 'editfield'),
							'dt_papers' => array('list','view','add','edit', 'editfield'),
							'hp_papers' => array('list','view','add','edit', 'editfield'),
							'hrit_papers' => array('list','view','add','edit', 'editfield'),
							'me_papers' => array('list','view','add','edit', 'editfield'),
							'mis_papers' => array('list','view','add','edit', 'editfield'),
							'mls_papers' => array('list','view','add','edit', 'editfield'),
							'nd_papers' => array('list','view','add','edit', 'editfield'),
							'nursing_papers' => array('list','view','add','edit', 'editfield'),
							'optometry_papers' => array('list','view','add','edit', 'editfield'),
							'ort_papers' => array('list','view','add','edit', 'editfield'),
							'ot_papers' => array('list','view','add','edit', 'editfield'),
							'otm_papers' => array('list','view','add','edit', 'editfield'),
							'ph_papers' => array('list','view','add','edit', 'editfield'),
							'pharmarcy_papers' => array('list','view','add','edit', 'editfield'),
							'physiotherapy_papers' => array('list','view','add','edit', 'editfield'),
							'medeng_papers' => array('list','view','add','edit', 'editfield'),
							'search_notes' => array('list','view','add','edit', 'editfield'),
							'user' => array('userregister','accountedit','accountview'),
							'questions_answers' => array('list','view','add','edit', 'editfield')
						),
		
			'admin' =>
						array(
							'cms_papers' => array('list','view','add','edit', 'editfield'),
							'coh_papers' => array('list','view','add','edit', 'editfield'),
							'dt_papers' => array('list','view','add','edit', 'editfield'),
							'hp_papers' => array('list','view','add','edit', 'editfield'),
							'hrit_papers' => array('list','view','add','edit', 'editfield'),
							'me_papers' => array('list','view','add','edit', 'editfield'),
							'mis_papers' => array('list','view','add','edit', 'editfield'),
							'mls_papers' => array('list','view','add','edit', 'editfield'),
							'nd_papers' => array('list','view','add','edit', 'editfield'),
							'nursing_papers' => array('list','view','add','edit', 'editfield'),
							'optometry_papers' => array('list','view','add','edit', 'editfield'),
							'ort_papers' => array('list','view','add','edit', 'editfield'),
							'ot_papers' => array('list','view','add','edit', 'editfield'),
							'otm_papers' => array('list','view','add','edit', 'editfield'),
							'ph_papers' => array('list','view','add','edit', 'editfield'),
							'pharmarcy_papers' => array('list','view','add','edit', 'editfield'),
							'physiotherapy_papers' => array('list','view','add','edit', 'editfield'),
							'medeng_papers' => array('list','view','add','edit', 'editfield'),
							'kmtc_test_papers' => array('list','view','add','edit', 'editfield'),
							'search_notes' => array('list','view','add','edit', 'editfield'),
							'notice' => array('list','view'),
							'questions_answers' => array('list','view','add','edit', 'editfield','import_data')
						)
		);

	/**
	 * Current user role name
	 * @var string
	 */
	public static $user_role = null;

	/**
	 * pages to Exclude From Access Validation Check
	 * @var array
	 */
	public static $exclude_page_check = array("", "index", "home", "account", "info", "masterdetail");

	/**
	 * Init page properties
	 */
	public function __construct()
	{	
		if(!empty(USER_ROLE)){
			self::$user_role = USER_ROLE;
		}
	}

	/**
	 * Check page path against user role permissions
	 * if user has access return AUTHORIZED
	 * if user has NO access return UNAUTHORIZED
	 * if user has NO role return NO_ROLE
	 * @return string
	 */
	public static function GetPageAccess($path)
	{
		$rp = self::$role_pages;
		if ($rp == "*") {
			return AUTHORIZED; // Grant access to any user
		} else {
			$path = strtolower(trim($path, '/'));

			$arr_path = explode("/", $path);
			$page = strtolower($arr_path[0]);

			//If user is accessing excluded access contrl pages
			if (in_array($page, self::$exclude_page_check)) {
				return AUTHORIZED;
			}

			$user_role = strtolower(USER_ROLE); // Get user defined role from session value
			if (array_key_exists($user_role, $rp)) {
				$action = (!empty($arr_path[1]) ? $arr_path[1] : "list");
				if ($action == "index") {
					$action = "list";
				}
				//Check if user have access to all pages or user have access to all page actions
				if ($rp[$user_role] == "*" || (!empty($rp[$user_role][$page]) && $rp[$user_role][$page] == "*")) {
					return AUTHORIZED;
				} else {
					if (!empty($rp[$user_role][$page]) && in_array($action, $rp[$user_role][$page])) {
						return AUTHORIZED;
					}
				}
				return FORBIDDEN;
			} else {
				//User does not have any role.
				return NOROLE;
			}
		}
	}

	/**
	 * Check if user role has access to a page
	 * @return Bool
	 */
	public static function is_allowed($path)
	{
		return (self::GetPageAccess($path) == AUTHORIZED);
	}

}
