<?php

include_once('../website/model.php');

class control extends model
{
	function __construct()
     {
		session_start();
		model::__construct();
		$url=$_SERVER['PATH_INFO'];
		switch($url)
		{
			case '/admin':
			if(isset($_REQUEST['submit']))
			{
				$anm=$_REQUEST['anm'];
				$apass=md5($_REQUEST['apass']);
				//echo"<pre>";print_r($_REQUEST);exit;
				$where=array("anm"=>$anm,"apass"=>$apass);
				$res=$this->select_where('admin',$where);
			     $chk=$res->num_rows;
				
				if($chk==1)
				{

					$_SESSION['admin']=$anm;
					echo "<script>
					alert('admin login successfully');
					window.location='dashboard';
					</script>";
				}
				else
				{
					echo "<script>
					alert('admin login successfully');
					</script>";
					
				}
			}

			include_once('index.php');
			break;

			   case '/admin_logout':
			unset($_SESSION['admin']);
			echo "<script>
					alert('admin login successfully');
					window.location='admin';
					</script>";
				break;
				case '/dashboard':
					include_once('dashboard.php');
					break;
					
			
			// case '/status':
			// 	if(isset($_REQUEST['statusuid']))
			// 	{
			// 		$uid=$_REQUEST['statusuid'];
			// 		$where=array("uid"=>$uid);

			// 		$run=$this->select_where('customers',$where);
			// 		$fetch=$run->fetch_object();
			// 		$status=$fetch->status;

			// 		if($status=="Block")
			// 	}
			// include_once('dashboard.php');
			// break;
			
			case '/add_cat':
			include_once('add_cat.php');
			break;
			
			case '/manage_cat':
			include_once('manage_cat.php');
			break;
			
			case '/add_emp':
			include_once('add_emp.php');
			break;
			
			case '/manage_emp':
			$data_employees=$this->select('employees');
			include_once('manage_emp.php');
			break;
			
			case '/add_prod':
			include_once('add_prod.php');
			break;
			
			case '/manage_prod':
			include_once('manage_prod.php');
			break;
			
			case '/manage_feed':
			$data_feedback=$this->select('feedback');
			include_once('manage_feed.php');
			break;
				
			case '/manage_cust':
			$data_customers=$this->select('customers');
			include_once('manage_cust.php');
			break;	

			case '/manage_cont':
				$data_contacts=$this->select('contacts');
				include_once('manage_cont.php');
				break;	

			case '/delete':
			if(isset($_REQUEST['delcontact_id']))
			{
				$contact_id=$_REQUEST['delcontact_id'];
				$where=array("contact_id"=>$contact_id);
				$res=$this->delete_where('contacts',$where);
				if($res)
				{

					echo "<script>
					alert('Delete Success');
					window.location='manage_cont';
					</script>";
				}
			}
			if(isset($_REQUEST['deluid']))
			{
				$uid=$_REQUEST['deluid'];
				$where=array("uid"=>$uid);

				$run=$this->select_where('customers',$where);
				$fetch=$run->fetch_object();
				$userfile=$fetch->file;
				$res=$this->delete_where('customers',$where);

				if($res)
				{
					unlink('../upload/customer'.$userfile);
					echo "<script>
					alert('Delete Success');
					window.location='manage_cust';
					</script>";
				}
			}
			if(isset($_REQUEST['delemp_id']))
			{
				$emp_id=$_REQUEST['delemp_id'];
				$where=array("emp_id"=>$emp_id);
				$res=$this->delete_where('employees',$where);
				if($res)
				{

					echo "<script>
					alert('Delete Success');
					window.location='manage_emp';
					</script>";
				}
			}
			if(isset($_REQUEST['delfeed_id']))
			{
				$feed_id=$_REQUEST['delfeed_id'];
				$where=array("feed_id"=>$feed_id);
				$res=$this->delete_where('feedback',$where);
				if($res)
				{

					echo "<script>
					alert('Delete Success');
					window.location='manage_feed';
					</script>";
				}
			}
			break;

			default:
			include_once('pnf.php');
			break;		
		}
	}
}

$obj=new control;
?>