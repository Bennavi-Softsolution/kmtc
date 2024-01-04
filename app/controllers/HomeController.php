<?php 

/**
 * Home Page Controller
 * @category  Controller
 */
class HomeController extends SecureController{
	/**
     * Index Action
     * @return View
     */
	function index(){
		if(strtolower(USER_ROLE) == 'administrator'){
			$this->render_view("home/administrator.php" , null , "main_layout.php");
		}
		elseif(strtolower(USER_ROLE) == 'clinical medicine and surgery (diploma and higher diploma)'){
			$this->render_view("home/clinical medicine and surgery (diploma and higher diploma).php" , null , "main_layout.php");
		}
		elseif(strtolower(USER_ROLE) == 'medical laboratory sciences(diploma and higher diploma)'){
			$this->render_view("home/medical laboratory sciences(diploma and higher diploma).php" , null , "main_layout.php");
		}
		elseif(strtolower(USER_ROLE) == 'orthopaedic and trauma medicine (certificate and diploma)'){
			$this->render_view("home/orthopaedic and trauma medicine (certificate and diploma).php" , null , "main_layout.php");
		}
		elseif(strtolower(USER_ROLE) == 'community oral health( diploma)'){
			$this->render_view("home/community oral health( diploma).php" , null , "main_layout.php");
		}
		elseif(strtolower(USER_ROLE) == 'medicine imaging sciences( diploma and higher diploma)'){
			$this->render_view("home/medicine imaging sciences( diploma and higher diploma).php" , null , "main_layout.php");
		}
		elseif(strtolower(USER_ROLE) == 'medical education( higher diploma)'){
			$this->render_view("home/medical education( higher diploma).php" , null , "main_layout.php");
		}
		elseif(strtolower(USER_ROLE) == 'health records and information technology (certificate adn diploma)'){
			$this->render_view("home/health records and information technology (certificate adn diploma).php" , null , "main_layout.php");
		}
		elseif(strtolower(USER_ROLE) == 'pharmacy (diploma and higher and higher diploma)'){
			$this->render_view("home/pharmacy (diploma and higher and higher diploma).php" , null , "main_layout.php");
		}
		elseif(strtolower(USER_ROLE) == 'dental technology (diploma)'){
			$this->render_view("home/dental technology (diploma).php" , null , "main_layout.php");
		}
		elseif(strtolower(USER_ROLE) == 'nursing (certificate,diploma and higher diploma)'){
			$this->render_view("home/nursing (certificate,diploma and higher diploma).php" , null , "main_layout.php");
		}
		elseif(strtolower(USER_ROLE) == 'public health (certificate, diploma and higher diploma)'){
			$this->render_view("home/public health (certificate, diploma and higher diploma).php" , null , "main_layout.php");
		}
		elseif(strtolower(USER_ROLE) == 'nutrition and dietetics(certificate and diploma)'){
			$this->render_view("home/nutrition and dietetics(certificate and diploma).php" , null , "main_layout.php");
		}
		elseif(strtolower(USER_ROLE) == 'occupational therapy (diploma and higher diploma)'){
			$this->render_view("home/occupational therapy (diploma and higher diploma).php" , null , "main_layout.php");
		}
		elseif(strtolower(USER_ROLE) == 'health promotion( certificate,diploma and higher diploma)'){
			$this->render_view("home/health promotion( certificate,diploma and higher diploma).php" , null , "main_layout.php");
		}
		elseif(strtolower(USER_ROLE) == 'orthopaedics technology (diploma and higher diploma)'){
			$this->render_view("home/orthopaedics technology (diploma and higher diploma).php" , null , "main_layout.php");
		}
		elseif(strtolower(USER_ROLE) == 'optometry(diploma and higher diploma)'){
			$this->render_view("home/optometry(diploma and higher diploma).php" , null , "main_layout.php");
		}
		elseif(strtolower(USER_ROLE) == 'physiotherapy (diploma and higher diploma)'){
			$this->render_view("home/physiotherapy (diploma and higher diploma).php" , null , "main_layout.php");
		}
		elseif(strtolower(USER_ROLE) == 'medical engineering (ceritficate ,diploma and higher diploma)'){
			$this->render_view("home/medical engineering (ceritficate ,diploma and higher diploma).php" , null , "main_layout.php");
		}
		elseif(strtolower(USER_ROLE) == 'lecturer'){
			$this->render_view("home/lecturer.php" , null , "main_layout.php");
		}
		elseif(strtolower(USER_ROLE) == 'admin'){
			$this->render_view("home/admin.php" , null , "main_layout.php");
		}
		else{
			$this->render_view("home/index.php" , null , "main_layout.php");
		}
	}
}
