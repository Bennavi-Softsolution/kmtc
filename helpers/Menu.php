<?php
/**
 * Menu Items
 * All Project Menu
 * @category  Menu List
 */

class Menu{
	
	
			public static $navbarsideleft = array(
		array(
			'path' => 'home', 
			'label' => 'Home', 
			'icon' => '<i class="icon-home "></i>'
		),
		
		array(
			'path' => '', 
			'label' => 'Questions&Notes', 
			'icon' => '<i class="icon-layers "></i>','submenu' => array(
		array(
			'path' => 'questions_answers', 
			'label' => 'Questions Answers', 
			'icon' => '<i class="icon-note "></i>'
		),
		
		array(
			'path' => 'search_notes', 
			'label' => 'Search Notes', 
			'icon' => '<i class="icon-pencil "></i>'
		)
	)
		),
		
		array(
			'path' => '', 
			'label' => 'Test Papers', 
			'icon' => '<i class="icon-docs "></i>','submenu' => array(
		array(
			'path' => 'kmtc_test_papers', 
			'label' => 'Kmtc Test Papers', 
			'icon' => '<i class="icon-doc "></i>'
		),
		
		array(
			'path' => 'medeng_papers', 
			'label' => 'Medeng Papers', 
			'icon' => '<i class="icon-book-open "></i>'
		),
		
		array(
			'path' => 'physiotherapy_papers', 
			'label' => 'Physiotherapy Papers', 
			'icon' => '<i class="icon-book-open "></i>'
		),
		
		array(
			'path' => 'pharmarcy_papers', 
			'label' => 'Pharmarcy Papers', 
			'icon' => '<i class="icon-book-open "></i>'
		),
		
		array(
			'path' => 'ph_papers', 
			'label' => 'Ph Papers', 
			'icon' => '<i class="icon-book-open "></i>'
		),
		
		array(
			'path' => 'otm_papers', 
			'label' => 'Otm Papers', 
			'icon' => '<i class="icon-book-open "></i>'
		),
		
		array(
			'path' => 'ot_papers', 
			'label' => 'Ot Papers', 
			'icon' => '<i class="icon-book-open "></i>'
		),
		
		array(
			'path' => 'ort_papers', 
			'label' => 'Ort Papers', 
			'icon' => '<i class="icon-book-open "></i>'
		),
		
		array(
			'path' => 'optometry_papers', 
			'label' => 'Optometry Papers', 
			'icon' => '<i class="icon-book-open "></i>'
		),
		
		array(
			'path' => 'nursing_papers', 
			'label' => 'Nursing Papers', 
			'icon' => '<i class="icon-book-open "></i>'
		),
		
		array(
			'path' => 'nd_papers', 
			'label' => 'Nd Papers', 
			'icon' => '<i class="icon-book-open "></i>'
		),
		
		array(
			'path' => 'mls_papers', 
			'label' => 'Mls Papers', 
			'icon' => '<i class="icon-book-open "></i>'
		),
		
		array(
			'path' => 'mis_papers', 
			'label' => 'Mis Papers', 
			'icon' => '<i class="icon-book-open "></i>'
		),
		
		array(
			'path' => 'me_papers', 
			'label' => 'Me Papers', 
			'icon' => '<i class="icon-book-open "></i>'
		),
		
		array(
			'path' => 'hrit_papers', 
			'label' => 'Hrit Papers', 
			'icon' => '<i class="icon-book-open "></i>'
		),
		
		array(
			'path' => 'hp_papers', 
			'label' => 'Hp Papers', 
			'icon' => '<i class="icon-book-open "></i>'
		),
		
		array(
			'path' => 'dt_papers', 
			'label' => 'Dt Papers', 
			'icon' => '<i class="icon-book-open "></i>'
		),
		
		array(
			'path' => 'coh_papers', 
			'label' => 'Coh Papers', 
			'icon' => '<i class="icon-book-open "></i>'
		),
		
		array(
			'path' => 'cms_papers', 
			'label' => 'Cms Papers', 
			'icon' => '<i class="icon-book-open "></i>'
		)
	)
		),
		
		array(
			'path' => '', 
			'label' => 'Settings', 
			'icon' => '<i class="icon-settings "></i>','submenu' => array(
		array(
			'path' => 'account', 
			'label' => 'My Profile', 
			'icon' => '<i class="icon-user "></i>'
		),
		
		array(
			'path' => 'user', 
			'label' => 'Manage Users', 
			'icon' => '<i class="icon-user-follow "></i>'
		)
	)
		),
		
		array(
			'path' => '', 
			'label' => 'Front CMS', 
			'icon' => '<i class="icon-grid "></i>','submenu' => array(
		array(
			'path' => 'nav', 
			'label' => 'Nav', 
			'icon' => '<i class="icon-rocket "></i>'
		),
		
		array(
			'path' => 'bloga', 
			'label' => 'Bloga', 
			'icon' => '<i class="icon-layers "></i>'
		),
		
		array(
			'path' => 'blogb', 
			'label' => 'Blogb', 
			'icon' => '<i class="icon-layers "></i>'
		),
		
		array(
			'path' => 'blogd', 
			'label' => 'Blogd', 
			'icon' => '<i class="icon-layers "></i>'
		),
		
		array(
			'path' => 'bloge', 
			'label' => 'Bloge', 
			'icon' => '<i class="icon-layers "></i>'
		),
		
		array(
			'path' => 'about', 
			'label' => 'About', 
			'icon' => '<i class="icon-layers "></i>'
		),
		
		array(
			'path' => 'contact_us', 
			'label' => 'Contact Us', 
			'icon' => '<i class="icon-call-end "></i>'
		),
		
		array(
			'path' => 'term', 
			'label' => 'Term', 
			'icon' => '<i class="icon-directions "></i>'
		)
	)
		),
		
		array(
			'path' => 'notice', 
			'label' => 'Create Notice', 
			'icon' => '<i class="icon-bubbles "></i>'
		)
	);
		
	
	
			public static $class = array(
		array(
			"value" => "Clinical Medicine and Surgery (Diploma and Higher Diploma)", 
			"label" => "Clinical Medicine and Surgery (Diploma and Higher Diploma)", 
		),
		array(
			"value" => "Medical Laboratory Sciences(Diploma and Higher Diploma)", 
			"label" => "Medical Laboratory Sciences(Diploma and Higher Diploma)", 
		),
		array(
			"value" => "Orthopaedic and Trauma Medicine (Certificate and Diploma)", 
			"label" => "Orthopaedic and Trauma Medicine (Certificate and Diploma)", 
		),
		array(
			"value" => "Community Oral Health( Diploma)", 
			"label" => "Community Oral Health( Diploma)", 
		),
		array(
			"value" => "Medicine Imaging Sciences( Diploma and Higher Diploma)", 
			"label" => "Medicine Imaging Sciences( Diploma and Higher Diploma)", 
		),
		array(
			"value" => "Medical Education( Higher Diploma)", 
			"label" => "Medical Education( Higher Diploma)", 
		),
		array(
			"value" => "Health Records And information Technology (Certificate adn Diploma)", 
			"label" => "Health Records And information Technology (Certificate adn Diploma)", 
		),
		array(
			"value" => "Pharmacy (Diploma and Higher and higher Diploma)", 
			"label" => "Pharmacy (Diploma and Higher and higher Diploma)", 
		),
		array(
			"value" => "Dental Technology (Diploma)", 
			"label" => "Dental Technology (Diploma)", 
		),
		array(
			"value" => "Nursing (Certificate,Diploma and Higher Diploma)", 
			"label" => "Nursing (Certificate,Diploma and Higher Diploma)", 
		),
		array(
			"value" => "Public Health (Certificate, Diploma and Higher Diploma)", 
			"label" => "Public Health (Certificate, Diploma and Higher Diploma)", 
		),
		array(
			"value" => "Nutrition and Dietetics(Certificate and Diploma)", 
			"label" => "Nutrition and Dietetics(Certificate and Diploma)", 
		),
		array(
			"value" => "Occupational Therapy (Diploma and Higher Diploma)", 
			"label" => "Occupational Therapy (Diploma and Higher Diploma)", 
		),
		array(
			"value" => "Health Promotion( Certificate,Diploma and Higher Diploma)", 
			"label" => "Health Promotion( Certificate,Diploma and Higher Diploma)", 
		),
		array(
			"value" => "Orthopaedics Technology (Diploma and Higher Diploma)", 
			"label" => "Orthopaedics Technology (Diploma and Higher Diploma)", 
		),
		array(
			"value" => "Optometry(Diploma and Higher Diploma)", 
			"label" => "Optometry(Diploma and Higher Diploma)", 
		),
		array(
			"value" => "Physiotherapy (Diploma and Higher Diploma)", 
			"label" => "Physiotherapy (Diploma and Higher Diploma)", 
		),
		array(
			"value" => "Medical Engineering (Ceritficate ,Diploma and higher Diploma)", 
			"label" => "Medical Engineering (Ceritficate ,Diploma and higher Diploma)", 
		),);
		
			public static $role = array(
		array(
			"value" => "Clinical Medicine and Surgery (Diploma and Higher Diploma)", 
			"label" => "Clinical Medicine and Surgery (Diploma and Higher Diploma)", 
		),
		array(
			"value" => "Medical Laboratory Sciences(Diploma and Higher Diploma)", 
			"label" => "Medical Laboratory Sciences(Diploma and Higher Diploma)", 
		),
		array(
			"value" => "Orthopaedic and Trauma Medicine (Certificate and Diploma)", 
			"label" => "Orthopaedic and Trauma Medicine (Certificate and Diploma)", 
		),
		array(
			"value" => "Community Oral Health( Diploma)", 
			"label" => "Community Oral Health( Diploma)", 
		),
		array(
			"value" => "Medicine Imaging Sciences( Diploma and Higher Diploma)", 
			"label" => "Medicine Imaging Sciences( Diploma and Higher Diploma)", 
		),
		array(
			"value" => "Medical Education( Higher Diploma)", 
			"label" => "Medical Education( Higher Diploma)", 
		),
		array(
			"value" => "Health Records And information Technology (Certificate adn Diploma)", 
			"label" => "Health Records And information Technology (Certificate adn Diploma)", 
		),
		array(
			"value" => "Pharmacy (Diploma and Higher and higher Diploma)", 
			"label" => "Pharmacy (Diploma and Higher and higher Diploma)", 
		),
		array(
			"value" => "Dental Technology (Diploma)", 
			"label" => "Dental Technology (Diploma)", 
		),
		array(
			"value" => "Nursing (Certificate,Diploma and Higher Diploma)", 
			"label" => "Nursing (Certificate,Diploma and Higher Diploma)", 
		),
		array(
			"value" => "Public Health (Certificate, Diploma and Higher Diploma)", 
			"label" => "Public Health (Certificate, Diploma and Higher Diploma)", 
		),
		array(
			"value" => "Nutrition and Dietetics(Certificate and Diploma)", 
			"label" => "Nutrition and Dietetics(Certificate and Diploma)", 
		),
		array(
			"value" => "Occupational Therapy (Diploma and Higher Diploma)", 
			"label" => "Occupational Therapy (Diploma and Higher Diploma)", 
		),
		array(
			"value" => "Health Promotion( Certificate,Diploma and Higher Diploma)", 
			"label" => "Health Promotion( Certificate,Diploma and Higher Diploma)", 
		),
		array(
			"value" => "Orthopaedics Technology (Diploma and Higher Diploma)", 
			"label" => "Orthopaedics Technology (Diploma and Higher Diploma)", 
		),
		array(
			"value" => "Optometry(Diploma and Higher Diploma)", 
			"label" => "Optometry(Diploma and Higher Diploma)", 
		),
		array(
			"value" => "Physiotherapy (Diploma and Higher Diploma)", 
			"label" => "Physiotherapy (Diploma and Higher Diploma)", 
		),
		array(
			"value" => "Medical Engineering (Ceritficate ,Diploma and higher Diploma)", 
			"label" => "Medical Engineering (Ceritficate ,Diploma and higher Diploma)", 
		),
		array(
			"value" => "Lecturer", 
			"label" => "Lecturer", 
		),
		array(
			"value" => "Admin", 
			"label" => "Admin", 
		),
		array(
			"value" => "Administrator", 
			"label" => "Administrator", 
		),);
		
			public static $role2 = array(
		array(
			"value" => "Clinical Medicine and Surgery (Diploma and Higher Diploma)", 
			"label" => "Clinical Medicine and Surgery (Diploma and Higher Diploma)", 
		),
		array(
			"value" => "Medical Laboratory Sciences(Diploma and Higher Diploma)", 
			"label" => "Medical Laboratory Sciences(Diploma and Higher Diploma)", 
		),
		array(
			"value" => "Orthopaedic and Trauma Medicine (Certificate and Diploma)", 
			"label" => "Orthopaedic and Trauma Medicine (Certificate and Diploma)", 
		),
		array(
			"value" => "Community Oral Health( Diploma)", 
			"label" => "Community Oral Health( Diploma)", 
		),
		array(
			"value" => "Medicine Imaging Sciences( Diploma and Higher Diploma)", 
			"label" => "Medicine Imaging Sciences( Diploma and Higher Diploma)", 
		),
		array(
			"value" => "Medical Education( Higher Diploma)", 
			"label" => "Medical Education( Higher Diploma)", 
		),
		array(
			"value" => "Health Records And information Technology (Certificate adn Diploma)", 
			"label" => "Health Records And information Technology (Certificate adn Diploma)", 
		),
		array(
			"value" => "Pharmacy (Diploma and Higher and higher Diploma)", 
			"label" => "Pharmacy (Diploma and Higher and higher Diploma)", 
		),
		array(
			"value" => "Dental Technology (Diploma)", 
			"label" => "Dental Technology (Diploma)", 
		),
		array(
			"value" => "Nursing (Certificate,Diploma and Higher Diploma)", 
			"label" => "Nursing (Certificate,Diploma and Higher Diploma)", 
		),
		array(
			"value" => "Public Health (Certificate, Diploma and Higher Diploma)", 
			"label" => "Public Health (Certificate, Diploma and Higher Diploma)", 
		),
		array(
			"value" => "Nutrition and Dietetics(Certificate and Diploma)", 
			"label" => "Nutrition and Dietetics(Certificate and Diploma)", 
		),
		array(
			"value" => "Occupational Therapy (Diploma and Higher Diploma)", 
			"label" => "Occupational Therapy (Diploma and Higher Diploma)", 
		),
		array(
			"value" => "Health Promotion( Certificate,Diploma and Higher Diploma)", 
			"label" => "Health Promotion( Certificate,Diploma and Higher Diploma)", 
		),
		array(
			"value" => "Orthopaedics Technology (Diploma and Higher Diploma)", 
			"label" => "Orthopaedics Technology (Diploma and Higher Diploma)", 
		),
		array(
			"value" => "Optometry(Diploma and Higher Diploma)", 
			"label" => "Optometry(Diploma and Higher Diploma)", 
		),
		array(
			"value" => "Physiotherapy (Diploma and Higher Diploma)", 
			"label" => "Physiotherapy (Diploma and Higher Diploma)", 
		),
		array(
			"value" => "Medical Engineering (Ceritficate ,Diploma and higher Diploma)", 
			"label" => "Medical Engineering (Ceritficate ,Diploma and higher Diploma)", 
		),
		array(
			"value" => "Lecturer", 
			"label" => "Lecturer", 
		),);
		
}