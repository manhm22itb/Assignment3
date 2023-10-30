<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php
	if(isset($_POST['bieu_mau_them_menu_ngang']))
	{
		include("chuc_nang/menu_ngang/them_menu_ngang_vao_csdl.php");
		trang_truoc_html();
	}
	if(isset($_POST['bieu_mau_sua_menu_ngang']))
	{
		include("chuc_nang/menu_ngang/sua_menu_ngang_o_trong_csdl.php");
		trang_truoc_html();
	}
	if(isset($_GET['xoa_menu_ngang']))
	{
		include("chuc_nang/menu_ngang/xoa_menu_ngang.php");
		trang_truoc_html();
	}
	if(isset($_POST['bieu_mau_them_menu_doc']))
	{
		include("chuc_nang/menu_doc/them_menu_doc_vao_csdl.php");
		trang_truoc_html();
	}
	if(isset($_POST['bieu_mau_sua_menu_doc']))
	{
		include("chuc_nang/menu_doc/sua_menu_doc_o_trong_csdl.php");
		trang_truoc_html();
	}
	if(isset($_GET['xoa_menu_doc']))
	{
		include("chuc_nang/menu_doc/xoa_menu_doc.php");
		trang_truoc_html();
	}
	if(isset($_POST['bieu_mau_them_san_pham']))
	{
		include("chuc_nang/san_pham/them_san_pham_vao_csdl.php");
		//trang_truoc_html();
	}
	if(isset($_POST['bieu_mau_sua_san_pham']))
	{
		include("chuc_nang/san_pham/sua_san_pham_o_trong_csdl.php");
		trang_truoc_html();
	}
	if(isset($_GET['xoa_san_pham']))
	{
		include("chuc_nang/san_pham/xoa_san_pham.php");
		trang_truoc_html();
	}
	if(isset($_GET['xoa_hoa_don']))
	{
		include("chuc_nang/hoa_don/xoa_hoa_don.php");
		trang_truoc_html();
	}
	if(isset($_GET['xoa_hoa_don_o_trang_chi_tiet']))
	{
		include("chuc_nang/hoa_don/xoa_hoa_don_o_trang_chi_tiet.php");
		trang_truoc_html();
	}
	if(isset($_GET['cap_nhat_hoa_don']))
	{
		include("chuc_nang/hoa_don/cap_nhat_hoa_don.php");
		trang_truoc_html();
	}
	if(isset($_POST['bieu_mau_san_pham_trang_chu']))
	{
		include("chuc_nang/san_pham_trang_chu/sua_san_pham_trang_chu.php");
		trang_truoc_html();
	}
	if(isset($_POST['bieu_mau_san_pham_noi_bat']))
	{
		include("chuc_nang/san_pham_noi_bat/sua_san_pham_noi_bat.php");
		trang_truoc_html();
	}
	if(isset($_POST['bieu_mau_them_slideshow']))
	{
		include("chuc_nang/slideshow/them_slideshow_vao_csdl.php");
		trang_truoc_html();
	}
	if(isset($_POST['bieu_mau_sua_slideshow']))
	{
		include("chuc_nang/slideshow/sua_slideshow_o_trong_csdl.php");
		trang_truoc_html();
	}
	if(isset($_GET['xoa_slideshow']))
	{
		include("chuc_nang/slideshow/xoa_slideshow.php");
		trang_truoc_html();
	}
	if(isset($_POST['bieu_mau_sua_banner']))
	{
		include("chuc_nang/banner/sua_banner_o_trong_csdl.php");
		trang_truoc_html();
	}
	if(isset($_POST['bieu_mau_sua_footer']))
	{
		include("chuc_nang/footer/sua_footer_o_trong_csdl.php");
		trang_truoc_html();
	}
	if(isset($_POST['bieu_mau_them_quang_cao_trai']))
	{
		include("chuc_nang/quang_cao_trai/them_quang_cao_trai_vao_csdl.php");
		trang_truoc_html();
	}
	if(isset($_POST['bieu_mau_sua_quang_cao_trai']))
	{
		include("chuc_nang/quang_cao_trai/sua_quang_cao_trai_o_trong_csdl.php");
		trang_truoc_html();
	}
	if(isset($_GET['xoa_quang_cao_trai']))
	{
		include("chuc_nang/quang_cao_trai/xoa_quang_cao_trai.php");
		trang_truoc_html();
	}
	if(isset($_POST['bieu_mau_them_quang_cao_phai']))
	{
		include("chuc_nang/quang_cao_phai/them_quang_cao_phai_vao_csdl.php");
		trang_truoc_html();
	}
	if(isset($_POST['bieu_mau_sua_quang_cao_phai']))
	{
		include("chuc_nang/quang_cao_phai/sua_quang_cao_phai_o_trong_csdl.php");
		trang_truoc_html();
	}
	if(isset($_GET['xoa_quang_cao_phai']))
	{
		include("chuc_nang/quang_cao_phai/xoa_quang_cao_phai.php");
		trang_truoc_html();
	}
	if(isset($_POST['bieu_mau_sua_thong_tin_quan_tri']))
	{
		include("chuc_nang/quan_tri_2/sua_thong_tin_quan_tri_o_trong_csdl.php");
		trang_truoc_html();
	}	
	if(isset($_GET['thamso']))
	{
		if($_GET['thamso']=="thoat")
		{
			include("chuc_nang/quan_tri_2/thoat.php");
			trang_truoc_html();
		}
	}
?>