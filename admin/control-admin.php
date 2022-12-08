<?php
ob_start(); //cannot modify error only use 
include_once 'Model-admin.php';

class MyControl extends Model
{
    public function __construct()
    {
        parent :: __construct();
        $url = $_SERVER ['PATH_INFO'];
        $data =$this->selectAll("country");
        $pdata =$this->selectAll("register");
       // echo $url;
        switch ($url)
        {
            case '/index' :
            
              //  $data =$this->selectAll("admin");

                    if(isset($_POST['submit']))
                    {
                        $email =$_POST['email'];
                        $password =$_POST['password'];

                        $where =array('Email'=>$email,'Password'=>$password);
                        $fdata =$this->select_where('admin',$where);
                        // echo $fdata;exit;
                        $g =$fdata->num_rows;
                        if($g>0)
                        {
                            echo "<script>alert('Login Success !');</script>";
                            header("location:Allusers");
                        }
                        else 
                        {
                            echo "<script>alert('Invalid data !');</script>";
                        }
                    }
                    include_once 'login-admin.php';
                    break;

                    case '/Allusers' :
                        include_once 'header.php';
                        $user =$this->SelectAll('register');
                        // print_r($user);exit;
                        include_once 'users.php';
                        include_once 'footer.php';
                    break;    

                    case '/delete_user' :
                        include_once 'header.php';
                        if(isset($_GET['did']))
                        {
                            $did =$_GET['did'];
                            $where =array('id'=>$did);
                            $this->Delete_data ('register',$where);
                            header('location:Allusers');
                        }

                        include_once 'footer.php';
                        break;

                        //edit
                        case '/edit_user':
                            include_once 'header.php';
                            if(isset($_GET['eid']))
                            {
                                $eid =$_GET['eid'];
                                $where=array('id'=>$eid);
                                $user_data =$this->select_where('register',$where);
                                $user_fetch =$user_data->fetch_object();


                                //update
                                if(isset($_POST['Update']))
                                {
                                    $name=$_POST['name'];
                                    $phone =$_POST['phone'];
                                    $emailid =$_POST['emailid'];
                                    $password =$_POST['password'];
                                    $gender =$_POST['gender'];
                                    $dateofbirth =$_POST['dateofbirth'];
                                    $country =$_POST['country'];
                                    $hobbies =$_POST['hobbies'];
                                   $h = implode(",",$hobbies);
                                    $eductionqulification =$_POST['educationqulification'];
                                    $address =$_POST['address'];
                    
                    
                                    $data = array('name'=>$name,
                                                  'phone'=>$phone,
                                                  'emailid'=>$emailid,
                                                  'password'=>$password,
                                                  'gender'=>$gender,
                                                  'dateofbirth'=>$dateofbirth,
                                                  'country'=>$country,
                                                  'hobbies'=>$h,
                                                  'eductionqulification'=>$eductionqulification,
                                                  'address'=>$address);
                                                  $this->updatedata('register',$data,$where);
                                    header('location:Allusers');
                                }
                            }
                            include_once 'edit_user.php';
                            include_once 'footer.php';
                            break;


                            //category
                            case '/Add_category' :
                                include_once 'header.php';
                                if(isset($_POST['submit']))
                                {
                                    $cat= $_POST['cat'];
                                    $data=array('cat_name'=>$cat);
                                    $this->InsertData('category',$data);
                                    echo "<script>alert('Data Inserted !');</script>";
                                    
                                }
                                
                                include_once 'category.php';
                                include_once 'footer.php';
                             break;   


                             //product
                             case '/Add_Product':
                                include_once 'header.php';
                                $all_cat =$this->selectAll('category');

                                if(isset($_POST['cat']))
                                {
                                    $cat =$_POST['cat'];
                                    $pro_img =$_FILES['file']['name'];
                                    $pro_name =$_POST['pro_name'];
                                    $pro_price =$_POST['pro_price'];
                                    $pro_desc =$_POST ['pro_desc'];

                                    $data =array('cat_id'=>$cat,
                                                 'pro_img'=>$pro_img,
                                                 'pro_name'=>$pro_name,
                                                 'pro_price'=>$pro_price,
                                                 'pro_desc'=>$pro_desc);
                                                 move_uploaded_file($_FILES['file']['tmp_name'],"upload/".$_FILES['file']['name']);
                                                 
                                   $this->InsertData('product',$data);
                                   echo "<script>alert('Data Inserted !');</script>";
                                                 
                                }
                                include_once 'product.php';
                                include_once 'footer.php';
                             break;

                             //block/unblock

                             case '/status' :
                                if(isset($_GET['sid'])&& ($_GET['sta']))
                                {
                                    $sid= $_GET['sid'];
                                    $sta= $_GET['sta'];

                                    $where =array('id'=>$sid);
                                    $data =array('status'=>'block');
                                    $data1 =array('status'=>'unblock');

                                    if($sta =="unblock")
                                    {
                                        $this->updatedata("register",$data,$where);
                                        header('location:Allusers');
                                    }
                                    else 
                                    {
                                        $this->updatedata("register",$data1,$where);
                                        header('location:Allusers');
                                    }
                                }
                             break;   
                              
                             //about gallery
                             case '/gallery' :
                                include_once 'header.php';
                                if(isset($_POST['submit']))
                                {
                                    $gall= $_POST['gll'];
                                    $data=array('gll_name'=>$gall);
                                    $this->InsertData('gallery',$data);
                                    echo "<script>alert('Data Inserted !');</script>";
                                    
                                }
                                
                                include_once 'gallery.php';
                                include_once 'footer.php';
                             break;   

                             //about
                             case '/Add_about':
                                include_once 'header.php';
                                $all_gll =$this->selectAll('gallery');

                                if(isset($_POST['gll']))
                                {
                                    $gall =$_POST['gll'];
                                    $ab_image=$_FILES['file']['name'];
                                   
                                    $data =array('gll_id'=>$gall,
                                                 'ab_image'=>$ab_image);
                                                 move_uploaded_file($_FILES['file']['tmp_name'],"upload/".$_FILES['file']['name']);
                                                 
                                   $this->InsertData('about',$data);
                                   echo "<script>alert('Data Inserted !');</script>";
                                                 
                                }
                                include_once 'about.php';
                                include_once 'footer.php';
                             break;

        }
    }
}
$obj =new MyControl;
ob_flush();

?>
